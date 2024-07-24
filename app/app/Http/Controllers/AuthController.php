<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgottenPasswordRequest;
use App\Http\Requests\ForgottenPasswordReset;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use Psr\Log\LoggerInterface;

class AuthController extends Controller
{

    /**
     * @var LoggerInterface
     */
    protected LoggerInterface $logger;

    public function __construct()
    {
        $this->logger = Log::build([
            'driver' => 'single',
            'path' => storage_path('logs/authController.log'),
        ]);
    }

    /**
     * @return View
     */
    public function login(): View
    {
        return view('users.auth.login');
    }

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function connect(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (Auth::attempt([
            'email' => $credentials['email'],
            'password' => $credentials['password'],
            'is_active' => 1
        ])) {
            $request->session()->regenerate();
            return redirect()->intended(route('home.index'));
        }

        return to_route('login')
            ->withErrors([
                'email' => ''
            ])
            ->onlyInput('email');
    }

    /**
     * @return View
     */
    public function signup(): View
    {
        return view('users.auth.signup');
    }

    /**
     * @param SignupRequest $request
     * @return RedirectResponse
     */
    public function register(SignupRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        User::create($validated);

        return redirect()->route('login')->with('success', 'Utilisateur créé avec succès');

    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function forgottenPassword(): View
    {
        return view('users.auth.forgotten-password.request');
    }

    public function emailForgottenPassword(ForgottenPasswordRequest $request): RedirectResponse
    {
        try {
            $request->validated();

            $status = Password::sendResetLink(
                $request->only('email')
            );

            return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);

        } catch (\Exception $e) {
            $this->logger->error($e);
        }

        return to_route('forgottenPassword.request')
            ->withErrors([
                'email' => ''
            ])
            ->onlyInput('email');
    }

    public function resetForgottenPassword(string $token): View
    {
        return view('users.auth.forgotten-password.reset', ['token' => $token]);
    }

    public function updateForgottenPassword(ForgottenPasswordReset $request): RedirectResponse
    {
        $request->validated();

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ]);

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}

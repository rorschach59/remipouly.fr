@php
    $type ??= 'text';
    $value ??= null;
    $required ??= 'required';
    $class ??= '';
    $min ??= '';
    $max ??= '';
@endphp

<div class="input-group {{ $class }}">
    @if($type !== 'hidden')
        <label for="{{ $name }}" class="@error($name) label-error @else label @enderror">{{ $labelName }}</label>
    @endif

    <input type="{{ $type }}"
           name="{{ $name }}"
           id="{{ $name }}"
           class="@error($name) input-error @else input @enderror"
           {{ $required }}
           value="{{ old($name, $value) }}"
            {{ $type == 'number' ? 'step=any' : '' }}
            {{ $min !== '' ? 'min=' . $min : '' }}
            {{ $max !== '' ? 'max=' . $max : '' }}
    >

    @if($type !== 'hidden')
        @error($name)
        <p class="input-error-message">{{ $message }}</p>
        @enderror
    @endif
</div>

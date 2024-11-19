@php
    $class ??= 'primary-button';
    $classSup ??= '';
    $text ??= 'Envoyer';
    $type ??= 'submit';
    $onclick ??= '';
    $align ??= 'text-center';
@endphp

<div class="{{ $align }} mt-6">
    <button type="{{$type}}" class="{{ $class }} {{ $classSup }}" onclick="{{$onclick}}">
        {!! $text !!}
    </button>
</div>

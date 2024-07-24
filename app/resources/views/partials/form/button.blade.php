@php
    $class .= ' primary-button';
    $text ??= 'Envoyer';
    $type ??= 'submit';
    $onclick ??= '';
@endphp

<div class="text-center mt-10">
    <button type="{{$type}}" class="{{ $class }}" onclick="{{$onclick}}">
        {!! $text !!}
    </button>
</div>

@php
    $type ??= 'text';
    $value ??= null;
    $required ??= false;
    $class ??= 'input';
    $min ??= '';
    $max ??= '';
    $placeholder ??= '';
@endphp

<div class="input-group {{ $class }}">
    <label for="{{ $name }}" class="@error($name) label-error @else label @enderror">{{ $labelName }}</label>
    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        rows="6"
        class="@error($name) input-error @else input @enderror"
           {{ $required }}>{{ old($name, $value) }}</textarea>

    @error($name)
    <p class="input-error-message">{{ $message }}</p>
    @enderror
</div>

@php
    $type ??= 'text';
    $value ??= null;
    $required ??= 'required';
    $class ??= '';
    $min ??= '';
    $max ??= '';
    $cols ??= '30';
    $rows ??= '10';
    $placeholder ??= '';
@endphp

<div class="input-group {{ $class }}">
    <label for="{{ $name }}" class="@error($name) label-error @else label @enderror">{{ $labelName }}</label>

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        cols="{{ $cols }}"
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        @if($type === 'hidden') style="display:none;" @endif
        class="@error($name) input-error @else input @enderror"
           >{{ old($name, $value) }}</textarea>

    @error($name)
    <p class="input-error-message">{{ $message }}</p>
    @enderror
</div>

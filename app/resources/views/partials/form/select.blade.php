@php
    $value ??= null;
    $class ??= '';
    $defaultValue ??= '- - -';
@endphp

<div class="input-group {{$class}}">
    <label for="{{ $name }}" class="label">{{ $labelName }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="input">
        <option value="">{{ $defaultValue }}</option>
        @foreach($options as $option)
            <option
                value="{{ $option['id'] }}" {{ $option['id'] == $value ? 'selected' : '' }}>{{ ucfirst($option['name']) }}</option>
        @endforeach
    </select>
    @error($name)
    <div class="input-error">{{ $message }}</div>
    @enderror
</div>

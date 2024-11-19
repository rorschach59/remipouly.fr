@php
    $value ??= null;
    $class ??= '';
    $defaultValue ??= '- - -';
    $showLabel ??= false;
    $labelName ??= null;
@endphp

@if($showLabel)
    <label for="{{ $name }}">{{ $labelName }}</label>
@endif

<select name="{{ $name }}" id="{{ $name }}" class="input">
    @if($defaultValue !== '')
        <option value="">{{ $defaultValue }}</option>
    @endif
    @foreach($options as $option)
        <option
            value="{{ $option['id'] }}" {{ $option['id'] == $value ? 'selected' : '' }}>{{ ucfirst($option['name']) }}</option>
    @endforeach
</select>
@error($name)
<div class="input-error">{{ $message }}</div>
@enderror

<div class="input-group flex items-center">
    <span class="mr-2 w-28">{{ $title }}</span>
    <select name="{{ $selectName }}" id="{{ $selectName }}" class="input !w-28">
        @foreach($options as $option)
            <option
                value="{{ $option['id'] }}">{{ ucfirst($option['name']) }}</option>
        @endforeach
    </select>
    <span class="mx-2">à</span>
    <input type="date" name="{{ $inputName }}" id="{{ $inputName }}" class="input !w-44">
</div>

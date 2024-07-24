<div class="input-group">
    <label for="{{ $name }}" class="label">{{ $labelName }}</label>
    <input type="hidden" name="{{ $name }}" value="0">
    <input type="checkbox"
           name="{{ $name }}"
           id="{{ $name }}"
           class="w-4 h-4 ml-2 rounded focus:ring-blue-500"
           value="1"
        @checked(old($name, $value ?? false))
    >
    @error($name)
    <div class="input-error">{{ $message }}</div>
    @enderror
</div>

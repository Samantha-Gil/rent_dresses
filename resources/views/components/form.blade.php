<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    @if ($type === 'textarea')
        <textarea id="{{ $name }}" name="{{ $name }}" rows="{{ $rows ?? 3 }}" class="form-control">{{ $value ?? old($name) }}</textarea>
    @else
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
            value="{{ $value ?? old($name) }}" class="form-control">
    @endif
    @error($name)
        <span class="error">{{ $message }}</span>
    @enderror
</div>

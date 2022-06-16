<div class="mb-3">
    <label class="form-label">{{ $title }}</label>
    <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror"
        placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ $value }}">
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

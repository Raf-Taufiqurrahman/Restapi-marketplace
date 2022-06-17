<div class="mb-3">
    <label class="form-label">{{ $title }}</label>
    <select class="form-select @error($name) is-invalid @enderror" name="{{ $name }}">
        {{ $slot }}
    </select>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

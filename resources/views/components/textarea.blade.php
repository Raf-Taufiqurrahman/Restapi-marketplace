<div class="mb-3">
    <label>{{ $title }}</label>
    <div>
        <textarea class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" rows="5">{{ $slot }}</textarea>
    </div>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

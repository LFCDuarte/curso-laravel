@props(['name', 'label', 'class' => 'form-control', 'classCol' => 'col-md-12', 'type' => 'text', 'default' => ''])
@php
$value ??= old($name, $default);
if($errors->has($name)){
    $class = $class.' is-invalid';
}
@endphp

<div class="{{ $classCol }}">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input
        {{ $attributes->merge(['type' => $type, 'class' => $class, 'name' => $name]) }}>
        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
</div>

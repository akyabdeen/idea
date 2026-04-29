@props ([
    'label',
    'key',
    'type' => 'text'
])
<div class="space-y-2">
    <label for="{{ $key }}">{{ $label }}</label>
    <input type="{{ $type }}" class="input" id="{{ $key }}" name="{{ $key }}" value="{{ old($name) }}" {{ $attributes }}>
    
    @error($key)
        <p class='error'>{{ $message }}</p>
    @enderror
</div>

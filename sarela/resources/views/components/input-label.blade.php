@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#23402e]']) }}>
    {{ $value ?? $slot }}
</label>

@props(['value'])

<label {{ $attributes->merge(['class' => 'absolute peer-valid:-top-3 peer-valid:bg-white peer-valid:text-blue-700 peer-valid:text-[1rem] peer-valid:px-1 left-6 top-2.5 pointer-events-none text-slate-400 text-[1.1rem] peer-focus:-top-3 peer-focus:bg-white peer-focus:px-1 peer-focus:text-[1rem] peer-focus:text-blue-700 duration-200 ease-out']) }}>
    {{ $value ?? $slot }}
</label>

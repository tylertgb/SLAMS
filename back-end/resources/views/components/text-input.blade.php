@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full peer h-12 text-slate-400 text-[1.2rem] rounded-3xl outline-none focus:border-2 focus:border-blue-700 valid:border-2 valid:border-blue-700 border border-slate-200 px-7 placeholder:opacity-0 transition-all duration-200 ease-out']) !!}>

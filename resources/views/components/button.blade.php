@props(['color'=>'primary'])

@php
    switch ($color) {
    case 'primary':
        $class = "bg-blue-800 hover:bg-blue-700 active:bg-blue-900 focus:border-blue-900 focus:ring ring-blue-300";
        break;
    case 'success':
        $class = "bg-green-800 hover:bg-green-700 active:bg-green-900 focus:border-green-900 focus:ring ring-green-300";
        break;
    case 'danger':
        $class = "bg-red-800 hover:bg-red-700 active:bg-red-900 focus:border-red-900 focus:ring ring-red-300";
        break;
    case 'warning':
        $class = "bg-amber-500 hover:bg-yellow-400 active:bg-yellow-600 focus:border-yellow-600 focus:ring ring-yellow-300";
        break;      
    
    default: //dark
        $class = "bg-gray-800 hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900 focus:ring ring-gray-300";
        break;
    }
@endphp



<button {{ $attributes->merge(['type' => 'button', 'class' => "$class inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none disabled:opacity-25 transition ease-in-out duration-150"]) }}>
    {{ $slot }}
    @isset($icono)
         {{ $icono }}
    @endisset
   
</button>

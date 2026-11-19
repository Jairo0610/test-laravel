{{-- Se manda el tipo de la alerta a la variable type y 
    en caso de no ser definida toma el valor de info --}}
@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $class = ' bg-blue-50 text-blue-800';
            $titleAlert = 'Info Alert!';
            break;
        case 'danger':
            $class = ' bg-red-50 text-red-800';
            $titleAlert = 'Danger Alert!';
            break;
        case 'success':
            $class = ' bg-green-50 text-green-800';
            $titleAlert = 'Success Alert!';
            break;
        case 'warning':
            $class = ' bg-yellow-50 text-yellow-800';
            $titleAlert = 'Warning Alert!';
            break;
        case 'dark':
            $class = ' bg-gray-100 text-gray-800';
            $titleAlert = 'Dark Alert!';
            break;
        
        default:
            $class = ' bg-blue-50 text-blue-800';
            $titleAlert = 'Info Alert!';
            break;
    }
@endphp

{{-- Fuciona las clases que llegan con los atributos con las que ya tiene por defecto --}}
<div {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . $class]) }} role="alert">
    <span class="font-medium">{{{ $title ?? $titleAlert }}}</span> {{ $slot }}
</div>

<!-- 

    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
    <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
    </div>
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
        <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
    </div>
    <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50" role="alert">
        <span class="font-medium">Warning alert!</span> Change a few things up and try submitting again.
    </div>
    <div class="p-4 text-sm text-gray-800 rounded-lg bg-gray-100" role="alert">
        <span class="font-medium">Dark alert!</span> Change a few things up and try submitting again.
    </div>

-->

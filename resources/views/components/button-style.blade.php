<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/button-style.css'])
</head>

<a {{ $attributes->merge(['class' => 'btn-style']) }}>
    {{ $slot }}
</a>
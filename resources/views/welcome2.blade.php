<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Amazon</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <h1>Amazon.in</h1>
        <x-button title="Amazon MiniTV" />
        @component('components.button',['title'=>'Sell'])
        @endcomponent
        <x-button title="Best Seller" />
        @component('components.button',['title'=>'Mobiles'])
        @endcomponent
        <x-button title="Today'Deals" />
        @component('components.button',['title'=>'Electronics'])
        @endcomponent
        {{-- <x-button title="Prime" /> --}}
        <x-button title="Prime" dropdown="true">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </x-button>
        @component('components.button',['title'=>'Costometer services'])
        @endcomponent
        <x-button title="Fashion" />
        @component('components.button',['title'=>'Home & Kitchen '])'
        @endcomponent
        <x-button title="New Releases" />
        @component('components.button',['title'=>'Amazon Pay'])'
        @endcomponent
        {{-- <x-button title="Computers" /> --}}
        {{-- @component('components.button',['title'=>'Gift Ideas'])'
        @endcomponent --}}


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    
</html>
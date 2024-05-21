<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel</title>
        <style>
            .a_tdbr{
                border:1px dashed red;
            }
            header{
                height: 100px;
                background-color:#151C25;
                color:#fff;
            }
            main{
                height: 400px;
                background-color:rgb(2, 26, 2);
                color:#fff;
            }
            footer{
                height: 412px;
                background-color:#232F3E;
                color:#fff;
            }
            

        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid a_tdbr">
            <header class="a_tdbr">Header</header>
            @yield('mymain')
            <footer>Footer</footer>
       </div> 
        {{-- <h1>Hello</h1> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content=<?php $token=csrf_token(); echo $token;?>>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="..\css\index.css">
    <script src="..\js\Ajax.js"></script>
    <script src="..\js\Teszt.js"></script>
   
    <script src="..\js\script.js"></script>
   
    <title>Illés Lejla</title>
</head>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <main>
    <header>
   


      <h1>TesztKerdesek<h1>
    </header>

    <div id="kategoria">
 
  
      <select id="kategoriak">

      </select>
</div>
    <div class="tesztcontainer">
        <div class="tesztkerdesek">
        <div class="kerdescontainer">
        <h2 class="kerdes"></h2>
        </div>

            <div class="valaszcontainer">

   
       <p class="v1"></p>
       <p class="v2"></p>
       <p class="v3"></p>
       <p class="v4"></p>
       </div>
</div>


</div>



</main>
      
    </body>
</html>

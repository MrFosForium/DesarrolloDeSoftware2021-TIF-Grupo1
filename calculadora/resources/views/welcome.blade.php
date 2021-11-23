<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1 aling='center'>Mati se la come</h1>

        <a href='/calculadora' class='btn btn-primary'>Ir al login</a>
        <br>
        <a href='/calculadora/create' class='btn btn-primary'>Ir al registro</a>
    </body>
</html>

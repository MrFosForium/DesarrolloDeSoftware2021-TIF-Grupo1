<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        //Include bootstrap CSS CDN here

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

    </head>

    <body style="background-color: rgb(246, 154, 201)">

    @yield('content')

    </body>
    //Include bootstrap JS CDN here 
</html>
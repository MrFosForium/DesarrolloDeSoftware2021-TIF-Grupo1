<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito';
                background-image: url(https://upload.wikimedia.org/wikipedia/commons/6/63/Escuela_Secundaria_de_Educaci%C3%B3n_T%C3%A9cnica_de_la_Univesidad_de_Quilmes_ESET-UNQ.jpg);
                background-size: cover;
                background-repeat:no-repeat;
                background-position: center center;
            }
            
            .prueba {
                width: 30%;
                background: #3a4463;
                padding: 15px;
                margin: auto;
                margin-top: 15px;
                border-radius: 10px;
                font-family: 'calibri';
                color: white;
                box-shadow: 10px 13px 37px #000;
            }
            #contenedor {
                display: flex;
                align-items: center;
                justify-content: center;
                
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
            }

            #central {
                max-width: 320px;
                width: 100%;
            }

            .titulo {
                font-size: 250%;
                text-align: center;
                margin-bottom: 20px;
            }

            #login input {
                font-family: 'Overpass', sans-serif;
                font-size: 110%;
                color: #000000;
                
                display: block;
                width: 100%;
                height: 40px;
                
                margin-bottom: 10px;
                padding: 5px 5px 5px 10px;
                
                box-sizing: border-box;
                
                border: none;
                border-radius: 3px 3px 3px 3px;
                -moz-border-radius: 3px 3px 3px 3px;
                -webkit-border-radius: 3px 3px 3px 3px;
            }

            #login input::placeholder {
                font-family: 'Overpass', sans-serif;
                color: #000000;
            }

            #login button {
                font-family: 'Overpass', sans-serif;
                font-size: 110%;
                color:#ffffff;
                width: 100%;
                height: 40px;
                border: none;
                
                border-radius: 3px 3px 3px 3px;
                -moz-border-radius: 3px 3px 3px 3px;
                -webkit-border-radius: 3px 3px 3px 3px;
                
                background-color: #2b2b2c;
                cursor: pointer;
                margin-top: 10px;
            }

            #login button:hover {
                background-color: #ffffff;
                color:#000000;
            }

            .pie-form {
                font-size: 90%;
                text-align: center;    
                margin-top: 15px;
            }

            .pie-form a {
                display: block;
                text-decoration: none;
                color: #447bdb;
                margin-bottom: 3px;
            }

            .pie-form a:hover {
                color: #2756a8;
            }
        </style>

    </head>

    <body>

    @yield('content')

    </body>
</html>
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">

                <!-- Boton para volver -->

                <a href="/blog" class="btn btn-outline-primary btn-sm">Volver</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">

                    <!-- Encabezado -->

                    <h1 class="display-4">Has un calculo</h1>
                    <p>Rellena los campos y dale al boton para hacer un calculo</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <!-- Seleccion de sistema numerico -->
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Sistema Numerico</label>
                                <select type="text" id="title" class="form-control" name="title"
                                       placeholder="Ingrese Sistema Numerico" required>
                                    <option value="" selected="selected">Ingrese un Sistema Numerico</option>
                                    <option value="Binario sin signo"> Binario sin signo</option>
                                    <option value="Complemento a 2"> Complemento a 2</option>
                                    <option value="Signo"> Signo</option>
                                    <option value="Exceso"> Exceso</option>
                                    <option value="Hexadecimal"> Hexadecimal</option>
                                    <option value="Octadecimal"> Octadecimal</option>
                                </select>
                            </div>

                            <!-- Seleccion de la operacion -->

                            <div class="control-group col-12 mt-2">
                                <label for="body">Operacion</label>
                                <select id="body" class="form-control" name="body" placeholder="Ingrese una operacion"
                                          rows="" required>
                                    <option value="" selected="selected">Ingrese un Operacion</option>
                                    <option value="Interpretacion">Interpretacion</option>
                                    <option value="Representacion">Representacion</option>
                                    <option value="Rango">Rango</option>
                                    <option value="Suma">Suma</option>
                                    <option value="Resta">Resta</option>
                                </select>
                            </div>
                        </div>

                        <!-- Boton para "Calcular" por ahora solo manda las cosas a la BD -->

                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Calcular
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
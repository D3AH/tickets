@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-xs-12" style="text-align: center;">
                    <h1>Que quieres hacer?</h1>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div> <!-- Opcion 1 -->
                    <div style="text-align: center" class="bloque">
                        <h2>Reportar problema</h2>
                        <h4><strong>Reporta</strong> el problema para recibir ayuda.</h4>
                        <button class="btn btn-default" type="button"><a href="index/1">  Reportar nuevo problema</a></button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div style="text-align: center; " class="bloque">
                    <h2>Seguimiento de problemas.</h2>
                    <h4><strong>Revisa</strong> el estado de tus problemas reportados.</h4>
                    <button class="btn btn-default" type="button"><a href="index/2">Seguimiento</a></button>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div style="text-align: center; " class="bloque">
                    <h2>Ayuda</h2>
                    <h4><strong>¿Necesitas ayuda?</strong> Consegui información aquí.</h4>
                    <button class="btn btn-default" type="button"><a href="index/3">Ayuda</a></button>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div> <!-- Opcion 1 -->
                    <div style="text-align: center; " class="bloque">
                        <h2>¿Qué es esto?</h2>
                        <h4><strong>¿Está página qué es?</strong> Soporte y atención!</h4>
                        <button class="btn btn-default" type="button"><a href="index/4">Mas sobre esto</a></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
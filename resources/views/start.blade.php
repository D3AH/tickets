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
                        <a href="index/crearTicket"><button class="btn btn-default" type="button">Reportar nuevo problema</button></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div style="text-align: center; " class="bloque">
                    <h2>Seguimiento de problemas.</h2>
                    <h4><strong>Revisa</strong> el estado de tus problemas reportados.</h4>
                    <a href="index/controlTicket"><button class="btn btn-default" type="button">Seguimiento</button></a>
                </div>
            </div>
            <div class="col-xs-12">
                <div style="text-align: center; " class="bloque">
                    <h2>Ayuda</h2>
                    <h4><strong>¿Necesitas ayuda?</strong> Consegui información aquí.</h4>
                    <a href="index/wizardAyuda"><button class="btn btn-default" type="button">Ayuda</button></a>
                </div>
            </div>
            {{--<div class="col-xs-12 col-md-6">--}}
                {{--<div> <!-- Opcion 1 -->--}}
                    {{--<div style="text-align: center; " class="bloque">--}}
                        {{--<h2>¿Qué es esto?</h2>--}}
                        {{--<h4><strong>¿Está página qué es?</strong> Soporte y atención!</h4>--}}
                        {{--<a href="index/sobreEsto"><button class="btn btn-default" type="button">Mas sobre esto</button></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>
    </div>
@endsection
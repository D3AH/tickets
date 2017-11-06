@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="text-align: center;">
                <h1>Que quieres hacer?</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div style="text-align: center; border-right: solid darkslategray 4px;">
                    <h2>Reportar problema</h2>
                    <h4><strong>Reporta</strong> el problema para recibir ayuda </h4>
                    <button class="btn btn-default" type="button"><a href="#">  Reportar nuevo problema</a></button>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div style="text-align: center;">
                    <h2>Seguimiento de problemas reportados</h2>
                    <h4><strong>Revisa</strong> el estado de tus problemas reportados.</h4>
                    <button class="btn btn-default" type="button"><a href="#">Seguimiento</a></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div style="text-align: center; border-right: solid darkslategray 4px;">
                    <h2>Que es esto.</h2>
                    <h4> lorem lorem lorem lorem lorem lorem lorem lorem lorem </h4>
                    <button class="btn btn-default" type="button"><a href="#">  Reportar nuevo problema</a></button>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div style="text-align: center;">
                    <h2>Ayuda</h2>
                    <h4><strong>No sabes como hacer alog</strong> el estado de tus problemas reportados.</h4>
                    <button class="btn btn-default" type="button"><a href="#">Seguimiento</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection
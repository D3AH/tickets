@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-offset-4">
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
            <div class="col-xs-6 col-xs-offset-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Ayuda
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Ayuda</h4>
                            </div>
                            <div class="modal-body">
                                Ayuda aqui...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Entendi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
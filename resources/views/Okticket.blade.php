@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <h2>Ticket enviado!</h2>
                    <ul>
                        <li><h3>Informacion</h3></li>
                        <li>Dato1: {{$name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    @endsection
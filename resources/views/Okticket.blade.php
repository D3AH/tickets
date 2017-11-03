@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <h1>Ticket enviado! &#128582; </h1>
                    <ul>
                        <li><h2>Informacion</h2></li>
                        <li>Dato1: {{$name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    @endsection
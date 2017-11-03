@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form action="{{url('form')}}" method="POST">
                        <label for="name">Label</label>
                        <input type="text" name="name"/>
                        {{csrf_field()}}
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection('content')
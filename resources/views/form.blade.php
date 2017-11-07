@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form>
                        <div class="form-group">
                            <label for="asunto">Asunto:</label>
                            <input type="text" class="form-control" id="asunto" placeholder="Ejemplo: No puedo iniciar sesion.">
                            <small id="emailHelp" class="form-text text-muted">Escribe lo clave.</small>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea class="form-control" id="descripcion" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="custom-file">
                                <input type="file" id="file2" class="custom-file-input">
                                <span class="custom-file-control"></span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
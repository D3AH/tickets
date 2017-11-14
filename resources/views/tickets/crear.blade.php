@extends('layouts.app')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form method="POST" action="/index/crearTicket">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="asunto">Asunto:</label>
                            <input type="text" name="asunto" class="form-control" id="asunto" placeholder="Ejemplo: No puedo iniciar sesion." required>
                            <small id="emailHelp" class="form-text text-muted">Escribe lo clave.</small>
                        </div>
                        <div class="form-group">
                            <label for="areaOservicio">Area o servicio: </label>
                            <select class="selectpicker" required>
                                <optgroup label="SIIF">
                                    <option>Nomina</option>
                                    <option>Compras</option>
                                    <option>Ingresos (Estudiantes)</option>
                                    <option>Ingresos (Módulo Administrativo)</option>
                                    <option>Becas</option>
                                    <option>Ejecución Presupuestal</option>
                                    <option>Control de parqueos</option>
                                    <option>Almacén</option>
                                    <option>Inventario</option>
                                </optgroup>
                                <optgroup label="Servicios Web">
                                    <option>Control de Correspondencia</option>
                                    <option>Coordinadora General de Planificación</option>
                                    <option>Correo electrónico institucional</option>
                                    <option>Dirección General Financiera</option>
                                    <option>División de Administración de Recursos Humanos</option>
                                    <option>División de Publicidad e Información</option>
                                    <option>Manuales y Reglamentos</option>
                                    <option>Plan de Prestaciones</option>
                                    <option>Plan Operativo Anual -POA- 2018</option>
                                    <option>Red de Presupuesto -Presunet-</option>
                                    <option>Requisitos mínimos para adquirir equipo de Cómputo y equipo relacionado</option>
                                    <option>Sistema de Formación del Profesor Universitario</option>
                                <optgroup label="Redes e Infraestructura">
                                    <option>Internet</option>
                                    <option>Telefonia VoIP</option>
                                    <option>Servidores</option>
                                    <option>Seguridad</option>
                                </optgroup>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea name="body" class="form-control" id="descripcion" rows="3" required></textarea>
                        </div>
                        {{--Aun no se ha implementado en el web service--}}
                        {{--<div class="form-group">--}}
                            {{--<label class="custom-file">--}}
                                {{--<input type="file" id="file2" class="custom-file-input">--}}
                                {{--<span class="custom-file-control"></span>--}}
                            {{--</label>--}}
                        {{--</div>--}}
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
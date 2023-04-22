@extends('layouts.lista')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nueva Tarea
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
{{--                @include('common.errors')--}}

                    <form action="{{ route('tareas.store')}}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Descripción de la tarea -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tareas</label>

                            <div class="col-sm-6">
                                <input type="text" name="descripcion" id="tarea-descripcion" class="form-control" value="{{ old('tarea') }}">
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"> Agregar</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Listado  -->
            @if (count($tareas) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Listado de Tareas
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <th class="col-sm-6">Descripción de la tarea</th>
                            <th class="col-sm-2">Borrar&nbsp;</th>
                            <th class="col-sm-2">Completada&nbsp;</th>
                            <th class="col-sm-2">Editar&nbsp;</th>
                            </thead>
                            <tbody>
                            @foreach ($tareas as $tarea)
                                <tr>
                                    <td class="@if($tarea->estado === "C") text-muted @endif table-text"><div> {{ $tarea->descripcion }}</div></td>

                                    <!-- Botón de borrar -->
                                    <td>
                                        <form action="{{ url('tareas/'.$tarea->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-danger ">
                                                <i class="fa fa-btn fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>

                                    <!-- Botón de actualizar estado de la tarea -->
                                    <td>
                                        <form action="{{ url('tareas/estado/'.$tarea->id) }}" method="POST" >
                                            {{ csrf_field() }}
                                            {{ method_field('GET') }}

                                            <button type="submit" class="btn btn-primary" @if($tarea->estado === "C") disabled @endif >
                                                <i class="fa fa-btn fa-check"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <!-- Botón de edición -->
                                    <td>
{{--                                        @if($tarea->estado=='P')--}}
                                            <form action="{{ url('tareas/edit/'.$tarea->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('GET') }}

                                                <button type="submit" class="btn btn-primary" @if($tarea->estado === "C") disabled @endif >
                                                    <i class="fa fa-btn fa-pencil"></i>
                                                </button>
                                            </form>
{{--                                        @endif--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@extends('layouts.lista')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Tarea
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    {{--                @include('common.errors')--}}

                    <form action="{{ url('tareas/save/'.$tarea->id) }}" method="GET" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Descripción de la tarea -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tarea</label>
                            <div class="col-sm-9">
                                <input type="text" name="descripcion" id="tarea-descripcion" class="form-control" value="{{ $tarea->descripcion }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="col-md-offset-6 col-sm-2 btn btn-default">
                                <i class="fa fa-btn fa-check"> Guardar</i>
                            </button>
                            <a class="col-sm-2 btn btn-md btn-default" href="{{ URL::previous() }}" >
                                <i class="fa fa-btn fa-undo"> Regresar</i> </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('shared/layout')
@section('title','Listado de impresoras')
@section('content')  
<div class="card mb-4">
    <div class="card-header">
        <a href="{{url('/impresoras')}}/create" class="btn btn-primary">Crear impresora </a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Codigo</th>  
                    <th>Nombre</th>
                    <th>Recurso compartido</th>
                    <th>Tamaño fuente encabezado</th>
                    <th>Tamaño fuente contnido</th>                                
                    <th>Descripcion</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Codigo</th>  
                    <th>Nombre</th>
                    <th>Recurso compartido</th>
                    <th>Tamaño fuente encabezado</th>
                    <th>Tamaño fuente contnido</th>                                
                    <th>Descripcion</th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
            <tbody>
                @foreach($impresoras as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->codigo}}</td>            
                    <td>{{$item->nombre}}</td>            
                    <td>{{$item->recurso_compartido}}</td>
                    <td>{{$item->tamaño_fuente_encabezado}}</td>
                    <td>{{$item->tamaño_fuente_contenido}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>
                        <a title="Editar" class="btn btn-warning" href="{{url('/impresoras')}}/{{$item->id}}/edit">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                    </td>
                    <td>                
                        <form action="{{url('/impresoras')}}/{{$item->id}}"
                             onsubmit="return validar('Desea eliminar este registro?');" method="post">
                            @csrf
                            @method('delete')
                            <button title="Eliminar" class="btn btn-danger" type="submit"> 
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach   
            </tbody>
        </table>
    </div>
</div>
@endsection

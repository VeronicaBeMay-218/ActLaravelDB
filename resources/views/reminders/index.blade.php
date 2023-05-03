<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Recordatorios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="card">
                  <!-- Aqui empieza lo diferente del dashboard -->
                  <div class="container">
        <div class="row">

        <form action="{{ route('reminders.index') }}" method="GET">
    <div class="form-group">
        <input type="text" class="form-control" name="search" value="{{ $search ?? '' }}" placeholder="Buscar recordatorios..." autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/reminders/create') }}" class="btn btn-success btn-sm" title="Add New reminder">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar nuevo
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Mensaje</th>
                                        <th>Categoria</th>
                                        <th>Importancia</th>
                                        <th>Fecha</th>
                                        <th>Destacado</th>
                                        <th>Completado</th>
                                        <th>Asignatura</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($reminders as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->mensaje }}</td>
                                        <td>{{ $item->categoria }}</td>
                                        <td>{{ $item->importancia }}</td>
                                        <td>{{ $item->fecha}}</td>
        
                                        <td>{{ $item->destacado}}</td>
                                        <td>{{ $item->completado}}</td>
                                        <td>{{ $item->Subject->nombre}}</td>
 
                                        <td>
                                            <a href="{{ url('/reminders/' . $item->id) }}" title="View reminder"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/reminders/' . $item->id . '/edit') }}" title="Edit reminder"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/reminders' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete reminder" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Aqui termina lo diferente del dashboard -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
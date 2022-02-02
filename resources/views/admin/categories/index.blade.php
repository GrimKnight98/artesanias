@extends('admin.layout.app')

@section('title', 'Listado de categorias')

@section('content')
<div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
        <a href="{{ route('categories.create') }}" class="btn btn-sm btn-outline-primary">Añadir <i class="fas fa-plus-circle"></i></a>
    </div>
  </div>
<h2>Categorias Existentes</h2>
<div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Articulos en la categoria</th>
              <th scope="col">Acaciones</th>
            </tr>
          </thead>
          <tbody>
                @forelse ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->catDesc }}</td>
                    <td>2.846</td>
                    <td>
                       <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                       <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                       <!-- DELETE FORM -->
                       <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                        </form>
                    </td>
                  </tr>
                @empty
                <tr>
                    <th scope="row">No hay informacion que mostrar</th>
                    <td>No hay informacion que mostrar</td>
                    <td>No hay informacion que mostrar</td>
                    <td>No hay informacion que mostrar</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="fas fa-eye"></i></i></button>
                      <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                @endforelse

          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@extends('admin.layout.app')

@section('title', 'Registrar categoria')

@section('content')

<div class="card">
    <h5 class="card-header">Featured</h5>
    <div class="card-body">

        <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @include('admin.categories.form')
            <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
          </form>

    </div>
  </div>


@endsection

<div class="card">
    <h5 class="card-header">Featured</h5>
    <div class="card-body">

        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Categoria</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre de la categoria">
              </div>
            </div>
            <div class="form-group row">
              <label for="catDesc" class="col-sm-2 col-form-label">Descripción</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="catDesc" id="catDesc" placeholder="Breve descripcción">
              </div>
            </div>
            <div class="form-group row">
                <label for="catImage" class="col-sm-2 col-form-label">Imagen para la categoria</label>
                <div class="col-sm-10">
                    <input type="file" id="myfile" name="catImage">
                </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
            </div>
          </form>

    </div>
  </div>

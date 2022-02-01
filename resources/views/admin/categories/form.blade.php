@csrf
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Categoria</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre de la categoria" value="{{ old('name', optional($category ?? null)->name) }}">
                @error('name')
                    <div>{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="catDesc" class="col-sm-2 col-form-label">Descripción</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="catDesc" id="catDesc" placeholder="Breve descripcción" value="{{ old('catDesc', optional($category ?? null)->catDesc)}}">
                @error('catDesc')
                    <div>{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group row">
                <label for="catImage" class="col-sm-2 col-form-label">Imagen para la categoria</label>
                <div class="col-sm-10">
                    <input type="file" id="myfile" name="catImage" value="{{ old('catDesc', optional($category ?? null)->catImage)}}">
                    @error('catImage')
                        <div>{{ $message }}</div>
                    @enderror
                </div>
            </div>
            </div>

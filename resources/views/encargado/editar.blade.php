@extends('encargado.home')
@section('seccion')
<div class="row">
             <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
             <div class="form-group">
               <br>
             <label for="nombre">Nombre: </label>
             <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...">
             </div>
             </div>
             <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                  <br>
                    <label>Categoría: </label>
                    <select name="categoria" class="form-control">
                           <option value=""></option>
                    </select>
                </div>
             </div>
             <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
             <div class="form-group">
             <label for="codigo">Código</label>
             <input type="text" name="codigo" required value="{{old('codigo')}}" class="form-control" placeholder="Codigo del producto...">
             </div>
             </div>
             <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
             <div class="form-group">
             <label for="stock">Stock</label>
             <input type="text" name="stock" required value="{{old('stock')}}" class="form-control" placeholder="Stock del producto...">
             </div>
         </div>
         <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
             <div class="form-group">
             <label for="descripcion">Descripción</label>
             <input type="text" name="descripcion" value="{{old('descripcion')}}" class="form-control" placeholder="Descripción del producto...">
             </div>
         </div>
          <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
             <div class="form-group">
             <label for="imagen">Imagen</label>
             <input type="file" name="imagen" class="form-control">
             </div>
         </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
         <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
   </div>
 </div>
@endsection

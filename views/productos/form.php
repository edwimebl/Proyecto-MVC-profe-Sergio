<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Productos</h1>
            <p>Ingresa los datos para registrar un nuevo producto</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Productos</li>
              <li><a href="#">Registrar Producto</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="post" action="?c=producto&a=Guardar">
                      <fieldset>
                        <legend>Registrar Producto</legend>
                        <div class="form-group">
                            <input class="form-control" name="ID" type="hidden">
                            <label class="col-lg-2 control-label" for="Nombre">Nombre </label>  

                            <div class="col-lg-10">
                               <input required class="form-control" name="Nombre" type="text" placeholder="Nombre del producto">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Marca">Marca</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Marca" type="text" placeholder="Marca del producto">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Costo">Costo</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Costo" type="number" placeholder="Costo del producto">                            
                          </div>
                        </div> 
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Precio">Precio</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Precio" type="number" placeholder="Precio del producto">                            
                          </div>
                        </div>   
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Cantidad">Cantidad</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="Cantidad" type="number" placeholder="Cantidad del producto">                            
                          </div>
                        </div>  
                        <!--
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="Imagen">Imagen</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="Imagen" type="text" placeholder="URL de la imagen del producto">                            
                          </div>
                        </div> 
                        -->                         
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default" type="reset">Cancelar</button>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>                
            </div>
          </div>
        </div>
      </div>
    </div>
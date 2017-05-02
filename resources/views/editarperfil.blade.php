@extends('layouts.app')

@section('content')
<script type="text/javascript">
    
    function toggler(divId) {
        $("#" + divId).toggle();
    }
    
</script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Perfil</div>

                <div class="panel-body">
                    

                        <ul class="nav nav-tabs nav-top-border">
                            <li class="active"><a href="#info" data-toggle="tab">Datos Personales</a></li>
                            <li><a href="#password" data-toggle="tab">Contraseña</a></li>
                            <li><a href="#mascotas" data-toggle="tab">Mascotas</a></li>
                            <li><a href="#privacy" data-toggle="tab">Premium</a></li>
                        </ul>

                        <div class="tab-content margin-top-20">

                            <!-- Datos Personales-->
                            <div class="tab-pane fade in active" id="info">
                                <form role="form" action="#" method="post">
                                    <div class="form-group">
                                        <label class="control-label">Nombre</label>
                                        <input type="text" placeholder="Nombre" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Apellidos</label>
                                        <input type="text" placeholder="Apellidos" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Telefono</label>
                                        <input type="text" placeholder="666666666" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label">Imagen de perfil</label><br>

                                        <div class="thumbnail col-md-6">
                                            <img class="img-responsive" src="storage/imgperfil.jpg" alt="" width="50%" height="50%">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="file" name="img">
                                        </div>
                                        
                                        
                                    </div>

                                    <div class="margiv-top10 col-lg-12">
                                            <a href="#" class="btn btn-primary">Guardar Cambios </a>
                                            <!--<a href="#" class="btn btn-default">Cancel </a>-->
                                    </div>
                                </form>
                            </div>
                            <!-- /Datos Personales -->

                            <!-- PASSWORD TAB -->
                            <div class="tab-pane fade" id="password">

                                <form action="#" method="post">

                                    <div class="form-group">
                                        <label class="control-label">Nueva Contraseña</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Repita la Nueva Contraseña</label>
                                        <input type="password" class="form-control">
                                    </div>

                                    <div class="margiv-top10">
                                        <a href="#" class="btn btn-primary"><i class="fa fa-check"></i> Cambiar contraseña</a>
                                        <!--<a href="#" class="btn btn-default">Cancel </a>-->
                                    </div>

                                </form>

                            </div>
                            <!-- /PASSWORD TAB -->

                            <!-- MASCOTAS TAB -->
                            
                            <div class="tab-pane fade margin-top-10" id="mascotas">

                                <form action="#" method="post">
        
                                    <a href="#" onclick="toggler(&quot;mascota1&quot;)"><input class="btn" type="button" value="Mascota 1"></a>

                                    <a href="#" onclick="toggler(&quot;mascota2&quot;)"><input class="btn" type="button" value="Mascota 2"></a>

                                    <a href="#" onclick="toggler(&quot;mascota3&quot;)"><input class="btn" type="button" value="Mascota 3"></a>
        
                                    <div class="panel-body" id="mascota1" style="display: none;">

                                        <div class="form-group">
                                            <label class="control-label">Nombre</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Animal</label>
                                            <input type="text" class="form-control" value="Perro" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Raza</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Genero</label>
                                            <input type="text" class="form-control" value="Macho" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Tamaño</label>
                                            <select class="form-control">
                                                <option value="pequenyo">Pequeño</option>
                                                <option value="mediano">Mediano</option>
                                                <option value="grande">Grande</option>
                                                <option value="gigante">Gigante</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Edad</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Imagen de perfil</label>
                                            <div class="thumbnail ">
                                                <img class="img-responsive" src="storage/perro.jpg" alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="file" name="img">
                                            </div>
                                        </div>
                                        <div class="margin-top-10 col-lg-12">
                                            <br><a href="#" class="btn btn-primary"><i class="fa fa-check"></i>Guardar Cambios</a>
                                            <!--<a href="#" class="btn btn-default">Cancel </a>-->
                                        </div>
                                    </div>

                                    <div class="panel-body" id="mascota2" style="display: none;">

                                        <div class="form-group">
                                            <label class="control-label">Nombre</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Animal</label>
                                            <input type="text" class="form-control" value="Perro" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Raza</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Genero</label>
                                            <input type="text" class="form-control" value="Macho" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Tamaño</label>
                                            <select class="form-control">
                                                <option value="pequenyo">Pequeño</option>
                                                <option value="mediano">Mediano</option>
                                                <option value="grande">Grande</option>
                                                <option value="gigante">Gigante</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Edad</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Imagen de perfil</label>
                                            <div class="thumbnail ">
                                                <img class="img-responsive" src="storage/gato.jpg" alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="file" name="img">
                                            </div>
                                        </div>
                                        <div class="margin-top-10 col-lg-12">
                                            <br><a href="#" class="btn btn-primary"><i class="fa fa-check"></i>Guardar Cambios</a>
                                            <!--<a href="#" class="btn btn-default">Cancel </a>-->
                                        </div>
                                    </div>

                                    <div class="panel-body" id="mascota3" style="display: none;">

                                        <div class="form-group">
                                            <label class="control-label">Nombre</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Animal</label>
                                            <input type="text" class="form-control" value="Perro" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Raza</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Genero</label>
                                            <input type="text" class="form-control" value="Hembra" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Tamaño</label>
                                            <select class="form-control">
                                                <option value="pequenyo">Pequeño</option>
                                                <option value="mediano">Mediano</option>
                                                <option value="grande">Grande</option>
                                                <option value="gigante">Gigante</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Edad</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Imagen de perfil</label>
                                            <div class="thumbnail ">
                                                <img class="img-responsive" src="storage/perro2.jpg" alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="file" name="img">
                                            </div>
                                        </div>
                                        <div class="margin-top-10 col-lg-12">
                                            <br><a href="#" class="btn btn-primary"><i class="fa fa-check"></i>Guardar Cambios</a>
                                            <!--<a href="#" class="btn btn-default">Cancel </a>-->
                                        </div>
                                    </div>

                                    
                                </form>
                            </div>


                            <!-- /MASCOTA TAB -->

                            <!-- PREMIUM TAB -->
                            <div class="tab-pane fade" id="privacy">

                                <form action="#" method="post">
                                    <div class="sky-form">

                                        <table class="table table-bordered table-striped">
                                            <tbody>
                                               
                                                <tr>
                                                    <td>Premium</td>
                                                    <td>
                                                        <label class="checkbox nomargin">
                                                            <input type="checkbox" name="checkbox"><i></i> Si
                                                        </label>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>

                                    </div>

                                    <div class="margin-top-10">
                                        <a href="#" class="btn btn-primary"><i class="fa fa-check"></i> Guardar Cambios </a>
                                        <!--<a href="#" class="btn btn-default">Cancel </a>-->
                                    </div>

                                </form>

                            </div>
                            <!-- /PREMIUM TAB -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

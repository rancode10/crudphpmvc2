<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Document</title>
    <link rel="stylesheet" href="Resources/css/materialize.css">
</head>
<body>

    <div class="container">
        <form method="post" action="?c=guardar">
            <div class="row">
                <div class="col m12">
                    <div class="card black z-depth-3 white-text center-align">
                        <h2>Lista de Zapatos</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">Precio : </div>
                <div class="col m3">
                    <input type="hidden" name="txtID" value="<?php echo $obj->id_zapato; ?>">
                    <input type="text" name="txtPrecio" value="<?php echo $obj->precio; ?>">
                </div>            
                <div class="col m3"></div>            
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">Color : </div>
                <div class="col m3">
                    <input type="text" name="txtColor" value="<?php echo $obj->color; ?>">
                </div>            
                <div class="col m3"></div>            
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">Estilo : </div>
                <div class="col m3">
                    <select name="cmbEstilo">
                        <?php foreach ($this->MODEL->cargarEstilo() as $k) : ?>
                            <option value="<?php echo $k->id_estilo ?>" <?php echo $k->id_estilo == $obj->id_estilo ? 'selected' : '' ?> > <?php echo $k->estilo ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>            
                <div class="col m3"></div>            
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">Talla : </div>
                <div class="col m3">
                    <select name="cmbTalla">
                        <?php foreach ($this->MODEL->cargarTalla() as $k) : ?>
                            <option value="<?php echo $k->id_talla ?>" <?php echo $k->id_talla == $obj->id_talla ? 'selected' : '' ?> > <?php echo $k->talla ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>            
                <div class="col m3"></div>            
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">Genero : </div>
                <div class="col m3">
                    <select name="cmbGenero">
                        <?php foreach ($this->MODEL->cargarGenero() as $k) : ?>
                            <option value="<?php echo $k->id_genero ?>" <?php echo $k->id_genero == $obj->id_genero ? 'selected' : '' ?> > <?php echo $k->genero ?> </option>
                        <?php endforeach; ?>                      
                    </select>
                </div>            
                <div class="col m3"></div>            
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">Cantidad : </div>
                <div class="col m3">
                    <input type="text" name="txtCantidad" value="<?php echo $obj->cantidad; ?>">
                </div>            
                <div class="col m3"></div>            
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m6">
                    <input type="submit" name="" value="Guardar" class="btn red depth-3">
                </div>                
                <div class="col m3"></div>            
            </div>
        </form>
    </div>
    
    <script src="Resources/js/jquery.js"></script>
    <script src="Resources/js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>
</body>
</html>
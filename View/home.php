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
        <div class="row">
            <div class="col m12">
                <div class="card black z-depth-3 white-text center-align">
                    <h2>Lista de Zapatos</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m12">
                <table class="table-responsive z-depth-3">
                    <tr class="black">
                        <th class="white-text center-align">Id</th>
                        <th class="white-text center-align">Precio</th>
                        <th class="white-text center-align">Color</th>
                        <th class="white-text center-align">Estilo</th>
                        <th class="white-text center-align">Talla</th>
                        <th class="white-text center-align">Genero</th>
                        <th class="white-text center-align">Cantidad</th>
                    </tr>                
                <?php foreach ($this->MODEL->listar() as $k) : ?>
                    <tr>
                        <td class="center-align"><?php echo $k->id_zapato; ?></td>
                        <td class="center-align">$ <?php echo $k->precio; ?></td>
                        <td class="center-align"><?php echo $k->color; ?></td>
                        <td class="center-align"><?php echo $k->estilo; ?></td>
                        <td class="center-align"><?php echo $k->talla; ?></td>
                        <td class="center-align"><?php echo $k->genero; ?></td>
                        <td class="center-align"><?php echo $k->cantidad; ?></td>
                    </tr>
                <?php endforeach ?>
                </table>                
            </div>
        </div>
    </div>
    
</body>
</html>
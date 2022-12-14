<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Zapatos</title>
    <link rel="stylesheet" href="Resources/css/materialize.css">
    <link rel="stylesheet" href="Resources/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col m12">
                <a href="?c=regresar">
                    <div class="card blue z-depth-4 white-text center-align">
                        <h2>Tienda de Zapatos</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="row center-align">
            <div class="col m4">
                <a href="?c=crear" id="boton" class="btn green z-depth-3">Registrar Zapatos</a>
            </div>
            <div class="col m4"></div>
            <div class="col m4">
                <a href="?c=categorias" id="boton" class="btn blue z-depth-3">Registrar Categorias</a>
            </div>
        </div>
    
        <div class="row">
            <div class="col m12">
                <table class="table-responsive z-depth-3">
                    <tr class="black">
                        <th class="white-text center-align">ID</th>
                        <th class="white-text center-align">Marca</th>
                        <th class="white-text center-align">Color</th>
                        <th class="white-text center-align">Estilo</th>
                        <th class="white-text center-align">Género</th>
                        <th class="white-text center-align">Talla</th>
                        <th class="white-text center-align">Cantidad</th>
                        <th class="white-text center-align">Precio</th>
                        <th class="white-text center-align">Valor Total</th>
                        <th class="white-text center-align">Eliminar</th>
                        <th class="white-text center-align">Actualizar</th>
                    </tr>
                    <?php 
                        $cantidadTotal = 0;
                        $valorTotal = 0;
                        foreach($this->Model->listarZapatos() as $lz) : 
                    ?>
                        <tr>
                            <td class="center-align"><?php echo $lz->id_zapato; ?></td>
                            <td class="center-align"><?php echo $lz->marcas; ?></td>
                            <td class="center-align"><?php echo $lz->color; ?></td>
                            <td class="center-align"><?php echo $lz->estilos; ?></td>
                            <td class="center-align"><?php echo $lz->generos; ?></td>
                            <td class="center-align"><?php echo $lz->tallas; ?></td>
                            <td class="center-align"><?php echo $lz->cantidad; ?></td>
                            <td class="center-align">$<?php echo $lz->precio; ?></td>
                            <td class="center-align">$<?php echo $lz->valor_total; ?></td>
                            <td class="center-align">
                                <a href="?c=eliminar&id=<?php echo $lz->id_zapato ?>" class="btn red z-depth-2">Eliminar</a>
                            </td>
                            <td class="center-align">
                                <a href="?c=editar&id=<?php echo $lz->id_zapato ?>" class="btn green z-depth-2">Actualizar</a>
                            </td>
                        </tr>
                        <?php 
                            $cantidadTotal += $lz->cantidad;
                            $valorTotal += $lz->valor_total;
                        ?>

                    <?php endforeach; ?>  
                </table>       
            </div>
        </div>
    </div>
               
        <div class="container">
            <div class="row">
                <div class="col m4">
                    <div class="card blue darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Cantidad de Zapatos: <?php echo $cantidadTotal;  ?>  </span>
                        </div>
                    </div>
                </div>
                <div class="col m4"></div>
                <div class="col m4">
                    <div class="card blue darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Valor Total: $<?php echo $valorTotal;  ?>  </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    <script src="Resources/js/jquery-3.6.1.min.js"></script>
    <script src="Resources/js/materialize.js"></script>
   
</body>
</html>
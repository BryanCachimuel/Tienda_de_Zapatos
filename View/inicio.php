<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Zapatos</title>
    <link rel="stylesheet" href="Resources/css/materialize.css">
    <link rel="stylesheet" href="Resources/css/estilos.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col m12">
                <div class="card blue z-depth-4 white-text center-align">
                    <h2>Tienda de Zapatos</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m12">
                <a href="?c=crear" id="boton" class="btn btn-success z-depth-3">Registrar Zapatos</a>
                <table class="table-responsive z-depth-3">
                    <tr class="black">
                        <th class="white-text center-align">Color</th>
                        <th class="white-text center-align">Estilo</th>
                        <th class="white-text center-align">Género</th>
                        <th class="white-text center-align">Talla</th>
                        <th class="white-text center-align">Cantidad</th>
                        <th class="white-text center-align">Precio</th>
                        <th class="white-text center-align">Valor Total</th>
                        <th class="white-text center-align">Eliminar</th>
                    </tr>
                    <?php foreach($this->Model->listarZapatos() as $lz) : ?>
                        <tr>
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
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
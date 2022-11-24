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
        <form method="POST" action="?c=guardar">
            <div class="row">
                <div class="col m12">
                    <div class="card blue z-depth-4 white-text center-align">
                        <h2>Tienda de Zapatos</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">Color: </div>
                <div class="col m3">
                    <input type="text" name="txtColor">
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">Estilo: </div>
                <div class="col m3">
                    <select name="cmbEstilo">
                        <?php foreach($this->Model->listarEstilos() as $le) : ?>
                            <option value="<?php echo $le->id_estilo ?>"><?php echo $le->estilos ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">Género: </div>
                <div class="col m3">
                    <select name="cmbGenero">
                        <?php foreach($this->Model->listarGenero() as $lg) : ?>
                            <option value="<?php echo $lg->id_genero ?>"><?php echo $lg->generos ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">Talla: </div>
                <div class="col m3">
                    <select name="cmbTalla">
                        <?php foreach($this->Model->listarTallas() as $lt) : ?>
                            <option value="<?php echo $lt->id_talla ?>"><?php echo $lt->tallas ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">Cantidad: </div>
                <div class="col m3">
                    <input type="text" name="txtCantidad">
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">Precio: </div>
                <div class="col m3">
                    <input type="text" name="txtPrecio">
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m3">Valor Total: </div>
                <div class="col m3">
                    <input type="text" name="txtValor_total">
                </div>
                <div class="col m3"></div>
            </div>
            <div class="row">
                <div class="col m3"></div>
                <div class="col m6">
                    <input type="submit" name="btnGuardar" class="btn red z-depth-3" value="Crear">
                </div>
                <div class="col m3"></div>
            </div>
        </form>
    </div>

    <script src="Resources/js/jquery-3.6.1.min.js"></script>
    <script src="Resources/js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('select').formSelect()
        })
    </script>
</body>
</html>
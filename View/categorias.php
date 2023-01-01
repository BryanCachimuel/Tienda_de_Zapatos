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
                <a href="?c=regresar">
                    <div class="card blue z-depth-4 white-text center-align">
                        <h2>Tienda de Zapatos</h2>
                    </div>
                </a>
            </div>
            <div class="col m1"></div>
                <div class="col m5">
                    <div class="card">
                        <div class="card-header blue center-align white-text">
                            <h4>Categoria Marcas</h4>
                        </div>
                        <div class="card-body">
                            <form action="?c=crearMarcas" method="POST">
                                <div class="row center-align">
                                    <div class="col m12">
                                    <div class="input-field col s2"></div>
                                        <div class="input-field col s8">
                                            <textarea id="marcas" class="materialize-textarea" name="txtMarcas"></textarea>
                                            <label for="marcas">Marcas:</label>
                                        </div>
                                    </div>
                                    <div class="col m12">
                                        <input type="submit" name="btnGuardar" class="btn green z-depth-3" value="Crear">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col m5">
                    <div class="card">
                        <div class="card-header blue center-align white-text">
                            <h4>Categoria Estilos</h4>
                        </div>
                        <div class="card-body">
                            <form action="?c=crearEstilos" method="POST">
                                <div class="row center-align">
                                    <div class="col m12">
                                        <div class="input-field col s2"></div>
                                            <div class="input-field col s8">
                                                <textarea id="estilos" class="materialize-textarea" name="txtEstilos"></textarea>
                                                <label for="estilos">Estilos:</label>
                                            </div>
                                    </div>
                                    <div class="col m12">
                                        <input type="submit" name="btnGuardar" class="btn green z-depth-3" value="Crear">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row">
        <div class="col m1"></div>
            <div class="col m5">
                    <div class="card">
                        <div class="card-header blue center-align white-text">
                            <h4>Categoria Generos</h4>
                        </div>
                        <div class="card-body">
                            <form action="?c=crearGeneros" method="POST">
                                <div class="row center-align">
                                    <div class="col m12">
                                        <div class="input-field col s2"></div>
                                        <div class="input-field col s8">
                                            <textarea id="generos" class="materialize-textarea" name="txtGeneros"></textarea>
                                            <label for="generos">Géneros:</label>
                                        </div>
                                    </div>
                                    <div class="col m12">
                                            <input type="submit" name="btnGuardar" class="btn green z-depth-3" value="Crear">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col m5">
                    <div class="card">
                        <div class="card-header blue center-align white-text">
                            <h4>Categoria Tallas</h4>
                        </div>
                        <div class="card-body">
                            <form action="?c=crearTallas" method="POST">
                                <div class="row center-align">
                                    <div class="col m12">
                                        <div class="input-field col s2"></div>
                                            <div class="input-field col s8">
                                                <textarea id="talla" class="materialize-textarea" name="txtTallas"></textarea>
                                                <label for="talla">Talla:</label>
                                            </div>
                                    </div>
                                    <div class="col m12">
                                            <input type="submit" name="btnGuardar" class="btn green z-depth-3" value="Crear">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
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
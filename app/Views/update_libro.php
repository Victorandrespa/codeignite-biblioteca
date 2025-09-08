<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Libro</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4">Update Libro</h2>
                <form action="<?= base_url('editar_libro') ?>" method="post">

                    <label for="txt_c_libro" class="form-label">Codigo Libro:</label>
                    <input type="text" name="txt_c_libro" id="txt_c_libro" class="form-control"
                        value="<?= $datos['codigo_libro'] ?>" readonly>

                    <label for="txt_c_editorial" class="form-label">Codigo Editorial:</label>
                    <input type="text" name="txt_c_editorial" id="txt_c_editorial" class="form-control"
                        value="<?= $datos['codigo_editorial'] ?>">

                    <label for="txt_titulo" class="form-label">Titulo:</label>
                    <input type="text" name="txt_titulo" id="txt_titulo" class="form-control"
                        value="<?= $datos['titulo'] ?>">
                          
                    <label for="txt_numero" class="form-label">Numero:</label>
                    <input type="text" name="txt_numero" id="txt_numero" class="form-control"
                        value="<?= $datos['numero'] ?>">

                    <label for="txt_tamanio" class="form-label">Tamaño:</label>
                    <input type="text" name="txt_tamanio" id="txt_tamanio" class="form-control"
                        value="<?= $datos['tamanio'] ?>">

                    <label for="txt_precio" class="form-label">Precio:</label>
                    <input type="text" name="txt_precio" id="txt_precio" class="form-control"
                        value="<?= $datos['precio'] ?>">
                          
                    <label for="txt_estado" class="form-label">Estado:</label>
                    <input type="text" name="txt_estado" id="txt_estado" class="form-control"
                        value="<?= $datos['estado'] ?>">
                   
                    <label for="txt_edicion" class="form-label">Edicion:</label>
                    <input type="text" name="txt_edicion" id="txt_edicion" class="form-control"
                        value="<?= $datos['edicion'] ?>">


                    <button type="submit" class="btn btn-outline-dark mt-3 w-100">Guardar</button>

                </form>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>
</body>

</html>
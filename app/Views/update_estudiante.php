<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Estudiante</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4">Update Estudiante</h2>
                <form action="<?= base_url('editar_estudiante') ?>" method="post">

                    <label for="txt_id" class="form-label">Carne:</label>
                    <input type="text" name="txt_id" id="txt_id" class="form-control"
                        value="<?= $datos['carne_alumno'] ?>" readonly>

                    <label for="txt_nombre" class="form-label">Nombre:</label>
                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control"
                        value="<?= $datos['nombre'] ?>">

                    <label for="txt_apellido" class="form-label">Apellido:</label>
                    <input type="text" name="txt_apellido" id="txt_apellido" class="form-control"
                        value="<?= $datos['apellido'] ?>">
                          
                    <label for="txt_direccion" class="form-label">Direccion:</label>
                    <input type="text" name="txt_direccion" id="txt_direccion" class="form-control"
                        value="<?= $datos['direccion'] ?>">

                    <label for="txt_telefono" class="form-label">Telefono:</label>
                    <input type="text" name="txt_telefono" id="txt_telefono" class="form-control"
                        value="<?= $datos['telefono'] ?>">

                    <label for="txt_email" class="form-label">Email:</label>
                    <input type="text" name="txt_email" id="txt_email" class="form-control"
                        value="<?= $datos['email'] ?>">

                    <label for="txt_f_nacimiento" class="form-label">Fecha Nacimiento:</label>
                    <input type="date" name="txt_f_nacimiento" id="txt_f_nacimiento" class="form-control"
                        value="<?= $datos['fechanacimiento'] ?>">

                    <label for="txt_c_grado" class="form-label">Codigo Grado:</label>
                    <input type="text" name="txt_c_grado" id="txt_c_grado" class="form-control"
                        value="<?= $datos['codigo_grado'] ?>">
                   

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
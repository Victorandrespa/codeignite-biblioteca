<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Prestamo</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4">Update Prestamo</h2>
                <form action="<?= base_url('editar_prestamo') ?>" method="post">

                    <label for="txt_n_prestamo" class="form-label">Numero Prestamo:</label>
                    <input type="number" name="txt_n_prestamo" id="txt_n_prestamo" class="form-control"
                        value="<?= $datos['numero_prestamo'] ?>" readonly>

                    <label for="txt_c_libro" class="form-label">Codigo Libro:</label>
                    <input type="number" name="txt_c_libro" id="txt_c_libro" class="form-control"
                        value="<?= $datos['codigo_libro'] ?>">                    
                    
                        <label for="txt_c_alumno" class="form-label">Carne Alumno:</label>
                    <input type="number" name="txt_c_alumno" id="txt_c_alumno" class="form-control"
                        value="<?= $datos['carne_alumno'] ?>">

                    <label for="txt_f_prestamo" class="form-label">Fecha Prestamo:</label>
                    <input type="date" name="txt_f_prestamo" id="txt_f_prestamo" class="form-control"
                        value="<?= $datos['fecha_prestamo'] ?>">
                          
                    <label for="txt_f_devolucion" class="form-label">Fecha Devolucion:</label>
                    <input type="date" name="txt_f_devolucion" id="txt_f_devolucion" class="form-control"
                        value="<?= $datos['fecha_devolucion'] ?>">

                     <label for="txt_c_empleado" class="form-label">Codigo Empleado:</label>
                    <input type="number" name="txt_c_empleado" id="txt_c_empleado" class="form-control"
                        value="<?= $datos['codigo_empleado'] ?>">
                   

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
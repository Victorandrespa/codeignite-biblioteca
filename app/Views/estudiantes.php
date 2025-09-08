<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>


<body>

    <div class="container">


        <h1 class="mt-3">Estudiantes</h1>

        <!-- Modal para agregar usuario -->

        <div class="d-flex flex-row justify-content-between align-items-center">

            <a href="home.php" class="btn btn btn-outline-dark">Home <i class="bi bi-house"></i></a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-dark my-2" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <i class="bi bi-person-plus-fill"></i>
            </button>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Estudiante</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="agregarEstudiantes" method="post">
                            
                            <label for="txt_id" class="form-label">Carne:</label>
                            <input type="text" name="txt_id" id="txt_id" class="form-control">

                            <label for="txt_nombre" class="form-label">Nombre:</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                            <label for="txt_apellido" class="form-label">Apellido:</label>
                            <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">

                            <label for="txt_direccion" class="form-label">Direccion:</label>
                            <input type="number" name="txt_direccion" id="txt_direccion" class="form-control">

                            <label for="txt_telefono" class="form-label">Telefono:</label>
                            <input type="number" name="txt_telefono" id="txt_telefono" class="form-control">

                            <label for="txt_email" class="form-label">Email:</label>
                            <input type="email" name="txt_email" id="txt_email" class="form-control">

                            <label for="txt_f_nacimiento" class="form-label">Fecha Nacimiento:</label>
                            <input type="date" name="txt_f_nacimiento" id="txt_f_nacimiento" class="form-control">

                            <label for="txt_c_grado" class="form-label">Codigo Grado:</label>
                            <input type="text" name="txt_c_grado" id="txt_c_grado" class="form-control">

                            <div class="d-flex justify-content-center mt-3">
                                <button type="submit"
                                    class="btn btn-outline-dark mt-2 justify-content-center">Guardar</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>






        <!-- Tabla de resultados -->

        <table class="table mt-5 table-hover table-bordered">
            <thead class="table-dark text-center">
                <tr>
                    <th>Carne</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Fecha Nacimiento</th>
                    <th>Cod. Grado</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $estudiante) {
                    ?>
                    <tr>
                        <td><?php echo ($estudiante['carne_alumno']) ?></td>
                        <td><?= $estudiante['nombre']; ?></td>
                        <td><?= $estudiante['apellido']; ?></td>
                        <td><?= $estudiante['direccion']; ?></td>
                        <td><?= $estudiante['telefono']; ?></td>
                        <td><?= $estudiante['email']; ?></td>
                        <td><?= $estudiante['fechanacimiento']; ?></td>
                        <td><?= $estudiante['codigo_grado']; ?></td>
                        <td class="d-flex justify-content-center gap-2 ">
                            <!-- <a href="</?= base_url('') . $estudiante['estudiante_id']; ?>"
                                class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a> -->
                            <a href="<?= base_url('update_estudiante/') . $estudiante['carne_alumno']; ?>" class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a>
                            <a href="<?= base_url('eliminar_estudiante/') . $estudiante['carne_alumno']; ?>" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

    </div>
















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
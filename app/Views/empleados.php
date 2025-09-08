<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>


<body>

    <div class="container">


        <h1 class="mt-3">Empleados</h1>

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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Empleado</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="agregarEmpleado" method="post">

                            <label for="txt_c_empleado" class="form-label">Codigo Empleado:</label>
                            <input type="text" name="txt_c_empleado" id="txt_c_empleado" class="form-control">

                            <label for="txt_nombre" class="form-label">Nombre:</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                            <label for="txt_apellido" class="form-label">Apellido:</label>
                            <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">

                            <label for="txt_direccion" class="form-label">Direccion:</label>
                            <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">
                            
                            <label for="txt_email" class="form-label">Email:</label>
                            <input type="email" name="txt_email" id="txt_email" class="form-control">

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
                    <th>Codigo Empleado</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Email</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $estudiante) {
                    ?>
                    <tr>
                        <td><?php echo ($estudiante['codigo_empleado']) ?></td>
                        <td><?= $estudiante['nombre']; ?></td>
                        <td><?= $estudiante['apellido']; ?></td>
                        <td><?= $estudiante['direccion']; ?></td>
                        <td><?= $estudiante['email']; ?></td>
                        <td class="d-flex justify-content-center gap-2 ">
                            <!-- <a href="</?= base_url('') . $estudiante['estudiante_id']; ?>"
                                class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a> -->
                            <a href="<?= base_url('update_empleado/') . $estudiante['codigo_empleado']; ?>" class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a>
                            <a href="<?= base_url('eliminar_empleado/') . $estudiante['codigo_empleado']; ?>" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

    </div>

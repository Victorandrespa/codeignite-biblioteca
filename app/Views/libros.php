<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>


<body>

    <div class="container">


        <h1 class="mt-3">Libros</h1>

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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Libro</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="agregarLibro" method="post">

                            <label for="txt_id" class="form-label">Codigo Libro:</label>
                            <input type="text" name="txt_id" id="txt_id" class="form-control">

                            <label for="txt_c_autor" class="form-label">Codigo autor:</label>
                            <input type="text" name="txt_c_autor" id="txt_c_autor" class="form-control">

                            <label for="txt_c_editorial" class="form-label">Codigo Editorial:</label>
                            <input type="text" name="txt_c_editorial" id="txt_c_editorial" class="form-control">

                            <label for="txt_titulo" class="form-label">Titulo:</label>
                            <input type="text" name="txt_titulo" id="txt_titulo" class="form-control">

                            <label for="txt_numero" class="form-label">Numero paginas:</label>
                            <input type="number" name="txt_numero" id="txt_numero" class="form-control">

                            <label for="txt_tamanio" class="form-label">Tamaño:</label>
                            <input type="number" name="txt_tamanio" id="txt_tamanio" class="form-control">

                            <label for="txt_precio" class="form-label">Precio:</label>
                            <input type="date" name="txt_precio" id="txt_precio" class="form-control">

                            <label for="txt_estado" class="form-label">Estado:</label>
                            <input type="text" name="txt_estado" id="txt_estado" class="form-control">

                            <label for="txt_edicion" class="form-label">Edicion:</label>
                            <input type="text" name="txt_edicion" id="txt_edicion" class="form-control">

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
                    <th>Codigo Libro</th>
                    <th>Codigo Autor</th>
                    <th>Codigo Editorial</th>
                    <th>Titulo</th>
                    <th>Numero</th>
                    <th>Tamaño</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Edicion</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $estudiante) {
                    ?>
                    <tr>
                        <td><?php echo ($estudiante['codigo_libro']) ?></td>
                        <td><?= $estudiante['codigo_autor']; ?></td>
                        <td><?= $estudiante['codigo_editorial']; ?></td>
                        <td><?= $estudiante['titulo']; ?></td>
                        <td><?= $estudiante['numero_paginas']; ?></td>
                        <td><?= $estudiante['tamanio']; ?></td>
                        <td><?= $estudiante['precio']; ?></td>
                        <td><?= $estudiante['estado']; ?></td>
                        <td><?= $estudiante['edicion']; ?></td>
                        <td class="d-flex justify-content-center gap-2 ">
                            <!-- <a href="</?= base_url('') . $estudiante['estudiante_id']; ?>"
                                class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a> -->
                            <a href="<?= base_url('update_libro/') . $estudiante['codigo_libro']; ?>" class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a>
                            <a href="<?= base_url('eliminar_libro/') . $estudiante['codigo_libro']; ?>" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
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
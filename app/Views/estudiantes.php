<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>


<body>

    <div class="container">
        

        <h1>Estudiantes</h1>

        <table class="table mt-3 table-hover table-bordered">
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
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $estudiante) {
                    # code...
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
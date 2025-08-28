<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>LOG IN</title>
</head>

<body class="container">

    <h2 class="mt-5">LOG IN </h2>
    <a href="home.php" class="btn btn-outline-dark">Home <i class="bi bi-house"></i></a>

    <div class="container-fluid d-flex justify-content-center mt-5" style="height: 100vh;">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card shadow-lg p-4">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Iniciar Sesión</h2>
                        <form action="<?= base_url('login') ?>" method="post">
                            <div class="mb-3">
                                <label for="txt_usuario" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="txt_usuario" name="txt_usuario"
                                    placeholder="Ingrese su usuario" required>
                            </div>
                            <div class="mb-3">
                                <label for="txt_password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="txt_password" name="txt_password"
                                    placeholder="Ingrese su contraseña" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-outline-primary">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (session()->getFlashdata('errors')): ?> 
       <script>
        Swal.fire({
            icon: 'error',
            title: 'Error al iniciar sesion',
            text: '<?= session()->getFlashdata('errors') ?>'
        });
       </script>
    <?php endif; ?>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

</html>
</body>

</html>
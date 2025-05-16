<?php 
session_start();

if ($_POST) {
    if(($_POST['usuario'] == "Admin") && ($_POST['contrasenia'] == "12345")) {
        $_SESSION['usuario'] = "ok";
        $_SESSION['nombreUsuario'] = "Admin";
        header('Location: inicio.php');
        exit();
    } else {
        $mensaje = "Error: El usuario o contraseña son incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Tienda Online</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #3b82f6, #6366f1);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-card {
            background: #fff;
            border: none;
            border-radius: 1rem;
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 0 25px rgba(0,0,0,0.1);
            animation: slideIn 0.6s ease;
        }

        @keyframes slideIn {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.25);
            border-color: #3b82f6;
        }

        .btn-primary {
            background-color: #3b82f6;
            border-color: #3b82f6;
        }

        .btn-primary:hover {
            background-color: #2563eb;
            border-color: #2563eb;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h3 class="text-center mb-4"><i class="bi bi-person-circle me-2"></i>Iniciar Sesión</h3>

    <!-- Mostrar mensaje de error -->
    <?php if (isset($mensaje)) { ?>
        <div class="alert alert-danger text-center" role="alert">
            <?php echo $mensaje; ?>
        </div>
    <?php } ?>

    <form method="POST" autocomplete="off">
        <div class="mb-3">
            <label for="usuario" class="form-label"><i class="bi bi-person-fill me-1"></i>Usuario</label>
            <input type="text" class="form-control" name="usuario" id="usuario" required>
        </div>
        <div class="mb-3">
            <label for="contrasenia" class="form-label"><i class="bi bi-lock-fill me-1"></i>Contraseña</label>
            <input type="password" class="form-control" name="contrasenia" id="contrasenia" required>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-in-right me-1"></i>Entrar</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

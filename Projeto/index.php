<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Clínica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Clínica Vida</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Médicos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-medico">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-medico">Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Pacientes</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-paciente">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="?page=listar-paciente">Listar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <?php
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                        case "cadastrar-medico":
                            include("cadastrar-medico.php");
                        break;
                        case "listar-medico":
                            include("listar-medico.php");
                        break;
                        case "salvar-medico":
                            include("salvar-medico.php");
                        break;
                        case "editar-medico":
                            include("editar-medico.php");
                        break;

                        case "cadastrar-paciente":
                            include("cadastrar-paciente.php");
                        break;
                        case "listar-paciente":
                            include("listar-paciente.php");
                        break;
                        case "salvar-paciente":
                            include("salvar-paciente.php");
                        break;
                        case "editar-paciente":
                            include("editar-paciente.php");
                        break;

                        default:
                            print "<h1>Bem vindo ao sistema da Clínica!</h1>";
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
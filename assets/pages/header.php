<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

    <link rel="stylesheet" href="/assets/css/style.css">

    <title>CRUD PHP PDO</title>

</head>
<body>

    <header class="navigation">
        
        <div class="btnMenu">
            <span class="toggleMenu">
                <i class="fa fa-bars open" aria-hidden="true"></i>
                <i class="fa fa-times close" aria-hidden="true"></i>
            </span>
        </div>

        <ul>
            <li>
                <a href="/index.php">
                    <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="/assets/pages/search_client.php">
                    <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                    <span class="title">Listar Clientes</span>
                </a>
            </li>
            <li>
                <a href="/assets/pages/new_client.php">
                    <span class="icon"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                    <span class="title">Cadastrar Clientes</span>
                </a>
            </li>
            <li>
                <a href="/assets/pages/update_clientData.php">
                    <span class="icon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                    <span class="title">Editar dados Clientes</span>
                </a>
            </li>
            <li>
                <a href="/assets/pages/delete_client.php">
                    <span class="icon"><i class="fa fa-user-times" aria-hidden="true"></i></span>
                    <span class="title">Excluir dados Clientes</span>
                </a>
            </li>
        </ul>

    </header>
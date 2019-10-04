<?php

include "PerguntasDAO.php"
$usuarioDAO == new UsuarioDAO();
$usuarioDAO -> buscar();

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: darkblue;">
        <a class="navbar-brand" href="#">Não aguento mais</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        LinkDropdow
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Inativo</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Procure..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busque</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <div class="col-2">
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Item1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Item2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>

            <div class="col-10">
                <h1>Usurario</h1>
                <button class="btn btn-primary" data-toggle="modal" data-target="#Usuario">
                    <i class="fas fa-user-plus"></i>
                    Novo Usuario
                </button>

                <table class="table table-striped table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                    <br>
                    <br>
                    <tr>
                        <td>1</td>
                        <td>Kenji</td>
                        <td>kenji@gmail.com</td>
                        <td>
                            <button class="btn btn-primary"><i class="fas fa-user"></i></button>
                            <button class="btn btn-warning"><i class="fas fa-user-cog"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-user-times"></i></button>
                        </td>
                    </tr>
                </table>


            </div>

        </div>
    </div>

    <div class="modal fade" id="Usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="UsuarioController.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1">



                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2">


                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
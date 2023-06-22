<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barba & Navalha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/menu.css">
</head>

<body>
    <nav class="navbar">
        <?php 
            session_start();
        ?>
        <div class="container-fluid col-4">
            <span class="navbar-brand tit-login">
                <a class="nav-link  active" aria-current="page" href="menu.html">Barba & Navalha</a>
            </span>
            <!-- <img src="" alt="Tesoura"> -->
        </div>
        </div>
        <ul class="nav nav-underline justify-content-center col-6">
            <li class="nav-item">
                <a class="nav-link" href="cadastro.html">Cadastre-se</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Sobre</a>
            </li>
        </ul>
    </nav>

    <div class="col-12 slider-1">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.barbabrava.com.br/wp-content/uploads/2019/06/servicos-de-barbearia-1.jpg"
                        class="d-block w-100" alt="..." height="mx-auto" width="100%">
                </div>
                <div class="carousel-item">
                    <img src="https://noticiasconcursos.com.br/wp-content/uploads/2022/06/noticiasconcursos.com.br-franquia-de-barbearia-opcao-em-alta-para-investir-franquia-de-barbearia-opcao-em-alta-para-investir-reproducao-canva.jpg"
                        class="d-block w-100" alt="..." height="mx-auto" width="100%">
                </div>
                <div class="carousel-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvrDvLYaxIxQ4_885ib7TBX_1YYzumAGgXnw&usqp=CAU"
                        class="d-block w-100" alt="..." height="mx-auto" width="100%">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <br>
    <div class="container-fluid grid text-center agendamentos">
        <div class="row justify-content-center align-items-centers">
            <div class="col-md-auto">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <th>Nome</th>
                        <th>coluna 1</th>
                        <th>coluna 2</th>
                        <!-- <th colspan="2">Ações</th> -->
                    </thead>
                    <tbody>
                        <?php
                            include_once("../source/listar.php");
                            if(!empty($cadastros)){
                                foreach($cadastros as $cadastro){
                                    echo '  <tr>
                                                <td>'.$cadastro["pk_cadastro"].'</td>
                                                <td>'.$cadastro["nome_cadastro"].'</td>
                                                <td>'.$cadastro["cpf_cadastro"].'</td>
                                            </tr>';
                                }
                            }
                        ?>                        
                        <!-- <td><a href="../source/excluir.php?usuario='.$cadastro["pk_usuario"].'">Excluir</a></td>
                        <td><a href="editar.php?usuario='.$cadastro["pk_usuario"].'">Editar</a></td> -->
                    </tbody>
                </table>
            </div>
        </div>        
    </div>  
</body>

</html>
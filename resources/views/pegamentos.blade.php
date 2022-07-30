<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/proyectoTucson/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/proyectoTucson/assets/css/styles.css">
        <link rel="icon" type="image/x-icon" href="../img/logoBlue.png" style="height: 30px" />
        <title>tucPrototipo</title>
    
    </head>
    <header>


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navBar">
            <div class="container">
                <div class="logo" id="logoTucson">
                <img src="../img/logoBlue.png" alt="" style="width: 55%;">
                </div>
                <a class="navbar-brand" href="#!">PEGAMENTOS Y PASTINA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index.php">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="views/login.php">Login</a></li>
                        <a class="nav-link dropdown-toggle"href="#" role="button"data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                               
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item active" href="./views/ceramicos.php">Ceramicos/Porcelanatos</a></li>
                                <li><a class="dropdown-item" href="./griferia.php">Griferias/Sanitarios</a></li>
                                 <li><a class="dropdown-item" href="./marmoleria.php">Piedras/Marmol</a></li>
                                <li><a class="dropdown-item" href="./pegamentos.php">Pegamentos/Pastinas</a></li>
                            </ul>
                        

                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
<body>



<table class="table table-striped table-hover">
    <thead>
        <tr class="table-primary">
            <th scope="col">N°</th>
            <th scope="col">Código</th>
            <th scope="col">Descripcion </th>
            <th scope="col">Stock mts/2</th>
            <th scope="col">Img Articulo</th>
            <th scope="col">Codigo QR</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>0001</td>
            <td>Acacia White</td>
            <td>180,000 mts/2</td>
            <td><img class="imagen" src="../img/ceramicos/azu-klaukoljpg.jpg"></td>
            <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>0002</td>
            <td>Iva Porc. Tirrero</td>
            <td>290.000 mts/2</td>
            <td><img class="imagen" src="../img/ceramicos/klaukol-red.jpg"></td>
            <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>0003</td>
            <td colspan="">S.Lorenzo</td>
            <td>80.000 mts/2</td>
            <td><img class="imagen" src="../img/ceramicos/pastina-1.jpeg"></td>
            <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>0004</td>
            <td colspan="">Meggagres 20x120</td>
            <td>120,000 mts/2</td>
            <td><img class="imagen"src="../img/ceramicos/krom1.jpg"></td>
            <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>0005</td>
            <td colspan="">Rosseto 57x57</td>
            <td>198,000 mts/2</td>
            <td><img class="imagen"src="../img/ceramicos/azu-klaukoljpg.jpg"></td>
            <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td>0006</td>
            <td colspan="">Itagress 60x60</td>
            <td>50.000 mts/2</td>
            <td><img class="imagen"src="../img/ceramicos/klaukol-red.jpg"></td>
            <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
        </tr>
        <tr>
            <th scope="row">7</th>
            <td>0007</td>
            <td colspan="">Eliane</td>
            <td>280.000 mts/2</td>
            <td><img class="imagen"src="../img/ceramicos/klaukol-red.jpg"></td>
            <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
        </tr>
        <tr>
            <th scope="row">8</th>
            <td>0008</td>
            <td colspan="">Angelgres</td>
            <td>122,000 mts/2</td>
            <td><img class="imagen"src="../img/ceramicos/azu-klaukoljpg.jpg"></td>
            <td><img class="imagen"src="../img/ceramicos/qr.jpg"></td>
        </tr>
    </tbody>
</table>


<footer class="py-5 bg-dark">
        <div class="m-0 text-center text-white">
            
            <img src="../img/logo-2.png" alt="">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
            </div>
    </footer>

   
</body>
</html>
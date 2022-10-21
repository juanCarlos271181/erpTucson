<!DOCTYPE html>
<html lang="es">
    <head>
     
    <?php include(app_path()."/../resources/views/template/head.php");?>
    
    </head>
   
<body>

<header>

<?php include(app_path()."/../resources/views/template/header.php");?>
      
</header>
<div class="tituloPrincipal">
       <h4>PEGAMENTOS Y PASTINA</h4>
    </div>

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


<footer class="py-4 mt-4"id="bgfooterLogin">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>



</body>

</html>
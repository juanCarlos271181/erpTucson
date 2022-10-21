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
       <h4>MARMOLERIA</h4>
    </div>

<table class=" table table-striped table-hover">
    <thead>
        <tr class="table-primary">
            <th scope="col">Código</th>
            <th scope="col">Descripcion </th>
            <th scope="col">Stock mts/2</th>
            <th scope="col">Img Articulo</th>
            <th scope="col">Codigo QR</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">00001</th>
            <td>Acacia White</td>
            <td>180,000 mts/2</td>
            <td><img class="imagen" src="./img/ceramicos/tendenza.webp"></td>
            <td><img class="imagen"src="./img/ceramicos/qr.jpg"></td>
        </tr>
        <tr>
            <th scope="row">00002</th>
            <td>Iva Porc. Tirrero</td>
            <td>290.000 mts/2</td>
            <td><img class="imagen" src="./img/ceramicos/sanLorenzoCaleb.webp"></td>
            <td><img class="imagen"src="./img/ceramicos/qr.jpg"></td>
        </tr>
        <tr>
            <th scope="row">00003</th>
            <td colspan="">S.Lorenzo</td>
            <td>80.000 mts/2</td>
            <td><img class="imagen" src="./img/ceramicos/AlberdiMadera.webp"></td>
            <td><img class="imagen"src="./img/ceramicos/qr.jpg"></td>
        </tr>
        <tr>
            <th scope="row">00004</th>
            <td colspan="">Meggagres 20x120</td>
            <td>120,000 mts/2</td>
            <td><img class="imagen"src="./img/ceramicos/Black.webp" ></td>
            <td><img class="imagen"src="./img/ceramicos/qr.jpg"></td>
        </tr>
        <tr>
            <th scope="row">00005</th>
            <td colspan="">Rosseto 57x57</td>
            <td>198,000 mts/2</td>
            <td><img class="imagen"src="./img/ceramicos/elizabeth.webp"></td>
            <td><img class="imagen"src="./img/ceramicos/qr.jpg"></td>
        </tr>
        <tr>
            <th scope="row">00006</th>
            <td colspan="">Itagress 60x60</td>
            <td>50.000 mts/2</td>
            <td><img class="imagen"src="./img/ceramicos/lume_diamond.webp"></td>
            <td><img class="imagen"src="./img/ceramicos/qr.jpg"></td>
        </tr>
        <tr>
            <th scope="row">00007</th>
            <td colspan="">Eliane</td>
            <td>280.000 mts/2</td>
            <td><img class="imagen"src="./img/ceramicos/sanLorenzoCaleb.webp" ></td>
            <td><img class="imagen"src="./img/ceramicos/qr.jpg"></td>
        </tr>
        <tr>
            <th scope="row">00008</th>
            <td colspan="">Angelgres</td>
            <td>122,000 mts/2</td>
            <td><img class="imagen"src="./img/ceramicos/Black.webp"></td>
            <td><img class="imagen"src="./img/ceramicos/qr.jpg"></td>
        </tr>
    </tbody>
</table>



<footer class="py-4 mt-4"id="bgfooterLogin">
        <?php include(app_path() . "/../resources/views/template/footer.php"); ?>
    </footer>



</body>

</html>
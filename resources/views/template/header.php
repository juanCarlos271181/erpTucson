        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navBar">
            <div class="container">
                <div class="logo" id="logoTucson">
                    <img src="./img/logoBlue.png" alt="" style="width: 30%;">
                </div>
                <a class="navbar-brand" href="#!">SYSTEM TUCSON</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="./">Home</a></li>
                        <?php if(!isset($_SESSION["user"])){ ?>
                        <li class="nav-item"><a class="nav-link" href="./login">Login</a></li>
                        <?php }else{ ?>
                        <li class="nav-item"> <img src="./img/usuario2.jpg" width="30px" ></li>
                        <li class="nav-link"> 
                            <select id="action_user">
                                <option value='0'><?= $_SESSION["user"]["nombre"]?></option>
                                <option value='1'>Mi Profile</option>
                                <option value='2'>Logout</option>
                            </select>
                        </li>
                        <?php }?>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./menu_principal">Menu</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
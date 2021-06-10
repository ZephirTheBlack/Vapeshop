<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container">
        <a class="navbar-brand"><img src="assets/img/vapeshop.png" alt="" class="img-fluid  ml-auto" style="width: 75px"></a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold " href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold " href="products.php" >Productos</a>
                </li>
            </ul>
            <?php
            if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
            ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  font-weight-bold" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php
                                                                                                                                                        if (isset($_COOKIE["cookieid"])) {
                                                                                                                                                            echo $_COOKIE["cookieid"];
                                                                                                                                                        } else {
                                                                                                                                                            echo "Usuario";
                                                                                                                                                        } ?></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Perfil</a>
                            <a class="dropdown-item" href="#">Opciones</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                <li class="nav-item">
                        <a href="mybuy.php" class="nav-link"><i class="fas fa-shopping-cart text-secondary"></i></a>
                    </li>
                </ul>
                                    
            <?php
            } else {
            ?>
                <ul class="navbar-nav ml-auto">

                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link font-weight-bold font-italic">Logeate</a>
                    </li>

                    </li>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link font-weight-bold font-italic">Registrate</a>
                    </li>
                </ul>
            <?php
            } ?>

        </div>
    </div>

</nav>
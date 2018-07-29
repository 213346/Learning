<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Books</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Forum</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>

            </li>

        </ul>

        <ul class="navbar-nav nav-right ">

    <?php

    if (isset($_SESSION["user"]) and $_SESSION["user"]!=null){

    ?>
            <li class="nav-item">
                <a class="nav-link" href="#"> My Account</a>

            </li>


            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>

            </li>

            <?php } else { ?>


            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>

            </li>

    <?php } ?>
        </ul>

    </div>
</nav>
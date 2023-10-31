<?php
require 'validation.php';
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid bg-info text-white">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link <?= urlIS('/') ? 'bg-primary text-dark' : 'bg-info text-white' ?>" aria-current="page">Homepage</a>
                </li>
                <li class="nav-item">
                    <a href="/form.php" class="nav-link <?= urlIS('/form.php') ? 'bg-primary text-dark' : 'bg-info text-white' ?>" aria-current="page">Rezervacija</a>
                </li>
                <li class="nav-item">
                    <a href="/features.php" class="nav-link <?= urlIS('/features.php') ? 'bg-primary text-dark' : 'bg-info text-white' ?>">Features</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
require "partials/head.php";
?>


<body>

    <?php
    require "partials/nav.php";
    ?>

    <h1><?= $ime ?></h1>
    <p>Uspešno ste rezervisali sto. Datum vaše rezeracije je <?= $datum ?> u <?= $vreme ?> h.</p>

    <?php
    require "partials/footer.php";
    ?>
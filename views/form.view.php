<?php

require "partials/head.php";
?>

<body>
    <?php
    require "partials/nav.php";
    ?>

    <h1>Rezervacija stolova</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="ime" class="form-label">Ime i prezime</label>
            <input type="text" name="ime" class="form-control" id="ime" value="<?= $ime; ?>" required>
            <span class="error">* <?php echo $imeError; ?> </span>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="emailime" value="<?= $email; ?>" required>
            <span class="error">* <?php echo $emailError; ?> </span>
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">Broj telefona</label>
            <input type="number" name="tel" class="form-control" id="tel" value="<?= $mobile; ?>" required>
            <span class="error">* <?php echo $mobileError; ?> </span>
        </div>
        <div class="mb-3">
            <label for="datum" class="form-label">Datum rezervacije</label>
            <input type="date" name="datum" class="form-control" id="datum" required>
            <span class="error">* <?php echo $dateError; ?> </span>
        </div>
        <div class="mb-3">
            <label for="vreme" class="form-label">Vreme rezervacije</label>
            <input type="time" name="vreme" class="form-control" id="vreme" required>
            <span class="error">* <?php echo $timeError; ?> </span>
        </div>
        <div class="mb-3">
            <label for="odrasli" class="form-label">Broj odraslih</label>
            <select name="odrasli" class="form-control" id="odrasli">
                <option value="">Izaberi jednu opciju</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="deca" class="form-label">Broj dece</label>
            <select name="deca" class="form-control" id="deca">
                <option value="">Izaberi jednu opciju</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Rezervišite sto</button>
    </form>

    <?php
    require "partials/footer.php";
    ?>
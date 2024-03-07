<?php
require "settings/init.php";

if(!empty($_POST["data"])) {
    $data = $_POST["data"];


    $sql = "INSERT INTO produkter(bilNames, bilEmail, bilTlf, bilAntal) VALUES(:bilNames, :bilEmail, :bilTlf, :bilAntal)";
    $bind = [":bilNames" => $data["bilNames"], ":bilEmail" => $data["bilEmail"], ":bilTlf" => $data["bilTlf"], ":bilAntal" => $data["bilAntal"]];

    $db->sql($sql, $bind, false);

    echo "Du har nu booket billet(er) <a href='insert.php'>Bestil flere billetter<a/>";
    exit;
}

?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


<div class="container">
    <form action="insert.php" method="post">
        <div class="row g-3">
            <div class="col-12 col-md-6">
                <label for="bilNames" class="form-label">Indtast dit navn(e)</label>
                <input type="text" class="form-control" id="bilNames" name="data[bilNames]" placeholder="Navn(e)"
                       value="">
            </div>
            <div class="col-12 col-md-6">
                <label for="bilEmail" class="form-label">Indtast din email</label>
                <input type="number" step="0.01" class="form-control" id="bilEmail" name="data[bilEmail]"
                       placeholder="Email" value="">
            </div>
            <div class="col-12">
                <label for="bilTlf" class="form-label">Indtast dit mobilnummer</label>
                <textarea class="form-control" name="data[bilTlf]" id="bilTlf" placeholder="Indtast dit mobilnummer"></textarea>
            </div>
            <div class="col-12 col-md-4 offset-md-8">
                <button type="submit" class="btn btn-primary w-100">Opret</button>
            </div>
        </div>
    </form>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


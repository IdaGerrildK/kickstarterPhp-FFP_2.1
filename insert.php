<?php
require "settings/init.php";

if(!empty($_POST["data"])) {
    $data = $_POST["data"];


    $sql = "INSERT INTO billetkoeb(bilNames, bilEmail, bilTlf, bilAntal) VALUES(:bilNames, :bilEmail, :bilTlf, :bilAntal)";
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

    <title>VISIT</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


<div class="container mt-5">
    <form action="insert.php" method="post">
        <div class="row g-3">
            <div class="col-12 col-md-6">
                <label for="bilNames" class="form-label">Navn(e)</label>
                <input type="text" class="form-control" id="bilNames" name="data[bilNames]" placeholder="Indtast dit navn(e)"
                       value="">
            </div>
            <div class="col-12 col-md-6">
                <label for="bilEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="bilEmail" name="data[bilEmail]"
                       placeholder="Indtast din Email" value="">
            </div>
            <div class="col-12">
                <label for="bilTlf" class="form-label">Mobilnummer</label>
                <textarea class="form-control" name="data[bilTlf]" id="bilTlf" placeholder="Indtast dit mobilnummer"></textarea>
            </div>

            <div class="col-12">
                <label for="bilAntal" class="form-label">Antal mennesker</label>
                <textarea class="form-control" name="data[bilAntal]" id="bilAntal" placeholder="Indtast dit antal mennesker"></textarea>
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


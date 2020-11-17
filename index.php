<?php
include('functions.php'); 
?>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi" />
    <title>Conciergerie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container">
        <div class="row">
            <section class="col-12">
                <h1 class="d-flex justify-content-center mb-5">Conciergerie</h1>
                <h3 class="d-flex justify-content-center">Ajouter une intervention</h3>
                <form name="ajout" method="GET">
                    <div class="form-group pt-3">
                        <label for="type">Type d'intervention</label>
                        <input type="text" id="type" name="type" class="form-control"
                            placeholder='Changement ampoule, remplacement serrure etc'>
                    </div>
                    <div class="form-group pt-3">
                        <label for="floor">Etage de l'intervention</label>
                        <input type="number" id="floor" name="floor" class="form-control" min="0" max="10"
                            placeholder='0'>
                    </div>
                    <div class="form-group">
                        <label for="date">Date de l'intervention</label>
                        <input type="date" id="date" name="date" class="form-control">
                    </div>
                    <button class="btn btn-success" type="submit" name="validation" value="OK">Valider</button>
                </form>
                        <?php
                        intervention();
                        ?>
                <h3 class="d-flex justify-content-center">Historique des interventions</h3>
                <form name="historiqued" method="GET">
                    <div class="form-group pt-5 mt-5">
                        <label for="floor">Historique des interventions par étage</label>
                        <?php
                            floorDisplay();
                            ?>
                        <button class="btn btn-success mt-3" type="submit" name="validation" value="historiquee"
                        onclick='window.location.hash="historique";'>Valider</button>
                    </div>
                </form>
                <form name="historiqued" method="GET">
                    <div class="form-group">
                        <label for="floor">Historique des interventions par date</label>
                        <?php
                            dateDisplay();
                            ?>
                        <button class="btn btn-success mt-3" type="submit" name="validation" value="historiqued"
                            onclick='window.location.hash="historique";'>Valider</button>

                    </div>
                </form>
                    <?php
                    historiquee();
                    historiqued();
                    ?>
                <section class="col-12" id=historique>
                </section>
            </section>
        </div>
    </div>

</body>

</html>
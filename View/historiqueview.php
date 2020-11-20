<?php
require_once('../Model/model.php');
// include('Public/header.php');
// include('Public/footer.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi" />
    <title>Conciergerie</title>
    <link rel="stylesheet" href="../Public/style.css">
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d69db61c7b.js" crossorigin="anonymous"></script>
</head>
<a href="../index.php"> <button type="button" class="admin btn btn-secondary ml-5 my-5">Retour</button></a>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 histo">
            <h3 class="d-flex justify-content-center">Historique des interventions</h3>
            <form name="historiqued" method="GET">
                <div class="form-group">
                    <label for="floor">Historique des interventions par étage</label>
                    <?php
                            floorDisplay();
                            ?>
                    <button class="btn btn-secondary mt-3" type="submit" name="validation" value="historiquee"
                        onclick='window.location.hash="historique";'>Valider</button>
                </div>
            </form>
            <form name="historiqued" method="GET">
                <div class="form-group">
                    <label for="floor">Historique des interventions par date</label>
                    <?php
                            dateDisplay();
                            ?>
                    <button class="btn btn-secondary mt-3" type="submit" name="validation" value="historiqued"
                        onclick='window.location.hash="historique";'>Valider</button>
                </div>
            </form>
        </div>
        <?php
                    historicale();
                    historicald();
                    ?>
        <section class="col-12" id=historique>
        </section>
        <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>
    </div>
</div>
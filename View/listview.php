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



<main class="container">

        <div class="row">
            <section class="col-12">
                <h2 class="d-flex justify-content-center mt-2">Liste des interventions</h2><br />
                <a href="../index.php"> <button type="button" class="admin btn btn-secondary mb-3">Retour accueil</button></a>
                <table class="table">
                    <thead>
                        <th><input type="hidden" value="Id"></th>
                        <th>Type d'intervention</th>
                        <th>Etage</th>
                        <th>Date</th>
                    </thead>
                    <tbody>
                        <?php
                        edit();
                        listei();
                        
                        ?>
                        </tbody>
                </table>
        </div>
        <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>
</main>
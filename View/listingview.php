<?php
require_once('../Model/model.php');
include('../Public/header.php');
include('../Public/footer.php')
?>
<link rel="stylesheet" href="../Public/style.css">
<div class="container">
    <div>
        <div class="row">
            <div class="col-12">
                <h2 class="d-flex justify-content-center text-center mt-2">Liste des interventions</h2><br />
                <a href="../index.php"> <button type="button" class="admin btn btn-secondary mb-3">Retour
                        accueil</button></a>
            </div>
        </div>
    </div>
    <div>
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
</div>
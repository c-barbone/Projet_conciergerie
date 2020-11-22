<?php
require_once('../Model/model.php');
include('../Public/header.php');
include('../Public/footer.php');
?>
<link rel="stylesheet" href="../Public/style.css">
<a href="../index.php"> <button type="button" class="admin btn btn-secondary ml-5 my-5">Retour</button></a>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 histo">
            <h3 class="d-flex justify-content-center text-center">Historique des interventions</h3>
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
<div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="d-flex justify-content-center mb-5 titre">Conciergerie</h1>
                <center><a href="View/historicalview.php"> <button type="button" class="admin btn btn-secondary mb-5">Historique</button></a>
                <a href="View/listingview.php"> <button type="button" class="admin btn btn-secondary mb-5">Liste des interventions</button></a></center>
            </div>
            <div class="col-6 pr-5 inter">
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
                    <button class="btn btn-secondary" type="submit" name="validation" value="OK">Valider</button>
                </form>
                <?php
                        intervention();
                        ?>
            </div>
            
            
        </div>
    </div>
<h1 class="text-center">Update User</h1>
        <form class="form_user mt-5" method="POST" action="verif-contact.php">
            <div class="form-group">
                <label for="nom">NOM</label>
                <input type="text" name="nom" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="prenom">PRENOM</label>
                <input type="text" name="prenom" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="message">MESSAGE</label>
                <input type="text" name="message" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="date">DATE</label>
                <input type="text" name="date" class="form-control" value="">
            </div>
            <div class="form-group">
                <a href="verif-contact"><input type="button" value="Retour Liste" class="btn btn-primary"></a>
                <input type="submit" name="modifier" value="Enregistrer" class="btn btn-success">
            </div>
        </form>
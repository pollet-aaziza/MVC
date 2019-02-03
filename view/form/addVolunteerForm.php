<div class="container">
  <!-- le formulaire est chargé dans addVolunteerViw.php qui est lui chargé dans addVolunteer.php 'st omme-i le formulair st dans l ontrollr' -->
  <form action="" method="post">
    <div class="form-group">
      <label for="name">Nom</label>
      <input type="text" class="form-control" name="name" >
    </div>
    <div class="form-group">
      <label for="surname">Prénom</label>
      <input type="text" class="form-control" name="surname">
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control" name="age">
    </div>
    <div class="form-group">
      <label for="comment">Commentaire</label>
      <input type="text" class="form-control" name="comment">
    </div>
    <select name="availability">
     <option selected value="1">disponible</option>
     <option value="0">Indisponible</option>
    </select>
    <div class="form-group">
      <label for="street">Rue</label>
      <input type="text" class="form-control" name="street">
    </div>
    <div class="form-group">
      <label for="city">Ville</label>
      <input type="text" class="form-control" name="city">
    </div>

    <button type="submit" class="btn" value="valider">Enregistrer</button>
  </form>

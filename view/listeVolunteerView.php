<?php
require 'template/header.php';
?>
<h2 class="card-title text-center light title">Liste des bénévoles.</h2>
<?php foreach ($result as $key => $volunteer) {
?>
<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col" class="light">Nom</th>
      <th scope="col"class="light">Prénom</th>
      <th scope="col"class="light">Age</th>
      <th scope="col"class="light">Commentaire</th>
      <th scope="col"class="light">Disponibilité</th>
      <th scope="col"class="light">Rue</th>
      <th scope="col"class="light">Ville</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td class="light"><?php echo $volunteer["name"];?></td>
      <td class="light"><?php echo $volunteer["surname"];?></td>
      <td class="light"><?php echo $volunteer["age"];?></td>
      <td class="light"><?php echo $volunteer["comment"];?></td>
      <td class="light"><?php echo $volunteer["availability"];?></td>
      <td class="light"><?php echo $volunteer["street"];?></td>
      <td class="light"><?php echo $volunteer["city"];?></td>
    </tr>
  </tbody>
</table>
<button type="button" class="btn btn-light"><a class="light" href="<?php echo 'deleteVolunteer.php?id=' . $volunteer['id']; ?>">Supprimer</a></button>

<button type="button" class="btn btn-light"><a class="light" href="<?php echo 'updateVolunteer.php?id=' . $volunteer['id']; ?>">Modifier</a></button>

<?php
 }
 require 'template/footer.php';
?>

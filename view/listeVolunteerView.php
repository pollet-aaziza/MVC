<?php
require 'template/header.php';
?>
<h5 class="card-title">Liste des bénévoles.</h5>
<?php foreach ($result as $key => $volunteer) {
?>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Age</th>
      <th scope="col">Commentaire</th>
      <th scope="col">Disponibilité</th>
      <th scope="col">Rue</th>
      <th scope="col">Ville</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td><?php echo $volunteer["name"];?></td>
      <td><?php echo $volunteer["surname"];?></td>
      <td><?php echo $volunteer["age"];?></td>
      <td><?php echo $volunteer["comment"];?></td>
      <td><?php echo $volunteer["availability"];?></td>
      <td><?php echo $volunteer["street"];?></td>
      <td><?php echo $volunteer["city"];?></td>
    </tr>
  </tbody>
</table>
<h2><a class="badge badge-danger" href="<?php echo 'deleteVolunteer.php?id=' . $volunteer['id']; ?>">Supprimer</a></h2>

<h2><a class="badge badge-success" href="<?php echo 'updateVolunteer.php?id=' . $volunteer['id']; ?>">Modifier</a></h2>

<?php
 }
 require 'template/footer.php';
?>

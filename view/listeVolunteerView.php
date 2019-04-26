<?php
require 'template/header.php';
?>
<h2 class="card-title text-center light title">Liste des bénévoles.</h2>
<table class="table ">
  <thead>
    <tr>
      <th scope="col" >Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Age</th>
      <th scope="col">Commentaire</th>
      <th scope="col">Disponibilité</th>
      <th scope="col">Rue</th>
      <th scope="col">Ville</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($result as $key => $volunteer) 
  {
  ?>
    <tr>
      <th scope="row"><?php echo $volunteer["name"];?></th>
      <td class="light"><?php echo $volunteer["surname"];?></td>
      <td class="light"><?php echo $volunteer["age"];?></td>
      <td class="light"><?php echo $volunteer["street"];?></td>
      <td class="light"><?php echo $volunteer["city"];?></td>
      <td class="light"><?php echo $volunteer["comment"];?></td>
      <td class="light"><?php echo $volunteer["availability"];?></td>
      <td>
        <a class="bgLight" href="<?php echo 'deleteVolunteer.php?id=' . $volunteer['id']; ?>">Supprimer</a>
        <a class="bgLight" href="<?php echo 'updateVolunteer.php?id=' . $volunteer['id']; ?>">Modifier</a>
      </td>
    </tr>
    <?php
    }
   ?>
  </tbody>
</table>
<?php
 require 'template/footer.php';
?>

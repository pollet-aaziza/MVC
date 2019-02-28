<?php
include "template/header.php";
?>

<div class="card">
  <div class="card-body">
  <div></div>
    <h5 class="card-title">Accéder à la liste des bénévoles</h5>
    <p class="card-text">Visualiser, supprimer ou modifier un bénévole.</p>
    <a href="../controller/listeVolunteer.php" class="btn btn-primary">Aller</a>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Ajouter un ou des bénévoles</h5>
    <a href="../controller/addVolunteer.php" class="btn btn-primary">Aller</a>
  </div>
</div>
<?php
include "template/footer.php";

?>

<?php
require 'template/header.php';
 ?>
 <h5 class="card-title">Vos derniers messages.</h5>
 <?php foreach ($result as $key => $volunteer) {
 ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">De</th>
      <th scope="col">à</th>
      <th scope="col">Objet</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $volunteer["sender"]; ?></td>
      <td><?php echo $volunteer["recipient"]; ?></td>
      <td><?php echo $volunteer["object"]; ?></td>
      <td><?php echo $volunteer["message"]; ?></td>
    </tr>
  </tbody>
</table>
<?php
 }
 require 'template/footer.php';
?>

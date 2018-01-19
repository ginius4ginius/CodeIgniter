<?php echo br(2); ?>

<center><h2>Liste des clubs</h2></center>

<?php
echo br(2);

echo anchor("ccontroleur/entree","Ajouter");

echo br(2);

?>

<table border="2">

<?php foreach ($table as $key => $value) {
  $vValeur = $value->id;?>
  <tr>
  <td><?php echo $value->id; ?></td>
  <td><?php echo $value->nomClub; ?></td>
  <td><?php echo $value->villeClub; ?></td>
  <td><?php echo $value->paysClub; ?></td>
  <td><?php echo $value->siteClub; ?></td>
  <td><?php echo $value->ligue; ?></td>
  <td><?php echo anchor("csupp/supprimer/".$vValeur,"supprimer")?></td>
  <td><?php echo anchor("cmodif/modifier/".$vValeur,"modifier")?></td>

  </tr>

<?php } ?>
</table>
<!--
var $id;
var $nomClub;
var $villeClub;
var $paysClub;
var $siteClub;
var $ligue;
-->

<p>Liste des clubs</p>

<table border="2">

<?php foreach ($table as $key => $value) { ?>
  <tr>
  <td><?php echo $value->id; ?></td>
  <td><?php echo $value->nomClub; ?></td>
  <td><?php echo $value->villeClub; ?></td>
  <td><?php echo $value->paysClub; ?></td>
  <td><?php echo $value->siteClub; ?></td>
  <td><?php echo $value->ligue; ?></td>
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

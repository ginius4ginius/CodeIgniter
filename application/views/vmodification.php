<?php
echo br(2);
?>
<center><h2>modification des données club</h2></center>
<?php echo br(2);  ?>
<?php echo"<h4>club de : " .$nom."</h4>";?>
<?php echo br(2);  ?>
<?php echo validation_errors();?>
<?php
$id =$this->uri->segment(3,0);
 echo form_open('ccontroleur/modif/'.$id); ?>
Nom :
<br />
<?php echo form_input(['type' => "nom",
              'name' => "nom",
            'value' => set_value($nom,"...")]);?>
<br />
Ville :
<br />
<?php echo form_input(['type' => "ville",
              'name' => "ville",
            'value' => set_value($ville,"...")]);?>
<br />
Pays :
<br />
<?php echo form_input(['type' => "pays",
              'name' => "pays",
            'value' => set_value($pays,"...")]);?>
<br />
Site :
<br />
<?php echo form_input(['type' => "site",
              'name' => "site",
            'value' => set_value($site,"...")]);?>
<br />
Ligue :
<br />
<?php echo form_input(['type' => "ligue",
              'name' => "ligue",
              'value' => "ligue",
            'value' => set_value($ligue,"...")]);?>
<br />
<br />
<?php
echo form_submit('entree','Validez');

echo form_close();
?>
<td><?php echo anchor("ccontroleur/index","Retour")?></td>

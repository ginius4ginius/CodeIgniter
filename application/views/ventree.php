<?php


$this->load->view('vaffichage');

?>
<h2>insersion de données club</h2>

<?php echo form_open('entree/ajout'); ?>
Nom :
<br />
<?php echo form_input(['type' => "nom",
              'name' => "nom",
              'value' => set_value("nom")]);?>
<br />
Ville :
<br />
<?php echo form_input(['type' => "ville",
              'name' => "ville",
              'value' => set_value("ville")]);?>
<br />
Pays :
<br />
<?php echo form_input(['type' => "pays",
              'name' => "pays",
              'value' => set_value("pays")]);?>
<br />
Site :
<br />
<?php echo form_input(['type' => "site",
              'name' => "site",
              'value' => set_value("site")]);?>
<br />
Ligue :
<br />
<?php echo form_input(['type' => "ligue",
              'name' => "ligue",
              'value' => set_value("ligue")]);?>
<br />
<br />
<?php
echo form_submit('entree','Validez');

echo form_close();

echo form_submit('affichage','Affichez');

 ?>

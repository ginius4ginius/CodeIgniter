<?php

echo validation_errors ();

echo "<h4>Formulaire</h4><br />";
//
echo form_open('Email/ajout');
echo "login: ";
echo '<br/>';
echo form_input(['type' => "login",
                'name' => "login",
              'value' => set_value("login")]);
echo '<br/>';
echo '<br/>';

echo "Mot de passe : ";
echo '<br/>';
echo form_input(['type' => "password",
                'name' => "pswd"]);
echo '<br/>';
echo '<br/>';

echo "Confirmation mot de passe : ";
echo '<br/>';
echo form_input(['type' => "password",
                'name' => "pswdc"]);
echo '<br/>';
echo '<br/>';

echo "e-mail: ";
echo '<br/>';
echo form_input(['type' => "email",
                'name' => "Email",
              'value' => set_value("Email")]);

echo "<br /><br />";

echo form_submit('mail','Validez');
echo form_close();
//


 ?>

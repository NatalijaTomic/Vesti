<h1>Prijava</h1>
<?php
echo form_open("Gost/login",["method"=>"post"]);
echo form_label("Username:", "username");
echo form_input('username', set_value("username"));
echo "<br>";

echo form_label("Password:", "password");
echo form_password('password');
echo "<br>";

echo form_submit("login", "Log in");
echo form_close();

echo anchor("Gost/vesti", "Prikazi vest");
?>

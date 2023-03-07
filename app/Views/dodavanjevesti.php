<h1>Prijava</h1>
<?php
echo form_open("User/dodajVest",["method"=>"post"]);
echo form_label("Naslovi:", "naslov");
echo form_input('naslov');
echo "<br>";

echo form_label("Sadrzaj:", "sadrzaj");
echo form_textarea('sadrzaj');
echo "<br>";
echo form_submit("dodaj", "Dodaj vest");
echo form_close();
?>
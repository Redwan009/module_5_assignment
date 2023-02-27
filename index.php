<?php
include_once("classPerson.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $person = new Person();
  $person->set_name($_POST["name"]);
  $person->set_email($_POST["email"]);

  echo "Name: " . $person->get_name() . "<br>";
  echo "Email: " . $person->get_email() . "<br>";
}

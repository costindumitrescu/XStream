<?php

function sanitizeFormPassword($inputText){
  $inputText = strip_tags($inputText);
  return $inputText;
}

function sanitizeFormUsername($inputText){
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  return $inputText;
}

function sanitizeFormString($inputText){
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  $inputText = ucfirst(strtolower(inputText));
  return $inputText;
}

function validateUsername($un) {

}

function validateFirstName($fn) {

}

function validateLastName($ln) {

}

function validateEmails($em, $em2) {

}

function validatePasswords($pw, $pw2) {

}

if(isset($_POST['registerButton'])) {
  $username = sanitizeFormUsername($_POST['username']);

  $firstName = sanitizeFormUsername($_POST['firstName']);

  $lastName = sanitizeFormUsername($_POST['lastName']);

  $email = sanitizeFormUsername($_POST['email']);

  $email2 = sanitizeFormUsername($_POST['email2']);

  $password = sanitizeFormPassword($_POST['password']);

  $password2 = sanitizeFormPassword($_POST['password2']);

  validatesUsername($username);

  validatesFirstName($firstName);

  validatesLastName($lastName);

  validatesEmails($email, $email2);

  validatesPasswords($password, $password2);

}

?>

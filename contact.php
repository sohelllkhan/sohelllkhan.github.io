<?php
// Allow POST from external sources (like GitHub Pages)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "sohelkhan323526@gmail.com";
  $subject = "From your Website";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  mail($to, $subject, $body);
}
?>

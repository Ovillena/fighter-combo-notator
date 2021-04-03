<?php
require 'config.php';

// Should return a PDO
function db_connect()
{

  try {
    // TODO
    // try to open database connection using constants set in config.php
    // return $pdo;
    $connection = "mysql:host=127.0.0.1;dbname=a8;port=3336";
    $user = DBUSER;
    $pass = DBPASS;
    $pdo = new PDO($connection, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

// Handle form submission
function handle_form_submission()
{
  global $pdo;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // TODO
    $sql = "INSERT INTO ken (date, title, combo, description) VALUES (:date, :title, :combo, :description)";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":date", date('Y-m-d h:i:sa'));
    $statement->bindValue(":title", $_POST["title"]);
    $statement->bindValue(":combo", $_POST["combo"]);
    $statement->bindValue(":description", $_POST["description"]);
    $statement->execute();
    header("Location: /comp2131termproject"); //prevents post request duplication of post request if browser is refreshed
  }
}

// Get all comments from database and store in $comments
function get_comments()
{
  global $pdo;
  global $comments;

  @$email = $_GET['email']; // fetches comments from particular commenter if their email is in the get request
  // @ sign prevents warning from printing if undefined
  if ($email) {
    $sql = "SELECT * fROM comments WHERE email='$email' ORDER BY ID DESC";
    $result = $pdo->query($sql);
    while ($row = $result->fetch()) {
      array_push($comments, $row);
    }
  } else {
    $sql = "SELECT * fROM comments ORDER BY ID DESC";
    $result = $pdo->query($sql);
    while ($row = $result->fetch()) {
      array_push($comments, $row);
    }
  }

  //TODO

}

// Get unique email addresses and store in $commenters
function get_commenters()
{
  global $pdo;
  global $commenters;

  //TODO
  $sql = "SELECT email, COUNT(email) fROM comments GROUP BY email";
  $result = $pdo->query($sql);
  while ($row = $result->fetch()) {
    array_push($commenters, $row);
  }
}

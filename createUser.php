<?php
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  echo $username . " " . $password . '<br>';

  //set connection
  $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');

  //check if you are connected
  if ($connection) {
    echo 'We are connected' . '<br>';
  } else {
    die('Database connection failed');
  }

  //create query
  $query = `INSERT INTO users(username,password) VALUES('$username', '$password')`;

  echo '<br>' . $query;

  //call query
  $result = mysql_query($connection, $query);

  //check if query succeeded
  if (!$result) {
    die('Query FAILED' . mysqli_error($connection));
  }

  if ($username && $password) { }
}

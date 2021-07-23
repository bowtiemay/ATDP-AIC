<?php
  include 'functions.php';

  printHeading();
 ?>

<html>

<head>
  <link rel = "stylesheet" href = "prj1.css">
</head>
<body>


  <p>Welcome to the official ATDP Corp testing environment! Before you begin, please fill out the information below:</p>

<br>

  <form action="testquestions.php" method="post">

    <label for="name"><h3>What is your name?</h3></label>

      <input type="text" id="name" name="name" value="">

      <br>
      <br>

    <label for="gender"><h3>What is your sex?</h3></label>

      <input type="radio" id="female" name="gender" value="female">
      <label for="gender">Female</label>
      <br>
      <input type="radio" id="male" name="gender" value="male">
      <label for="gender">Male</label>
      <br>
      <input type="radio" id="intersex" name="gender" value="intersex">
      <label for="gender">Intersex</label>
      <br>
      <input type="radio" id="other" name="gender" value="other">
      <label for="gender1">Other: </label>
      <input type="text" id="name" name="gender" value="">

      <br>
      <br>

      <label for="birthday">What is your birthday?</label>
      <input type="date" id="birthday" name="birthday">

      <br>
      <br>

      <label for="email">Enter your email:</label>
      <input type="email" id="email" name="email">

      <br>
      <br>

      <label for="address">Enter your home address:</label>
      <input type="text" id="address" name="address" value="">

      <br>
      <br>
      <br>

      <a href = "testquestions.php">Next Page</a>

      <br>
      <br>
      <br>

    </form>

</body>
<html>

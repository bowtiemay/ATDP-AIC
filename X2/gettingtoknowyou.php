<?php
  include 'header.php';

  printHeader();
 ?>

<html>
  <body>
    <h3><form action="printout.php" method="post">

        <label for="name">What's your name?</label>
          <input type="text" id="name" name="name" value="">

          <br>
          <br>

        <label for="name">Cats or Dogs? (heh)</label>
        <br>
          <input type="radio" id="cats" name="catsordogs" value="cats">
          <label for="cats">Cats</label>
          <br>
          <input type="radio" id="cats" name="catsordogs" value="dogs">
          <label for="dogs">Cats</label>

        <br>
        <br>

        <label for="name">Choose your favorite capitalists (strangely suspicious):</label><br>

          <input type="checkbox" id="jeffbezos" name="favoritecapitalist" value= "jeffbezos">
          <label for="jeffbezos"> Jeff Bezos</label><br>

          <input type="checkbox" id="severussnape" name="favoritecapitalist" value="severussnape">
          <label for="severussnape"> Severus Snape</label><br>

          <input type="checkbox" id="me" name="favoritecapitalist" value="me">
          <label for="me"> Me</label>

        <br>
        <br>

        <label for="num">What is your favorite number?</label>
        <input id="number" name="favnumber" type="number" value="">

        <br>
        <br>

        <label for="favcolor">What's your favorite color?</label>
        <input type="color" id="favcolor" name="favcolor">

        <br>
        <br>

        <label for="birthday">What is today's date? (I forgot...perhaps)</label>
        <input type="date" id="date" name="date">

        <br>
        <br>

        <label for="favcity"> Choose a city: </label>
        <select name = "favcity">
          <option name="favcity" id="none" value = "none" > none
          </option>
          <option name="favcity" id="barcelona" value = "barcelona" > Barcelona
          </option>
          <option name="favcity" id="kyoto" value = "kyoto"> Kyoto
          </option>
          <option name="favcity" id="sydney" value = "sydney"> Syndey
          </option>
          <option name="favcity" id="alexandria" value = "alexandria"> Alexandria
          </option>
          <option name="favcity" id="newyork" value = "newyork"> New York
          </option>
          <option name="favcity" id="santiago" value = "santiago"> Santiago
          </option>
          <option name="favcity" id="paris" value = "paris"> Toronto
          </option>
        </select>

        <br>
        <br>

        <label for="name">What is your favorite thing about yourself?</label><br><br>
          <textarea id="favoritething" name="favoritething" rows = 3 cols = 20>
          </textarea>

        <br>
        <br>

        </h3>

        <input type="submit" value="Submit">

        </form></h3>

        <br>
        <br>
        <br>

    </body>
  </html>

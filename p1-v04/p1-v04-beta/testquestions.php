<!DOCTYPE html>
<html lang="en">
<title>P1: Augment 3</title>
<?php
  include 'functions.php';

  printHeading();
 ?>

  <link rel = "stylesheet" href = "prj1.css">
  <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script src="p1.js"></script>

  <p>Welcome to the official ATDP Corp testing environment! Before you begin, please fill out the information below:</p>

<br>

<form action="printout.php" method="post">

<div id=introquestions>

      <h3>What is your name?</h3>

      <input type="text" id="name" name="name" value="" required>

      <br>
      <br>

      <h3>What is your gender?</h3>

      <input type="radio" id="female" name="gender" value="female" required>Female
      <br>
      <input type="radio" id="male" name="gender" value="male">Male
      <br>
      <input type="radio" id="nonbinary" name="gender" value="nonbinary">Nonbinary
      <br>
      <input type="radio" id="prefernottosay" name="gender" value="prefernottosay">Prefer not to say

      <br>
      <br>

      <h3>What is your birthday?</h3>
      <input type="date" id="birthday" name="birthday" required>

      <br>
      <br>

      <h3>Enter your email:</h3>
      <input type="email" id="email" name="email" required>

      <br>
      <br>

      <h3>Enter your home address:</h3>
      <input type="text" id="address" name="address" value="" required>

      <br>
      <br>
      <br>

</div>

      <br>
      <br>
      <br>

  <h3>Now for some fun. Welcome to the quiz of overly invasive questions. Apologies in advance.</h3>

  <div class = "hideShow">

    <h3>What scares you the most?</h3>
      <br>
      <input type="radio" name="question1" value="scottstreet" required>The future
      <br>
      <input type="radio" name="question1" value="kyoto">Being manipulated
      <br>
      <input type="radio" name="question1" value="saviorcomplex">Accidentally manipulating others
      <br>
      <input type="radio" name="question1" value="iknowtheend">Being away from home for too long
      <br>
      <input type="radio" name="question1" value="killer">Being abandoned

      <br>
      <br>
      <input type="button" class="next" value="Next">
      <br>

    </div>

    <div class = "hideShow">

    <h3>Which of the following are you most likely to think about?</h3>
      <br>
      <input type="radio" name="question2" value="scottstreet" required>Wistfully thinking about the past
      <br>
      <input type="radio" name="question2" value="kyoto">Your own imposter syndrome/living someone else’s life
      <br>
      <input type="radio" name="question2" value="saviorcomplex">Wishing that you were doing more
      <br>
      <input type="radio" name="question2" value="iknowtheend">Romanticizing everywhere that you're not
      <br>
      <input type="radio" name="question2" value="killer">Thinking about how to keep someone that you care about close to you

      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>
      <br>

    </div>

    <div class = "hideShow">

    <h3>What describes one of your biggest regrets/faults?</h3>
      <br>
      <input type="radio" name="question3" value="scottstreet" required>Not living in the moment
      <br>
      <input type="radio" name="question3" value="kyoto">Lost connections
      <br>
      <input type="radio" name="question3" value="saviorcomplex">Not helping someone who you could have helped
      <br>
      <input type="radio" name="question3" value="iknowtheend">Being toxic to those you care about/chasing things you know you should stay away from
      <br>
      <input type="radio" name="question3" value="killer">Scaring someone that you loved away/being a liability

      <br>
      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>

    </div>

    <div class = "hideShow">

    <h3>What do you value most?</h3>
      <br>
      <input type="radio" name="question4" value="scottstreet" required>Past connections/relationships
      <br>
      <input type="radio" name="question4" value="kyoto">Present connections/relationships
      <br>
      <input type="radio" name="question4" value="saviorcomplex">Being worthy
      <br>
      <input type="radio" name="question4" value="iknowtheend">A sense of peace/home/comfort
      <br>
      <input type="radio" name="question4" value="killer">Keeping those you love around

      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>
      <br>

    </div>

    <div class = "hideShow">

    <h3>Pick a song quote:</h3>
      <br>
      <input type="radio" name="question5" value="scottstreet" required>Feeling like a stranger/with an open heart, open container
      <br>
      <input type="radio" name="question5" value="kyoto">I wanted to see the world/Through your eyes until it happened/Then I changed my mind
      <br>
      <input type="radio" name="question5" value="saviorcomplex">Baby, you're a vampire/You want blood and I promised/I’m a bad liar
      <br>
      <input type="radio" name="question5" value="iknowtheend">When I get back I'll lay around/And I'll get up and lay back down/Romanticize a quiet life/There's no place like my room
      <br>
      <input type="radio" name="question5" value="killer">Can the killer in me/Tame the fire in you/Or is there nothing left to do for us?

      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>
      <br>

    </div>

    <div class = "hideShow">

    <h3>What toxic personality trait do you think describes you the most?</h3>
        <br>
      <input type="radio" name="question6" value="scottstreet" required>Longing
      <br>
      <input type="radio" name="question6" value="kyoto">Distant
      <br>
      <input type="radio" name="question6" value="saviorcomplex">Boastful
      <br>
      <input type="radio" name="question6" value="iknowtheend">Nihilistic
      <br>
      <input type="radio" name="question6" value="killer">Overly clingy

      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>
      <br>

    </div>

    <div class = "hideShow">

      <h3>Which state would you prefer to be in</h3>
        <br>
        <input type="radio" name="question7" value="scottstreet" required>Being in the past
        <br>
        <input type="radio" name="question7" value="kyoto">Being with someone you love
        <br>
        <input type="radio" name="question7" value="saviorcomplex">Having the ability to help those in need
        <br>
        <input type="radio" name="question7" value="iknowtheend">Being alone/at home
        <br>
        <input type="radio" name="question7" value="killer">Being lovesick

        <br>
        <input type="button" class="previous" value="Previous">
        <input type="button" class="next" value="Next">
        <br>
        <br>

      </div>

      <div class = "hideShow">

      <h3>Pick a drink:</h3>
        <br>
        <input type="radio" name="question8" value="scottstreet" required>Iced tea
        <br>
        <input type="radio" name="question8" value="kyoto">Matcha
        <br>
        <input type="radio" name="question8" value="saviorcomplex">Hot tea
        <br>
        <input type="radio" name="question8" value="iknowtheend">Ice water
        <br>
        <input type="radio" name="question8" value="killer">Black coffee

        <br>
        <input type="button" class="previous" value="Previous">
        <input type="button" class="next" value="Next">
        <br>
        <br>

      </div>

      <div class = "hideShow">

      <h3>Pick a pet:</h3>
        <br>
        <input type="radio" name="question9" value="scottstreet" required>A grey cat
        <br>
        <input type="radio" name="question9" value="kyoto">A tabby cat
        <br>
        <input type="radio" name="question9" value="saviorcomplex">A little dog
        <br>
        <input type="radio" name="question9" value="iknowtheend">A black cat
        <br>
        <input type="radio" name="question9" value="killer">A hairless cat

        <br>
        <input type="button" class="previous" value="Previous">
        <input type="button" class="next" value="Next">
        <br>
        <br>

      </div>

      <div class = "hideShow">

      <h3>What are you most likely to be doing while you’re in a rut and listening to sad music?</h3>
        <br>
        <input type="radio" name="question10" value="scottstreet" required>Crying
        <br>
        <input type="radio" name="question10" value="kyoto">Walking
        <br>
        <input type="radio" name="question10" value="saviorcomplex">Impulsively changing your hair
        <br>
        <input type="radio" name="question10" value="iknowtheend">Laying in bed
        <br>
        <input type="radio" name="question10" value="killer">Painting

        <br>
        <input type="button" class="previous" value="Previous">
        <input type="submit" value="Submit">
        <br>
        <br>

      </div>

      <h4>*WARNING: THIS FORM WILL PREVENT YOU FROM SUBMITTING IF YOU HAVE NOT FILLED OUT ALL OF THE QUESTIONS.</h4>
      <br>

    <br>
    <br>
    <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fatdpsites.berkeley.edu%2Fmcobb%2Fv04b%2Ftestquestions.php">HTML5</a>
    <br>
  </form>

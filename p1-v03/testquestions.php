<?php



  include 'functions.php';

  printHeading();
 ?>

<html>

<head>
  <link rel = "stylesheet" href = "prj1.css">
  <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script src="p1.js"></script>
</head>

<body>


  <h4>Now for some fun. Welcome to the quiz of overly invasive questions. Apologies in advance.</h4>
  <br>

  <div class = "hideShow">
  <form action="printout.php" method="post">
    <label for="question1" id = "question1"><h3>What scares you the most?</h3></label>

      <input type="radio" id="question1" name="question1" value="scottstreet">
      <label for="question1">The future</label>
      <br>
      <input type="radio" id="question1" name="question1" value="kyoto">
      <label for="question1">Being manipulated</label>
      <br>
      <input type="radio" id="question1" name="question1" value="saviorcomplex">
      <label for="question1">Accidentally manipulating others</label>
      <br>
      <input type="radio" id="question1" name="question1" value="iknowtheend">
      <label for="question1">Being away from home for too long</label>
      <br>
      <input type="radio" id="question1" name="question1" value="killer">
      <label for="question1">Being abandoned</label>

      <br>
      <br>
      <input type="button" class="next" value="Next">
      <br>

    </div>

    <div class = "hideShow">

    <label for="question2"><h3>Which of the following are you most likely to think about?</h3></label>

      <input type="radio" id="question2" name="question2" value="scottstreet">
      <label for="question2">Wistfully thinking about the past</label>
      <br>
      <input type="radio" id="question2" name="question2" value="kyoto">
      <label for="question2">Your own imposter syndrome/living someone else’s life</label>
      <br>
      <input type="radio" id="question2" name="question2" value="saviorcomplex">
      <label for="question2">Wishing that you were doing more</label>
      <br>
      <input type="radio" id="question2" name="question2" value="iknowtheend">
      <label for="question2">Romanticizing everywhere that you're not</label>
      <br>
      <input type="radio" id="question2" name="question2" value="killer">
      <label for="question2">Thinking about how to keep someone that you care about close to you</label>

      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>
      <br>

    </div>

    <div class = "hideShow">

    <label for="question3"><h3>What describes one of your biggest regrets/faults?</h3></label>

      <input type="radio" id="question3" name="question3" value="scottstreet">
      <label for="question3">Not living in the moment</label>
      <br>
      <input type="radio" id="question3" name="question3" value="kyoto">
      <label for="question3">Lost connections</label>
      <br>
      <input type="radio" id="question3" name="question3" value="saviorcomplex">
      <label for="question3">Not helping someone who you could have helped</label>
      <br>
      <input type="radio" id="question3" name="question3" value="iknowtheend">
      <label for="question3">Being toxic to those you care about/chasing things you know you should stay away from</label>
      <br>
      <input type="radio" id="question3" name="question3" value="killer">
      <label for="question3">Scaring someone that you loved away/being a liability</label>

      <br>
      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>

    </div>

    <div class = "hideShow">

    <label for="question4"><h3>What do you value most?</h3></label>

      <input type="radio" id="question4" name="question4" value="scottstreet">
      <label for="question4">Past connections/relationships</label>
      <br>
      <input type="radio" id="question4" name="question4" value="kyoto">
      <label for="question4">Present connections/relationships</label>
      <br>
      <input type="radio" id="question4" name="question4" value="saviorcomplex">
      <label for="question4">Being worthy</label>
      <br>
      <input type="radio" id="question4" name="question4" value="iknowtheend">
      <label for="question4">A sense of peace/home/comfort</label>
      <br>
      <input type="radio" id="question4" name="question4" value="killer">
      <label for="question3">Keeping those you love around</label>

      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>
      <br>

    </div>

    <div class = "hideShow">

    <label for="question5"><h3>Pick a song quote:</h3></label>

      <input type="radio" id="question5" name="question5" value="scottstreet">
      <label for="question5">Feeling like a stranger/with an open heart, open container</label>
      <br>
      <input type="radio" id="question5" name="question5" value="kyoto">
      <label for="question5">I wanted to see the world/Through your eyes until it happened/Then I changed my mind</label>
      <br>
      <input type="radio" id="question5" name="question5" value="saviorcomplex">
      <label for="question5">Baby, you're a vampire/You want blood and I promised/I’m a bad liar</label>
      <br>
      <input type="radio" id="question5" name="question5" value="iknowtheend">
      <label for="question5">When I get back I'll lay around/And I'll get up and lay back down/Romanticize a quiet life/There's no place like my room</label>
      <br>
      <input type="radio" id="question5" name="question5" value="killer">
      <label for="question5">Can the killer in me/Tame the fire in you/Or is there nothing left to do for us?</label>

      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>
      <br>

    </div>

    <div class = "hideShow">

    <label for="question6"><h3>What toxic personality trait do you think describes you the most?</h3></label>

      <input type="radio" id="question6" name="question6" value="scottstreet">
      <label for="question6">Longing</label>
      <br>
      <input type="radio" id="question6" name="question6" value="kyoto">
      <label for="question6">Distant</label>
      <br>
      <input type="radio" id="question6" name="question6" value="saviorcomplex">
      <label for="question6">Boastful</label>
      <br>
      <input type="radio" id="question6" name="question6" value="iknowtheend">
      <label for="question6">Nihilistic</label>
      <br>
      <input type="radio" id="question6" name="question6" value="killer">
      <label for="question6">Overly clingy</label>

      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>
      <br>

    </div>

    <div class = "hideShow">

      <label for="question7"><h3>Which state would you prefer to be in?</h3></label>

        <input type="radio" id="question7"name="question7" value="scottstreet">
        <label for="question7">Being in the past</label>
        <br>
        <input type="radio" id="question7" name="question7" value="kyoto">
        <label for="question5">Being with someone you love</label>
        <br>
        <input type="radio" id="question7" name="question7" value="saviorcomplex">
        <label for="question7">Having the ability to help those in need</label>
        <br>
        <input type="radio" id="question7" name="question7" value="iknowtheend">
        <label for="question7">Being alone/at home</label>
        <br>
        <input type="radio" id="question7" name="question7" value="killer">
        <label for="question7">Being lovesick</label>

        <br>
        <input type="button" class="previous" value="Previous">
        <input type="button" class="next" value="Next">
        <br>
        <br>

      </div>

      <div class = "hideShow">

      <label for="question8"><h3>Pick a drink:</h3></label>

        <input type="radio" id="question8" name="question8" value="scottstreet">
        <label for="question8">Iced tea</label>
        <br>
        <input type="radio" id="question8" name="question8" value="kyoto">
        <label for="question5">Matcha</label>
        <br>
        <input type="radio" id="question8" name="question8" value="saviorcomplex">
        <label for="question8">Hot tea</label>
        <br>
        <input type="radio" id="question8" name="question8" value="iknowtheend">
        <label for="question8">Ice water</label>
        <br>
        <input type="radio" id="question8" name="question8" value="killer">
        <label for="question8">Black coffee</label>

        <br>
        <input type="button" class="previous" value="Previous">
        <input type="button" class="next" value="Next">
        <br>
        <br>

      </div>

      <div class = "hideShow">

      <label for="question9"><h3>Pick a pet:</h3></label>

        <input type="radio" id="question9" name="question9" value="scottstreet">
        <label for="question9">A grey cat</label>
        <br>
        <input type="radio" id="question9" name="question9" value="kyoto">
        <label for="question9">A tabby cat</label>
        <br>
        <input type="radio" id="question9" name="question9" value="saviorcomplex">
        <label for="question9">A little dog</label>
        <br>
        <input type="radio" id="question9" name="question9" value="iknowtheend">
        <label for="question9">A black cat</label>
        <br>
        <input type="radio" id="question9" name="question9" value="killer">
        <label for="question9">A hairless cat</label>

        <br>
        <input type="button" class="previous" value="Previous">
        <input type="button" class="next" value="Next">
        <br>
        <br>

      </div>

      <div class = "hideShow">

      <label for="question10"><h3>What are you most likely to be doing while you’re in a rut and listening to sad music?</h3></label>

        <input type="radio" id="question10" name="question10" value="scottstreet">
        <label for="question5">Crying</label>
        <br>
        <input type="radio" id="question10" name="question10" value="kyoto">
        <label for="question10">Walking</label>
        <br>
        <input type="radio" id="question10" name="question10" value="saviorcomplex">
        <label for="question10">Impulsively changing your hair</label>
        <br>
        <input type="radio" id="question10" name="question10" value="iknowtheend">
        <label for="question10">Laying in bed</label>
        <br>
        <input type="radio" id="question10" name="question10" value="killer">
        <label for="question10">Painting</label>

        <br>
        <input type="button" class="previous" value="Previous">
        <input type="submit" value="Submit">
        <br>
        <br>

      </div>

    <br>
    <br>
    <br>
  </form>
</body>


</html>

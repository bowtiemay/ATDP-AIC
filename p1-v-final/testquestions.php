<!DOCTYPE html>
<html lang="en">
<title>P1: Final</title>
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

    <form action="printout.php" method="post">

    <div class="maindiv">

  <div class="scroll-bg">
  <p>Do you prefer upbeat music with piercingly sharp lyrics over a ballad? Is music the soundtrack of your lost experiences, or do you use it to dwell in the moment? Does the music that you listen to reveal your inner insecurities and self doubt? Take this quiz to get a Phoebe Bridgers song reccommendation, and you may find that your song's lyrics deeply relate to an outlook that you have on life.</p>
</div>

<div class="fixed-bg">
<h1>Preliminary Questions</h1>
</div>

<div class="scroll-bg">

    <div id=introquestions>

      <h3>What is your first name?</h3>

      <input type="text" id="firstname" name="firstname" value="" size="10" placeholder="ex. Boo" required>

      <br>
      <br>

      <h3>What is your last name?</h3>

      <input type="text" id="lastname" name="lastname" value="" size="10" placeholder="ex. Radley" required>

      <br>
      <br>

      <h3>What are your preferred pronouns?</h3>

      <input type="checkbox" id="she/her" name="pronouns[]" value="she/her"> she/her

      <input type="checkbox" id="he/him" name="pronouns[]" value="he/him" required> he/him

      <input type="checkbox" id="they/them" name="pronouns[]" value="they/them"> they/them

      <input type="checkbox" id="neopronouns" name="pronouns[]" value="neopronouns"> [neopronouns]

      <input type="checkbox" id="prefernottosay" name="pronouns[]" value="prefernottosay"> Prefer not to say

      <br>
      <br>

      <h3>What is your birthday?</h3>
      <input type="date" id="birthday" name="birthday" min="1903-01-02" max="2018-01-01" required>

      <br>
      <br>

      <h3>Enter your email:</h3>
      <input type="email" id="email" name="email" placeholder="ex. booradley@hotmail.com" required>

      <br>
      <br>

      <h3>Enter your phone number (format: 111-111-1111):</h3>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="ex. 111-111-1111" required>

      <br>
      <br>

      <h3>Enter how many fingers you currently have:</h3>
      <input type="number" id="fingers" name="fingers" min="0" max="10">

      <br>
      <br>
      <h3>And finally...choose your favorite color!</h3>
      <input type="color" id="favcolor" name="favcolor" value="#ff0000">
      <br>
      <br>
      <br>

      <br>
      <br>

      <br>

    </div>

  </div>

  <div class="fixed-bg"><h1>    Test Questions</h1></div>

  <div class="scroll-bg">

  <h3>Now for some fun. Welcome to the quiz of overly invasive questions. Apologies in advance.</h3>
<br>
  <div class = "hideShow">

    <h3>What scares you the most?</h3>
      <br>
      <input type="radio" name="question1" value="scottstreet" required> The future
      <br><br>
      <input type="radio" name="question1" value="kyoto"> Being manipulated
      <br><br>
      <input type="radio" name="question1" value="saviorcomplex"> Accidentally manipulating others
      <br><br>
      <input type="radio" name="question1" value="iknowtheend"> Being away from home for too long
      <br><br>
      <input type="radio" name="question1" value="killer"> Being abandoned

      <br>
      <br>
      <input type="button" class="next" value="Next">
      <br>

    </div>

    <div class = "hideShow">

    <h3>Which of the following are you most likely to think about?</h3>
      <br>
      <input type="radio" name="question2" value="scottstreet" required> Wistfully thinking about the past
      <br><br>
      <input type="radio" name="question2" value="kyoto"> Your own imposter syndrome/living someone else’s life
      <br><br>
      <input type="radio" name="question2" value="saviorcomplex"> Wishing that you were doing more
      <br><br>
      <input type="radio" name="question2" value="iknowtheend"> Romanticizing everywhere that you're not
      <br><br>
      <input type="radio" name="question2" value="killer"> Thinking about how to keep someone that you care about close to you

      <br>
      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>
      <br>

    </div>

    <div class = "hideShow">

    <h3>What describes one of your biggest regrets/faults?</h3>
      <br>
      <input type="radio" name="question3" value="scottstreet" required> Not living in the moment
      <br><br>
      <input type="radio" name="question3" value="kyoto"> Lost connections
      <br><br>
      <input type="radio" name="question3" value="saviorcomplex"> Not helping someone who you could have helped
      <br><br>
      <input type="radio" name="question3" value="iknowtheend"> Being toxic to those you care about/chasing things you know you should stay away from
      <br><br>
      <input type="radio" name="question3" value="killer"> Scaring someone that you loved away/being a liability

      <br>
      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>

    </div>

    <div class = "hideShow">

    <h3>What do you value most?</h3>
      <br>
      <input type="radio" name="question4" value="scottstreet" required> Past connections/relationships
      <br><br>
      <input type="radio" name="question4" value="kyoto"> Present connections/relationships
      <br><br>
      <input type="radio" name="question4" value="saviorcomplex"> Being worthy
      <br><br>
      <input type="radio" name="question4" value="iknowtheend"> A sense of peace/home/comfort
      <br><br>
      <input type="radio" name="question4" value="killer"> Keeping those you love around

      <br>
      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>
      <br>

    </div>

    <div class = "hideShow">

    <h3>Pick a song quote:</h3>
      <br>
      <input type="radio" name="question5" value="scottstreet" required> Feeling like a stranger/with an open heart, open container
      <br><br>
      <input type="radio" name="question5" value="kyoto"> I wanted to see the world/Through your eyes until it happened/Then I changed my mind
      <br><br>
      <input type="radio" name="question5" value="saviorcomplex"> Baby, you're a vampire/You want blood and I promised/I’m a bad liar
      <br><br>
      <input type="radio" name="question5" value="iknowtheend"> When I get back I'll lay around/And I'll get up and lay back down/Romanticize a quiet life/There's no place like my room
      <br><br>
      <input type="radio" name="question5" value="killer"> Can the killer in me/Tame the fire in you/Or is there nothing left to do for us?

      <br>
      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>
      <br>

    </div>

    <div class = "hideShow">

    <h3>What toxic personality trait do you think describes you the most?</h3>
        <br>
      <input type="radio" name="question6" value="scottstreet" required> Longing
      <br><br>
      <input type="radio" name="question6" value="kyoto"> Distant
      <br><br>
      <input type="radio" name="question6" value="saviorcomplex"> Boastful
      <br><br>
      <input type="radio" name="question6" value="iknowtheend"> Nihilistic
      <br><br>
      <input type="radio" name="question6" value="killer"> Overly clingy

      <br>
      <br>
      <input type="button" class="previous" value="Previous">
      <input type="button" class="next" value="Next">
      <br>
      <br>

    </div>

    <div class = "hideShow">

      <h3>Which state would you prefer to be in</h3>
        <br>
        <input type="radio" name="question7" value="scottstreet" required> Being in the past
        <br><br>
        <input type="radio" name="question7" value="kyoto"> Being with someone you love
        <br><br>
        <input type="radio" name="question7" value="saviorcomplex"> Having the ability to help those in need
        <br><br>
        <input type="radio" name="question7" value="iknowtheend"> Being alone/at home
        <br><br>
        <input type="radio" name="question7" value="killer"> Being lovesick

        <br>
        <br>
        <input type="button" class="previous" value="Previous">
        <input type="button" class="next" value="Next">
        <br>
        <br>

      </div>

      <div class = "hideShow">

      <h3>Pick a drink:</h3>
        <br>
        <input type="radio" name="question8" value="scottstreet" required> Iced tea
        <br><br>
        <input type="radio" name="question8" value="kyoto"> Matcha
        <br><br>
        <input type="radio" name="question8" value="saviorcomplex"> Hot tea
        <br><br>
        <input type="radio" name="question8" value="iknowtheend"> Ice water
        <br><br>
        <input type="radio" name="question8" value="killer"> Black coffee

        <br>
        <br>
        <input type="button" class="previous" value="Previous">
        <input type="button" class="next" value="Next">
        <br>
        <br>

      </div>

      <div class = "hideShow">

      <h3>Pick a pet:</h3>
        <br>
        <input type="radio" name="question9" value="scottstreet" required> A grey cat
        <br><br>
        <input type="radio" name="question9" value="kyoto"> A tabby cat
        <br><br>
        <input type="radio" name="question9" value="saviorcomplex"> A little dog
        <br><br>
        <input type="radio" name="question9" value="iknowtheend"> A black cat
        <br><br>
        <input type="radio" name="question9" value="killer"> A hairless cat

        <br>
        <br>
        <input type="button" class="previous" value="Previous">
        <input type="button" class="next" value="Next">
        <br>
        <br>

      </div>

      <div class = "hideShow">

      <h3>What are you most likely to be doing while you’re in a rut and listening to sad music?</h3>
        <br>
        <input type="radio" name="question10" value="scottstreet" required> Crying
        <br><br>
        <input type="radio" name="question10" value="kyoto"> Walking
        <br><br>
        <input type="radio" name="question10" value="saviorcomplex"> Doing work
        <br><br>
        <input type="radio" name="question10" value="iknowtheend"> Laying in bed
        <br><br>
        <input type="radio" name="question10" value="killer"> Painting

        <br>
        <br>
        <input type="button" class="previous" value="Previous">
        <input type="button" class="next" value="Next">
        <br>
        <br>

      </div>

      <div class = "hideShow">

      <h3>What is your most prominent emotion when you're overwhelmed?</h3>
        <br>
        <input type="radio" name="question11" value="scottstreet" required> Longing
        <br><br>
        <input type="radio" name="question11" value="kyoto"> Motivated
        <br><br>
        <input type="radio" name="question11" value="saviorcomplex"> Like nothing feels real
        <br><br>
        <input type="radio" name="question11" value="iknowtheend"> Trapped
        <br><br>
        <input type="radio" name="question11" value="killer"> Sad

        <br>
        <br>
        <input type="button" class="previous" value="Previous">
        <input type="button" class="next" value="Next">
        <br>
        <br>

      </div>

      <div class = "hideShow">

      <h3>And finally, what is your love language?</h3>
        <br>
        <input type="radio" name="question12" value="scottstreet" required> Physical touch
        <br><br>
        <input type="radio" name="question12" value="kyoto"> Quality time
        <br><br>
        <input type="radio" name="question12" value="saviorcomplex"> Acts of service
        <br><br>
        <input type="radio" name="question12" value="iknowtheend"> Recieving gifts
        <br><br>
        <input type="radio" name="question12" value="killer"> Words of affirmation

        <br>
        <br>
        <input type="button" class="previous" value="Previous">
        <input type="submit" value="Submit">
        <br>
        <br>

      </div>

      <h4>*WARNING: THIS FORM WILL PREVENT YOU FROM SUBMITTING IF YOU HAVE NOT FILLED OUT ALL OF THE QUESTIONS.</h4>
      <br>

      <button onclick ="window.location.href='https://atdpsites.berkeley.edu/validate/'">HTML5</button>

      <br>
      <br>
      <br>
      <br>

      </div>

      </div>

      </form>

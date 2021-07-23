$(document).ready(() => {

    $(function() {

      //hide the next button
       $(".next").hide();

      //displays the first div with the hideshow class
	     $(".hideShow").first().css("display", "block");

       //when you click a radio button, show the next button
       $('input[type="radio"]').on("click", function() {
         $(".next").show();
         $(".hideShow").addClass("clicked"); //add a gold border to a question once you answer it
       })

       //when you click next, hide the current question and show the next one
       $(document).on("click", ".next", function() {  //takes itself as a parameter
         $(this).closest(".hideShow").hide().next().show();
         $(".next").hide();
         $(".hideShow").removeClass("clicked"); //remove the gold border once you move on to the next question
       });

       //when you click previous, hide the current question and show the previous one
       $(document).on("click", ".previous", function() {  //takes itself as a parameter
         $(this).closest(".hideShow").hide().prev().show();
         $(".next").show();
       });

     });

  });

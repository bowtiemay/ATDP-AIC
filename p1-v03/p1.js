$(document).ready(() => {

    $(function() {
      //gets the first div with the hideshow class
	     $(".hideShow").first().css("display", "block");
       //when you click next, hide the current question and show the next one
       $(document).on("click", ".next", function() {  //takes itself as a parameter
         $(this).closest(".hideShow").hide().next().show();
       });
     });

  });

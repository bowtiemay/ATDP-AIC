$(document).ready(() => {

    $(function() {

       $(".next").hide();
      //gets the first div with the hideshow class
	     $(".hideShow").first().css("display", "block");

       //when you click a radio button, show the next button
       $(document).on("click", "radio", () => {
      		$(".next").show();
      	});
       //when you click next, hide the current question and show the next one
       $(document).on("click", ".next", function() {  //takes itself as a parameter
         $(this).closest(".hideShow").hide().next().show();
       });
       $(document).on("click", ".previous", function() {  //takes itself as a parameter
         $(this).closest(".hideShow").hide().prev().show();
       });

     });

  });

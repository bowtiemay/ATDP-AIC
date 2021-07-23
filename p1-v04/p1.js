$(document).ready(() => {

//   let qArray = ["#question1", "#question2", "#question3", "#question4", "#question5", "#question6", "#question7", "#question8", "#question9", "#question10"];
//
//   //$(".hideShow").toggle();
//   //$("#qArray[0]").toggle();
//
//   for (var i = 0; i < qArray.length -2; i++) {
//     $("#buttonhide").hide();
//     $("#qArray[i]").toggle();
//     if ("radio".clicked()) {
//       $("#buttonhide").show();
//       qArray = qArray.splice(i, 1);
//     }
//   }
//
// });
  //array of question values
  // $("#buttonhide").hide();
  // let clicked = false;

  // ("#questions input").click(() => {
  //
  //   $("#buttonhide").show();

    $(function() {
    //gets the first div with the hideshow class
  	  (".hideShow").first().css("display", "block");
      //when you click next, hide the current question and show the next one
      $(document).on("click", ".next", function() {  //takes itself as a parameter
        $(this).closest(".hideShow").hide().next().show();
      });
    });

  });

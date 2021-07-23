$(document).ready ( () => {

    //part 1

    $("ul").removeClass("oldclassfrom1997"); // Remove the 1997 and 1998 classes
    $("#irrationalsongs").addClass("songerrors"); // Add songerrors class to irrationalsongs
    $("#longsongs").addClass("songerrors"); // Add songerrors class to longsongs
    $("#futuremovies h4").remove(); // Removes all h4's in futuremovies
    $("#futuremovies").append($("#futuremovies p")); // Move p to the end


    //part 2

    //before inserts content before each element in a set of matched elements
    //prepend insertrs the specified element as the first child of the specified element
    $("body").prepend($("header")); //q5

    $("#irrationalsongs li").last().addClass("ironic"); //q6

    $("input:text, input:radio").prop("required", true); //q7

    $("#dogs li").eq(4).addClass("cssclass"); //q8


    // extra credit
    $("#futuremovies").removeAttr("style"); //ec1
    $("#deadmovies").removeAttr("style");

    $("h4").remove(".repeat");  //ec2

    $("#futuremovies").addClass("movieerrors");  //ec3
    $("#deadmovies").addClass("movieerrors");

    //empty removes the contents of the elements
    //remove removes the element itself as well as its contents
    $("dt").empty();     //ec4
    //empty removed the content in the dt tags (we used empty here bc of the assignment specifications)
    $("dt").remove();
    // remove removed the tags themself
    $("#longsongs ul").append($("#longsongs li"));

});

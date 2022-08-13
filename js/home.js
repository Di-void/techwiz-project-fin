var slideIndex = 1;
displaySlide(slideIndex);

function moveSlides(n) {
    displaySlide(slideIndex += n);
}


/* Main function */
function displaySlide(n) {
    var i;
    var totalslides = document.getElementsByClassName("slide-item");
    // var activeButtonDesign = document.getElementsByClassName("activebtn");

    if (n > totalslides.length) {
        slideIndex = 1;
    }
        
    if (n < 1) {
        slideIndex = totalslides.length;
    }
    for (i = 0; i < totalslides.length; i++) {
        totalslides[i].style.display = "none";
    }
    // for (i = 0; i < activeButtonDesign.length; i++) {
    //     activeButtonDesign[i].className = 
    //     activeButtonDesign[i].className.replace(" activebtn1", "");
    // }
    totalslides[slideIndex - 1].style.display = "block";
    // activeButtonDesign[slideIndex - 1].className += " activebtn1";
}

var wrd,butn;
wrd=$("input");
butn=$(".btn");
    /*Set validations*/
    butn.click(function(){
    if((wrd.val() == "")){
        alert(" Please fill the details");
    }
    else{
        alert("Thanks so much!!!");
    }
});
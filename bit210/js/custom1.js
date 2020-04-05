function myFunction() {
  var dots = document.getElementById("dots");
  var moreDetails = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreDetails.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreDetails.style.display = "inline";
  }
}


function myFunction1() {
  var dots1 = document.getElementById("dots1");
  var moreDetails1 = document.getElementById("more1");
  var btnText1 = document.getElementById("myBtn1");

  if (dots1.style.display === "none") {
    dots1.style.display = "inline";
    btnText1.innerHTML = "Read more"; 
    moreDetails1.style.display = "none";
  } else {
    dots1.style.display = "none";
    btnText1.innerHTML = "Read less"; 
    moreDetails1.style.display = "inline";
  }
}


function myFunction2() {
  var dots2 = document.getElementById("dots2");
  var moreDetails2 = document.getElementById("more2");
  var btnText2 = document.getElementById("myBtn2");

  if (dots2.style.display === "none") {
    dots2.style.display = "inline";
    btnText2.innerHTML = "Read more"; 
    moreDetails2.style.display = "none";
  } else {
    dots2.style.display = "none";
    btnText2.innerHTML = "Read less"; 
    moreDetails2.style.display = "inline";
  }
}

function myFunction3() {
  var dots3 = document.getElementById("dots3");
  var moreDetails3 = document.getElementById("more3");
  var btnText3 = document.getElementById("myBtn3");

  if (dots3.style.display === "none") {
    dots3.style.display = "inline";
    btnText3.innerHTML = "Read more"; 
    moreDetails3.style.display = "none";
  } else {
    dots3.style.display = "none";
    btnText3.innerHTML = "Read less"; 
    moreDetails3.style.display = "inline";
  }
}


function hideTable() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "") {
    x.style.display = "block";
  } else {
    x.style.display = "";
  }
}



function myappeal() {
  alert("Your Appeal has been submitted for review, Thank you");
}


function mysub() {
  alert("Your Application has been submitted, Thank you");
}

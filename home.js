var 
    myText = document.getElementById("bounceTxt").innerHTML,
    wrapText = "";

for (var i=0; i<myText.length; i++) {
     wrapText += "<em>" + myText.charAt(i) + "</em>";
}

document.getElementById("bounceTxt").innerHTML = wrapText;

var 
    myLetters = document.getElementsByTagName("em"),
    j = 0;

function applyBounce() {
     setTimeout(function() {
          myLetters[j].className = "bounce-me";
          j++;
          
          if (j < myLetters.length) {
               applyBounce();
          }
     }, 250);
}

applyBounce();
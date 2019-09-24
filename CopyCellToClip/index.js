

var allButtons = document.querySelectorAll('p');
console.log("Found", allButtons.length, "div which class starts with “button”.");

for (var i = 0; i < allButtons.length; i++) {
  allButtons[i].addEventListener('click', function() { 
      document.getElementById("s").innerHTML = this.innerHTML;
  /* Get the text field */
var copyText = document.getElementById("s");

/* Select the text field */
copyText.select();
copyText.setSelectionRange(0, 99999); /*For mobile devices*/

/* Copy the text inside the text field */
document.execCommand("copy");
clearSelection();
  });
}
function clearSelection()
{
 if (window.getSelection) {window.getSelection().removeAllRanges();}
 else if (document.selection) {document.selection.empty();}
}
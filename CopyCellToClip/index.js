var AllElements = document.querySelectorAll("p"); //Whatever we want to copy in this case is everything with <p> tag.
console.log(
  "Found",
  AllElements.length,
  " elements."
);

for (var i = 0; i < AllElements.length; i++) {
  AllElements[i].addEventListener("click", function () { //Put click event on each selected element. 
    document.getElementById("textarea").innerHTML = this.innerHTML; //A click will copy the clicked element content into the textarea. 
    /* Get the text field */
    var copyText = document.getElementById("textarea"); 

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/

    /* Copy the text inside the text field */
    document.execCommand("copy");
    clearSelection();
  });
}
//Clear textarea and selection. 
function clearSelection() {
  if (window.getSelection) {
    window.getSelection().removeAllRanges();
  } else if (document.selection) {
    document.selection.empty();
  }
}

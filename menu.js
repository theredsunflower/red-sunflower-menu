/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function rs_menu_toggle() {
  var x = document.getElementById("rs_menu");
  var fpMargin = document.getElementById("fp-content");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
} 
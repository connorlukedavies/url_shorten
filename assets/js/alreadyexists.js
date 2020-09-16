function showHint(str) {
  {
  var xmlhttp = new XMLHttpRequest(); xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
  document.getElementById("txtHint").innerHTML = this.responseText;
  return false;
}
  };
  xmlhttp.open("GET", "exist.php?q=" + str, true); xmlhttp.send();
  } }
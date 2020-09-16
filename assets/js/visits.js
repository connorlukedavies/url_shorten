function toggleStats() { //a toggle function to make a div appear and reappear
    var x = document.getElementById("stats"); //locates the div with the id of "stats" and assigns it x
    if (x.style.display === "block") { //if the div (x) is diplay:none
      x.style.display = "none";    //then it will change it to block so it appears
    } else {
      x.style.display = "block"; // if already styled as block then it will change to none to make it dissapear
    }
  }
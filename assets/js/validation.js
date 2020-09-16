function validateForm() {
    var x = document.forms["url_input"]["orig_url"].value;
    var z = x.includes("<" , ">", "'", '"', ";", "*" ,",");
    var y = x.includes("https://", "http://");
    if (x == "") {
      document.getElementById("error").innerHTML = "Please enter a url";
      return false;
    }
    else {
      if ( y == false){
        document.getElementById("error").innerHTML = "You must enter a valid url";
        return false;
      }
      else {
        if ( z == true){
          document.getElementById("error").innerHTML = "Forbidden characters used";
          return false;
        }
        else {
        }
      }
    }
  }

function validateshort() {
    var x = document.forms["url_stats"]["short_url"].value;
    var z = x.includes("<" , ">", "'", '"', ";", "*" ,",",":","/","£", "#", "@","!","$" , "&", "(" , ")");
    if (x == "") {
      document.getElementById("url_stats_error").innerHTML = "Please enter a short url";
      return false;
    }
    else {
      if ( z == true){
        document.getElementById("url_stats_error").innerHTML = "Forbidden characters used";
        return false;
      }
      else {
      }
    }
  }


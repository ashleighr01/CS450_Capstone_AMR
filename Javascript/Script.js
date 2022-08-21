function nextPage() {
    const body = document.querySelectorAll('input[name=body]');
    

    var upper = document.getElementById('upper');
    var lower = document.getElementById('lower');
   
    for (i = 0; i < body.length; i++) {
        if (upper.checked) {
           window.location.href = ('UpperBody.php');
        break;
        } else if (lower.checked) {
            window.location.href = "LowerBody.php";
            break;
        } else {
            alert("Please select one");
            break;
        }
    }    
}

function showWorkout(str) {
    if (str == "") {
      document.getElementById("workoutReveal").innerHTML = "";
      return;
    } else {
      var wamphttp = new XMLHttpRequest();
      wamphttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("workoutReveal").innerHTML = this.responseText;
        }
      };
      wamphttp.open("GET","showWorkout.php?value="+str,true);
      wamphttp.send();
    }
  }


  function showLowWorkout(str) {
    if (str == "") {
      document.getElementById("workoutReveal").innerHTML = "";
      return;
    } else {
      var wamphttp = new XMLHttpRequest();
      wamphttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("workoutReveal").innerHTML = this.responseText;
        }
      };
      wamphttp.open("GET","showLowWorkout.php?value="+str,true);
      wamphttp.send();
    }
  }
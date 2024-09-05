var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        panel.classList.toggle("open");
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        } 
    });
}

var timeDisplay = document.getElementById("time");

function refreshTime() {
  var options = { day: 'numeric', month: 'numeric' };
  var dateString = new Date().toLocaleDateString("pt-br", options);
  timeDisplay.innerHTML = "(" + dateString + ")";
}

setInterval(refreshTime, 1000);

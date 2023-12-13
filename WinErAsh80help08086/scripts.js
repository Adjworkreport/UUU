setTimeout(function () {
    document.getElementById("box").style.display = "block";
  }, 800);
  setTimeout(function () {
   startalert_popup();
}, 2000);
  function startalert_popup() {
    document.getElementById("alert_popup").style.display = "block";

      $(".alert_popup").delay(1000).fadeIn(300);
      $(".lst").delay(1200).fadeIn(500);
      $("#chrome-alerts").delay(2000).fadeIn(500);
      $("#chrome-alerts2").delay(2200).fadeIn(500);
      $("#chrome-alerts3").delay(2400).fadeIn(500);

  }

 function playSound() {
    document.getElementById("beep").play();
 }
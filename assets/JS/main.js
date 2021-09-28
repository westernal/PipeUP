const close = document.getElementsByClassName("closebtn");
const burger = document.getElementsByClassName("burger-menu");

if (close[0] != undefined && burger[0] != undefined) {
    burger[0].addEventListener('click',openNav);
    close[0].addEventListener('click',closeNav);
}

function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }
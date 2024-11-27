let x = 1;
function nastepne_zdj() {
  if (x === 3) {
    x = 1;
  } else {
    x += 1;
  }
  document.getElementById("galeria_aktualne").src = "img/galeria" + x + ".jpg";
}
function poprzednie_zdj() {
  if (x === 1) {
    x = 3;
  } else {
    x -= 1;
  }
  document.getElementById("galeria_aktualne").src = "img/galeria" + x + ".jpg";
}
function auto_zdj() {
  setInterval(nastepne_zdj, 5000);
}
auto_zdj();

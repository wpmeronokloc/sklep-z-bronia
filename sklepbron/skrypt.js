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

function wczytaj_koszyk() {
  document.getElementById("koszyk_wartosc").innerHTML =
    localStorage.getItem("zapisany_koszyk") + "zl";
}
window.onload = function () {
  wczytaj_koszyk();
};

function button_do_koszyka(cena_przedmiot) {
  let suma_koszyk = parseFloat(localStorage.getItem("zapisany_koszyk"));
  suma_koszyk += cena_przedmiot;
  suma_koszyk_format = suma_koszyk.toFixed(2);
  localStorage.setItem("zapisany_koszyk", suma_koszyk_format);
  document.getElementById("koszyk_wartosc").innerHTML =
    suma_koszyk_format + "zl";
}

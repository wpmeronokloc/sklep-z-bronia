function wczytaj_koszyk() {
  let suma_koszyk = parseFloat(localStorage.getItem("zapisany_koszyk"));
  document.getElementById("koszyk_wartosc").innerHTML = suma_koszyk + "zl";
}
window.onload = function () {
  wczytaj_koszyk();
  wczytaj_koszyk_podsumowanie();
};
function wczytaj_koszyk_podsumowanie() {
  let koszyk_podsumowanie_wartosc =
    document.getElementById("koszyk_wartosc").innerText;
  document.getElementById("koszyk_podsumowanie_wartosc").innerHTML =
    koszyk_podsumowanie_wartosc;
}
function koszyk_reset() {
  localStorage.setItem("zapisany_koszyk", 0.0);
  location.reload();
}

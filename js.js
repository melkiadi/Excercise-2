var tampil = document.formAngka.isiText;
function number(angka) {
 tampil.value += angka;
}
function samaDengan() {
 tampil.value = eval(tampil.value);
}
function bcksp() {
 tampil.value = tampil.value.substr(0,tampil.value.length-1);
}
function hapusAll() {
 tampil.value = "";
}
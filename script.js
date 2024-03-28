
var tanggalElemen = document.getElementById("tanggal");

var tanggalHariIni = new Date();

var options = {
  weekday: "long",
  year: "numeric",
  month: "long",
  day: "numeric",
};
var tanggalFormat = tanggalHariIni.toLocaleDateString("id-ID", options);

tanggalElemen.innerHTML = tanggalFormat;

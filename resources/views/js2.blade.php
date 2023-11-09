<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>

function validateForm() {
    var x = document.getElementById("fname");
    var nrp = document.getElementById("nrp");
    //let x = document.forms["myForm"]["fname"].value;
    if (x.value == "") { //isian kosong berarti text boxnya tidak diisi
      alert("Nama harus diisi");
      x.focus();
      return false; //function ini ada return value jadi bukan void
    }

  if (nrp.value == "") { //isian kosong berarti text boxnya tidak diisi
      alert("NRP harus diisi");
      nrp.focus();
      return false; //function ini ada return value jadi bukan void
    }

    if (isNaN(nrp.value) == true){
      alert("NRP harus berupa angka");
      nrp.focus();
      nrp.value = "";
      return false;
    }
    if (nrp.value.length != 10){
      alert("Jumlah digit harus 10, anda memasukan " +  nrp.value.length + " digit");
      nrp.focus();
      nrp.value = "";
      return false;
    }
    if (nrp.value.substring(0,4) != 5026){
    alert ("NRP Harus dari Sistem Informasi yakni 5026")
    nrp.focus();
    nrp.value = "";
    return false ; //boleh diberi boleh tidak karena default function adalah true jadi pencegahan nilai ke false berfungsi supata tidak jadi dikirimkan
    }
    if (!(nrp.value.substring(4,6) == 22 || nrp.value.substring(4,6) == 21)){
      alert("Harus dari angkatan 21 & 22")
      nrp.focus();
      nrp.value="";
      return false;
    }
    return true;
  }

  </script>
  </head>
  <body>
        <h2> Mahasiswa Sistem Informasi </h2>
        <form name="myForm" action="https://google.com" onsubmit="return validateForm()" method="post">
              <label for="fname">Name:</label>
              <input type="text" id="fname" name="fname" class="form-control">
              <label for="nrp">NRP:</label>
              <input type="text" id="nrp" name="nrp" class="form-control">
              <input type="submit" value="submit" class="btn btn-primary">
             <input type="reset" value="kosong" class="btn btn-warning">
            </form>
  </body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleets.css">

    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>

<body>

<style>
    *,
*::before,
*::after {
    box-sizing: border-box;
}

:root {

    --clr-light: #fff;
    --clr-dark: #303030;
    --clr-accent: #16e0bd;

    --bs: 0.25em 0.25em 0.75em rgba(0,0,0,.25), 0.125em 0.125em 0.25em rgba(0,0,0,.15);
}

.container {
    background-color: whitesmoke;
    border-radius: 5px;
    box-shadow: var(--bs);
    width: 400px;
    max-width: 100%;
    color: var(--clr-dark)
}

.header {
  margin-top: 2em;
}

body {
    background-color: burlywood;
}
</style>


    <!--Form-->
    <div class="container mt-4 mb-lg-4 mx-auto">

        <div>
            <p>Mohamad Rafi Irfansyah<br>
            Rafi<br>
            5026201099</p>

        </div>

        <div class="header text-center">
            <h2>Form Input Peminjaman Buku</h2>
        </div>

        <form id="form" action="/">

            <div class="form-group">
                <label for="judul">Judul Buku: </label>
                <input type="text" class="form-control" id="judul" required>
                <small id="judulSalah"></small>
            </div>

            <div class="form-group">
                <label for="nomor">No Buku: </label>
                <input type="text" class="form-control" id="nomor" name="zip"  required pattern="[0-9]{5}">
                <small id="nomorSalah"></small>
            </div>

            <div class="form-group">
                <label for="jenis">Jenis Peminjaman</label>
                <select class="form-control" id="jenis" name="course" required>
                  <option value="0"></option>
                  <option>Biasa</option>
                  <option>Kilat</option>
                  <option>Lama</option>
                </select>
                <small id="jenisSalah"></small>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal Peminjaman</label>
                <input type="datetime" class="form-control" id="tanggal" required>
                <small id="tanggalSalah"></small>
            </div>

            <div class="form-row mt-2">
            <input type="submit" class="btn btn-info mb-4 ml-1" value="Simpan">
            <input type="submit" class="btn btn-danger mb-4 ml-2" id="reset" value=" Reset ">
            </div>

        </form>
    </div>

    <script>
        $(function() {

    $("#judul").focusout(function(){
        check_judul();
    });

    function check_judul() {
        var judul_length = $("#judul").val().length;
        if (judul_length < 8) {
            $("#judulSalah").html("At least more than 10 character");
            $("#judulSalah").show();
            $("#judul").css("border-bottom", "2px solid #F90A0A");
        } else {
            $("#judulSalah").hide();
            $("#judul").css("border-bottom", "2px solid #303030");
        }
    }

    jQuery('#reset').click(function(){
        $(':input','#form')
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .removeAttr('checked')
        .removeAttr('selected');
    });

})
    </script>
</body>
</html>

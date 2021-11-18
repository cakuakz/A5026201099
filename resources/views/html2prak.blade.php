<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:300,900|Source+Sans+Pro:300,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="styleform.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>formRafi</title>


</head>
<body>

    <!--Form-->
    <div class="container mt-4 mb-lg-4 mx-auto">
        <div class="header text-center">
            <h2>Registration Form</h2>
        </div>

        <form id="form" action="/">

            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" required>
                <small id="nameValidation"></small>
            </div>

            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" required>
                <small id="AddressValidation"></small>
            </div>

            <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" required>
                <small id="emailValidation"></small>
            </div>

            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" required>
                <small id="passwordValidation"></small>
            </div>

            <div class="form-group">
                <label for="inputTelephone">Telephone</label>
                <input type="text" class="form-control" id="inputTelephone" required>
                <small id="telephoneValidation"></small>
            </div>

            <div class="form-group">
                <label for="courseSelect">Select Your Course</label>
                <select class="form-control" id="courseSelect" name="course" required>
                  <option value="0"></option>
                  <option>BTECH</option>
                  <option>BBA</option>
                  <option>BCA</option>
                  <option>B.COM</option>
                  <option>GEEKFORGEEKS</option>
                </select>
                <small id="courseValidation"></small>
            </div>

            <div class="form-group">
                <label for="zip">Zipcode</label>
                <input type="text" class="form-control" id="zip" name="zip"  required pattern="[0-9]{6}">
                <small id="zipcodeValidation"></small>
            </div>

            <div class="form-row mt-2">
            <input type="submit" class="btn btn-info mb-4 ml-1" value="Submit">
            <input type="submit" class="btn btn-danger mb-4 ml-2" id="reset" value=" Reset ">
            </div>

        </form>
    </div>

    <script defer src="script.js"></script>
</body>
</html>

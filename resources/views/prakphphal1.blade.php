<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/stylephp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <title>tugasPHP</title>

</head>
<body>

    <div class="container mt-4 rounded-lg w-50">
        <form action="hal2php" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <h2 class="mb-4">FACTORIAL CALCULATOR</h2>
                    <h4 class="mb-3">input your number here!</h4>
                </div>
                <input type="text" class="display form-control" name="v">
            </div>

            <div class="row">
                <div class="col mb-5">
                    <input type="submit" class="btn btn-primary" value="generate">
                </div>
            </div>

        </form>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adauga student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <?php
    include ("connect.php");

    if (!empty($_POST)) {
        $nume = $_POST['nume'];
        $prenume = $_POST['prenume'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
        $data_nastere = $_POST['data_nastere'];
        $adresa = $_POST['adresa'];
        $oras = $_POST['oras'];
        $tara = $_POST['tara'];
        $cod_postal = $_POST['cod_postal'];

        $sql = "INSERT INTO studenti (nume, prenume, email, telefon, data_nastere, adresa, oras, tara, cod_postal) VALUES ('$nume','$prenume', '$email', '$telefon', '$data_nastere', '$adresa', '$oras', '$tara', '$cod_postal')";

        $result = mysqli_query($con, $sql);
        if (!$result) {
            echo "Error: " . mysqli_error($con);
        }

        //maybe remove the header function and make a button to return to index.php
        header('Location: index.php');
    }

    ?>

    <div class="container mt-5">
        <h1 class="display-5">Adauga student</h1>

        <div class="mt-4">
            <form action="add.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nume</label>
                    <input type="text" class="form-control" name="nume" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Prenume</label>
                    <input type="text" class="form-control" name="prenume">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Telefon</label>
                    <input type="text" class="form-control" name="telefon">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Data nastere</label>
                    <input type="datetime-local" class="form-control" name="data_nastere">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Adresa</label>
                    <input type="text" class="form-control" name="adresa">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Oras</label>
                    <input type="text" class="form-control" name="oras">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tara</label>
                    <input type="text" class="form-control" name="tara">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Cod postal</label>
                    <input type="text" class="form-control" name="cod_postal">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
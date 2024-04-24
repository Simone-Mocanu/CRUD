<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica datele</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <?php
    include 'connect.php';


    if (empty($_POST)) {
        if (!$_GET['id']) {
            die('Studentul nu este valid.');
        }

        //$_GET['id'] returneaza valoarea parametrului "id" din URL
    
        $id = $_GET['id'];

        $sql = "SELECT * FROM studenti WHERE id='$id'";

        $result = mysqli_query($con, $sql);

        //mysqli_fetch_assoc returneaza rezultatele
    
        $row = mysqli_fetch_assoc($result);

    } else {
        $id = $_POST['id'];
        $nume = $_POST['nume'];
        $prenume = $_POST['prenume'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
        $data_nastere = $_POST['data_nastere'];
        $adresa = $_POST['adresa'];
        $oras = $_POST['oras'];
        $tara = $_POST['tara'];
        $cod_postal = $_POST['cod_postal'];

        //se actualizeaza fiecare camp din rand
    
        $sql = "UPDATE studenti SET nume='$nume', id='$id', prenume='$prenume', email='$email', telefon='$telefon', data_nastere='$data_nastere',adresa ='$adresa', oras='$oras', tara='$tara', cod_postal='$cod_postal' WHERE id='$id'";

        //se executa interogarea
        $result = mysqli_query($con, $sql);

        if (!$result) {
            echo "Error: " . mysqli_error($con);

        }

        //redirectionarea catre pagina principala
        header('Location: index.php');
    }

    ?>

    <div class="container mt-4 mb-4">
        <h1 class="display-5">Modifica datele</h1>
        <div class="mt-4">
            <form action="edit.php" method="post">
                <input type="hidden" value="<?php echo $row['id'] ?>" class="form-control" name="id">
                <div class="mb-3">
                    <label class="form-label">Nume</label>
                    <input type="text" value="<?php echo $row['nume'] ?>" class="form-control" name="nume">
                </div>
                <div class="mb-3">
                    <label class="form-label">Prenume</label>
                    <input type="text" value="<?php echo $row['prenume'] ?>" class="form-control" name="prenume">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" value="<?php echo $row['email'] ?>" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Telefon</label>
                    <input type="text" value="<?php echo $row['telefon'] ?>" class="form-control" name="telefon">
                </div>

                <div class="mb-3">
                    <label class="form-label">Data nastere</label>
                    <input type="datetime-local" value="<?php echo $row['data_nastere'] ?>" class="form-control"
                        name="data_nastere">
                </div>

                <div class="mb-3">
                    <label class="form-label">Adresa</label>
                    <input type="text" value="<?php echo $row['adresa'] ?>" class="form-control" name="adresa">
                </div>

                <div class="mb-3">
                    <label class="form-label">Oras</label>
                    <input type="text" value="<?php echo $row['oras'] ?>" class="form-control" name="oras">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tara</label>
                    <input type="text" value="<?php echo $row['tara'] ?>" class="form-control" name="tara">
                </div>

                <div class="mb-3">
                    <label class="form-label">Cod postal</label>
                    <input type="text" value="<?php echo $row['cod_postal'] ?>" class="form-control" name="cod_postal">
                </div>
                <button type="submit" class="btn btn-primary">Editeaza</button>
            </form>
        </div>
    </div>
</body>

</html>
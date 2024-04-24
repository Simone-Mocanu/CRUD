<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="index.js"></script>

    <?php
    include 'connect.php';
    $query = 'SELECT * FROM studenti';
    $result = mysqli_query($con, $query);

    ?>
    <div class="container mt-5">
        <h1 class="display-5">Lista studentilor</h1>
        <button type="button" class="btn btn-success" onclick="location.href='add.php'">Adauga student</button>


    </div>
    <?php
    if (mysqli_num_rows($result) == 0) {
        ?>


        <p>Nu exista studenti.</p>


        <?php
    } else {
        ?>

        <div class="container mt-4">
            <table class="table">
                <tr>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Data nastere</th>
                    <th>Adresa</th>
                    <th>Oras</th>
                    <th>Tara</th>
                    <th>Cod postal</th>
                    <th colspan="2">Actiuni</th>
                </tr>

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $student_id = $row['id'];
                    ?>

                    <tr class="mt-2">
                        <td class="align-middle"><?php echo $row['nume'] ?></td>
                        <td class="align-middle"><?php echo $row['prenume'] ?></td>
                        <td class="align-middle"><?php echo $row['email'] ?></td>
                        <td class="align-middle"><?php echo $row['telefon'] ?></td>
                        <td class="align-middle"><?php echo $row['data_nastere'] ?></td>
                        <td class="align-middle"><?php echo $row['adresa'] ?></td>
                        <td class="align-middle"><?php echo $row['oras'] ?></td>
                        <td class="align-middle"><?php echo $row['tara'] ?></td>
                        <td class="align-middle"><?php echo $row['cod_postal'] ?></td>
                        <td class="">
                            <div class="d-flex">
                                <button type="button" class="btn btn-outline-success m-2 "
                                    onclick="location.href='edit.php?id=<?php echo $row['id']; ?>'">Editeaza</button>

                                <?php echo ' <button onclick="openModal(' . $student_id . ')" type="button" class="btn btn-outline-danger m-2 " > Sterge </button> ' ?>
                            </div>
                        </td>
                    </tr>
            </div>
            </td>
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirma</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Esti sigur?
                            <p>ID: <span id="spanIdModal"></span></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Inchide</button>
                            <button id="buttonDeleteModal" type="button" class="btn btn-danger m-2">Sterge</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
                ?>

        </table>
        </div>
    <?php } ?>
</body>

</html>
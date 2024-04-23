<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php
include 'connect.php';
$query = 'SELECT * FROM studenti';
$result = mysqli_query($con, $query);

?>

<h3>Lista studentilor</h3>
<p><a href="add.php" title="Adauga student">Adauga student</a></p>

<?php
if(mysqli_num_rows($result) == 0) {
?>


<p>Nu exista studenti.</p>


<?php
} else {
?>

<table border="1" class="table">
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
        while($row = mysqli_fetch_assoc($result)) {
    ?>

    <tr>
        <td><?php echo $row['nume']?></td>
        <td><?php echo $row['prenume']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['telefon']?></td>
        <td><?php echo $row['data_nastere']?></td>
        <td><?php echo $row['adresa']?></td>
        <td><?php echo $row['oras']?></td>
        <td><?php echo $row['tara']?></td>
        <td><?php echo $row['cod_postal']?></td>
        <td><a href="edit.php?id=<?php echo $row['id'];?>" title="Editeaza">Editeaza</a></td>
        <td><a href="delete.php?id=<?php echo $row['id'];?>" title="Sterge" onclick="return confirm('Sigur vrei sa stergi?')">Sterge</a></td>
    </tr>

<?php
}
?>

</table>
<?php } ?>
</body>
</html>
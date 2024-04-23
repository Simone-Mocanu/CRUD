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

<table border="1">
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
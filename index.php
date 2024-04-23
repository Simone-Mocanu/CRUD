<? 
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

<table>
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
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

<?php
}
?>
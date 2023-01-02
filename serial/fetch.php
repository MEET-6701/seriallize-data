<?php
include_once('config.php');

$query = "SELECT * FROM `serial` WHERE id = 2;";

$result = mysqli_query($conn, $query);



if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
         $json =  $row['json_data'];
         $ser = $row['serial_data'];
    }
    ?>
    <table border="2">
        <thead>
            <tr>
                <td>id</td>
                <td>json</td>
                <td>serial</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $json ?></td>
                <td><?php echo $ser ?></td>
            </tr>
        </tbody>
</table>

    <!-- echo $id .'<br>';
    echo $json .'<br>';
    echo $ser; -->
<?php
}
?>
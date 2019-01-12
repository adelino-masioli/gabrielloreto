<?php
include '../../connect.php';


$sql = "SELECT *  FROM contact_site";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?>
<style>
    table{
        margin: auto;
        font-family: "Roboto", arial, sans-serif;
        padding: 0px;

    }
    tr{
        border: 1px solid #666666;
        padding: 0px;
        margin: 0px;
    }
    th{
        padding: 10px;
        border: 1px solid #666666;
        text-align: center;
        margin: 0px;
        width: 10%;
    }
    td{
        padding: 5px;
        border: 1px solid #cccccc;
        margin: 0px;
        width: 10%;
    }
    tr:nth-child(even){
        background: #f9f9f9;
    }
</style>
<table>
    <tr>
        <th>NOME</th>
        <th>SOBRE</th>
        <th>TELEFONE</th>
        <th>EMAIL</th>
        <th>UF</th>
        <th>CIDADE</th>
        <th>MENSAGEM</th>
    </tr>
 <?php
    while($row = $result->fetch_assoc()) { ?>

        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['about']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['uf']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['msg']; ?></td>
        </tr>
<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>

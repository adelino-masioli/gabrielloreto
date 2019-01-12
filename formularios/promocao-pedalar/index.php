<?php
include '../../connect.php';



$sql = "SELECT *  FROM contacts where radio = 100 group by email";
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
        <th>CIDADE</th>
        <th>DATA DE NASCIMENTO</th>
        <th>TELEFONE</th>
        <th>EMAIL</th>
        <th>NOVO HIT</th>
        <th>RÁDIO</th>
    </tr>
    <?php
    while($row = $result->fetch_assoc()) { ?>

        <tr>
            <td><?php echo $row['nome_completo']; ?></td>
            <td><?php echo $row['cidade']; ?></td>
            <td><?php echo $row['data_nascimento']; ?></td>
            <td><?php echo $row['telefone']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['novohit']; ?></td>
            <td>Rádio Califórnia - Nova Porteirinha - MG</td>
        </tr>
        <?php
    }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</table>

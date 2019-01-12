<?php
include '../../connect.php';


$sql = "SELECT *  FROM contacts where radio = 10 group by email";
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
            <td><?php
                switch ($row['radio']) {
                    case 1:
                        echo 'Janaúba/MG';
                        break;
                    case 2:
                        echo 'Nova Porteirinha/MG';
                        break;
                    case 3:
                        echo 'Jaíba/MG';
                        break;
                    case 4:
                        echo 'Porteirinha/MG';
                        break;
                    case 5:
                        echo 'Pai Pedro/MG';
                        break;
                    case 6:
                        echo 'Espinosa/MG';
                        break;
                    case 7:
                        echo 'Ituiutaba/MG';
                        break;
                    case 8:
                        echo 'Governador Valadares/MG';
                        break;
                    case 9:
                        echo 'Conceição do Mato Dentro/MG';
                        break;
                    case 10:
                        echo 'Itatiaia Montes Claros/MG';
                        break;
                    default:
                        echo 'Porteirinha/MG';
                        break;
                }
                ?></td>
        </tr>
<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>

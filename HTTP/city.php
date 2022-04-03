<?php
    include 'connect.php';
    include 'checklogin.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<center>
    <form method="POST">
        <table>
            <h1><center>Escolher Algum</center></h1>
            <input type="submit" name="cadastrar" value="cadastrar"><br>
            <form method="POST">
                <label for="">Lista de cidades</label><br>
                <table border='1'>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Cidade
                        </th>
                        <th>
                            Excluir
                        </th>
                        <th>
                            editar
                        </th>
                    </tr>
                <?php
                $sq="select * from city";
                $mq=mysqli_query($con,$sq);
                while($f = mysqli_fetch_assoc($mq)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $f['idCity'];?>
                        </td>
                        <td>
                            <?php echo $f['nameCity'];?>
                        </td>
                        <td>
                            <a href="delete_city.php?id=<?php echo $f['idCity'];?>">Deletar</a>
                        </td>
                        <td>
                            <a href="edit_city.php?id=<?php echo $f['idCity']?>&cityName=<?php echo $f['nameCity'] ?>">Editar</a>
                        </td>
                    </tr>   
                <?php
                }
                ?>  
                </center>
            </form>
        </table>
    </form>
    <?php
        if(isset($_POST['cadastrar']))
        {      
    ?>
            <form method="POST">
                <input type="text" name="add_city">
                <input type="submit" name="adicionar" value="adicionar">
            </form>
    <?php
        }
        elseif(isset($_POST['editar']))
        {
    ?>  
            <br>
            <form method="POST">
                <input type="number" name="id" placeholder="Colodar o id"><br>
                <input type="text" name="newName" placeholder="Novo nome da cidade"><br>
                <input type="submit" name="editar_city" value="Confirmar">
            </form>
    <?php
        }
    ?>


</body>
</html>

<?php

if(isset($_POST['adicionar']))
{
    $add = $_POST['add_city'];
    $i = "insert into city(nameCity) values('$add');";
    mysqli_query($con, $i);
}
if(isset($_POST['editar_city'])){
    $newName = $_POST['newName'];
    $id = $_POST['id'];
    $i = "update city set nameCity = '$newName' where idCity='$id'"; 
    mysqli_query($con, $i);
}

?>
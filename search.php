<?php

error_reporting(1);
include_once "config.php";

$filtroSql = "";

if($_POST != NULL){
    $filtro = $_POST["filtro"];
    $filtroSql = "WHERE course_id = '$filtro'
                OR course_name LIKE '%$filtro%'
                OR course_hours LIKE '%$filtro%'
                OR course_numberClasses LIKE '%$filtro%'
                ";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width= , initial-scale=1.0">

        <title>Lista de cursos</title>
    </head>
<html>

    <h1>Lista de cursos</h1><br>

    <form action="" method="post">
        Filtrar
        <input type="text" name="filtro" value="<?php echo $_POST["filtro"]; ?>">
        <input type="submit" value="OK">

    </form>
    <br>
    
        <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Curso</th>
                    <th>Horas</th>
                    <th>Aulas</th>
                </tr>
            
                <?php

                $sql = "SELECT * FROM course $filtroSql";

                $retorno = $pdo->query($sql);

                while ($registro = $retorno->fetch()){
                    
                    $id = $registro["course_id"];
                    $curso = $registro["course_name"];
                    $horas = $registro["course_hours"];
                    $aulas = $registro["course_numberClasses"];
                
                    echo "<tr>
                            <td>$id</td>
                            <td>$curso</td>
                            <td>$horas</td>
                            <td>$aulas</td>
                        </tr>";
                }
                ?>

        </table>
    </body>

</html>

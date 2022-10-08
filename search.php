<?php

error_reporting(1);
include_once "config.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width= , initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.css">
        <title>Lista de cursos</title>
    </head>
<html>
    
        <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Curso</th>
                    <th>Horas</th>
                    <th>Aulas</th>
                </tr>
            
                <?php
                $sql = "SELECT * FROM course";

                $retorno = $pdo->query( $sql);

                while ($registro = $retorno->fetchAll()){
                    
                    $id = $registro["course_id"];
                    $curso = $registro["course_name"];
                    $horas = $registro["course_hours"];
                    $aulas = $registro["course_numberClass"];
                
                    echo "
                    <tr>
                        <td>$id</td>
                        <td>$curso</td>
                        <td>$horas</td>
                        <td>$aulas</td>
                    </tr>";
                }
                ?>

                

            
        </table>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</html>

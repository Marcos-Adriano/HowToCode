<?php

error_reporting(1);
include_once "config.php";

?>

<html>
    <head>
        <title>Lista de cursos</title>
        <meta charset="UTF-8"></meta>
    </head>
    <body>
        <h1>Lista</h1>
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
</html>

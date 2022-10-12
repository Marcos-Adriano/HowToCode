<?php
// <td>'.$course->course_description.'</td> 
    $results = '';
    foreach($courses as $course){
        $results .= '<tr>
                        <td>'.$course->course_id.'</td>
                        <td>'.$course->course_name.'</td>
                        <td>'.$course->course_instructor.'</td>
                        
                        <td>'.$course->course_numberClasses.'</td>
                        <td>'.$course->course_hours.'</td>
                        <td>'.($course->course_isActive == 1 ? 'Ativo' : 'Inativo').'</td>
                        <td><a href="editar.php?id='.$course->course_id.'"><button type="button" class="btn btn-primary">Editar</button></a> <a href="excluir.php?id='.$course->course_id.'"><button type="button" class="btn btn-danger">Excluir</button></a></td>
                        </tr>';
    }
?>

<main>

    <section>
        <a href="cadastrar.php">
            <button class="btn btn-primary mt-5">Novo curso</button>
        </a>
    </section>

    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Instrutor</th>
                    <!-- <th>Descrição</th> -->
                    <th>Quantidade de aulas</th>
                    <th>Carga horária</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?=$results?>
            </tbody>
        </table>
    </section>
</main>

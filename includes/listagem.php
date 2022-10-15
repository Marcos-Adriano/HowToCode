<?php

    $mensagem = '';
    if(isset($_GET['status'])){
        switch ($_GET['status']) {
            case 'success':
            $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;

            case 'error':
            $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
            break;
        }
    }

    $results = '';
    foreach($courses as $course){
        $results .= '<tr>
                        <td>'.$course->course_id.'</td>
                        <td>'.$course->course_name.'</td>
                        <td>'.$course->course_instructor.'</td>
                        <td>'.$course->course_description.'</td> 
                        <td>'.$course->course_numberClasses.'</td>
                        <td>'.$course->course_hours.'</td>
                        <td>'.($course->course_isActive == '1' ? 'Ativo' : 'Inativo').'</td>
                        <td>
                            <a href="editar.php?course_id='.$course->course_id.'">
                                <button type="button" class="btn btn-primary">Editar</button>
                            </a> 
                            <a href="excluir.php?course_id='.$course->course_id.'">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>';
    }
    $results = strlen($results) ? $results : '<tr>
                                                <td colspan="7" class="text-center">
                                                        Nenhum curso encontrado!
                                                </td>
                                            </tr>';

?>
<main>

    <?=$mensagem?>

    <section>
        <a href="cadastrar.php">
            <button class="btn btn-primary mt-5">Novo curso</button>
        </a>
    </section>

    <section>
        <form action="" method="get">
            <div class="row my-4">

                <div class="col">
                    <label for="">Buscar por nome</label>
                    <input type="text" name="busca" class="form-control" value="<?=$busca?>">
                </div>

                <div class="col d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>

            </div>
        </form>
    </section>

    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Instrutor</th>
                    <th>Descrição</th>
                    <th>Aulas</th>
                    <th>Horas</th>
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

<main>
    <section>
        <a href="pagina.php">
            <button class="btn btn-primary mt-3">Voltar</button>
        </a>
    </section>
    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">
        <div class="form-group mt-1">
            <label>Nome do curso</label>
            <input type="text" class="form-control" name="courseName" value="<?=$obCourse->course_name?>">
        </div>
        
        <div class="form-group mt-1">
            <label>Nome do instrutor</label>
            <input type="text" class="form-control" name="instructorName" value="<?=$obCourse->course_instructor?>">
        </div>

        <div>
            <label>Descrição</label>
            <textarea name="description" class="form-control mt-1" rows="5"><?=$obCourse->course_description?></textarea>
        </div>

        <div class="form-group mt-1">
            <label>Quantidade de aulas</label>
            <input type="text" class="form-control" name="numberClasses" value="<?=$obCourse->course_numberClasses?>">
        </div>

        <div class="form-group mt-1">
            <label>Carga horária</label>
            <input type="text" class="form-control" name="hours" value="<?=$obCourse->course_hours?>">
        </div>

        <div class="form-group mt-1">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline ps-0">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="1" checked> Ativo
                    </label>
                </div>
                <div class="form-check form-check-inline ps-0" >
                    <label class="form-control">
                        <input type="radio" name="ativo" value="0" <?=$obCourse->course_isActive == '0' ? 'checked' : ''?>> Inativo
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary mt-3 mb-5">Cadastrar</button>
        </div>
        
    </form>

</main>

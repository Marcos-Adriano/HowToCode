<main>
    <section>
        <a href="pagina.php">
            <button class="btn btn-primary mt-3">Voltar</button>
        </a>
    </section>
    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="POST">
        <div class="form-group mt-1">
            <label>Nome do curso</label>
            <input type="text" class="form-control" name="course_name" value="<?=$obCourse->course_name?>">
        </div>
        
        <div class="form-group mt-1">
            <label>Nome do instrutor</label>
            <input type="text" class="form-control" name="course_instructor" value="<?=$obCourse->course_instructor?>">
        </div>

        <div>
            <label>Descrição</label>
            <textarea name="course_description" class="form-control mt-1" rows="5"><?=$obCourse->course_description?></textarea>
        </div>

        <div class="form-group mt-1">
            <label>Quantidade de aulas</label>
            <input type="text" class="form-control" name="course_numberClasses" value="<?=$obCourse->course_numberClasses?>">
        </div>

        <div class="form-group mt-1">
            <label>Carga horária</label>
            <input type="text" class="form-control" name="course_hours" value="<?=$obCourse->course_hours?>">
        </div>

        <div class="form-group mt-1">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline ps-0">
                    <label class="form-control">
                        <input type="radio" name="course_isActive" value='1' checked> Ativo
                    </label>
                </div>
                <div class="form-check form-check-inline ps-0" >
                    <label class="form-control">
                        <input type="radio" name="course_isActive" value='0' <?=$obCourse->course_isActive == '0' ? 'checked' : ''?>> Inativo
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success mt-3 mb-5">Cadastrar</button>
        </div>
        
    </form>

</main>

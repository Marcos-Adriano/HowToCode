<main>
    <section>
        <a href="index.php">
            <button class="btn btn-sucess">Voltar</button>
        </a>
    </section>
    <h2 class="mt-3">Cadastrar curso</h2>

    <form method="post">
        <div class="form-group mt-1">
            <label>Nome do curso</label>
            <input type="text" class="form-control" name="courseName">
        </div>
        
        <div class="form-group mt-1">
            <label>Nome do instrutor</label>
            <input type="text" class="form-control" name="instructorName">
        </div>

        <div>
            <label>Descricao</label>
            <textarea name="description" class="form-control mt-1" rows="5"></textarea>
        </div>

        <div class="form-group mt-1">
            <label>Quantidade de aulas</label>
            <input type="text" class="form-control" name="numberClasses">
        </div>

        <div class="form-group mt-1">
            <label>Carga horária</label>
            <input type="text" class="form-control" name="hours">
        </div>

        <div class="form-group mt-1">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control" >
                        <input type="radio" name="ativo" value="1" checked> Ativo
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="0"> Inativo
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary mt-3 mb-5">Cadastrar</button>
        </div>
        
    </form>

</main>

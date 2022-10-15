<main>

    <div class="container bg-warning text-dark rounded p-4 pt-2">
        <h2 class="mt-3">Excluir curso</h2>

        <form method="post">
            <div class="form-group mt-1">
                <p>Você deseja realmente excluir o curso <strong><?=$obCourse->course_name?></strong>?</p>
            </div>
            
            <div class="form-group mt-1">
                <a href="pagina.php">
                    <button type="button" class="btn btn-success">Cancelar</button>
                </a>
                <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
            </div>

        </form>
    </div>

</main>

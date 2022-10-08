<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width= , initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>LOGIN</title>
    </head>

    <body>
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="mx-auto">
                    
                    <form id="form_login" action="login.php" method="post" class="p-4 p-md-5 border rounded-3 bg-light" >
                        <h2 class="mb-5">Faça o login</h2>
                        <input type="email" name="email" id="email" placeholder="Digite seu email" class="form-control">
                        <input type="password" name="password" id="senha" placeholder="Digite sua senha" class="form-control">
                        <input type="submit" value="Entrar" id="entrar" class="btn btn-lg btn-primary">
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center mt-5" >
                <section class="col-12 colsm-6 col-md-4" >
                    <form class="form-container" action="course.php" method="POST" style="border: 2px solid #f1610d;">
                        <h4 class="text-center mt-4"style="color: #ff9933;">Login</h4><br>
                        <div class="form-group">
                            <input type="email"  class="form-control" name="email" placeholder="Nome" style="border: 1px solid #f1610d;"><br>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Senha" style="border: 1px solid #f1610d;"><br>
                        </div>
                        
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="checkbox" style="border: 1px solid #f1610d;">
                            <label class="form-check-label mb-2" style="color: #f1610d;">Lembre-me</label><br>
                        </div>
                        <button class="btn btn-primary btn-block" style="border: 1px solid #f1610d; background-color: #f1610d;">Entrar</button>
                    </form>
                </section>
            </div>
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</html>

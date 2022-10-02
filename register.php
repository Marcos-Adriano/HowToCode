<?php
require_once "config.php";

$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["email"]))){
        $email_err = "Por favor coloque um nome de usuário.";
    } else{
        $sql = "SELECT id FROM users WHERE user_email = :email";
        
        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            
            $param_email = trim($_POST["email"]);
            
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $email_err = "Este nome de usuário já está em uso.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }
            unset($stmt);
        }
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor insira uma senha.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "A senha deve ter pelo menos 6 caracteres.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor, confirme a senha.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "A senha não confere.";
        }
    }
    
    if(empty($email_err) && empty($password_err) && empty($confirm_password_err)){

        $sql = "INSERT INTO users (user_email, password) VALUES (:email, :password)";
         
        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            

            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            

            if($stmt->execute()){

                header("location: login.php");
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }


            unset($stmt);
        }
    }
    

    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        
        <style>
            body{ font: 14px sans-serif; }
            .wrapper{ width: 360px; padding: 20px; }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row justify-content-center mt-5" >
                <section class="col-12 colsm-6 col-md-4" >
                    <div class="wrapper" style="color: #f1610d; border: 2px solid #f1610d; border-radius: 5px; background: rgba(31, 28, 27, 0.966);">
                        <h2>Cadastro</h2>
                        <p>Por favor, preencha este formulário para criar uma conta.</p>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control mb-2 <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" style="border: 1px solid #f1610d;" value="<?php echo $email; ?>">
                                <span class="invalid-feedback"><?php echo $email_err; ?></span>
                            </div>    
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" name="password" class="form-control mb-2 <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" style="border: 1px solid #f1610d;" value="<?php echo $password; ?>">
                                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                            </div>
                            <div class="form-group">
                                <label>Confirme a senha</label>
                                <input type="password" name="confirm_password" class="form-control mb-3 <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" style="border: 1px solid #f1610d;" value="<?php echo $confirm_password; ?>">
                                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                            </div>
                            <div class="form-group mb-2">
                                <input type="submit" class="btn" style="border: 1px solid #f1610d; background-color: #f1610d" value="Criar Conta">
                                <input type="reset" class="btn btn-secondary ml-2" value="Apagar Dados">
                            </div>
                            <p>Já tem uma conta? <a href="login.php">Entre aqui</a>.</p>
                        </form>
                    </div>  
                </section>
            </div>
        </div>

    </body>
</html>
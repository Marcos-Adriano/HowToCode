<?php

    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=courses_plataform", 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Conexão bem sucedida!";

        $stmt = $pdo->prepare("SELECT user_id FROM user WHERE user_email=:email AND user_password=md5(:password)");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll();

        $qtd_usuarios = count($result);
        if($qtd_usuarios == 1){
            echo "Usuário encontrado!";
            
        }
        else if($qtd_usuarios == 0){
            echo "Usuário NÃO encontrado!";
            exit;
        }

    }
    catch(PDOException $e) {
        echo "A conexão falhou!: " . $e->getMessage();

    }

    $pdo = null;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/7212/7212801.png">
    <title>The Selection Reviews</title>


    <style>
        body, html{
          background-image: linear-gradient(to right, #659493, #172236);
          font-family: 'Bitter', serif;
        }
    
        .area_login{
          border: 1px solid black;
          position:absolute;
          top:40%;
          left:50%;
          transform: translate(-50%,-50%);
          background-image: linear-gradient(to right, #86b0af, #455e87);
          box-shadow: 2px 2px 4px 0 #08101f;
          padding: 20px;
          border-radius: 15px;
          width: 400px;
          font-family: 'Bitter', serif;

        }
         h2{
          text-align: center;
        }
        
        h1{
          padding: 10px;
          text-align:  justify;
          margin:20px;
        }

        input{
          width: 380px;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
        }
         
        input:hover{
          background: #E0FFFF;
        }


        button{
          background:#588786;
          border-radius: 15px;
          border: 1px solid black;
        }

        button:hover{
          background: #497372;
          cursor: pointer;
        }

        .resultado{
         margin: 15px;
         width: 300px;
         font-family: 'Bitter', serif;
         font-size: 15px;
        }

        @media screen and (max-width:780px){
       .diferencial-single{
        width: 100%;
        margin-bottom: 20px;
         }
      }
    </style>
<script>
    function abrir(){
      alert("Login sendo realizado...")
    }
  </script>

</head>
<body>
   <h1>THE SELECTION REVIEWS</h1>
    <div class = "area_login">
        <h2>Realize o Login</h2>
       <form action="" method="post">
            <label for="nome" class="form-label">USUÁRIO:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
            <br><br>
            <label for="email" class="form-label">EMAIL:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
            <br><br>
            <label for="senha" class="form-label">SENHA:</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
            <br><br>
            <button type="submit" value="Enviar" onclick="abrir()">Enviar</button>
        </form>
          </div>
        
       <div class ="resultado" >
       <?php
          //nome deve ser maiores ou iguais a 4 carateres
          //senha deve ser menos ou igual a 10 caracteres
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $nome = $_POST["nome"];
         $email = $_POST["email"];
         $senha = $_POST["senha"];

      if (strlen($nome) >= 4) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (strlen($senha) >= 10) {
                echo "Login válido!";
                header("Location: html/livros.html");
                exit;
            } else { 
                echo '<span style="font-size: 18px;"><b>Login inválido!</b></span><br>';
                echo "<u>Por favor, verifique as seguintes informações:</u> <br>";
                echo "A senha deve ter pelo menos 10 caracteres.<br>";
                echo "O email fornecido não é válido.<br>";
                echo "O usuário deve ter pelo menos 4 caracteres.<br>";
            }
               }
            }
          }
        ?>
     </div>
</body>
</html>
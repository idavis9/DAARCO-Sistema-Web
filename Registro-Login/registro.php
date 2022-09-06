<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $email = $password = $confirm_password = "";
$username_err = $email_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor ingrese un usuario.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM usuarios WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Este usuario ya fue tomado.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Al parecer algo salió mal.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }


     // Validate email
     if(empty(trim($_POST["email"]))){
        $email_err = "Por favor ingrese un correo.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM usuarios WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "Este correro ya esta en uso.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Al parecer algo salió mal.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }

    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor ingresa una contraseña.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "La contraseña al menos debe tener 6 caracteres.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Confirma tu contraseña.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "No coincide la contraseña.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Algo salió mal, por favor inténtalo de nuevo.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Principal/style4.css">
    <link rel="stylesheet" href="style-login2.css">
    <title>Document</title>
</head>
<body>
    <?php
        include_once '../Principal/index.php';
    ?>

<div class="contenedor" style="margin-top: 0px;">
        <div class="sub-contenedor">

        <div class="img-login">
                <img src="../img/logotipo2.png" alt="Logo de la marca"> <br> <br>
            </div>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
        <label>Usuario</label>
        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
        <span class="help-block" style="color: red;"><?php echo $username_err; ?></span>
    </div>   

    <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
        <label>Correo</label>
        <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
        <span class="help-block" style="color: red;"><?php echo $email_err; ?></span>
    </div>  

    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
        <label>Contraseña</label>
        <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
        <span class="help-block" style="color: red;"><?php echo $password_err; ?></span>
    </div>

    <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
        <label>Confirmar Contraseña</label>
        <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
        <span class="help-block" style="color: red;"><?php echo $confirm_password_err; ?></span>
    </div> <br>

    <div class="form-group" style="text-align: center;">
        <input type="submit" class="btn" value="Ingresar" style="background-color: #681319; color: white;">
        <input type="reset" class="btn" value="Borrar" style="background-color: black; color: white;">
    </div> <br>
    <p>¿Ya tienes una cuenta? <a href="login.php">Ingresa aquí</a>.</p>

</form>

    </div>
</div> 
    
</body>
</html>

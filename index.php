<?php
	require 'register.php';
	require 'csrf.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN Using CSRF Token</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>
<body class="align">

    <div class="grid">
  
      <form action="index.php" method="post" autocomplete="off" class="form login">
  
        <header class="login__header">
          <h3 class="login__title">Login</h3>
        </header>
        
        <div class="login__body">
            <div>
                <?= $error ; ?>
                <!--file  CSRF	-->
                <input type="hidden" name="token" value="<?=csrf_token();?>" />
            </div>
            <div class="form__field">
                <input type='text' name='username' id='email' placeholder='username'/>
            </div>
    
            <div class="form__field">
                <input type='password' name='password' id='password' placeholder='password'/>
            </div>
        </div>
  
        <footer class="login__footer">
            <input type='submit' name='submit' value='login'/>
          <p><span class="icon icon--info">?</span><a href="#">Dont't have an account?</a></p>
        </footer>
  
      </form>
  
    </div>
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
  </html>
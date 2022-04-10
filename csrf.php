<?php
$token  ='';

function csrf_token()
    {
    $token = bin2hex( random_bytes(32));
    $_SESSION['token'] = $token;
    return $token;
    }

// validate token empty
if (isset($_POST['token']) && empty($_POST['token']))
    {
    $error .= "<div class='alert alert-danger text-center' role='alert'>CSRF token missing</div>";
    }
elseif ($_POST['token'] != $_SESSION['token'])
    {
    $error .= "<div class='alert alert-danger text-center' role='alert'>Incorrect CSRF token</div>";

    }
else
{
        // validate username empty
    if(isset($_POST['username']) && empty($_POST['username']))
        {
            $error .= "<div class='alert alert-danger text-center' role='alert'>Username is invalid, please try again.</div>";
        }
    else
        {
            // validate
            if(!preg_match("/^[a-zA-Z ]*$/", $_POST['username']))
            {
            $error  .= "";
            }
        }
       // validate password empty
       if(isset($_POST['password']) && empty($_POST['password']))
            {
                $error .= "<div class='alert alert-danger text-center' role='alert'>Password is invalid, please try again.</div>";
            }
       else
            {
                // validate
                if(!preg_match("/^[a-zA-Z ]*$/", $_POST['password']))
                {
                $error  .= "";
                }
            }
}









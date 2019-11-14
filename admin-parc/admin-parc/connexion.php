<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>page connexion</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="tableau de bord"> 

<img  class="images" src="images/logo.png">

                    </a>
                </div>
                <div class="login-form">
                    <form method="post" action="connexion.php">
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" class="form-control" placeholder="Email" name="email" required="veuillez saisir ce champs svp">
                        </div>
                            <div class="form-group">
                                <label>mot de passe</label>
                                <input type="password" class="form-control" placeholder="mot de passe" name="password" required="veuillez saisie ce champs svp">
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox"> se souvenir
                            </label>
                                    <label class="pull-right">
                                <a href="#">mot de passe oublie?</a>
                            </label>

                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30"  name="valider">connexion</button>
                                
                                <div class="register-link m-t-15 text-center">
                                    <p>pas de compte ? <a href="#"> s'inscrire ici</a></p>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



<? php



// On met en variables les informations de connexion 
 // Adresse du serveur 
$login = 'root'; // Login 
$pass = ''; // Mot de passe 
 
// On se connecte à la base de données 
try

{

$bdd= new pdo('mysql: host=localhost;dbname=parc',$login,$pass);

catch (PDOException $e) {
    print_r("error_log("erreur")") ;

    die();
}



}

$result= $bdd->query('select nom from user2');
$donnee=$result->fetch();

echo $donnee;





 






 







?>























    


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>

    <?php
require 'function.php';


if(!isset($_SESSION['login'])){
    // yaudah jadi 
} else {
    // sudah login 
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <style>
body {
  background-image: url('putra.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 1000px;
} 
</style>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-4 text-center">

                    <div class="mb-md-5 mt-md-4 pb-5">
                    
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    <p class="text-white-50 mb-4">Please Username your login and password!</p>


                                        <form method="post">
                                            <div class="fform-group">
                                            <label class="small mb-2" for="inputEmailAddress">Username</label>
                                            <input class="form-control py-4 id" id="inputEmailAddres" name = "username" type="text" placeholder="Enter username" required />
                                                
                                            </div>
                                            <div class="fform-group">
                                            <label class="small mb-1"for="inputPassword">Password</label>
                                            <input class="form-control py-4 id" id="inputPassword" name="password" type="password" placeholder="Enter Password" required />
                                               
                                            </div>
                                           
                                            <div class="d-flex align-items-center justify-content-center mt-4">
                                            <div class="d-grid gap-2">
		
                                                <button type ="submit"class name="login" class="btn btn-primary" >Login</button>
                                            </div>
                                        </form>


                                        
                                    </div>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>



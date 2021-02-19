<?php
    if(isset($_POST['add'])){
        if(isset($_POST['username'], $_POST['email'], $_POST['password']) AND !empty($_POST['username']) AND !empty($_POST['email']) AND !empty($_POST['password'])){

        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = md5($_POST['password']);
        $priority = 1;

        //Database connection
        $servername = "localhost";
        $usernamedb = "root";
        $passworddb = "";

        try {
          $conn = new PDO("mysql:host=$servername;dbname=fruitful_well", $usernamedb, $passworddb);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //$message = "Connected successfully";
        } catch(PDOException $e) {
          $message = "Connection failed: " . $e->getMessage();
        }

        $sql = "INSERT INTO users (username, email, password, priority)
        VALUES (:username, :email, :password, :priority)";

        $req = $conn->prepare($sql);
        $req->bindValue(':username', $username);
        $req->bindValue(':email', $email);
        $req->bindValue(':password', $password);
        $req->bindValue(':priority', $priority);

        $req->execute();

        $message =  "User add";
    }
    else{
        $message =  "Fill all the fields";
    }
}

else{
    $message = "Please fill the form";
}
?>
<?php
    require('./templates/header.php');
    require('./templates/menu.php');
?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">New user</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">User Information</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label for="username" class="control-label mb-1">Username</label>
                                                <input type="text" id="username" name="username" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                             <div class="form-group">
                                                <label for="email" class="control-label mb-1">Email</label>
                                                <input type="email" id="email" name="email" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                             <div class="form-group">
                                                <label for="password" class="control-label mb-1">Password</label>
                                                <input type="password" id="password" name="password" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div>
                                                <button id="add" type="submit" name="add" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Create user</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>User</strong>
                                        <small> <?=  $message; ?></small>
                                    </div>
                                    <div class="card-body card-block">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
     <?php
    require('./templates/footer.php');
?>
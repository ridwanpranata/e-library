<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - E Library</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register</h3></div>
                                    <div class="card-body">
                                        <?php
                                            if(isset($_POST['register'])){
                                                $name = $_POST['name'];
                                                $username = $_POST['username'];
                                                $password = md5($_POST['password']);
                                                $email = $_POST['email'];
                                                $address = $_POST['address'];
                                                $level = $_POST['level'];

                                                $query = "INSERT INTO user(name, username, password, email, address, level) VALUES('$name', '$username', '$password','$email', '$address','$level')";
                                                $insert = mysqli_query($connection, $query);
                                                if($insert) {
                                                    echo '<script>alert(`Register Success! Now you can login with new Account:)`); location.href="login.php"</script>';
                                                } else {
                                                    echo '<script>alert(`Register Failed. Please Try Again`);</script>';
                                                }
                                            }
                                        ?>
                                        <form method="post">
                                            <div class="form-group mb-3">
                                                <label class="small mb-1" for="name">Name</label>
                                                <input class="form-control" required id="name" name="name" type="text" placeholder="Name" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small mb-1" for="username">Username</label>
                                                <input class="form-control" required id="username" name="username" type="text" placeholder="example_name" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small mb-1" for="password">Password</label>
                                                <input class="form-control" required id="password" name="password" type="password" placeholder="Password" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small mb-1" for="email">Email</label>
                                                <input class="form-control" required id="email" name="email" type="email" placeholder="email" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small mb-1" for="address">Address</label>
                                                <textarea class="form-control" required name="address" id="address" cols="30" rows="5"></textarea>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="small mb-1" for="level">Level</label>
                                                <select name="level" id="level" class="form-control form-select">
                                                    <option value="administrator">Administrator</option>
                                                    <option value="peminjam">Peminjam</option>
                                                </select>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a href="login.php" class="btn btn-secondary" >Login</a>
                                                <button type="submit" class="btn btn-primary" name="register" value="register">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

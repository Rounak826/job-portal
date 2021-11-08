
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background: url(images/job_portal_bg5.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            display:flex;
            align-content: center;
            justify-content: center;
        }
        .register{
            margin-top: 3em;
            padding: 30px;
            width:40%;
            background-color: #ffffff;
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        }
        
    </style>
    <title>Register</title>
  </head>
  <body>
        <div class="register">
            <form action='config.php' method="POST">
                <div class="mb-3">
                    <label for="Name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="Name" name="name">
                </div>
                <div class="mb-3">
                    <label for="Email1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="number" name="phone_no">
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="Password" name="password">
                </div>
                <div class="mb-3">
                    <label for="cPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="cPassword">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <br>
                Already Registered? <a href="login.php">Login here</a>
            </form>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
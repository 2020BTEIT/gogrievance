 <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/10.png');
            background-repeat: no-repeat;
            background-size:contain,cover;
        }
    </style>
</head>

<body>
    <h1 align='center' style="margin: 15px; color:blue;font-weight: bold;font-family:'Times New Roman', Times, serif">Grievance management</h1>
    <hr />
    <P align='center' style="font-weight: bold;color:orange;font-family:'Times New Roman', Times, serif"></P>
    <div>
        <h5><a href="admin/adminlogin.php" style="float: right; margin-right:40px; color:coral; margin-top:0px">AdminLogin</a></h5>
    </div>
    <div class="container" style="margin-top: 60px; width:50%;">
        <div class="row">
            <div class="col-md-12">
                <h2 style="color: #273c75;">Login</h2>
                <p style="color:#e84118;">Please Fill Your ⮯⮯</p>
                <!-- <?php echo $error; ?> -->
                <form action="" method="post">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter username/emailId" required />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Sign in" />
                        <button onclick="window.location.href='resetpswd.php'" class="btn btn-danger" style="cursor:pointer">Reset Password</button>
                    </div>
                    <p style="color: #e84118;">Don't have an account?⮞➤ <a href="register.php">Register here</a>.</p>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
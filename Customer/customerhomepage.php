<html>
<head>
    <link rel="title icon" type="image/x-icon" href="style/images/favicon.ico" />
    <!-- Bootstrap -->
    <link href = "style/css/bootstrap.min.css" rel = "stylesheet">
    <title>Online Bus Ticketing</title>


    <link rel="stylesheet" href="style/css/styles.css">
</head>
<body id="bgbody" >

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="common/routelist.php">Search Routes</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>

                <li>
                    <a href="customer/bookings.php">Bookings</a>
                </li>

                <li>
                    <a href="index.html">Sign Out</a>
                </li>

                <li>
                    <a href="Administrator/adminhomepage.php" >Admin test</a>
                </li>

                <li>
                    <a href="Register/add-record-form.php" style="text-align:right;position:fixed;">SignUp</a>
                </li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<h1><?php session_start();echo $_SESSION['role_id'] ;?></h1>



</body>
</html>
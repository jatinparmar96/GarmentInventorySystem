<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        .grad-bg{
            background: #283048;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #859398, #283048);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #859398, #283048); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



        }
    </style>

</head>

<body class="gray-bg grad-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div style="display: flex;justify-content: center;align-content: center;flex-direction: row;align-items: baseline">

                <h1 class="logo-name" style="color: white">SANSKRUTI</h1>

                <h2 style="color: white">&nbsp;<b>Garments</b></h2>

            </div>
            <h3 style="color: white">Welcome </h3>
            <p style="color: white">Login in. To see it in action.</p>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            </form>
            <p style="color: white" class="m-t">
                <small>Crafted at</small>
                <a href="http://deraiya.com"><b style="color: white"><h3>Déraiya Systems</h3></b></a>

            </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

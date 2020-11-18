<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Be A Helping Hand- Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <style>
        .button{
            background-color: black;
            border: none;
            color: white;
            padding: 15px 30px;
            text-align: center;
            display: inline-block;
            font-size: 24px;
            margin: 2px 2px;
            cursor: pointer;
        }
    </style>


</head>

<body>

    <div class="brand">Be A Helping Hand</div>
    <h4><div class="address-bar">Save Them All!</div></h4>
	
    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">HOW TO
                        <strong>Be A Helping Hand</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/cov.jpg" alt="">
                    <hr class="visible-xs">
                    <p>The Corona virus has locked people inside their homes, caused the death of thousands of individuals and is now hurting animals. These furry four-legged creatures are suffering as the lockdown has left them wandering on the streets for food.<br>DONATE to help these animals to live  their best life and be the best friend to these fury friends.<br><b>So what are you waiting for? DONATE NOW!</b></p>
                    <div class="form-group col-lg-12 text-center">
                                <a href="donate.php" class="button"><b>DONATE</b></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/support.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/cat.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/dog.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h1 class="brand-name">Be A Helping Hand</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>Save These  
                            <strong>Precious Animals</strong>
                        </small>
                    </h2>
                    <div class="form-group col-lg-12 text-center">
                                <a href="donate.php" class="button"><b>DONATE</b></a>
                    </div>
                </div>
            </div>
        </div>

    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Be A Helping Hand 2020<br>This Website is made by <em><u>Vaishnavi Rastogi</u></em> while doing internship in <em><u>The Sparks Foundation (TSF)</u></em></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>

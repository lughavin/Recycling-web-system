<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Pooria Atarzadeh" />
    <title>EcoSave - Main Page</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap-grid.min.css" rel="stylesheet" />
    <link href="./css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet" />
</head>

<body>
    <header id="header-bg">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href=""><b>Recyclables</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                <span>
            <button class="btn" data-toggle="modal" data-target="#loginModal"><b>
              Login</b>
            </button>
          </span>
            </div>
        </nav>

        <!-- The modal for login-->

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Login</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="CodeLogin.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <div>
                                    &nbsp;
                                </div>

                                <label for="recipient-name" class="col-form-label">Username:</label>
                                <input type="text" class="form-control" name="username" />
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Password:</label>
                                <input type="password" class="form-control" name="password" />
                            </div>

                            <div>
                                <p>
                                    Dont have an account?
                                    <a href="./register.php"><b>Register here</b></a>
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="login" class="btn btn-lg btn-dark"><b>Login</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- The header on top (only on the main page)-->

        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    
                    <blockquote class="blockquote text-center">
                          <b style="font-size:300%; text-shadow: 2px 2px #0000FF;">E C O S A V E</b>
                    
                        
                    </blockquote>
                </div>
            </div>
        </div>
    </header>

    <div class="container" id="main">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <img src="https://kbimages1-a.akamaihd.net/0ef2702c-fcb4-448b-90fa-d785d46f3dfd/353/569/90/False/save-the-planet-reduce-reuse-and-recycle-2.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <p class="card-text">
                            Recycling is often portrayed within environmentalist literature as integral to the conception of an alternative society founded on small-scale community based industries and commune type human settlements. The aims is to create self-sufficient sustainable urban communities based around local production for local consumption from local resources.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <img src="https://www.waste360.com/sites/waste360.com/files/GlobalRecyclingDay-2019.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <p class="card-text">
                            Recycling is more than just a response to the environmental crisis and has assumed a symbolic role in beginning to change the nature of western societies and the culture of consumerism. Indeed many environmentalists assume that there will be an inevitable shift from our "throwaway" society to a post-industrial "recycling" society of the future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="main-footer">
        <div class="row">
            <div class="col-9">
                <small>Made in Help University &copy; 2019</small>
            </div>

            <div class="col-1">
                <a href="#">Home</a>
            </div>
            <div class="col-1">
                <a href="#">About</a>
            </div>
            <div class="col-1">
                <a href="#">Contact</a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.bundle.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="Pooria Atarzadeh" />
    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap-grid.min.css" rel="stylesheet" />
    <link href="./css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet" />
  </head>
  <body>
    <header id="header-bg" class="mini">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="./index.php">MHS</a>
      </nav>
    </header>

    <div class="container" id="main">

      <div class="row">
  
        <div class="col-2"></div>
        <div class="col-8">
          <h2>Registration</h2>
            <p class="mb-0">
                Please key in your details to register into our platform. You would require a user account to access any of the housing solutions.
            </p>
          <br />
          <div id="newResidenceFormContainer">
          <form method="post" id="registerForm" action="./CodeRegister.php">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="resId">username:</label>
                <input
                  class="form-control"
                  type="text"
                  name="username"
                  required
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-12>
              <div class="form-group">
                <label for="passInput">Password: </label>
                <input
                  class="form-control"
                  name="password"
                  type="password"
                  required
                />
              </div>
            </div>
            <div class="row">
            <div class="col-md-6 col-sm-12>
              <div class="form-group">
                <label for="passInput">Full Name: </label>
                <input
                  class="form-control"
                  name="fullname"
                  type="text"
                />
              </div>
            </div>
            <div class="row">
            <div class="col-md-6 col-sm-12>
              <div class="form-group">
                <label for="passInput">Email: </label>
                <input
                  class="form-control"
                  name="email"
                  type="email"
                  required
                />
              </div>
            </div>
            <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="passInput">Monthly Income: </label>
                <input
                  class="form-control"
                  name="monthlyincome"
                  type="text"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="passInput">STAFF ID: </label>
                <input
                  class="form-control"
                  name="staffId"
                  type="text"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label>Membership type:</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="userRadio"  value="applicant" >
                  <label class="form-check-label" >
                    Applicant
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="userRadio" value="officer">
                  <label class="form-check-label">
                    Housing Officer
                  </label>
                </div>
                
              </div>
            </div>

          </div>

          <br />
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
        </div>
       
      </div>
       </form>
    </div>

    <footer id="main-footer">
      <div class="row">
        <div class="col-9">
          <small>Made in Help University &copy; 2019</small>
        </div>

        <div class="col-1">
          <a href="./index.php">Home</a>
        </div>
        <div class="col-1">
          <a href="#">About</a>
        </div>
        <div class="col-1">
          <a href="#">Contact</a>
        </div>
      </div>
    </footer>

    <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
  </body>
</html>

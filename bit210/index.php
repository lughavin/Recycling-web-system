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
    <title>Housing - Main Page</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap-grid.min.css" rel="stylesheet" />
    <link href="./css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet" />
  </head>
  <body>
    <header id="header-bg">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="">Recyclables</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
          <span>
            <button class="btn" data-toggle="modal" data-target="#loginModal">
              Login
            </button>
          </span>
        </div>
      </nav>

      <!-- The modal for login-->

      <div
        class="modal fade"
        id="loginModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="CodeLogin.php">
              <div class="modal-body">
                <div class="form-group">
                  <div>
                   &nbsp;
                  </div>

                  <label for="recipient-name" class="col-form-label"
                    >Username:</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    name="username"
                  />
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label"
                    >Password:</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    name="password"
                  />
                </div>
                
                <div>
                  <p>
                    Don't have an account?
                    <a href="./register.php">Register here</a>
                  </p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" name="login" class="btn btn-lg btn-dark">Login</button>
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
              <h1 style="color: black;">Recyclables</h1>
              <p style="color: black;"><b>
                Save the planet lets all go green and reccyle as much as we can!</b>
              </p>
            </blockquote>
          </div>
        </div>
      </div>
    </header>

    <div class="container" id="main">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <img
              src="https://kbimages1-a.akamaihd.net/0ef2702c-fcb4-448b-90fa-d785d46f3dfd/353/569/90/False/save-the-planet-reduce-reuse-and-recycle-2.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">
                Issues of housing supply, affordability, and home ownership have
                been in focus of late. In a special report, The Edge examines
                the issue in detail. Statistics suggest there are enough houses
                built, with property developers churning them out at a rate that
                more than keeps pace with population growth.
              </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <img
              src="https://www.waste360.com/sites/waste360.com/files/GlobalRecyclingDay-2019.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-text">
                Countries with smaller household size (< 3 persons per
                household) are mostly developed nations. Factors include
                demographics (aging versus young population), culture (there
                would be more multi-generational families under one roof in
                Asia) and crucially, income levels. Countries with higher GNI
                per capita have lower household sizes.
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

    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="./js/bootstrap.bundle.js"></script>
  </body>
</html>

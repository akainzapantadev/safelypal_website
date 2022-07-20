<!doctype html>
<html lang="en">
  <head>
    <?php include 'srcs.php';?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1 ,maximum-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <title class="main-color">SafelyPal</title>
  </head>
  <body>
    <!-- nav section /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <nav class="navbar navbar-expand-md">
        <div class="container">
          <div class="navbar-brand">
            <img class="dnone" src="assets/imgs/safetypal_logo.png">
            <img src="assets/imgs/safetypal_main_logo.png">
          </div>
      </nav>
    <!-- nav section end//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- splash section //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1579547621113-e4bb2a19bdd6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=639&q=80" class="w-100 img-fluid">
        <div class="card-img-overlay text-center p-5">

          </div>
        </div>
      </div>
    <!-- splash section end///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- main section ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <main>
        
      </main>
    <!-- main section end/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- footer section //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <div id="footer_container">
        <footer class="py-5 container">
          <style>
            footer {
              display: block;
              color : black!important;
            }
            .subscribe_btn{
              background-color: var(--main-color);
              color: var(--light-color);
            }
          </style>
          <div class="row">
            <div class="col-lg-2 col-sm-4 px-5 py-2">
              <h5 class="">Guides</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 sec-link">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 sec-link">Claim rewards</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 sec-link">Buy crypto</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-sm-4 px-5 py-2">
              <h5 class="">Features</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 sec-link">App</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 sec-link">Mining</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 sec-link">Games</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-sm-4 px-5 py-2">
              <h5 class="">Mentions</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a target="_blank" class="nav-link p-0 sec-link" href="https://icons8.com"><span>Icons by Icons8</span></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 sec-link">arldev design</a></li>
              </ul>
            </div>

            <div class="col-lg-4 offset-1 col-sm-12 py-2">
              <form id="subscribe_form">
                <h5 class="">Subscribe to our newsletter</h5>
                <p class="text-muted">Monthly digest of whats new and exciting from us.</p>
                <div class="d-flex w-100 gap-2">
                  <label for="" class="visually-hidden">Email address</label>
                  <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 py-3 pt-1"><input id="email" name="email" type="email" class="form-control email-media" placeholder="Email address"></div>
                    <div class="col-xs-12 col-md-4 col-md-4 py-3 pt-1"><button class="btn subscribe_btn" type="submit">Subscribe</button></div>
                </div>
              </form>
            </div>
          </div>

          <div class="d-flex justify-content-center py-4 my-4 border-top">
            <p class="">© <span id="year_now"></span> <span class="sec-link">SafelyPal</span>. All rights reserved.</p>
            
          </div>
        </footer>
      </div>
    <!-- footer section end///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  </body>
</html>


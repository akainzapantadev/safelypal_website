<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap%27');
      body, html{
	    font-family: var(--main-font);
      }
      *, ::after, ::before {
      box-sizing: border-box;
      }
      .dnone{display:none;}
      .round-btn{
        border-radius: 50px!important;
      }
      footer {
        display: block;
      }
      .subscribe_btn{
        background-color: var(--main-color);
        color: var(--light-color);
      }
      :root {
        --light-color: #F3F8F8;
        --dark-main-color: #220e5d;
        --black-color: #0c0c0c;
        --main-color: #5426de;
        --sec-color: #b0de26;
        --main-font: 'Poppins', sans-serif;
        --sec-font: 'JetBrains Mono', monospace;
      }
      .main-color{color:#5426de;}
    </style>

    <title>Safety Pal</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <div class="navbar-brand">
          <img class="dnone" src="assets/imgs/safetypal_logo.png">
          <img src="assets/imgs/safetypal_main_logo.png">
        </div>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Guides</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Explore</a>
            </li>
          </ul>
        </div>
        <button class="button-splash round-btn">Download APK ></button>
        <i class="fa fa-bars fa-inverse dnone" aria-hidden="true"></i>
      </div>
    </nav>
  
    <div class="card">
      <img src="https://images.unsplash.com/photo-1579547621113-e4bb2a19bdd6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=639&q=80" class="w-100 img-fluid">
      <div class="card-img-overlay text-center p-5">
        <div id="splash_container" class="mt-5">
          <span class="splash-text">Safetypal Wallet</span>
          <p class="splash-subtext">A multi network wallet where you can stake, play, and earn crypto!</p>
          <div class="splash-buttons mt-5">
            <button class="button-splash mx-5">Learn more</button>
            <button class="button-splash mx-5">Get safetypal</button>
          </div>
        </div>
      </div>
    </div>

    <footer class="py-5 container">
    <div class="row">
      <div class="col-2">
        <h5>Guides</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Claim rewards</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Buy crypto</a></li>
        </ul>
      </div>

      <div class="col-2">
        <h5>Features</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">App</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Mining</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Games</a></li>
        </ul>
      </div>

      <div class="col-2">
        <h5>Explore</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blogs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Crypto news</a></li>
        </ul>
      </div>

      <div class="col-4 offset-1">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of whats new and exciting from us.</p>
          <div class="d-flex w-100 gap-2">
            <label for="" class="visually-hidden">Email address</label>
            <input id="" type="text" class="form-control" placeholder="Email address">
            <button class="btn subscribe_btn" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex justify-content-between py-4 my-4 border-top">
      <p>© <span id="year_now"></span> <span class="main-color">Safetypal</span>. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>

<script>
  const d = new Date();
  let year = d.getFullYear();
  document.getElementById("year_now").innerHTML = year;
</script>
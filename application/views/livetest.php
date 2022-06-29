<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
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
      .dnone{display:none;}
      .round-btn{border-radius: 50px!important;}
      .border-test{border:2px solid yellow}
    </style>

    <title>Safety Pal</title>
  </head>
  <body>
    <!-- nav section /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <nav class="navbar navbar-expand-md">
      <style>
        .navbar{
          /* background-color: rgba(0, 0, 0, 0.3)!important; */
          background-color: var(--black-color)!important;
          height: 80px;
          z-index: 1;
        }
        .navlink{
          font-family: "JetBrains Mono",monospace;
          font-weight:normal;
          color: var(--light-color)!important;
          font-size:1.2rem;
          padding-left: 2rem!important;
        }
        .nav-link:hover {
          color: var(--main-color)!important;
        }
        .navbar-brand img{
          height: 48px !important;
        }
      </style>
      <div class="container">
        <div class="navbar-brand">
          <img class="dnone" src="assets/imgs/safetypal_logo.png">
          <img src="assets/imgs/safetypal_main_logo.png">
        </div>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link navlink" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navlink" href="#">Guides</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navlink" href="#">Explore</a>
            </li>
          </ul>
        </div>
        <button class="button-splash round-btn">Download APK ></button>
        <i class="fa fa-bars fa-inverse dnone" aria-hidden="true"></i>
      </div>
    </nav>
    <!-- splash section /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="card">
      <style>
          .card{
            border:0!important;
            /* top: -80px; */
          }
          .card img{
              object-fit: cover;
              height:40rem!important;
          }
          .card .card-img-overlay {
              background: linear-gradient(0deg, var(--main-color)  0%, rgba(0, 0, 0, .7) 100%);
              border-color:transparent;
          }
          .splash-text{
            color: var(--light-color)!important;
            font-weight: bold!important;
            font-size: 6rem !important;
            margin-top:2rem;
          }
          .splash-subtext{
            font-size: 1.2rem !important;
            color: var(--sec-color)!important;
          }
          .splash-buttons{
            margin:auto 0!important;
          }
          .button-splash {
            align-items: center;
            appearance: none;
            background-color: #FCFCFD;
            border-radius: 4px;
            border-width: 0;
            box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
            box-sizing: border-box;
            color: #36395A;
            cursor: pointer;
            display: inline-flex;
            font-family: var(--sec-font)!important;
            height: 48px;
            min-width: 12rem!important;
            justify-content: center;
            line-height: 1;
            list-style: none;
            overflow: hidden;
            padding-left: 16px;
            padding-right: 16px;
            position: relative;
            text-align: left;
            text-decoration: none;
            transition: box-shadow .15s,transform .15s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            will-change: box-shadow,transform;
            font-size: 18px;
          }
          .button-splash:focus {
            box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
          }
          .button-splash:hover {
            box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
            font-weight: bold;
            transform: translateY(-2px);
          }
          .button-splash:active {
            box-shadow: #D6D6E7 0 3px 7px inset;
            transform: translateY(2px);
            background-color: #FCFCFD;
            color: var(--dark-main-color);
          }
          #splash_container{
            padding-top: 8rem;
          }
      </style>
      <img src="https://images.unsplash.com/photo-1579547621113-e4bb2a19bdd6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=639&q=80" class="w-100 img-fluid">
      <div class="card-img-overlay text-center p-5">
        <div id="splash_container" class="mt-5">
          <span class="splash-text">SafetyPal Wallet</span>
          <p class="splash-subtext">A multi network wallet where you can stake, play, and earn crypto!</p>
          <div class="splash-buttons mt-5 p-5">
            <button class="button-splash mx-5">Learn more</button>
            <button class="button-splash mx-5">Get safetypal</button>
          </div>
        </div>
      </div>
    </div>
    <!-- main section /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <main>
      <div id="main_container" class="p-1 mt-5">
        <style>
          #screenshot_container{
          }
          #mobile_screenshot img{
            max-width:100%;
            max-height:100%;
            height:40rem;
            object-fit: cover;
          }
          .mobile-screenshot-title{
            font-weight: bolder;
          }
          .border-crops{
            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
            border-radius:5px;
          }
        </style>
        <div id="screenshot_container" class="container">
          <div class="row">
            <div class="col-4">
              <div id="mobile_screenshot">
                <img class="img-fluid" src="assets/imgs/homeview-1.png">
              </div>
            </div>
            <div class="col-8 mt-5">
              <div class="display-4 mobile-screenshot-title text-center">
                Earn and claim rewards on SafetyPal mobile app!
              </div>
              <div class="row justify-content-center my-5">
                <div class="col-3 border-crops mx-3">
                  <img class="img-fluid" src="assets/imgs/risefall-crop.png">
                </div>
                <div class="col-3 border-crops mx-3">
                  <img class="img-fluid" src="assets/imgs/claim-crop.png">
                </div>
                <div class="col-3 border-crops mx-3">
                  <img class="img-fluid" src="assets/imgs/mining-crop.png">
                </div>
              </div>
            </div>
          </div>
        </div><!-- screenshot section -->
        <div id="buycrypto_container" class="my-5 py-5">
          <style>
            #buycrypto_container{
              background-color: var(--light-color);
            }
          </style>
          <div id="buycrypto_container_inner" class="my-5 py-5 container">
            <style>
              .text-paypal{
                font-size:1.5rem !important;
              }
            </style>
            <div class="row">
              <div id="buycrypto_1" class="col-8 mt-2 text-center">
                <span class="display-1">Buy crypto now!</span>
                <div class="display-5 text-paypal text-muted py-3">Pay with paypal using debit, credit or visa card.</div>
              </div>
              <div class="col-4 text-center">
                <img class="img-fluid" src="assets/imgs/paypal-buy.png">
              </div>
            </div>
          </div>
        </div><!-- buycrypto_container -->
      </div><!-- main_container -->
    </main>
    <!-- footer section /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
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
            <p class="text-muted">Monthly digest of whats new and exciting from us.</p>
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
  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  const d = new Date();
  let year = d.getFullYear();
  document.getElementById("year_now").innerHTML = year;
</script>
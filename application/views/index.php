<!doctype html>
<html lang="en">
  <head>
    <?php include 'srcs.php';?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1 ,maximum-scale=1.0">
    <meta name="title" content="SafelyPal - Smart Security at your hands">
    <meta name="description" content="Safelypal is a Crypto Wallet Platform where you can trade, earn or simply store your crypto assets with prestige privacy and security.">

    <meta name="keywords" content="safelypal, safelypal.com, safelypal crypto, safelypal wallet, safelypal crypto wallet, safelypal blog, safelypal.com blog, safelypal review, safelypal.com review, what is safelypal, web 3 wallet metamask, web3 wallet example, best crypto wallet, crypto defi wallet review, best web3 wallet, is coinbase a web3 wallet, web3 wallet extension, web3 wallet github, web 3.0 crypto wallet, web 3 0 crypto list, web 3 0 crypto projects, web 3 0 crypto price, best web 3 0 crypto, top 5 web 3 0 crypto, web 3 0 definition, when will web 3 0 be released, web 3 0 stocks, web3 0 crypto projects, web3 0 crypto coins list, web3 0 crypto list, web3. 0 crypto, web3 0 crypto coins, best web3 0 crypto, will crypto go to 0, best web to buy crypto, buy crypto 0 fees, can crypto go to 0, web3.0 examples, web3.0 features, what is web3.0, web3 get token symbol, buy crypto zero fees, how to buy crypto on webull browser, crypto wallet app, crypto wallet canada, crypto wallet australia, crypto wallet hardware, crypto wallet uk, crypto wallet address, crypto wallet robinhood, crypto wallet online, crypto wallet exodus, best crypto wallet, robinhood crypto wallet, best crypto wallet app, exodus crypto wallet, safest crypto wallet, best crypto wallet canada, best crypto wallet australia, best crypto wallet reddit, best crypto wallet uk, hardware crypto wallet, cryptocurrency wallet, crypto.com defi wallet, crypto hardware wallet, crypto cold wallet, crypto hard wallet, crypto.com wallet address, crypto.com to trust wallet, cryptocurrency best wallet, crypto wallet app, best crypto wallet, free crypto wallet, crypto wallet for nft, crypto wallet hardware, crypto wallet for mining, crypto wallet app, best crypto wallet, free crypto wallet, crypto wallet for nft, crypto wallet metamask, crypto wallet for mining, crypto wallets list, best crypto wallet 2022">

    <meta name="robots" content="index,follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="SAFELYPAL-DEV">
    <!-- <meta name="google-site-verification" content=""> -->

    <meta property="og:title" content="SafelyPal - Smart Security at your hands">
    <meta property="og:description" content="Safelypal is a Crypto Wallet Platform where you can trade, earn or simply store your crypto assets with prestige privacy and security.">
    <meta property="og:image" content="">
    <meta property="og:url" content="safelypal.com">
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <title class="main-color">SafelyPal</title>
  </head>
  <body>
    <!-- nav section /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <nav class="navbar navbar-expand-md">
          <div id="burgerbtn" class="dnone burger-click" onclick="$('#burger_container').toggleClass('dnone')">
            <i class="fa fa-bars main-color fa-lg burger-click" aria-hidden="true"></i>
          </div>
        <div class="container-fluid">
          <div class="navbar-brand">
            <img src="assets/imgs/safetypal_main_logo.png">
          </div>
          
          <div class="collapse navbar-collapse justify-content-center" id="topnavbarcontent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a id="features_nav" class="nav-link navlink hover-link-test" onclick="gotofeatures()" href="#">Features</a>
              </li>
              <!-- <li class="nav-item">
                <a id="guides_nav" onclick="window.open('http://www.reddit.com/user/SafelyPal/comments/vyvk06/safelypal_newest_crypto_wallet/', '_blank');" class="nav-link navlink" href="#">Guides</a>
              </li> -->
              <li class="nav-item">
                <a id="explore_nav"  onclick="window.open('http://www.reddit.com/user/SafelyPal/', '_blank');" class="nav-link navlink" href="#">Explore</a>
              </li>
              <li class="nav-item">
                <a id="about_nav"  onclick="gotoabout()" class="nav-link navlink" href="#">About</a>
              </li>
              <script>
                function gotoabout(){
                  $('html, body').animate({
                              scrollTop: $("#about_container").offset().top
                          }, 100);

                  window.open('http://www.SafelyPal.com/about', '_blank');
                }
              </script>
              <li class="nav-item">
                <a id="FAQ_nav" onclick="gotoFAQ()" class="nav-link navlink" href="#">FAQ</a>
              </li>
                      <script>
                        function gotoFAQ(){
                          $('html, body').animate({
                              scrollTop: $("#FAQ_container").offset().top
                          }, 100);
                        }
                      </script>
            </ul>
          </div>
          <a id="dl_apk_link" class="light-color" href="#getsafelypal_container"><button id="dl_apk" class="round-btn main-btn-ui btn-size-1">Download app</button></a>
          <i id="menu_nav" class="fa fa-bars fa-inverse dnone" aria-hidden="true"></i>
        </div>
      </nav>
    <!-- nav section end//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- nav link hover///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <div id="features_hover" class="dnone radius-sm p-2">
        <style>.overhide{overflow: hidden;}</style>
        <div class="boxshad p-4">
          <div class= "">
            <h1 class="main-color font-lg">App features</h1>
            <small class="text-muted font1halfrem">Overview</small>
          </div>
          <div class="row mt-2">
            <div class="col-1 p-2">
              <img class="size30 filter-main-color" src="assets\imgs\hover_links\mining1.png">
            </div>
            <div class="col-10">
              <div class="py-1 overhide">
                <span class="font-sm"> Daily mining</span><br>
                <span class="font-xsm text-muted text-truncate"> Users can choose any coin to mine with different minimum purchase amount alloted for 24 hours time frame.</span>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="row pt-2 mt-1">
            <div class="col-1 p-2">
              <img class="size30 filter-main-color" src="assets\imgs\hover_links\mining2.png">
            </div>
            <div class="col-10">
              <div class="py-1 overhide">
                <span class="font-sm "> Regular mining</span><br>
                <span class="font-xsm text-muted text-truncate"> Users can select their chosen time period for receiving more and a lump sum proportion of profit.</span>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="row pt-2 mt-1">
            <div class="col-1 p-2">
              <img class="size30 filter-main-color" src="assets\imgs\hover_links\trading.png">
            </div>
            <div class="col-10">
              <div class="py-1 overhide">
                <span class="font-sm"> Rise and Fall contract</span><br>
                <span class="font-xsm text-muted text-truncate"> It offers an opportunity to traders to make profit from both rising and falling markets.</span>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="row pt-2 mt-1">
            <div class="col-1 p-2">
              <img class="size30 filter-main-color" src="assets\imgs\hover_links\trading.png">
            </div>
            <div class="col-10">
              <div class="py-1 overhide">
                <span class="font-sm"> Long and Short contract</span><br>
                <span class="font-xsm text-muted text-truncate"> It gives the investors a chance to benefit from changes in market prices without owning the underlying asset.</span>
              </div>
            </div>
          </div>
          <!--  -->
          <hr>
          <!--  -->
          <div class="row pt-2 mt-1">
            <div class="col-1 p-2">
              <img class="size30 filter-main-color" src="assets\imgs\hover_links\multiwallet.png">
            </div>
            <div class="col-10">
              <div class="py-1 overhide">
                <span class="font-sm"> Multi network wallet</span><br>
                <span class="font-xsm text-muted text-truncate"> SafelyPal is on Trc20, Erc20, and Bep20 Networks!</span>
              </div>
            </div>
          </div>
        </div>
        <!--  -->
      </div>
      
      <div id="guides_hover" class="dnone black-color radius-sm p-2">
        <div class="boxshad p-4">
          <h1 class="main-color font-lg">Guides</h1>
          <small class="text-muted font1halfrem">How to use SafelyPal</small>
        </div>
      </div>

      <div id="explore_hover" class="dnone radius-sm p-2">
        <div class="boxshad p-4">
          <div class= p-2">
            <h1 class="main-color font-lg">Explore</h1>
            <small class="text-muted font1halfrem">Discover the space with us!</small>
          </div>
          <div class="row mt-2">
            <div class="col-1 p-2">
              <img class="size30 filter-main-color" src="assets\imgs\hover_links\blog.png">
            </div>
            <div class="col-10">
              <div class="py-1 hover-links-style" onclick="window.open('https://www.reddit.com/user/SafelyPal/', '_blank');">
                <span class="font-sm hover-links-style"> Reddit</span><br>
                <span class="font-xsm text-muted"> Check out our blogs on reddit</span>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-1 p-2">
              <img class="size30 filter-main-color" src="assets\imgs\hover_links\blog.png">
            </div>
            <div class="col-10">
              <div class="py-1 hover-links-style">
                <div class=""><span id="blogs_" class="font-sm hover-links-style">Blogs</span></div>
                <span class="font-xsm text-muted"> How Safelypal impacts the cryptospace</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="about_hover" class="dnone radius-sm p-2">
        <div class="boxshad p-4">
          <div class= p-2">
            <h1 class="main-color font-lg">About</h1>
            <small class="text-muted font1halfrem">All about Safelypal </small>
          </div>
          <div class="row mt-2">
            <div class="col-10">
              <div class="py-1 hover-links-style" onclick="window.open('https://www.SafelyPal.com/about', '_blank');">
                <span class="font-sm hover-links-style"> History</span><br>
                <span class="font-xsm text-muted"> Evolution of the awesome wallet</span>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-10">
              <div class="py-1 hover-links-style" onclick="window.open('https://www.SafelyPal.com/about', '_blank');">
                <div class=""><span id="blogs_" class="font-sm hover-links-style">Mission and Vision</span></div>
                <span class="font-xsm text-muted"> How Safelypal will contribute to the crypto space</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- nav link hover end///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- splash section //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      
      <div id="burger_container" class="container-fluid py-2 dnone burger-click">
          <div id="burger_links" class="burger-click">
            <a id="features_nav" class="nav-link navlink hover-link-test burger-click" onclick="gotofeatures()" href="#">Features</a>
            <a id="guides_nav" onclick="window.open('http://www.reddit.com/user/SafelyPal/comments/vyvk06/safelypal_newest_crypto_wallet/', '_blank');" class="nav-link navlink burger-click" href="#">Guides</a>
            <a id="explore_nav"  onclick="window.open('http://www.reddit.com/user/SafelyPal/', '_blank');" class="nav-link navlink burger-click" href="#">Explore</a>
            <a id="about_nav"  onclick="gotoabout()" class="nav-link navlink burger-click" href="#">About</a>
          </div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1579547621113-e4bb2a19bdd6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=639&q=80" class="w-100 img-fluid">
        <div class="card-img-overlay text-center p-5">
            <style>
              /* // Small devices (landscape phones, 576px and up) */
              @media (min-width: 576px) { 

              }

              /* // Medium devices (tablets, 768px and up) */
              @media (min-width: 768px) { 

              }
            </style>
          <div id="splash_container" class="mt-5">
            <span class="splash-text">SafelyPal Wallet</span>
            <p class="splash-subtext">A multi network wallet where you can stake, play, and earn crypto!</p>
            <div class="splash-buttons mt-5 p-5">
              <!-- <button class="button-splash mx-5">Sign up now</button> -->
              <!-- <button class="button-splash mx-5">Get safetypal</button> -->
              <button onclick="signupredirect()" type="button" class="main-btn-ui  btn-size-1 mx-5">Sign up</button>
                <script>
                function signupredirect(){
                  var signup = window.open('https://wallet.safelypal.com/', '_blank');
                  signup.focus();
                  }
                </script>
              <button onclick="gotogetsafely()" class="main-btn-ui btn-size-1 mx-5">Get SafelyPal</button>
                <script>
                  function gotogetsafely(){
                    $('html, body').animate({
                        scrollTop: $("#getsafelypal_container").offset().top
                    }, 100);
                  }
                </script>
            </div>
          </div>
        </div>
      </div>
    <!-- splash section end///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- main section ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <main>
      <div id="main_container" class="p-1 mt-5">
          <!-- learn more -->
            <div id="learnmore_container" class="container">
              <div class="row">
                <div class="col-lg-6 col-sm-12">
                  <div id="mobile_screenshot">
                    <center><img class="img-fluid" src="assets/imgs/proview.png"></center>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-12 mt-5 py-5 pl-5">
                  <div class="display-4 mobile-screenshot-title text-start splash-res">
                    Earn rewards on mobile and web app!
                  </div>
                  <div class="row mr-5 mt-3">
                    <div class="font-md text-muted text-start">
                      Many ways to earn and learn about crypto. Start your adventure with us!
                    </div>
                    <div class="text-start learnmore_btn">
                      <button id="learnmore_btn" onclick="gotofeatures()" class="my-5">Learn more</button>
                      <script>
                        function gotofeatures(){
                          $('html, body').animate({
                              scrollTop: $("#features_container").offset().top
                          }, 100);
                        }
                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- video teaser -->
            <div id="video_teaser" class="pt-2">
              <style>
                #video_teaser{
                  padding-bottom:2rem;
                }
                #video_teaser_container{
                  width:60rem;
                }
                #video_iframe{
                  position:relative;
                  padding-bottom:56.50%;
                  padding-left:56.25%;
                  /* padding-right:56.25%; */
                  /* box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px; */
                  box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
                  /* box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; */
                  /* box-shadow: rgba(33, 15, 87, 0.4) 5px 5px, rgba(33, 15, 87, 0.3) 10px 10px, rgba(33, 15, 87, 0.2) 15px 15px, rgba(33, 15, 87, 0.1) 20px 20px, rgba(33, 15, 87, 0.05) 25px 25px;
                  border:solid 2px rgba(33, 15, 87, 0.4); */
                }
                #video_iframe iframe{
                  position:absolute;
                  top:0;
                  left:0;
                  width:100%;
                  height:100%;
                  /* border: 0; */
                }

              </style>
              <div class="text-center pt-3 main-color"><h6 class="font-bold">Why SafelyPal</h6></div>
              <div class="text-center"><h3 class="font-w500">Smart security at your hands</h3></div>
              <div class="text-center">
                <h3 class="text-muted font-thin font-1rem"> 
                  <span class="main-color font-normal">SafelyPal</span> 
                  uses blockchain technology for every transactions. <br> You don't have to worry about extra fees as SafelyPal is on Tron, Ethereum, and binance smart chain network.
                </h3>
              </div>
              <div id="video_teaser_container" class="container mt-5">
                <div id="video_iframe">
                  <!-- <iframe src="https://www.youtube.com/embed/IhJJyN84-BY?playlist=IhJJyN84-BY&loop=1;rel=0&autoplay=1&controls=0&showinfo=0&mute=1" title="SafelyPal - Teaser" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                  <iframe src="https://www.youtube.com/embed/IhJJyN84-BY?playlist=IhJJyN84-BY&loop=1;rel=0&autoplay=1&controls=0&showinfo=0&mute=1" allow='autoplay' title="SafelyPal video teaser" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            <!-- breaker1 -->
              <div id="breaker1" class="container-fluid text-center mb-5" style="padding-bottom:10rem!important;">
                <div class="container">
                  <div class="row justify-content-between">
                    <div class="col-lg-3 col-sm-12 my-5 mini-logo-rightborder">
                        <div class="mini-logo-container p-3">
                          <img class="mini-logo" src="assets\imgs\mini-logo\api.png">
                        </div>
                        <div class="mini-logo-title">
                          Blockhain Technology
                        </div>
                        <div class="text-muted">
                          Feel safe in a blockchain environment technology. 
                          <!-- <span class="main-color font-bold font-xsm">Learn more</span> -->
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-12 my-5 mini-logo-rightborder">
                        <div class="mini-logo-container p-3">
                          <img class="mini-logo" src="assets\imgs\mini-logo\wallet.png">
                        </div>
                        <div class="mini-logo-title">
                          Multi Network Wallet
                        </div>
                        <div class="text-muted">
                          Unlike other wallet. SafelyPal is connected to multiple networks.
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-12 my-5 mini-logo-rightborder">
                        <div class="mini-logo-container p-3">
                          <img class="mini-logo" src="assets\imgs\mini-logo\secured-payment.png">
                        </div>
                        <div class="mini-logo-title">
                          Secured transactions
                        </div>
                        <div class="text-muted">
                          Every transaction is done thru API. Prevention from hackers is a must!
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-12 my-5">
                        <div class="mini-logo-container p-3">
                          <img class="mini-logo" src="assets\imgs\mini-logo\support.png">
                        </div>
                        <div class="mini-logo-title">
                          Fast human support
                        </div>
                        <div class="text-muted">
                          Our representatives are always happy to support and help you. 
                          <!-- <span class="main-color font-bold font-xsm">Support page</span> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <!-- features cards -->
          <div id="features_container" class="pt-3">
            <!-- <div class="wrapper-features pt-5"></div> -->
            <div id="features_cards_container">
              <div class="container fcards">
                  <style>
                    /* // Small devices (landscape phones, 576px and up) */
                    @media (min-width: 576px) { 
                      .sizefcard{
                        width:6rem;height:8rem;
                      }
                      .features-card-container{
                        padding-top:.5rem!important;
                        padding-bottom:1rem!important;
                      }
                    }

                    /* // Medium devices (tablets, 768px and up) */
                    @media (min-width: 768px) { 

                    }

                    .sizefcard{
                      width:auto;
                      height:20rem;
                    }
                    .sizefcard img{
                      object-fit:cover;
                      width:100%;
                      height:100%;
                      -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
                      filter: grayscale(100%);
                      opacity: .3;
                      border-radius:5px;
                      /* box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; */
                      box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
                    }
                  </style>
                  <div class="row light-color">
                    <div class="col-lg-5">
                      <div class="text-start sec-color "><h6 class="font-bold zlevel2">Features</h6></div>
                      <div class="text-start pb-1 light-color"><h2 class="font-bold zlevel2 sub-media">Earn on SafelyPal</h2></div>
                      <div class="text-justify pb-2 light-color text1-media">
                        We provide a number of opportunities for you to make money with SafelyPal and receive benefits that go beyond what you would receive from other platforms.
                      </div>
                      <div class="features-btn-media">
                        <button onclick="window.open('https://www.reddit.com/user/SafelyPal/comments/vyvk06/safelypal_newest_crypto_wallet/', '_blank');" class="my-2 mx-0 features-btn ">Learn how</button>
                      </div>
                    </div>
                  <div class="col-lg-7 px-5 features-card-container">
                    <div class="mt-2 justify-content-center sizefcard">
                          <img class="fcard-img" src="https://source.unsplash.com/600x900/?defi,blockchain">
                    </div>
                  </div>

                  <div id="breaker1" class="container-fluid text-center mt-5">
                      <div class="container">
                        <div class="row justify-content-around">
                          <div class="col-lg-3 my-5 mini-logo-rightborder">
                              <div class="text-start mini-logo-title">
                                Rise and fall
                              </div>
                              <div class="text-start text-muted pr-3">
                                It offers an opportunity to traders to make profit from both rising and falling markets.
                              </div>
                            </div>
                            <div class="col-lg-3 my-5 mini-logo-rightborder">
                              <div class="text-start mini-logo-title">
                                Short and Long
                              </div>
                              <div class="text-start text-muted pr-3">
                                It gives the investors a chance to benefit from changes in market prices without owning the underlying asset.
                              </div>
                            </div>
                            <div class="col-lg-3 my-5 mini-logo-rightborder">
                              <div class="text-start mini-logo-title">
                                Daily mining
                              </div>
                              <div class="text-start text-muted pr-3">
                                Users can choose any coin to mine with different minimum purchase amount alloted for 24 hours time frame.
                              </div>
                            </div>
                            <div class="col-lg-3 my-5">
                              <div class="text-start mini-logo-title">
                                Regular mining
                              </div>
                              <div class="text-start text-muted pr-3 ">
                                <span class="zlevel2">
                                  Users can select their chosen time period for receiving more and a lump sum proportion of profit.
                                </span> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="about_container" class="container light-color">

                    <div class="text-start pt-1 my-5">
                      <h6 class="font-bold sec-color">About Safelypal</h6>
                      <div class="text-justify pb-2 text1-media lh-base text-muted">
                      SafelyPal is a Crypto Wallet Platform where you can trade, earn or simply store your crypto assets with prestige privacy and security.

                      In recent years, the cryptocurrency market has evolved rapidly, and as more investors join the trend, it's critical to safeguard your investments.

                      The following advice will assist you in keeping your coins safe from theft or loss.

                      You can rest easy knowing that all of your arduously won cryptos are kept in the safest location with these security measures in place.
                        <a href="https://safelypal.com/about" class="font-bold font-xsm">Go to about page</a>
                      </div>
                    </div>

                  </div> 

                </div>
              </div>
            </div>
            <!-- <div class="wrapper-features" style="z-index: 1!important;"></div> -->
          </div>
            <!-- breaker1 -->
              <div id="breaker2" class="container-fluid text-center my-5 py-5">
                <div class="container">
                  <div class="row justify-content-around">
                  
                  </div>
                </div>
              </div>
          <!-- FAQ -->
          <div id="FAQ_container" class="pb-5">
            <div class="container">
              <div class="text-center pt-1 main-color"><h6 class="font-bold zlevel2">Frequently asked questions</h6></div>
              <div id="community_title" class="display-4 font-bolder zlevel2 text-center ">
                <span>FAQs</span>
              </div>
              <center>
                
                <div class="accordion accordion-flush container mt-3" id="accordionFlushExample" style="max-width:50rem;">
                  <div id="faqlist"></div>
                    <!-- <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapseThree">
                        Where can I go if I have more questions?
                        </button>
                      </h2>
                      <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        For further questions, kindly email us at <code>safelypal@gmail.com</code>.
                      </div>
                    </div> -->
                </div>
              </center>
            </div>
          </div>
          <!-- buy crypto -->
            <div id="buycrypto_container" class="py-5">
              <div id="buycrypto_container_inner" class="my-5 py-5 container">
                <div class="row">
                  <div id="buycrypto_1" class="col-lg-8 mt-2 text-center px-5 text4-media">
                    <span class="display-4 p-0 text3-media">Buy crypto easier and safer</span>
                    <div class="text-paypal text-muted py-3">Pay with paypal using debit, credit or visa card.</div>
                  </div>
                  <div class="col-lg-4 text-center paypal_img">
                    <img class="img-fluid" src="assets/imgs/paypal-buy.png">
                  </div>
                </div>
              </div>
            </div>
          <!-- community -->
          <!-- <div class="wrapper-features1"></div> -->
          <div id="community_container" class="container-fluid pt-5">
            <div class="text-center pt-1 sec-color"><h6 class="font-bold zlevel2">community</h6></div>
            <div id="community_title" class="display-4 font-bolder light-color zlevel2 text-center ">
              <span id="community_sub">Join our community</span>
            </div>
            <div class="text-center pt-1 text-muted"><h6 class="font-normal text2-media">Be a part of friendly community of crypto space explorers!</h6></div>      

            <div class="community-logo pb-5">
              <div class="row justify-content-center pt-5">

                <div class="col-lg-6 col-sm-12">
                  <div class="row justify-content-center">

                    <div onclick="window.open('https://www.facebook.com/safelypal/', '_blank');" class="col-lg-6 col-sm-12 py-5 px-3 sizer1010">
                      <div class="row">
                        <div class="col-4 text-end">
                          <img class="mini-logo-soc" src="assets\imgs\mini-logo\facebook.png">
                        </div>
                        <div class="col-8 text-start">
                          <span class="light-color">Facebook</span><br>
                          <span class="text-muted">Join the community</span>
                        </div>
                      </div>
                    </div>

                    <div onclick="window.open('https://www.instagram.com/safelypal/', '_blank');" class="col-lg-6 col-sm-12 py-5 px-3 sizer1010">
                      <div class="row">
                        <div class="col-4 text-end">
                          <img class="mini-logo-soc" src="assets\imgs\mini-logo\ig.png">
                        </div>
                        <div class="col-8 text-start">
                          <span class="light-color">Instagram</span><br>
                          <span class="text-muted">See the progress</span>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                  <div class="row justify-content-center">

                    <div onclick="window.open('https://twitter.com/safelypal', '_blank');" class="col-6 col-sm-12 py-5 px-3 sizer1010">
                      <div class="row">
                        <div class="col-4 text-end">
                          <img class="mini-logo-soc" src="assets\imgs\mini-logo\twitter.png">
                        </div>
                        <div class="col-8 text-start">
                          <span class="light-color">Twitter</span><br>
                          <span class="text-muted">Latest news</span>
                        </div>
                      </div>
                    </div>

                    <div onclick="window.open('https://www.reddit.com/user/SafelyPal/', '_blank');" class="col-6 col-sm-12 px- py-5 sizer1010">
                      <div class="row">
                        <div class="col-4 text-end">
                          <img class="mini-logo-soc" src="assets\imgs\mini-logo\reddit.png">
                        </div>
                        <div class="col-8 text-start">
                          <span class="light-color">Reddit</span><br>
                          <span class="text-muted">Be involved</span>
                        </div>
                      </div>
                    </div>

                </div>
              </div> 

              <div class="row justify-content-center pt-4 px-2">
                <div onclick="window.open('https://www.linkedin.com/in/safely-pal-234123242/', '_blank');" class="col-6 col-sm-12 px-3 py-5 sizer1010">
                  <div class="row">
                    <div class="col-4 text-end">
                      <img class="mini-logo-soc" src="assets\imgs\mini-logo\linkedin.png">
                    </div>
                    <div class="col-8 text-start">
                      <span class="light-color">Linkedin</span><br>
                      <span class="text-muted">Connect with us</span>
                    </div>
                  </div>
                </div> 
                <div class="col-6 col-sm-12 px-3 py-5  sizer1010">
                  <div class="row">
                    <div class="col-4 text-end">
                      <img class="mini-logo-soc" src="assets\imgs\mini-logo\gmail.png">
                    </div>
                    <div class="col-8 text-start">
                      <span class="light-color">Gmail</span><br>
                      <span class="text-muted">safelypalofficial</span>
                      <span class="text-muted">@gmail.com</span>
                    </div>
                  </div>
                </div>
              </div>
              
            </div><!-- community-logo -->
          </div>
        </div>
        <div id="getsafelypal_container" class="container text-center">
        <div class="text-center pt-3 main-color"><h6 class="font-bold">Get SafelyPal</h6></div>
              <div class="text-center"><h3 class="font-w500">Available on Mobile and Web application</h3></div>
              <div class="text-center">
                <h3 class="text-muted font-thin font-1rem"> 
                  <span class="main-color font-normal">SafelyPal</span> 
                  on Android, IOS, and Browser View. <br> Smart security at your hands wherever you are, whenever you need.
                </h3>
              </div>
          <div id="breaker1" class="container-fluid text-center mb-5" style="">
            <div class="container">
              <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-12 mt-5">
                    <div class="mini-logo-container p-3">
                      <img class="mini-logo" src="assets\imgs\mini-logo\monitor.png">
                    </div>
                    <div class="mini-logo-title">
                      Browser View
                    </div>
                    <div class="text-muted">
                      Access SafelyPal anytime anywhere on the web <a class="main-color font-bold font-xsm" target="_blank" href="https://wallet.safelypal.com">Click here</a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-12 my-5">
                    <div class="mini-logo-container p-3"> 
                      <img class="mini-logo" src="assets\imgs\mini-logo\android.png">
                    </div>
                    <div class="mini-logo-title">
                      Android App
                    </div>
                    <div class="text-muted">
                      Latest android versions compatible. Download the latest SafelyPal APK here <a class="main-color font-bold font-xsm" target="_blank" href="assets\apk\safelypal.apk">download</a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-12 my-5">
                    <div class="mini-logo-container p-3">
                      <img class="mini-logo" src="assets\imgs\mini-logo\ios.png">
                    </div>
                    <div class="mini-logo-title">
                      IOS App
                    </div>
                    <div class="text-muted">
                      SafelyPal Team is currently developing IOS version for apple lovers <span class="main-color font-bold font-xsm" onclick="">Coming soon</span>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-12 my-5">
                    <div class="mini-logo-container p-3">
                      <img class="mini-logo" src="assets\imgs\mini-logo\gplay.png">
                    </div>
                    <div class="mini-logo-title">
                      Google play store
                    </div>
                    <div class="text-muted">
                      Approved and secured by google play store. <a class="main-color font-bold font-xsm" target="_blank" href="https://play.google.com/store/apps/details?id=com.wallet.safelypalsecurity">Proceed to app</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <!-- <div class="mini-logo-title">Use safelypal browser <span class="main-color cursorpointer" onclick="window.open('https://www.wallet.safelypal.com', '_blank');">click here</span></div>
            <div class="mini-logo-title">Download safelypal APK <a class="main-color cursorpointer" href="assets\apk\safelypal.apk">click here</a> </div> -->
          </div>
          <!-- <div id="contact_container"class="text-center lh-sm">
            <h3 class="font-w500">Contact Us</h3>
            <div class="text-start pb-2 text1-media text-muted">
            <p class="text-center">FACEBOOK : <a href="www.facebook.com/safelypal">FB SafelyPal</a><br>
              INSTAGRAM : <a href="www.instagram.com/safelypal">IG SafelyPal</a><br>
              TWITTER : <a href="www.twitter.com/safelypal">Twitter SafelyPal</a><br>
              REDDIT : <a href="www.reddit.com/user/safelypal">Reddit SafelyPal</a><br>
              LINKEDIN : <a href="www.linkedin.com/safelypal-wallet">LinkedIn SafelyPal</a><br>
              YOUTUBE : <a href="www.youtube.com/channel/UCEcuLhtr-8fZKwUrOBtzekA">Yt SafelyPal</a><br>
              EMAIL: safelypal@gmail.com
            </p>
            </div>
          </div> -->
        </div>
        <div id="contactform_container" class="container my-5 pb-5" style="max-width:800px;">
          <div class="text-start sec-color "><h6 class="font-bold">Contact</h6></div>
          <div class="text-start pb-1"><h2 class="font-bold sub-media">Contact us, Let us know what you think</h2></div>
          <div class="mb-3">
            <input class="form-control" id="name_contactus_input" type="text" placeholder="Name" data-sb-validations="required"/>
          </div>

          <div class="mb-3">
            <input class="form-control" id="emailaddress_contactus_input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" placeholder="Email Address" data-sb-validations="required, email"/>
          </div>

          <div class="mb-3">
            <textarea class="form-control" id="message_contactus_input" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
          </div>

          <div class="d-grid">
            <center>
            <button class="btn btn-outline-transparent main-color btn-lg" style="width:400px;" onclick="contactus_()"><code>Submit</code></button>
            </center>
          </div>
        </div>
      </div>
    </main>
    <!-- main section end/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- footer section //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <div id="footer_container">
        <footer class="py-5 container">
          <style>
            footer {
              display: block;
              color : white!important;
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
            <p class="">© <span id="year_now"></span> <span class="sec-color">SafelyPal</span>. All rights reserved.</p>
            
          </div>
        </footer>
      </div>
    <!-- footer section end///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  </body>
</html>
<!-- <a target="_blank" href="https://icons8.com/icon/60014/twitter">Twitter</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a> -->
<!-- script section -->
  <script>
      $(document).bind("keydown", function(ev){
        if(ev.altKey && ev.keyCode == 49){
            location.href = 'admin-blogs'
        }
      });
      // global
      var ip;
      var gwidth = screen.width;
      // console.log(gwidth);
      // year today
        const d = new Date();
        let year = d.getFullYear();
        document.getElementById("year_now").innerHTML = year;

      // hover effect nav links
        ////////////////////////////////////////////////features
        var features_nav = document.querySelector("#features_nav");
        var features_hover = document.querySelector("#features_hover");
        features_nav.addEventListener("mouseover", mOverl1, false);
        features_hover.addEventListener("mouseover", mOverl1, false);
        features_hover.addEventListener("mouseout", mOutl1, false);

        function mOverl1() {
          features_hover.setAttribute("style", "display:block;");
          guides_hover.setAttribute("style", "display:none;");
          explore_hover.setAttribute("style", "display:none;");
          about_hover.setAttribute("style", "display:none;");
          var xl1 = getOffset( document.getElementById('features_nav')).left;
          var yl1 = getOffset( document.getElementById('features_nav')).top;
          $('#features_hover').css('top',yl1+50+'px');
          $('#features_hover').css('right',xl1+100+'px');
        }
        function mOutl1() {  
          features_hover.setAttribute("style", "display:none;");
        }

        $(document).mouseup(function(e){
          var container = $("#features_hover");
          if (!container.is(e.target) && container.has(e.target).length === 0) 
            {
              features_hover.setAttribute("style", "display:none;");
            }
        });
        ////////////////////////////////////////////////Guides
        var guides_nav = document.querySelector("#guides_nav");
        var guides_hover = document.querySelector("#guides_hover");
        guides_nav.addEventListener("mouseover", mOverl2, false);
        guides_hover.addEventListener("mouseover", mOverl2, false);
        guides_hover.addEventListener("mouseout", mOutl2, false);

        function mOverl2() {
          guides_hover.setAttribute("style", "display:block;");
          features_hover.setAttribute("style", "display:none;");
          explore_hover.setAttribute("style", "display:none;");
          about_hover.setAttribute("style", "display:none;");
          var xl2 = getOffset( document.getElementById('guides_nav')).left;
          var yl2 = getOffset( document.getElementById('guides_nav')).top;
          $('#guides_hover').css('top',yl2+50+'px');
          $('#guides_hover').css('right',xl2+(-150)+'px');
        }

        function mOutl2() {  
          guides_hover.setAttribute("style", "display:none;");
          features_hover.setAttribute("style", "display:none;");
          explore_hover.setAttribute("style", "display:none;");
          about_hover.setAttribute("style", "display:none;");
        }
        $(document).mouseup(function(e){
          var container1 = $("#guides_hover");
          if (!container1.is(e.target) && container1.has(e.target).length === 0) 
            {
              guides_hover.setAttribute("style", "display:none;");
            }
        });
        ////////////////////////////////////////////////explore
        var explore_nav = document.querySelector("#explore_nav");
        explore_nav.addEventListener("mouseover", mOverl3, false);
        explore_hover.addEventListener("mouseover", mOverl3, false);
        explore_hover.addEventListener("mouseout", mOutl3, false);

        function mOverl3() {
          explore_hover.setAttribute("style", "display:block;");
          guides_hover.setAttribute("style", "display:none;");
          about_hover.setAttribute("style", "display:none;");
          features_hover.setAttribute("style", "display:none;");
          var xl3 = getOffset( document.getElementById('explore_nav')).left;
          var yl3 = getOffset( document.getElementById('explore_nav')).top;
          $('#explore_hover').css('top',yl3+50+'px');
          $('#explore_hover').css('left',xl3+(-50)+'px');
        }

        function mOutl3() {  
          explore_hover.setAttribute("style", "display:none;");
          guides_hover.setAttribute("style", "display:none;");
          features_hover.setAttribute("style", "display:none;");
          about_hover.setAttribute("style", "display:none;");
        }

        $(document).mouseup(function(e){
          var container2 = $("#explore_hover");
          if (!container2.is(e.target) && container2.has(e.target).length === 0) 
            {
              explore_hover.setAttribute("style", "display:none;");
            }
        });
                ////////////////////////////////////////////////about
        var about_nav = document.querySelector("#about_nav");
        about_nav.addEventListener("mouseover", mOverl4, false);
        about_hover.addEventListener("mouseover", mOverl4, false);
        about_hover.addEventListener("mouseout", mOutl4, false);

        function mOverl4() {
          about_hover.setAttribute("style", "display:block;");
          explore_hover.setAttribute("style", "display:none;");
          guides_hover.setAttribute("style", "display:none;");
          features_hover.setAttribute("style", "display:none;");
          var xl4 = getOffset( document.getElementById('about_nav')).left;
          var yl4 = getOffset( document.getElementById('about_nav')).top;
          $('#about_hover').css('top',yl4+50+'px');
          $('#about_hover').css('left',xl4+(-50)+'px');
        }

        function mOutl4() {  
          explore_hover.setAttribute("style", "display:none;");
          guides_hover.setAttribute("style", "display:none;");
          features_hover.setAttribute("style", "display:none;");
          about_hover.setAttribute("style", "display:none;");
        }

        $(document).mouseup(function(e){
          var container2 = $("#about_hover");
          if (!container2.is(e.target) && container2.has(e.target).length === 0) 
            {
              about_hover.setAttribute("style", "display:none;");
            }
        });
        //////////////////////////////////////////////////////////////////////////
        function getOffset( el ) {
          var _x = 0;
          var _y = 0;
          while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
                _x += el.offsetLeft - el.scrollLeft;
                _y += el.offsetTop - el.scrollTop;
                el = el.offsetParent;
          }
          return { top: _y, left: _x };
        }

        $.getJSON("https://api.ipify.org/?format=json", function(e) {
          console.log(ip);
          ip = e.ip;
        });

        function subscribe(){
            $("#subscribe_form").submit();
        }

        $("#subscribe_form").validate({
        errorClass: 'is-invalid',
        rules: {
          email: {
          required: true,
          email: true
          },
        },
        errorPlacement: function(error, element) {
		  	  // alert('please put email');
        },

        submitHandler: function(form){
          var data = $('#subscribe_form').serializeArray();

          data.push({
              'name':'ip',
              'value':ip
          });

          var res = ajaxShortLink('main/subscribe',data);
          console.log(res);

          if(res==1){
            $('#email').val('');
            alert('success')
          }else{
            alert(res)
            $('#email').val('')
          }
        }
    });
    

    $( "#blogs_" ).click(function() {
      window.open('blogs', '_blank');
    });

    $(document).ready(function(){
    $('*').not('.burger-click').click(function(){

    })
  })

  function contactus_(){
    var name = $('#name_contactus_input').val()
    var email = $('#emailaddress_contactus_input').val()
    var message = $('#message_contactus_input').val()

    var data = [
      {
        name: "name",
        value: name
      },
      {
        name: "emailaddress",
        value: email
      },
      {
        name: "message",
        value: message
      }
    ]

    if(name==''||email==''||message==''){
      alert('please fill out fields')
    }else{
      var res = ajaxShortLink('main/insertContactUs',data);
      console.log(res);

      if(res==1){
        alert('Thank you for messaging us!')
      }else{
        alert('Submit error, please try again')
      }

      $('#name_contactus_input').val('')
      $('#emailaddress_contactus_input').val('')
      $('#message_contactus_input').val('')
    }
  }

  var loadfaq = loadJsonViaURL('https://wallet.safelypal.com/admin/loadFaq')

  for (let index = 0; index < loadfaq.length; index++) {

  $('#faqlist').append(

  '<div class="accordion-item">'+
    '<h2 class="accordion-header" id="flush-heading'+loadfaq[index].id+'">'+
      '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse'+loadfaq[index].id+'" aria-expanded="false" aria-controls="flush-collapse'+loadfaq[index].id+'">'+
      loadfaq[index].faq+
      '</button>'+
    '</h2>'+
    '<div id="flush-collapse'+loadfaq[index].id+'" class="accordion-collapse collapse" aria-labelledby="flush-heading'+loadfaq[index].id+'" data-bs-parent="#accordionFlushExample">'+
      '<div class="accordion-body">'+
        '<p>'+
        loadfaq[index].answer+
      '</div>'+
    '</div>'+
  '</div>'
  )
    
  }
  
  

  </script>
<!-- script section -->

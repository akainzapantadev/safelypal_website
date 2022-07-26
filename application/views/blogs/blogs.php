<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="title" content="SafelyPal blogs - from SafelyPal Team">
        <meta name="description" content="The expansion of the cryptocurrency business is being covered by more blogs and media outlets than ever before. There is never a lack of sources to keep up with what's occurring in crypto, from the major media companies to tiny indie websites.">

        <meta name="keywords" content="cryptocurrency blog, cryptocurrency blog sites, cryptocurrency blog website, cryptocurrency blog updates, cryptocurrency blog for beginners, crypto blog, crypto update blog, best blog cryptocurrency, cryptocurrency blog sites">

        <meta name="robots" content="index,follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="author" content="SAFELYPAL-DEV">
        <meta name="google-site-verification" content="" />
        <meta property="og:title" content="SafelyPal blogs - from SafelyPal Team"/>
        <meta property="og:description" content="The expansion of the cryptocurrency business is being covered by more blogs and media outlets than ever before. There is never a lack of sources to keep up with what's occurring in crypto, from the major media companies to tiny indie websites."/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content="safelypal.com/blogs"/>
        <title class="main-color">SafelyPal blogs</title>
        <link rel="icon" href="assets/imgs/icon-text.png" type="image/gif">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/blogs.css" rel="stylesheet" />
        <script src="assets/js/common.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <div class="navbar-brand">
                    <img src="assets/imgs/safetypal_main_logo.png">
                </div>
            </div>
        </nav>
        <!-- Page Header-->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1579547621113-e4bb2a19bdd6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=639&q=80" class="w-100 img-fluid">
                <div class="card-img-overlay text-center">
                    <div id="splash_container" class="">
                        <span class="splash-text">SafelyPal Blogs</span>
                        <p class="splash-subtext text-muted">Blogs from safelypal team</p>
                    </div>
                </div>
            </div>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5 mt-5 pt-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <?php 
                            for ($i=0; $i < count($res); $i++) { 
                                echo '<a href="blogs/'.$res[$i]->routeLink.'">';
                                echo '<h2 class="post-title">'.$res[$i]->title.'</h2>';
                                echo '<h3 class="post-subtitle">'.$res[$i]->desc.'</h3>';
                                echo '</a>';
                                echo'<p class="post-meta">';
                                echo'Posted by';
                                echo'<a href="#!">' .$res[$i]->author.'</a>';
                                echo' '.$res[$i]->dateCreated;
                                echo'</p>';
                                echo'<hr class="my-4" />';
                            }
                         // '<a href="blogs/'+res[index].routeLink+'">'+
                        // '<h2 class="post-title">'+res[index].title+'</h2>'+
                        // '<h3 class="post-subtitle">'+res[index].desc+'</h3>'+
                        // '</a>'+
                        // '<p class="post-meta">'+
                        // 'Posted by'+
                        // '<a href="#!">' +res[index].author+'</a>'+
                        // ' '+res[index].dateCreated+
                        // '</p>'+
                        // '<hr class="my-4" />'
                        ?>
                       
                    </div>
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-reddit fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-google fa-stack-1x fa-inverse"></i>
                                    </span>                                                                                                                                                                                    
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; SafelyPal <span id="year_now"></span></div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<script>
    const d = new Date();
    let year = d.getFullYear();
    document.getElementById("year_now").innerHTML = year;

   
        // for (let index = 0; index < res.length; index++) {
        //     $('.post-preview').append(

        //         // '<a href="blogs/blog'+res[index].id+'">'+
        //         '<a href="blogs/'+res[index].routeLink+'">'+
        //             '<h2 class="post-title">'+res[index].title+'</h2>'+
        //             '<h3 class="post-subtitle">'+res[index].desc+'</h3>'+
        //         '</a>'+
        //         '<p class="post-meta">'+
        //             'Posted by'+
        //             '<a href="#!">' +res[index].author+'</a>'+
        //             ' '+res[index].dateCreated+
        //         '</p>'+
        //     '<hr class="my-4" />'
        //     )
        // }
        // console.log(res);

    // function blogpost(blog){
        
    // }
</script>
<nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav">
<div class="container">
<img class="navbar-brand" src="./images/LOGO.png" width="50px" alt="logo">
<!-- <a class="navbar-brand" href="index.php"></a> -->
<!-- <img class="navbar-brand" src="./images/logo.png" alt="logo"> -->
    <button class="navbar-toggler navbar-toggler-right " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class=" ml-auto my-2 my-lg-0 navbar-nav">
        <li class="nav-item">
        <a class="nav-link " onclick="$('#HOME').animatescroll();"><?= _HOME ?></a>
        </li>
        <li class="nav-item">
        <a class="nav-link " onclick="$('#ABOUT').animatescroll();"><?= _ABOUT ?></a>
        </li>
        <li class="nav-item">
        <a class="nav-link " onclick="$('#SERVICES').animatescroll();">SERVICES</a>
        </li>
        <li class="nav-item">
        <a class="nav-link " onclick="$('#PORTFOLIO').animatescroll();">PORTFOLIO</a>
        </li>
        <li class="nav-item">
        <a class="nav-link " onclick="$('#CONTACT').animatescroll();"><?= _CONTACT ?></a>
        </li>
        <form method='get' action='' id='form_lang' >
        <select class="btn btn-outline-secondary dropdown-toggle" name='lang' onchange='changeLang();'>
        <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
        <option value='fr' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'fr'){ echo "selected"; } ?> >frensh</option>
        </select>
        </form>
    </ul>
    </div>
</div>
</nav>
<div class="banner-area" id="HOME">
    <div class="banner-table">
        <div class="banner-table-cell">
            <div class="welcome-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <section class="intro animate-scale">
                                
                                <div class="img-area A-top">
                                    <img src="images/profil.jpeg" alt="">
                                </div>

                                <h3 class="A-right"><?= _NAME ?></h3>

                                <h1 class="ah-headline">

                                    <span class="ah-words-wrapper">
                                        <b class="is-visible"><?= _navDesc1 ?></b><!--edit the designation if you are in different profession-->
                                        <b><?= _navDesc2 ?></b> <!--edit the designation if you are in different profession-->
                                        <b><?= _navDesc3 ?></b> <!--edit the designation if you are in different profession-->
                                    </span>
                                </h1>

                                <div class="social-icon A-left">
                                    <ul>
                                        <li><a href="https://www.facebook.com/yaya.dossantos.7" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <!-- <li><a href="https://twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li> -->
                                        <li><a href="https://www.linkedin.com/in/yahya-bouhlal-1952051a3/" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="https://plus.google.com/" target="_blank" title="Google Plus"><i class="fab fa-google-plus"></i></a></li>
                                        <li><a href="https://www.pinterest.com/" target="_blank" title="Pinterest"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </section>
                            <div class="clearfix"></div>
                            <a class="mouse-scroll hidden-xs dadada" href="#about">
                                <span class="mouse">
                                    <span class="mouse-movement"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
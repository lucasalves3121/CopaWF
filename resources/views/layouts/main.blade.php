
<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/../css/style.css" rel="stylesheet">
    <link href="/../css/style.min.css" rel="stylesheet">
</head>

<body>
     <!-- Topbar Start -->
     <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>www.copawf.com</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fas fa-futbol"></i> CopaWF</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index" class="nav-item nav-link active">Home</a>
                    <a href="sobre" class="nav-item nav-link">Sobre</a>
                    <a href="jogos" class="nav-item nav-link">Jogos  </a>
                    
                    <a href="patrocinadores" class="nav-item nav-link">Patrocinadores  </a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Classificação</a>
                        <div class="dropdown-menu m-0">
                            <a href="classfutmasc" class="dropdown-item">Futsal Masculino</a>
                            <a href="feature.html" class="dropdown-item">Futsal Feminino</a>
                            <a href="team.html" class="dropdown-item">Voley</a>
                        </div>
                        </div>
                        <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Sistema de Votação</a>
                        <div class="dropdown-menu m-0">
                            <a href="https://www.sisvotejmf.com/Sisvote2/Login/logincopinha.php" class="dropdown-item">Miss e Muso</a>
                            <a href="https://www.sisvotejmf.com/Sisvote2/Login/logingremio.php" class="dropdown-item">Brasão Copa WF</a>
                        </div>
                        </div>
                        <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Galeria</a>
                        <div class="dropdown-menu m-0">
                            <a href="classfutmasc" class="dropdown-item">Fotos</a>
                            <a href="feature.html" class="dropdown-item">Videos</a>
                        </div>
                        </div>
                        </div>
                <a href="login" class="btn btn-primary py-2 px-4 d-none d-lg-block">Login</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    
    
@yield('content')

    <!-- Footer Start -->
    <div class="containe-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="containe mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><i class="fas fa-futbol mr-3"></i>CopaWF</h1>
                    </a>
                    <p class="m-0">Em sua primeira e tão importante edição; a copa W.F vem para superar e impressionar o setor esportivo. E para isso: contamos com uma equipe de excelência, preparados e treinados para organizar, direcionar, criar, estruturar e ampliar todo os seguimentos e setores da edição. Sejam bem-vindos ao mundo da copa W.F</p>
                                        <div class="row"style= "margin-top:100px">
                <div class="col-md-6 mb-5">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-linkedin-in"></i></a>
                        <a class="text-white" href="#"><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
                
                </div>  
                </div>
                <div class="col-md-6 mb-6">
                    <h1 class="mt-n2 text-uppercase text-white"><i class="fas fa-campground"  mr-3"></i> Localização</h1>
                    <div class="w-100">
                        <div class="input-group">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.264264104799!2d-38.46527358255615!3d-4.168372800000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b8b9b8c67f2abd%3A0x630300fc876d8217!2sEEEP%20Jos%C3%A9%20Maria%20Falc%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1660906364397!5m2!1spt-BR!2sbr" width="700" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>

                
    <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="containe">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">Your Site Name</a>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0">Designed by <a class="text-white" href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
  
    
    <!-- Footer End -->

    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    
    <script src="js/icons.js" crossorigin="anonymous"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script> 
</body>

</html>

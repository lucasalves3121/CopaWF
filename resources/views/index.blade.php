@extends('layouts.main')

@section('title','Copa Wesley Ferreira')

@section("content")

   

    <!-- Header Start -->
    <div class="jumbotro jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="contai">      
             
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slide1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/hom.jpeg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Em homenagem</h6>
                        <h1 class="display-4">Homenagem a Wesley Ferreira</h1>
                    </div>
                    <p style="text-align:justify">Wesley foi um jovem incrível , cheio de vida , sonhos e um marido espetacular . Ele era vida , mesmo por tão pouco tempo (apenas 21 anos ) que ele ficou aqui na terra ele soube viver essa vida … intenso e grandioso . Parece que você era um anjo que estava por um tempo aqui na terra e que Deus estava com muita saudade e teve que te recolher de volta …. Wesley foi um exemplo de compromisso, solidariedade, amizade e amor. Acolher esse sentimento é de muita dor e o que conforta é saber que aqui na terra você tirou lindos sorrisos de amigos,familiares e companheira , sua energia positiva e verdadeira era forte demais e ela faz morada dentro de nós . Te Amamos 🖤</p>
                    <div class="row pt-3 mx-0">
                        <div class="col-3 px-0">
                            <div class="bg-primary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">2016</h1>
                                <h6 class="text-uppercase text-white">Turma<span class="d-block">informática</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-primary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">22</h1>
                                <h6 class="text-uppercase text-white">Dia<span class="d-block">Pacajus</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-primary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">05</h1>
                                <h6 class="text-uppercase text-white">Mês<span class="d-block">Ceará</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-primary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">2000</h1>
                                <h6 class="text-uppercase text-white">Ano<span class="d-block">Geminiano</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-image" style="margin: 10px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 my-5 pt-5 pb-lg-5">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Copa WF</h6>
                        <h1 class="display-4">Modalidades</h1>
                    </div>
                    <p class="mb-4 pb-2">Considerada um dos maiores eventos poliesportivos da cidade de Pacajus-Ce, a copa  da Escola Estadual de Educação Profissional José Maria Falcão, tem seu legado passado ano pós ano, sempre impressionando com sua vasta organização, abertura, esportes e premiações.</p>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-solid fa-futbol text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Futsal</h4>
                            <p>Uma modalidade esportiva que foi adaptada do futebol de campo para as quadras.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-solid fa-volleyball text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Volei</h4>
                            <p>Esporte praticado entre duas equipes numa quadra retangular. Ela é dividida por uma rede colocada verticalmente sobre a linha central.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-table-tennis-paddle-ball text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4> Fut Mesa</h4>
                            <p>é o esporte que vem conquistando o Brasil nos últimos anos, visto que a modalidade mistura futebol, vôlei e tênis de mesa. </p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-brands fa-joget text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Carimba</h4>
                            <p class="m-0">Um esporte coletivo em que os jogadores tentam acertar os oponentes com uma ou mais bolas, evitando serem atingidos. </p>
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/modalidade.png" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->


    <!-- Courses Start -->
    <div class="container-fluid px-0 py-5">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Desfile</h6>
                    <h1 class="display-4"><strong>Musa e Muso copa W.F</strong></h1>
                    <h3>A beleza externa e interna da edição.</h3>
                </div>
            </div>
        </div>
        <div class="owl-carousel courses-carousel">
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/grasiele.jpeg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Grasielle Rodrigues</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Anonymous</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>17 <small>Anos</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="https://www.instagram.com/_grasyrodrigues/">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/liria.jpeg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Líria Maria</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>New Killers</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>17 <small>Anos</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="https://www.instagram.com/_liriamaria_/">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/bianca.jpeg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Bianca Sousa</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>As Paty</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>16 <small>Anos</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="https://www.instagram.com/biancassantoss__/?igshid=YmMyMTA2M2Y%3D">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/karla.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Karla Rodrigues</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Aposentados</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>17 <small>Anos</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="#">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/maria.png" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">María Isabelly</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Falcões FC </span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>16 <small>Anos</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="@https://www.instagram.com/isabelly.santoxx">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/tamires.jpeg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Tamires Bernado</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Galáticos</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>17 <small>Anos</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="https://www.instagram.com/_tamires_b">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/larice.jpeg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Larice Cavalcante</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Improváveis </span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>17 <small>Anos</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="https://instagram.com/laricecavalcante__">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/ana.png" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Ana Cecília</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>La máfia </span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>15 <small>Anos</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="https://instagram.com/aninha.vianna?igshid=YmMyMTA2M2Y=">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/iandra.png" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Antonia Iandra</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Ldb </span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>18 <small>Anos</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="https://instagram.com/_iandra?igshid=YmMyMTA2M2Y=">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/leticia.jpeg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Letícia Lima</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Vip1s </span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>17 <small>Anos</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="https://instagram.com/lleticiafreittas?igshid=YmMyMTA2M2Y=">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Site</h6>
                <h1 class="display-4">Desenvolvedores</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/lucas.jpeg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Lucas Alves Rodrigues</h5>
                        <p class="mb-2">Lider da equipe, Analista e Desenvolvedor Front-end</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/romim.jpeg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Romulo Lima Fonseca</h5>
                        <p class="mb-2">Analista de dados e Desenvolvedor Back-end</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/joabson.jpeg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Joabson Matos</h5>
                        <p class="mb-2">Usuário Teste</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Cleidiane Freitas</h5>
                        <p class="mb-2">Lider da equipe de desenvolvimento Sisvote</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-image py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Eventos</h6>
                        <h1 class="display-4">Abertura</h1>
                    </div>
                    <p class="m-0">A abertura oficial da copa, é um misto de grandes nomes do corpo docente, organizacional, técnico, cultural e esportivo. Um encontro tradicional anual de Professores, Alunos, Empresários, Jogadores e todos os públicos em geral da cidade que visam conhecer e prestigiar a abertura do jogos da edição! Uma noite memorável e extremamente organizada para que junto ao espírito esportivo, seja oficialmente feita a cerimônia de iniciação da copa.</p>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>A copa Jmf que hoje se intitula a W.F é um dos eventos mais esperados pelos alunos, é um mix de sensações ( ansiedade pra chegar a abertura , decisão de uniforme e raça pra jogar na semana, ganhar e levar o título) é impressionante o momento da torcida a sala unida positivamente pelo time , é lindo . A minha experiência com a copinha foi de muitas emoções … torcia por 2 times ( Az apimentadas time femenino da minha sala Administração de 2015 a 2017) ( Os New killers o time do meu amor Wesley da Silva Ferreira Informática de 2016 a 2018 , ele era o melhor … se estressava , era feroz e dava o sangue e os meninos tinham q acompanhar ele ,ficava sempre positivo nos fazia alguns medinhos com suas emoções a flor da pele mas no final acaba dando tudo certo .) a copa era um momento único .</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/suelen.jpeg" alt="">
                                <div>
                                    <h5>Suély Martins Barbosa</h5>
                                    <span>Ex-Aluna | Esposa de Wesley Ferreira</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-1.jpg" alt="">
                                <div>
                                    <h5>Student Name</h5>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection
@extends('layouts.main')

@section('title','Copa Wesley Ferreira')

@section("content")



    <!-- Navbar Start -->
    

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="img/ssobre1.png" alt="First slide">
        
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/ssobre2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/sobre.jpeg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-6">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Homenagem</h6>
                        <h3 class="display-4">Wesley da Silva Ferreira</h3>
                        <p class=""><strong> 22-05-2000 a 08-05-2022</strong></p>
                    </div>
                    <p style="text-align: justify;">
No dia 22 de maio de 2000, nasce um brasileiro, cearense, geminiano e natural da cidade de Pacajus, Wesley da Silva Ferreira. Criado por seus avós paternos, Dona Lucila e Cosmo Cesário, filho de Ana Lucia e João Roberto. Idealizador e jogador do time de futebol: New Killers da turma do curso técnico de informática dos anos (2016 - 2018). Capitão e blusa 7 do time, jogava como fixo e sua principal e forte característica era sua defesa dentro de quadras, campos e arenas. Ganha sua primeira Liga JMF no ano de 2017, deixando seu time em primeiro lugar. Em copa chega durante três anos consecutivos as semi finais dos jogos.
Acreditando sempre em "Uma luta por dia", transformou sua coragem e esforço na razão para viajar, visitar e conhecer lugares lindos e significativos, muito cedo, realizou sua primeira viagem a Jeriquacara-CE, onde o sol e as dunas contemplaram seu amor e sua vontade de sempre acreditar que valia a pena cada esforço. Praia, cachoeiras, shoppings, cinemas, sua passarela e marcante calçada da beira mar que se tornou seu lugar particular para praticar também sua desenvoltura nos patins e admirar a cultura do calçadão. Flamenguista de alma e coração, o geminiano tinha sua paixão pelo futebol flamenguista estampada nas diversas blusas de time que colecionava e tanto desejava, assim como também, fã de Mamonas assassinas e Michael Jackson, tinha uma admiração total pelo MC Kevin, valorizava o trabalho de Tiago Ventura, Winderson Nunes, Bráulio Bessa. Apaixonado pela marca Yamaha, e que também sonhava com o belíssimo carro Fiat uno mille, compreendia que cada sonho poderia se tornar realidade se a fé e a força de vontade estivessem sempre presentes, o que já se tornava seu grande alicerce para conquistar sua tão desejada e sonhada casa. Crente que Deus sempre existiu em seus caminhos e em seus planos, era grande devoto do salmo 91 e mantinha a esperança e opinião acerca das melhorias do Brasil e do mundo.
"Subindo os degraus da vida, pensar em desistir não é uma opção. Vamos até o fim; com garra, força e determinação." 
-Informática 2016-2018.</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">New Killers</h6>
                        <h1 class="display-4">Wesley Ferreira - 7</h1>
                    </div>
                    <p class="mb-4 pb-2">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet.</p>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-graduation-cap text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Posição: Fixo</h4>
                            <p>Jogador de linha, cuja principal função é o de impedir a pontuação do adversário.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-certificate text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Capitão</h4>
                            <p>Jogador que faz parte dessa equipe, que está em posição de líder, ou seja, que é responsável por direcionar/ guiar o seu time, desde o início do jogo até a vitória.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-book-reader text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Força de Vontade</h4>
                            <p class="m-0">Querer algo e lutar por aquilo que é almejado de forma intensa e sem medo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/sobretime.jpeg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->
@endsection
<?php
    $msg = "";
  use PHPMailer\PHPMailer\PHPMailer;
  include_once "PHPMailer/PHPMailer.php";
  include_once "PHPMailer/Exception.php";
  include_once "PHPMailer/SMTP.php";

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['name'] != "") {
      $file = "attachment/" . basename($_FILES['attachment']['name']);
      move_uploaded_file($_FILES['attachment']['tmp_name'], $file);
    } else
      $file = "";

    $mail = new PHPMailer();

    //if we want to send via SMTP
    $mail->Host = "smtp.gmail.com";
    //$mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "senaidbacinovic@gmail.com";
    $mail->Password = "5C1bcnPkDI4Wd%#";
    $mail->SMTPSecure = "ssl"; //TLS
    $mail->Port = 465; //587

    $mail->addAddress('info@sbmozmedia.com');
    $mail->name = $name;
    $mail->setFrom($email, $name);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $message;
    $mail->addAttachment($file);

    if ($mail->send())
        $msg = "Your email has been sent, thank you!";
    else
        $msg = "Please try again!";

    unlink($file);
  }
?>
<!DOCTYPE html>
<html lang="PT-pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SPORT BAR &amp; LOUNGE</title>
    <link href="css/fontawesome-all.min.css" rel="stylesheet"/>
    <link href="css/fa-light.min.css" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
  </head>
  <body> 
    <!--Navigation menu-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="navScrollspy">
          <div class="container">
            <a class="navbar-brand h1 mb-0" href="index.html"><img src="img/bamboo.png"></a>
            <button class="navbar-toggler compressed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background:none; border:none">
              <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="sendemail.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about_us">sobre nós</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">momentos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#reservas">reservas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">contactos</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link contactos" href="#"><i class="fal fa-phone"></i> +258 84xxx xxxx</a>
                </li> 
              </ul>
            </div>
          </div>
      </nav>
      <!--header-->
      <section class="header">
        <div class="container hero-top text-center">
          <div class="overlay"></div>
          <div class="container">
            <div class="hero-caption">
              <h1>grandes vibes.<br>
                  momentos unicos<br>
                <span class="moms">&amp; Cerveja que faz voce voltar.</span></h1>
               <h2>Lounge &amp; Sport Bar </h2>
            </div>
          </div>
        </div>
      </section>

      <!--about us--->

      <section class="about_us" id="about_us">
        <div class="container text-center">
          <div class="title-master">
          <h2 class="title-top">Bamboo Lounge &amp; Sport Bar  | O Conceito</h2>
          <P class= "title-p">Desfrute do conforto da nossa casa acompanhando os melhores jogos de futebol</P>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p class="about-p">Fundado em 2015 e tem sido responsável por fornecer um excelente serviço e excelente ambiente para todos os nossos hóspedes desde então. Nossa especialidade é na área de cervejas geladas, ótimas bebidas e um bom tempo em geral. Nossos clientes regulares valorizam particularmente nossa equipe simpática e excelente comida de bar. Temos um excelente menu de cervejas artesanais com 28 na torneira e mais de 100 garrafas e latas. Com mais de 30 TVs e 4 projetores Full HD, não há lugar melhor para assistir a todos os seus eventos esportivos favoritos.</p>
              <p class="slogan">“Veja o seu desporto favorito no Bamboo Lounge &amp; Sport Bar. Com 4 telas grandes, você não perderá nenhuma acção neste bar desportivo de Maputo"</p>
            </div>
            <div class="col-md-6">
              <div class="bamboo-imagem">
                <img src="img/bamboo_pic3.jpg" alt="bamboo-imagem">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--redes-->

      <section class="redes">
        <div class="container text-center">
          <h2 class="title-top">Novidades | Acompanhe as nossas redes</h2>
          <div class="row">
            
            <div class="col-md-4">
              <a href=""><div class="box_rede">
                <img src="img/rede_pic1.jpg">
              </div>
              <p>Contamos com voce todos os domingos a partir das 20h. Matine dançante para terminar o seu final de semana em grande!</p>
            </div></a>
            <div class="col-md-4">
              <a href=""><div class="box_rede">
                <img src="img/rede_pic2.jpg">
              </div>
              <p>Domingo sim, Domingo sim. Desde 2015 que lhe proporcionamos melhores momento de Kizomba!</p>
            </div></a>
            <div class="col-md-4">
              <a href=""><div class="box_rede">
                <img src="img/rede_pic3.jpg">
              </div>
              <p>O campeonato é Aqui, não deixe de partilher e celebrar estes momentos de grande emoção entre amigos e familiares!</p>
            </div></a>
          </div>
        </div>
      </section>
      <!--reservas-->
      <section class="reservas" id="reservas">
        
      </section>


      


























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/owl.carousel.min.js"></script> 
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script> 
  </body>
</html>

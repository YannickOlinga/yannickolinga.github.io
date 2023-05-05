<?php
$name=$email=$subject=$message="";
if($_SERVER["REQUEST_METHOD"]== "POST")
{
  $name=verifyInput($_POST["name"]);
  $email=verifyInput($_POST["email"]);
  $subject=verifyInput($_POST["subject"]);
  $message=verifyInput($_POST["message"]);

}
function verifyInput($var)
{
  $var =trim($var);
  $var=stripcslashes($var);
  $va=htmlspecialchars($var);
  return $var;
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yannick Olinga</title>

  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Bootstrap Link -->
  <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css">
  <script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
  <link href="images/logo nette (1).jpeg" rel="icon">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="script.js"></script>
</head>

<body>
  <!-- ----------------------------------code de la barre de navigation ------------------------------ -->
  <div class="scroll-up-btn">
    <i class="fas fa-angle-up"></i>
  </div>



  <nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
    <div class="container-fluid">

      <div class="logo"><a href="#">NO<span>SY</span></a></div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsid"
        aria-controls="navbarsid" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-view-list" style="color: #fff;"></span>
      </button>
      <div class="collapse text-center navbar-collapse" id="navbarsid">
        <ul class="navbar-nav mx-auto navbar-menu over visuel">
          <li><a class="over visuel" href="#home">Home</a></li>
          <li><a class="over visuel" href="#about">Qui Suis-Je</a></li>
          <li><a class="over visuel" href="#services">Services</a></li>
          <li><a class="over visuel" href="#competences">Skills</a></li>
          <li><a class="over visuel" href="#projets">Mes Realisations</a></li>
          <li><a class="over visuel" href="#contact">Contact </a></li>
          </a>
      </div>
    </div>
    </div>
  </nav>




  <!-- ------------------------------------code de la partie juste apres la navbar ----------------------------- -->
  <section class="home" id="home">
    <div class="max-widths">
      <div class="home-content">
        <div class="text-1">Salut, Mon nom c'est </div>
        <div class="text-2">Yannick Olinga </div>
        <div class="text-3">Et je suis <span class="typing"> Developpeur</span> </div>
        <a href="#">Laissez Moi Un Message</a>
      </div>
    </div>

    <!-- l'attribut scrollamount permet de modifier la vitesse d'un marquee -->

  </section>
  <!-- ---------------------------------------Section à Propos------------------------------ -->

  <section class="about" id="about">
    <h2 class="about-title">A Propos</h2>
    <div class="max-width">
      <div class="about-content">
        <div class="column left">
          <img src="images/img1.jpg" alt="">
        </div>
        <div class="column right">
          <div class="text">
            Je m'appele Noah Olinga Sylvestre Yannick (NOSY) nom de code "Binaire" je suis <span>Developpeur</span>

          </div>
          <p>JJe m'appele Noah Olinga Sylvestre Yannick (NOSY) nom de code BinaireJe m'appele Noah Olinga Sylvestre
            Yannick (NOSY) nom de code BinaireJe m'appele Noah Olinga Sylvestre Yannick (NOSY) nom de code BinaireJe
            m'appele Noah Olinga Sylvestre Yannick (NOSY) nom de code BinaireJe m'appele Noah Olinga Sylvestre Yannick
            (NOSY) nom de code BinaireJe m'appele Noah Olinga Sylvestre Yannick (NOSY) nom de code BinaireJe m'appele
            Noah Olinga Sylvestre Yannick (NOSY) nom de code BinaireJe m'appele Noah Olinga Sylvestre Yannick (NOSY) nom
            de code BinaireJe m'appele Noah Olinga Sylvestre Yannick (NOSY) nom de code BinaireJe m'appele Noah Olinga
            Sylvestre Yannick (NOSY) nom de code BinaireJe m'appele Noah Olinga Sylvestre Yannick (NOSY) nom de code
            BinaireJe m'appele Noah Olinga Sylvestre Yannick (NOSY) nom de code Binairee m'appele Noah Olinga Sylvestre
            Yannick (NOSY) nom de code Binaire</p>

          <a href="#">Telecharger Mon cv</a>
        </div>
      </div>
    </div>

  </section>


  <!-- --------------------------------Section Services---------------------------- -->

  <section class="Services" id="services">
    <h2 class="texts" style="margin-left: 45%;">Mes Services</h2>
    <div class="max-width">
      <div class="services-content">
        <div class="card">
          <div class="box">
            <i class="fas fa-paint-brush"></i>
            <div class="tex">Web Design</div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur magni quibusdam, neque commodi
              esse quaerat laborum exercitationem fugit fugiat doloremque animi minima id sint magnam distinctio in
              asperiores harum nemo.</p>
          </div>

        </div>
        <div class="card">
          <div class="box">
            <i class="fas fa-chart-line"></i>
            <div class="tex">Analiste</div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur magni quibusdam, neque commodi
              esse
              quaerat laborum exercitationem fugit fugiat doloremque animi minima id sint magnam distinctio in
              asperiores
              harum nemo.</p>
          </div>

        </div>
        <div class="card">
          <div class="box">
            <i class="fas fa-code"></i>
            <div class="tex">Apps Design</div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur magni quibusdam, neque commodi
              esse
              quaerat laborum exercitationem fugit fugiat doloremque animi minima id sint magnam distinctio in
              asperiores
              harum nemo.</p>
          </div>

        </div>
      </div>
    </div>
    </div>

    </div>

  </section>



  <!-- -----------------------Competences---------------------------------- -->
  <section class="competences" id="competences">
    <div class="max-width">
      <h2 class="texts" style="margin-left: 30%;"> Mes competences </h2>
      <div class="competences-content" style="display:flex; width: 100%;">
        <div class="column left" style="width: 40%; margin-right: 10%;">
          <div class="text">Mes competences et mon experience</div>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quos consequuntur adipisci commodi rem eum
            aperiam in, illum deserunt id voluptates, fugit ratione temporibus possimus culpa magnam quam saepe harum!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat culpa facere, corrupti expedita tempore a
            aliquid dolorem debitis at cum autem quia libero minima quo. Dolorem officiis ex debitis magnam.</p>
          <a href="#">Lire plus</a>
        </div>
        <div></div>


        <div class="column right" style="width: 50%;">
          <div class="bars">
            <div class="info">
              <span>HTML</span>
              <span>90%</span>
            </div>
            <div class="line html"></div>

          </div>
          <div class="bars">
            <div class="info">
              <span>CSS</span>
              <span>60%</span>
            </div>
            <div class="line css"></div>

          </div>
          <div class="bars">
            <div class="info">
              <span>Python</span>
              <span>40%</span>
            </div>
            <div class="line python"></div>

          </div>
          <div class="bars">
            <div class="info">
              <span>PHP</span>
              <span>30%</span>
            </div>
            <div class="line php"></div>

          </div>

          <div class="bars">
            <div class="info">
              <span>Javascrip</span>
              <span>50%</span>
            </div>
            <div class="line js"></div>

            <div class="bars">
              <div class="info">
                <span>MySQL</span>
                <span>50%</span>
              </div>
              <div class="line sql"></div>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>

  </section>


  <!-------------------------------------------------------- Mes realisations-------------------------------------------------------- -->
  <section class="projets" id="projets">
    <h2 class="texts"> Mes Réalisations</h2>

    <div class="flex flex-wrap justify-center big">
      <div class="suites"><img src="images/projet1.png" alt="style" class="rounded-lg max-w-sm img" height="600"
          width="350">
        <p>Shadow Shop est un site E-commerce. <br>
          Les technologies utilisées pour ce sites sont :<br>
          HTML5, CSS3, PHP, Bootstrap 3, JavaScrip <br>
          vous pouvez visiter le site a cette adresse : <br>
          <a href="../E-commerce/test.html" class="pro-link"> Shadow Shop</a>
        </p>
      </div>
      <div class="suites"> <img src="images/projet2.png" alt="style" class="rounded-lg max-w-sm img" height="600"
          width="350">
        <p>Le chat interposer est une connexion client-serveur <br> qui permet a une machine serveur de communiquer avec
          une autre machine client <br>
          Les technologies utilisées pour ce programme sont :<br>
          Python, la bibliotheque socket <br>
          <a href="#projets" class="pro-link"> Telecharger le code</a>
        </p>

      </div>
      <div class="suites"><img src="images/projet3.png" alt="style" class="rounded-lg max-w-sm img" height="600"
          width="350">
        <p>Le Terminal : c'est un clone du cmd de windows avec toutes les fonctionalités qui vont avec <br>
          Les technologies utilisées pour ce programme sont : <br>
          Python, la bibliotheque Socket, subprocess<br>
          <a href="#projets" class="pro-link"> Telecharger le code</a>
        </p>
      </div>

    </div>

  </section>

  <!-- ------------------------------------contact------------------------------------------ -->

  <section class="contact" id="contact">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);   ?>" role="form" >
    <div class="max-width" style="border: solid 2px crimson;">
      <h2 class="texts" style="margin-left: 30%;">Me Contacter</h2>
      <div style="display: flex; ">
        <div class="infos">
          <div class="contact-content">
            <div class="column left">
              <div class="text">Get in touch</div>
              <p>Vous avez un projet et vous voulez le concretisez ?
                N'esitez plus et laissez moi un message</p>
              <div class="icons">
                <div class="row">

                  <div class="info">
                    <br>
                    <div class="head" style="font-size: large;"> <i class="fas fa-user"></i>Name : Yannick Olinga</div>
                    <div class="sub-title"></div>
                  </div>
                </div>
                <div class="row">

                  <div class="info">
                    <div class="head"><i class="fas fa-market"></i>Address: Yaounde, Cameroun</div>
                    <div class="sub-title"></div>
                  </div>
                </div>
                <div class="row">
                  <i class="fas fa-envelope"></i>
                  <div class="info">
                    <div class="head">Email : YannickOlinga213@gmail.com</div>
                    <div class="sub-title"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="inputs">
          <h2 class="text"> Laissez moi un Message</h2>
          <div style="display: flex;">
            <input type="text" required name="name" placeholder="Name..." class="first-input" style="margin-right: 5%;">
             <input type="email" name="email" class="first-input" placeholder="Email..." style="margin-left: 5%;"> <br>
          </div>
          <input type="text" name="subject"
            style="resize: none;padding-top: 10px;width: 100%; border-radius: 6px; outline: none; font-size: 17px; padding: 0 15px; border: none; border-bottom: solid 3px #111;"
            placeholder="Sujet"><br>
          <Textarea placeholder="Describe Project" name="message" style="resize: none;padding-top: 10px; height:85px;width: 100%; border-radius: 6px; outline: none; font-size: 17px; padding: 0 15px;
margin-top: 5%;"></Textarea>
          <button type="submit">Envoyer</button>


        </div>
      </div>
    </div>
</form>
  </section>




  <footer class="foot">


    <span class="logo"><a href="#">NO<span>SY</span></a></span> Copiright 2023 <span
      style="float: right; color: gold;">disigned by Binaire</span>

  </footer>






  <!-- ------------------------- JS Links -------------------------------------------------------->
  <script src="plugins/jquery/jquery.js"></script>
  <script src="plugins/typed.js/lib/typed.min.js"></script>

  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>

  <script src="plugins/slick-carousel/slick/slick.min.js"></script>

  <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
  <script src="plugins/jquery/jquery.js"></script>

  <script src="js/script.js"></script>



</body>

</html>





<!-- -------------------------------------------------------------- Le Cimetiere du code -------------------------------------------   -->
<!-- <nav class="navbar">
    <div class="max-width">
      <div class="logo"><a href="#">NO<span>SY</span> </a></div>
       <div class="span-ul"> 
       <div class="ul-menu">  
      <ul class="menu">
        <li><a href="background.html">Home</a></li>
        <li><a href="#">Qui Suis-Je</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Skills</a></li>
        <li><a href="#">Equipe</a></li>
        <li><a href="#">Contact </a></li>
      </ul>
      <div class="menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav> -->

<!-- ---------------------------------Mon equipe-------------------------------------------- -->
<!-- 
  <section class="teams" id="teams">
    <div class="max-widths">
      <h2 class="title"> My Teams</h2>
      <div class="carousel">
        <div class="card">
          <div class="box">
            <img src="images/IMG_0002.JPG" alt="">
            <div class="text">Someone name</div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat ipsam perspiciatis natus nulla aliquid
              voluptatum sapiente maiores suscipit dicta dolor excepturi sed quod sequi vitae praesentium placeat,
              temporibus impedit libero!</p>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <img src="images/IMG_0002.JPG" alt="">
            <div class="text">Someone name</div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat ipsam perspiciatis natus nulla aliquid
              voluptatum sapiente maiores suscipit dicta dolor excepturi sed quod sequi vitae praesentium placeat,
              temporibus impedit libero!</p>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <img src="images/IMG_3374.JPG" alt="">
            <div class="text">Someone name</div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat ipsam perspiciatis natus nulla aliquid
              voluptatum sapiente maiores suscipit dicta dolor excepturi sed quod sequi vitae praesentium placeat,
              temporibus impedit libero!</p>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <img src="images/IMG_3375.JPG" alt="">
            <div class="text">Someone name</div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat ipsam perspiciatis natus nulla aliquid
              voluptatum sapiente maiores suscipit dicta dolor excepturi sed quod sequi vitae praesentium placeat,
              temporibus impedit libero!</p>
          </div>
        </div>
      </div>

    </div>

  </section> -->

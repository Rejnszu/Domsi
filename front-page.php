<?php




$args = [
  "metaDescription" => "Domsi- osiedle domów",

  "ogTitle" => "",
  "ogUrl" => get_home_url(),
  "ogSite_name" => "",
  "title" => "Domsi Home"
];
get_header(null, $args);
?>

<div class="container-fluid content p-0  overflow-hidden ">
  <!-- SLIDER -->
  <div id="sliderContainer" class="container-fluid  slider-container  p-0">

    <span class="prev"><i class="bi bi-caret-left-fill"></i></span>
    <span class="next"><i class="bi bi-caret-right-fill"></i></span>
    <div class="row slider m-0 p-0">
      <div class="dot-wrapper">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>

      </div>


      <div class="slide slide_1"> </div>
      <div class=" slide slide_2"> </div>
      <div class=" slide slide_3"> </div>
      <div class=" slide slide_4"> </div>
      <div class="slide slide_5"></div>

    </div>
  </div>

  <!-- SEKCJA Z MAPKA -->
  <div class="container-fluid container-map section-margin">
    <div class="row">
      <div class="col-sm-12 col-md-5 d-flex  justify-content-center align-items-center osiedle-opis">
        <div class="opis-wrapper d-flex flex-column align-items-start">
          <h2 class="amita">Osiedle Otulone</h2>
          <h3>Gdańsk, ul. Dolne Migowo</h3>
          <a href="<?php echo get_home_url() ?>/domy" class="custom-button">Sprawdź dostępne domy</a>
        </div>
      </div>
      <div class="col-sm-12 col-md-2  icon-front-wrapper ">
        <p>Zobacz Lokalizację</p><i class="bi bi-arrow-right"></i>
      </div>
      <div class="col-sm-12 col-md-5 d-flex justify-content-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2324.7492248073377!2d18.5702903!3d54.3614123!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e739be0257f2c33!2zNTTCsDIxJzQwLjgiTiAxOMKwMzQnMTcuNiJF!5e0!3m2!1spl!2spl!4v1646828972434!5m2!1spl!2spl" class="front-map" allowfullscreen="" loading="lazy" style="border:0;">
        </iframe>
      </div>
    </div>
  </div>
  <!-- GWARANCJA SPOKOJNEGO ŻYCIA -->
  <div class="container-fluid  section-margin spokojne-zycie">
    <div class="col-sm-12 d-flex justify-content-center">
      <h3>Gwarancja Spokojnego Życia</h3>
    </div>

    <div class="row d-flex ">

      <div class="col-sm-12 col-lg-4 list-group">
        <ul>
          <li><img src=<?php echo get_template_directory_uri() . "/assets/ikona-kwadrat.png"; ?> alt="ikona" class="list-icon"> Świeże powietrze</li>
          <li><img src=<?php echo get_template_directory_uri() . "/assets/ikona-kwadrat.png"; ?> alt="ikona" class="list-icon"> Prestiżowa lokalizacja</li>
          <li><img src=<?php echo get_template_directory_uri() . "/assets/ikona-kwadrat.png"; ?> alt="ikona" class="list-icon"> Komfort akustyczny</li>
        </ul>
      </div>
      <div class="col-sm-12 col-lg-4 list-group">
        <ul>
          <li><img src=<?php echo get_template_directory_uri() . "/assets/ikona-kwadrat.png"; ?> alt="ikona" class="list-icon"> Przestronne garaże</li>
          <li><img src=<?php echo get_template_directory_uri() . "/assets/ikona-kwadrat.png"; ?> alt="ikona" class="list-icon"> Ogrzewanie podłogowe</li>
          <li><img src=<?php echo get_template_directory_uri() . "/assets/ikona-kwadrat.png"; ?> alt="ikona" class="list-icon"> Kominki Gazowe</li>
        </ul>
      </div>
      <div class="col-sm-12 col-lg-4 list-group">
        <ul>
          <li><img src=<?php echo get_template_directory_uri() . "/assets/ikona-kwadrat.png"; ?> alt="ikona" class="list-icon"> Fotowoltaika</li>
          <li><img src=<?php echo get_template_directory_uri() . "/assets/ikona-kwadrat.png"; ?> alt="ikona" class="list-icon"> Klimatyzacja</li>
          <li><img src=<?php echo get_template_directory_uri() . "/assets/ikona-kwadrat.png"; ?> alt="ikona" class="list-icon"> Alarm</li>
        </ul>
      </div>
    </div>
    <div class="col-sm-12 d-flex justify-content-center"> <a href="#" class="custom-button-border">Więcej w zakładce standard ></a></div>
  </div>
  <!-- Wykończenie -->
  <div class="container-fluid section-margin wykonczenie">
    <div class="col-sm-12 d-flex justify-content-center">
      <h3>Kompleksowe Usługi</h3>
    </div>
    <div class="row row-wykonczenie">
      <div class="col-sm-12 col-xl-7 wykonczenie-tekst d-flex flex-column  justify-content-center">
        <p class="align-self-start"> Poza wysokim standardem wykończenia proponujemy szereg usług dodatkowych dla naszych klientów. Współpracujemy z lokalnymi solidnymi firmami zajmującymi się:</p>
        <ul>
          <li><img src=<?php echo get_template_directory_uri() . "/assets/ikona-kwadrat.png"; ?> alt=" ikona" class="list-icon"></i>Wykończeniem wnętrz</li>
          <li><img src=<?php echo get_template_directory_uri() . "/assets/ikona-kwadrat.png"; ?> alt="ikona" class="list-icon"></i>Fotowoltaiką</li>
          <li><img src=<?php echo get_template_directory_uri() . "/assets/ikona-kwadrat.png"; ?> alt="ikona" class="list-icon"></i>Klimatyzacją</li>
          <li><img src=<?php echo get_template_directory_uri() . "/assets/ikona-kwadrat.png"; ?> alt="ikona" class="list-icon"></i>Instalacjami wewnętrznymi</li>
          <li><img src=<?php echo get_template_directory_uri() . "/assets/ikona-kwadrat.png"; ?> alt="ikona" class="list-icon"></i>Alarmami oraz kamerami</li>
        </ul>
        <p class="">Z czystym sumieniem polecimy odpowiednich fachowców. Skontaktuj się z nami w celu uzyskania informacji.</p>
      </div>
      <div class="col-sm-12 col-xl-5 d-flex justify-content-center align-items-center"><img class="wykonczenie-img" src="<?php echo get_template_directory_uri() . "/assets/desktop/10-min.jpg"; ?>" alt="wykonczenie"></div>
    </div>
  </div>

</div>
<?php get_footer(); ?>
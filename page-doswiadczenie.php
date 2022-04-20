<?php




$args = [
    "metaDescription" => "Domsi- osiedle domów",

    "ogTitle" => "",
    "ogUrl" => get_home_url(),
    "ogSite_name" => "",
    "title" => "Domsi doświadczenie"
];
get_header(null, $args);
?>

<div class="container-fluid">
    <div class="row section-front">
        <div class="col-sm-12 d-flex justify-content-center">
            <h1>Doświadczenie</h1>
            <img src=<?php echo get_template_directory_uri() . "/assets/standard/domek.png"; ?> alt="domek">
        </div>
    </div>
</div>
<div class="container-fluid section-margin">
    <div class="row">
        <div class="col-sm-12 d-flex justify-content-center opisy ">
            <p> Przygodę z budownictwem zaczęliśmy 30 lat temu jako firma ELMAL zajmująca się głównie sieciami gazowymi, ciepłowniczymi, wodociągowymi oraz kanalizacyjnymi. Wykorzystując naszą pasję i doświadczenie w ostatnich latach mocno poszerzyliśmy horyzonty. Wybudowaliśmy 3 hale magazynowe z zapleczami biurowymi oraz 1 biurowiec przy ul. Kartuskiej w Gdańsku. Obecnie równie sumiennie wchodzimy na rynek mieszkań i domów jednorodzinnych. </p>
        </div>
    </div>
    <div class="container-fluid mt-3 doswiadczenie-margin">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                <img class="doswiadczenie-img" src=<?php echo get_template_directory_uri() . "/assets/desktop/doswiadczenie/wacker1-min.jpg"; ?> alt="wacker1">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                <img class="doswiadczenie-img" src=<?php echo get_template_directory_uri() . "/assets/desktop/doswiadczenie/wacker2-min.jpg"; ?> alt="wacker2">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                <img class="doswiadczenie-img" src=<?php echo get_template_directory_uri() . "/assets/desktop/doswiadczenie/wacker3-min.jpg"; ?> alt="wacker3">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                <img class="doswiadczenie-img" src=<?php echo get_template_directory_uri() . "/assets/desktop/doswiadczenie/sunpro-min.jpg"; ?> alt="wacker4">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                <img class="doswiadczenie-img" src=<?php echo get_template_directory_uri() . "/assets/desktop/doswiadczenie/elmal-min.jpg"; ?> alt="wacker5">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                <img class="doswiadczenie-img" src=<?php echo get_template_directory_uri() . "/assets/desktop/doswiadczenie/elmal2-min.jpg"; ?> alt="wacker6">
            </div>
        </div>
    </div>
    <div class="container d-flex flex-column align-items-center justify-content-center">
        <h3 class="doswiadczenie-h3">Zobacz w rzeczywistości</h3>
        <iframe class="doswiadczenie-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2326.161060148986!2d18.56447821587602!3d54.33646138019847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd743e9e9b7d5f%3A0xa6cdac2dbbbd05f7!2sElmal%20Sp.%20z%20o.o.!5e0!3m2!1spl!2spl!4v1648453915627!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<?php get_footer(); ?>
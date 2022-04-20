<?php




$args = [
    "metaDescription" => "Domsi- osiedle domów",

    "ogTitle" => "",
    "ogUrl" => get_home_url(),
    "ogSite_name" => "",
    "title" => "Domsi kontakt"
];
get_header(null, $args);
?>
<div class="container-fluid ">
    <div class="row section-front">
        <div class="col-sm-12 d-flex justify-content-center">
            <h1>Kontakt</h1>
            <img src=<?php echo get_template_directory_uri() . "/assets/standard/domek.png"; ?> alt="domek">
        </div>
    </div>
</div>
<div class="container-fluid section-margin pl-5 pr-5">
    <div class="row">
        <div class="col-sm-12 col-lg-4 d-flex flex-column align-items-center justify-content-center">
            <div class="col-sm-12  kontakt-text">
                <div class="kontakt-wrapper kontakt-margin">
                    <h3>Chętnie z Tobą porozmawiamy!</h3>
                    <p>Napisz do nas na: <a href="mailto:biuro@domsi.pl">biuro@domsi.pl</a> </p>
                    <p>lub zadzwoń: <a href="tel:0048505038476">505-038-476</a> </p>
                </div>
                <div class="kontakt-wrapper">
                    <h3>Nasz adres:</h3>
                    <p>DOMSI SP. Z O.O.</p>
                    <p>Kartuska 340, 80-125 Gdańsk</p>
                </div>
            </div>


        </div>
        <div class="col-sm-12 col-lg-2  icon-front-wrapper icon-kontakt-wrapper">
            <p>Siedziba firmy</p><i class="bi bi-arrow-right"></i>
        </div>
        <div class="col-sm-12 col-lg-6"><iframe class="front-map-kontakt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2326.157812704783!2d18.56454481587608!3d54.3365187801985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd752e3635ea3b%3A0x3b9f2e0df001aa49!2sDOMSI%20SP.%20Z%20O.O.!5e0!3m2!1spl!2spl!4v1648723512230!5m2!1spl!2spl" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>


</div>
<?php get_footer(); ?>
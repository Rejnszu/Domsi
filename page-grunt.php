<?php




$args = [
    "metaDescription" => "Domsi- osiedle domów",

    "ogTitle" => "",
    "ogUrl" => get_home_url(),
    "ogSite_name" => "",
    "title" => "Domsi kupimy grunt"
];
get_header(null, $args);
?>
<div class="container-fluid ">
    <div class="row section-front">
        <div class="col-sm-12 d-flex justify-content-center">
            <h1>Kupimy grunt</h1>
            <img src=<?php echo get_template_directory_uri() . "/assets/standard/domek.png"; ?> alt="domek">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 grunt-wrapper ">
            <div>
                <div>
                    <p>Zakupimy grunty pod zabudowę jednorodzinną lub wielorodzinną na terenie Trójmiasta.</p>
                    <p>Oferty prosimy przesyłać na adres: <a href="mailto:biuro@domsi.pl">biuro@domsi.pl</a> </p>
                    <p>Kontakt z biurem sprzedaży: <a href="tel:0048505038476">505-&nbsp;038-&nbsp;476</a> </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
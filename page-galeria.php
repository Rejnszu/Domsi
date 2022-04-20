<?php




$args = [
    "metaDescription" => "Domsi- osiedle domów",

    "ogTitle" => "",
    "ogUrl" => get_home_url(),
    "ogSite_name" => "",
    "title" => "Domsi galeria"
];
get_header(null, $args);
?>

<div class="container-fluid galeria">
    <div class="row section-front">
        <div class="col-sm-12 d-flex justify-content-center">
            <h1>Galeria</h1>
            <img src=<?php echo get_template_directory_uri() . "/assets/standard/domek.png"; ?> alt="domek">
        </div>
    </div>
    <div class="container-fluid galeria-nawigacja section-margin">
        <div class="row d-flex justify-content-around">
            <a href="<?php echo get_home_url() ?>/domsi-galeria" class="col-12 col-md-5 foto foto-margin">
                <div class="zoom otulone"></div>
                <div class="bg-text text-center d-flex flex-column justify-content-center">
                    <h2>Osiedle Otulone</h2>
                    <h3>Gdańsk, ul. Dolne Migowo</h3>
                </div>
            </a>

            <a href="<?php echo get_home_url() ?>/doswiadczenie" class="col-12 col-md-5 foto">
                <div class="zoom portfolio"></div>
                <div class="bg-text text-center d-flex flex-column justify-content-center">
                    <h2>Dotychczasowe Realizacje</h2>
                </div>
            </a>
        </div>
    </div>
</div>
<?php get_footer(); ?>
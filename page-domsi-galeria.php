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
            <h1>Osiedle Otulone</h1>
            <img src="<?php echo get_template_directory_uri() . "/assets/standard/domek.png"; ?>" alt="domek">
        </div>
    </div>
    <div class="container-fluid galeria-domsi pt-5 pb-5">
        <div class="popup-gallery row">
            <div class="col-12 col-md-6 col-lg-4 galleria_foto">
                <a href="<?php echo get_template_directory_uri() . "/assets/desktop/1_3-min.jpg"; ?>" title="Osiedle Otulone">
                    <img src="<?php echo get_template_directory_uri() . "/assets/desktop/1_3-min.jpg"; ?>" alt="Osiedle Otulone wizualizacja">
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 galleria_foto">
                <a href="<?php echo get_template_directory_uri() . "/assets/desktop/2+ludzie-min.jpg"; ?>" title="Osiedle Otulone">
                    <img src="<?php echo get_template_directory_uri() . "/assets/desktop/2+ludzie-min.jpg"; ?>" alt="Osiedle Otulone wizualizacja">
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4 galleria_foto">
                <a href="<?php echo get_template_directory_uri() . "/assets/desktop/4+ludzie-min.jpg"; ?>" title="Osiedle Otulone">
                    <img src="<?php echo get_template_directory_uri() . "/assets/desktop/4+ludzie-min.jpg"; ?>" alt="Osiedle Otulone wizualizacja">
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 galleria_foto">
                <a href="<?php echo get_template_directory_uri() . "/assets/desktop/6_2+ludzie-min.jpg"; ?>" title="Osiedle Otulone">
                    <img src="<?php echo get_template_directory_uri() . "/assets/desktop/6_2+ludzie-min.jpg"; ?>" alt="Osiedle Otulone wizualizacja">
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4 galleria_foto">
                <a href="<?php echo get_template_directory_uri() . "/assets/desktop/11-min.jpg"; ?>" title="Osiedle Otulone">
                    <img src="<?php echo get_template_directory_uri() . "/assets/desktop/11-min.jpg"; ?>" alt="Osiedle Otulone wizualizacja">
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4 galleria_foto">
                <a href="<?php echo get_template_directory_uri() . "/assets/desktop/standard-min.jpg"; ?>" title="Osiedle Otulone">
                    <img src="<?php echo get_template_directory_uri() . "/assets/desktop/standard-min.jpg"; ?>" alt="Osiedle Otulone wizualizacja">
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
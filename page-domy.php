<?php




$args = [
    "metaDescription" => "Domsi- osiedle domów",

    "ogTitle" => "",
    "ogUrl" => get_home_url(),
    "ogSite_name" => "",
    "title" => "Domsi wykończenie"
];
get_header(null, $args);
?>
<div class="container-fluid">
    <div class="row section-front">
        <div class="col-sm-12 d-flex justify-content-center">
            <h1>Dostępne domy</h1>
            <img src=<?php echo get_template_directory_uri() . "/assets/standard/domek.png"; ?> alt="domek">
        </div>
    </div>
</div>
<div class="container-fluid section-margin">

    <div class="row">
        <div class="col-sm-12 d-flex justify-content-center opisy">
            <p> Osiedle Otulone położone przy ul. Dolne Migowo w Gdańsku to unikatowe miejsce znajdujące się w otulinie słynnych lasów Matemblewskich należących do Trójmiejskiego Parku Krajobrazowego. Jest to przepiękna okolica do życia, w której można odnaleźć harmonię oraz przestrzeń do rekreacji. Ten wspaniały obszar położony jest w centrum Gdańska co czyni go jeszcze bardziej wyjątkowym. Bliskość Wrzeszcza (8 min.), Gdańska Głównego (12 min.) oraz obwodnicy Trójmiasta (7min) to niezwykle strategiczna i rzadka lokalizacja pozwalająca na szybkie załatwienie codziennych spraw oraz odpoczynek w domu. </p>
        </div>
    </div>
    <div class="table-desktop">
        <table data-table></table>
    </div>
    <div class=" table-mobile">
        <template data-house-template>
            <div class="col-sm-12 col-md-10 col-lg-8 house-offer-wrapper" data-house-wrapper>
                <div class="col-sm-12  house-title " data-house-title></div>
                <div class="house-offer p-0 " data-house-offer>
                    <ul data-house-ul>

                    </ul>
                </div>
            </div>
        </template>


    </div>
</div>
<?php get_footer(); ?>
<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Professionele reparaties voor een eerlijke prijs.'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="header__box">
                        <img class="header__img" src="./assets/img/loodgieterheld-logo.png" alt="" >
                        <a class="btnLink" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
         <section class="headerFon">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="headerFon__box">
                            <h1 class="headerFon__title"><?= $title ?></h1>
                            <p class="headerFon__dscr">Of het nu gaat om het vervangen van een kraan of het opsporen van een lekkage. Onze lokale professionals verhelpen uw probleem in no-time!</p>
                            <ul class="headerFon__ul">
                                <li class="headerFon__li">✓ 24/7 Loodgieter service</li>
                                <li class="headerFon__li">✓ Binnen 20 min op locatie</li>
                                <li class="headerFon__li">✓ Al meer dan 18 jaar ervaring</li>
                                <li class="headerFon__li">✓ Gecertificeerde loodgieters</li>
                                <li class="headerFon__li">✓ Schadevrij te werk</li>
                            </ul>
                            <a class="btnLink" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="solution">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="solution__box">
                            <div class="solution__img-inner">
                                <img class="solution__img" src="./assets/img/uwregioloodgieter-r.png" alt="" >
                            </div>
                            <div class="solution__inner">
                                <h2 class="solution__title">Last van een verstopping?</h2>
                                <p class="solution__dscr">We hebben een oplossing voor ieder probleem!</p>
                                <p class="solution__txt">Ons team van experts en specialisten staan klaar om u te helpen met de kleinste tot grootste problemen op gebied van lekkages en verstoppingen! Geen klus is te groot of moeilijk voor onze loodgieters. U kunt ons altijd telefonisch bereiken voor meer informatie.</p>
                                <div class="bntLink__inner">
                                    <a class="btnLink" href="<?= $phone_href ?>" ><span>Bel:<?= $phone_name ?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="slider">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="slider__box">
                            <h2 class="slider__title">Onze diensten</h2>
                            <p class="slider__dscr">Wanneer u een afspraak in heeft gepland en onze monteur is bij u thuis of op kantoor zullen wij altijd eerst inventariseren wat het probleem is. Op basis van deze inventarisatie geven we u een duidelijke prijsopgave. Wanneer u vragen heeft over de werkzaamheden zullen we deze met u doorlopen.</p>
                            <div class="slider__view">
                                <div class="slider__item">
                                    <img class="slider__img" src="./assets/img/1DOUCHE.png" alt="" >
                                    <p class="slider__name">DOUCHE ONTSTOPPEN</p>
                                </div>
                                <div class="slider__item">
                                    <img class="slider__img" src="./assets/img/2RIOOL.png" alt="" >
                                    <p class="slider__name">RIOOL REINIGEN</p>
                                </div>
                                <div class="slider__item">
                                    <img class="slider__img" src="./assets/img/3DAKGOOT.png" alt="" >
                                    <p class="slider__name">DAKGOOT ONTSTOPPEN</p>
                                </div>
                                <div class="slider__item">
                                    <img class="slider__img" src="./assets/img/4LEKKAGE-1.png" alt="" >
                                    <p class="slider__name">LEKKAGE VERHELPEN</p>
                                </div>
                                <div class="slider__item">
                                    <img class="slider__img" src="./assets/img/5toiletonstoppen.png" alt="" >
                                    <p class="slider__name">TOILET ONTSTOPPEN</p>
                                </div>
                                <div class="slider__item">
                                    <img class="slider__img" src="./assets/img/6GOOTSTEEN.png" alt="" >
                                    <p class="slider__name">GOOTSTEEN ONTSTOPPEN</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="region">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="region__box">
                            <div class="region__left">
                                <h2 class="region__title">Uw professionele ontstoppingsdienst in uw regio.</h2>
                                <p class="region__dscr">De oplossing voor al uw rioolproblemen! Loodgieter van Bommel is al jaren expert op het gebied van rioleringsproblemen. Onze loodgieters kunnen u in bijna alle situaties van dienst zijn en vertellen u hier graag meer over.</p>
                                <p class="region__dscr">Ons team bestaat uit loodgieters die zijn opgeleid om het hoogste niveau van klanttevredenheid te garanderen. Zij beschikken ieder over veel kennis binnen hun vakgebied.</p>
                                <div class="btnLink__inner">
                                    <a href="<?= $phone_href ?>" class="btnLink"><span>Bel direct! <?= $phone_name ?></span></a>
                                </div>
                            </div>
                            <div class="region__right">
                                <div class="region__wrapper">
                                    <div class="region__inner">
                                        <img src="./assets/icons/star-full.svg" alt="" class="region__img">
                                    </div>
                                    <p class="region__name">Betrouwbaar & ervaren</p>
                                    <p class="region__text">Met jarenlange ervaring kunt u vertrouwen dat onze loodgieters over de juiste kennis en expertise beschikken.</p>
                                </div>
                                <div class="region__wrapper">
                                    <div class="region__inner">
                                        <img src="./assets/icons/power.svg" alt="" class="region__img">
                                    </div>
                                    <p class="region__name">Snel op locatie</p>
                                    <p class="region__text">Onze monteurs zijn altijd snel bij jou op locatie. Vaak kunnen we er zelfs binnen 1 uur zijn!</p>
                                </div>
                                <div class="region__wrapper">
                                    <div class="region__inner">
                                        <img src="./assets/icons/handshake-o.svg" alt="" class="region__img">
                                    </div>
                                    <p class="region__name">Persoonlijk contact</p>
                                    <p class="region__text">Duidelijke communicatie is prioriteit. wij zijn flexibel, snel en duidelijk in onze communicatie. Wij zijn telefonisch altijd bereikbaar!</p>
                                </div>
                                <div class="region__wrapper">
                                    <div class="region__inner">
                                        <img src="./assets/icons/credit-card.svg" alt="" class="region__img">
                                    </div>
                                    <p class="region__name">Contactloos Betalen</p>
                                    <p class="region__text">U kunt bij ons contactloos betalen. Snel, veilig en gemakkelijk.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="emergencyService">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="emergencyService__box">
                            <h2 class="emergencyService__title">Loodgieter spoedservice</h2>
                            <p class="emergencyService__txt">Heeft u een spoed loodgieter of een weekend loodgieter nodig? Loodgieter-vanbommel.nl helpt u graag verder. Het kan zijn dat u door een vervelende verstopping of een lekkage snel geholpen moet worden. Wij staan als nood loodgieter 24/7 voor u klaar. Ons team van experts en specialisten helpen u graag met de kleinste of grootste problemen op het gebied van lekkages en verstoppingen.</p>
                            <div class="emergencyService__wrapper">
                                <div class="emergencyService__inner">
                                    <p class="emergencyService__name">24/7 bereikbaar</p>
                                    <p class="emergencyService__dscr">Wij staan 24/7 voor u klaar waardoor u ook met noodgevallen bij ons terecht kunt!</p>
                                </div>
                                <div class="emergencyService__inner">
                                    <p class="emergencyService__name">Betrouwbaar en ervaren</p>
                                    <p class="emergencyService__dscr">Betrouwbaar en ervaren
                                        Door onze jarenlange ervaring hebben wij veelzijdige vakkennis opgebouwd!</p>
                                </div>
                                <div class="emergencyService__inner">
                                    <p class="emergencyService__name">Super snel op locatie</p>
                                    <p class="emergencyService__dscr">Bel direct voor snelle hulp van een vakman bij u in de buurt! Wij staan 24/7 voor u klaar.</p>
                                </div>
                                <div class="emergencyService__inner">
                                    <p class="emergencyService__name">Gegarandeerd tevreden</p>
                                    <p class="emergencyService__dscr">Klanttevredenheid staat bij ons hoog in het vaandel, vandaar dat wij u een uitstekende service bieden!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="rightNow">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="rightNow__box">
                            <div class="rightNow__wrapper">
                                <h2 class="rightNow__title">Nu een loodgieter nodig? - Wij staan direct voor u klaar</h2>
                                <p class="rightNow__dscr">Geen klus is te groot of moeilijk voor onze loodgieters. Met veel ervaring zorgen we bij iedere klus weer voor een goede ervaring bij onze klanten. Bel direct voor een afspraak.</p>
                            </div>
                            <a class="btnLink btnLink2" href="<?= $phone_href ?>" ><span>Bel direct! <?= $phone_name ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="forms">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="forms__box">
                            <div class="ps-lg-5 ps-md-0" style="max-width: 900px;margin:45px auto;">
                                <form id="jq_form" >
                                    <h5 class="text-center fw-bold text-secondary">Offerte aanvragen<h5>
                                    <div class="my-3">
                                        <input class="form-control" placeholder="Uw Naam" name="jq_name" type="text">
                                        <div id="jq_name" style="font-size:15px;color:red;display:none">Het veld mag niet leeg zijn.</div>
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control" placeholder="Telefoonnummer" name="jq_phone" type="text">
                                        <div id="jq_phone" style="font-size:15px;color:red;display:none">Het veld mag niet leeg zijn.</div>
                                    </div> 
                                    <div class="my-3">
                                        <input class="form-control" placeholder="E-Mail" name="jq_email" type="text"> 
                                    </div>
                                    <div class="my-3">
                                        <textarea rows="3" class="form-control" name="jq_text" placeholder="Uw Bericht"></textarea>
                                        <div id="jq_text" style="font-size:15px;color:red;display:none">Het veld mag niet leeg zijn.</div>
                                    </div>
                                    <input class="btn btn-success text-uppercase fw-bold mb-1 px-3 py-2" type="submit" id="jq_submit" value="Verstuur"> 
                                    <div id="jq_success" style="display:none">The form was sent successfully.</div>
                                </form>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">© 2022</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/main.min.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIMIEF CI - Accueil</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">




    <?php
// Inclure l'en-tête
include('header.php');
include('slider.php');

// Récupérer le segment d'URL correspondant à la page demandée
$page_segment = $_SERVER['REQUEST_URI'];

// Supprimer les slashs de début et de fin du segment d'URL
$page_segment = trim($page_segment, '/');

// Charger la page correspondante en fonction du segment d'URL
$page_path = 'pages/' . $page_segment . '.php';
if (file_exists($page_path)) {
    include($page_path);
} else {
    // Si la page demandée n'existe pas, vous pouvez afficher une page par défaut ou une page d'erreur.
    include('pages/404.php');
}
?>







    <!-- Feature Start -->


    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/slider/img1.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">Bienvenue</h6>
                        <h1 class="mb-4">SIMIEF-CI SARL</h1>
                        <p style="text-align: justify;">Nous sommes une entreprise polyvalente opérant dans les domaines de l'hygiène publique, du génie civil, de l'hydraulique, de l'électricité et du froid. Avec une expertise reconnue et une solide expérience, nous offrons des services complets et des solutions sur mesure pour répondre aux besoins variés de nos clients. Que ce soit pour des projets de propreté urbaine, de construction d'infrastructures, de gestion des ressources en eau, ou d'installation électrique et de systèmes de réfrigération, nous sommes là pour vous accompagner à chaque étape.</p>
                        <a href="about.php" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Voir +</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Nos Services / Prestations</h6>
                <h4 class="mb-4">Nous combinons connaissances et pratiques innovantes pour fournir des résultats exceptionnels à nos clients</h4>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-serv" src="img/service/hp1.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h6 class="mt-2 mb-3">HYGIENE PUBLIQUE </h6>
                            <p>Votre partenaire en matière d'hygiène publique et de propreté urbaine.</p>
                           <a class="small fw-medium" href="details.php">Voir<i class="fa fa-arrow-right ms-2"></i></a>                        
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-serv" src="img/d04.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h6 class="mt-2 mb-3">DESINSECTISATION </h6>
                            <p>Mettez fin à l'invasion des insectes ! Faites appel à nos experts en désinsectisation pour...</p>
                           <a class="small fw-medium" href="./pages/01.php">Voir<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-serv" src="img/d03.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h6 class="mt-2 mb-3">DEMOUSTICATION </h6>
                            <p>Dites adieu aux moustiques ! Notre entreprise spécialisée en démoustication vous propose...</p>
                           <a class="small fw-medium" href="./pages/02.php">Voir<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-serv" src="img/service/hp2.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h6 class="mt-2 mb-3">DERATISATION </h6>
                            <p> Ne laissez pas les rongeurs prendre le contrôle ! Notre équipe qualifiée vous propose des ...</p>
                            <a class="small fw-medium" href="./pages/03.php">Voir<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-serv" src="img/d02.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h6 class="mt-2 mb-3">DESINFECTION </h6>
                            <p>Assurez la propreté et la sécurité de votre environnement ! Avec nos services de désinfec...</p>
                           <a class="small fw-medium" href="./pages/04.php">Voir<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-serv" src="img/dd.jpg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h6 class="mt-2 mb-3">DIVERS</h6>
                            <p>Spécialiste en démoustication, où nous œuvrons pour un environnement sain et sans ...</p>
                           <a class="small fw-medium" href="./pages/05.php">Voir<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary">Pourquoi nous choisir ?</h6>
                        <h1 class="mb-4">Choisir SIMIEF-CI, c'est choisir un partenaire fiable.</h1>
                        <p class="mb-4 pb-2" style="text-align:justify;">Contactez-nous dès aujourd'hui pour discuter de vos besoins spécifiques et découvrir comment nous pouvons vous accompagner dans la réalisation de vos projets. Nous sommes impatients de travailler avec vous et de faire la différence ensemble.</p>

                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/service/img05.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Nos Réalisations</h6>
                <h4 class="mb-4">Votre satisfaction est notre priorité absolue, et nous nous efforçons constamment de surpasser vos attentes en termes de qualité, de délais et de budget.</h4>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">Tous</li>
                        <li class="mx-2" data-filter=".first">Démoustication</li>
                        <li class="mx-2" data-filter=".second">Dératisation</li>
                        <li class="mx-2" data-filter=".third">Hygiène Publique</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/real/rea3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/real/rea3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Démoustication</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Opération de dératisation, démoustication, désinsectisation et de déserpentisation des sites de la SODECI.</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/real/rea1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/real/rea1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Dératisation</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Opération de dératisation, démoustication, désinsectisation et de déserpentisation des sites de la SODECI.</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/service/group.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/service/group.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">  
                        <p class="text-primary mb-0">Démoustication</p>
                        <hr class="text-primary w-25 my-2">
                        <h5 class="lh-base">Opération de dératisation, démoustication, désinsectisation et de déserpentisation des sites de la SODECI.</h5>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Quote Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/service/2.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">Dévis Gratuit</h6>
                        <h1 class="mb-4">Demander un dévis gratuit</h1>
                        <p class="mb-4 pb-2" style="text-align: justify;">Si vous êtes une entreprise ou un particulier en quête d'un devis pour l'un de nos services, veuillez nous faire parvenir vos exigences. Nous nous engageons à vous fournir une réponse dans les meilleurs délais possibles.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Votre nom" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Votre Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Votre Contact" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Choisir le service</option>
                                        <option value="1">Hydraulique</option>
                                        <option value="2">Génie civil</option>
                                        <option value="3">Electricité/froid</option>
                                        <option value="3">Négoce</option>
                                        <option value="3">Divers</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Plus de détails"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Témoingnages</h6>
                <h1 class="mb-4">Ce que disent nos clients !</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/service/6.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-thumbs-up text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Je tiens à exprimer ma profonde satisfaction envers les services exceptionnels de l'Entreprise SIMIEF-CI. Leur équipe dévouée a pris en charge notre projet de propreté urbaine avec professionnalisme et efficacité.</p>
                        <h5 class="mb-1">Anne KOUAKOU</h5>
                        <span class="fst-italic">Caissière</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/service/7.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Je suis extrêmement satisfait des services fournis par l'Entreprise SIMIEF-CI et je les recommande vivement.</p>
                        <h5 class="mb-1">Théodore DOUKROU</h5>
                        <span class="fst-italic">Chauffeur</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/service/2.jpeg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Nous sommes ravis de notre collaboration avec cette Entreprise et nous les remercions pour leur professionnalisme exemplaire.</p>
                        <h5 class="mb-1">Guy Michel KACOU</h5>
                        <span class="fst-italic">Chef d'Entreprise</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Nos Partenaires</h6>
                <h1 class="mb-4">Ils nous font confiance !</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid mx-auto mb-5" src="img/logo/ciprel.jpg">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid mx-auto mb-5" src="img/logo/cie1.png">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid mx-auto mb-5" src="img/logo/impot.png">
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid mx-auto mb-5" src="img/logo/SODECI.jpg">
                    </div>
                </div>
            </div>
            
        </div>
    </div> 

    <?php
    // Inclure le pied-de-page
    include('footer.php');
    ?>
</body>

</html>
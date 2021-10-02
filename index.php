<?php include '/includes/header.php'?>
<?php include '/includes/nav.php'?>
<?php include '/includes/carousel.php'?>

<main>
    <section class='container'>
        <article class='intro'>
            <div class="intro-image">
                <img src="./assets/images/mrBig4.jpg" alt='Mr Big'/>
            </div>
            <div class='intro-content'>
                <h3 class='intro-content__head'>O teretani</h3>
                <h2 class='intro-content__subhead'>Pravilna rešenja za bezbednu izgradnju tela koja štede naše dragoceno vreme!</h2>
                <p class='intro-content__text'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo debitis, voluptate natus cumque, distinctio dignissimos tenetur atque eaque deserunt exercitationem earum, provident ullam rerum aliquid voluptates. Dolores enim quisquam ducimus.</p>
            </div>
        </article>
    </section>

    <section style='background: #1b1b1b;'>
        <article class='icons'>
            <h1 class='icons-head'>Zašto izabrati nas?</h1>
            <div class='icons-figure'>
                <div class='card'>
                    <figure>
                        <img src="./assets/icons/weights.png" alt="MR big tegovi"/>
                    </figure>
                    <h2>Tegovi</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel dolore exercitationem sunt saepe beatae reprehenderit eos id voluptate nisi ducimus!</p>
                </div>
                <div class='card'>
                    <figure>
                        <img src="./assets/icons/cardio.png" alt="MR big kardio"/>
                    </figure>
                    <h2>Kardio</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel dolore exercitationem sunt saepe beatae reprehenderit eos id voluptate nisi ducimus!</p>
                </div>
                <div class='card'>
                    <figure>
                        <img src="./assets/icons/plan.png" alt="MR big plan"/>
                    </figure>
                    <h2>Individualni treninzi</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel dolore exercitationem sunt saepe beatae reprehenderit eos id voluptate nisi ducimus!</p>
                </div>
                <div class='card'>
                    <figure>
                        <img src="./assets/icons/box.png" alt="MR big box"/>
                    </figure>
                    <h2>Boks</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel dolore exercitationem sunt saepe beatae reprehenderit eos id voluptate nisi ducimus!</p>
                </div>
                <div class='card'>
                    <figure>
                        <img src="./assets/icons/yoga.png" alt="MR big yoga"/>
                    </figure>
                    <h2>Yoga</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel dolore exercitationem sunt saepe beatae reprehenderit eos id voluptate nisi ducimus!</p>
                </div>
                <div class='card'>
                    <figure>
                        <img src="./assets/icons/weightlifter.png" alt="MR big bodidilding"/>
                    </figure>
                    <h2>Bodibidling</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel dolore exercitationem sunt saepe beatae reprehenderit eos id voluptate nisi ducimus!</p>
                </div>
            </div>
        </article>
    </section>

    <section class='trainers'>
        <h1 class='gallery-head'>Treneri</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas veritatis maiores corrupti maxime beatae nam itaque nemo ipsa. Itaque assumenda labore soluta possimus perferendis sed! Molestiae, aspernatur? Sed, et reiciendis!</p>
        <div class="flex">
            <div class='flex-card'>
                <img src="./assets/images/trener.jpg" alt="Mr Big trener">
                <p>Sasa Matic</p>
                <div class="flex-card__social">
                    <a href="#"><i class="fa fa-lg fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-lg fa-facebook"></i></a>
                </div>
            </div>
            <div class='flex-card'>
                <img src="./assets/images/trener2.jpg" alt="Mr Big trener">
                <p>Luka Jankovic</p>
                <div class="flex-card__social">
                    <a href="#"><i class="fa fa-lg fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-lg fa-facebook"></i></a>
                </div>
            </div>
            <div class='flex-card'>
                <img src="./assets/images/trener3.jpg" alt="Mr Big trener">
                <p>Boris Dzunic</p>
                <div class="flex-card__social">
                    <a href="#"><i class="fa fa-lg fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-lg fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h1 class='gallery-head'>Galerija</h1>
        <div id='gallery' class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="assets/images/mrBig1.jpg">
                    </li>
                    <li class="splide__slide">
                        <img src="assets/images/mrBig2.jpg">
                    </li>
                    <li class="splide__slide">
                        <img src="assets/images/mrBig3.jpg">
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
<script src='/js/gallery.js'></script>
<script src='/js/carousel.js'></script>

<?php include '/includes/footer.php'?>

<?php
$pageTitle = 'Home |';
$pageDescription = '';
$pageKeywords = '';
$facebookTitle = '';
$facebookDescription = '';
$facebookImage = '';
include './partials/header.php';
?>

    <main>
        <section class="about">
            <div class="container">
                <div class="about--info">
                    <h1 class="about--title">Jack Jackson</h1>
                    <p class="about--desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Aliquam erat volutpat. Aliquam erat volutpat. Integer vulputate sem a nibh rutrum consequat. Nunc dapibus tortor vel mi dapibus sollicitudin. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Aenean placerat. Etiam egestas wisi a erat.</p>
                    <a href="" class="button buttonDefault">Learn more</a>
                </div>
                <div class="about--img">
                    <picture>
                        <source srcset="./assets/media/img/about.jpg" type="image/webp">
                        <source srcset="./assets/media/img/about.jpg" type="image/jpeg"> 
                        <img src="./assets/media/img/about.jpg" alt="">
                    </picture>
                </div>
            </div>
        </section>
        <section class="service">
            <div class="container">
                <div class="service--inner">
                    <div class="service--box">
                        <div class="service--img" style="background-image: url('./assets/media/img/service-01.jpg')"></div>
                        <h2 class="service--title">Epic Project</h2>
                        <p class="service--desc">Awesome project i did on 2018. I was big experince for me.</p>
                    </div>
                    <div class="service--box">
                        <div class="service--img" style="background-image: url('./assets/media/img/service-02.jpg')"></div>
                        <h2 class="service--title">Another workt i did</h2>
                        <p class="service--desc">Awesome project i did on 2018. I was big experince for me.</p>
                    </div>
                    <div class="service--box">
                        <div class="service--img" style="background-image: url('./assets/media/img/service-03.jpg')"></div>
                        <h2 class="service--title">Rebrand of this company</h2>
                        <p class="service--desc">Awesome project i did on 2018. I was big experince for me.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include './partials/footer.php'; ?>
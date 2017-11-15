<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <title>
        A définir</title>
</head>

<body>
    <div id="main_container">
        <div id="menu_left">
            <ul id="menu">
                <a href="#header">Accueil</a>
                <a href="#services">Services</a>
                <a href="#gallerie">Gallerie</a>
                <a href="#stream">Stream</a>
                <a href="#contact">Contact</a>
            </ul>

            <ul id="mention">
                <a href="#">Mentions légale</a>
                <a href="#">Copyright</a>
            </ul>
        </div>
        <div id="container">
            <div id="header">
                <h1 class="head">Pierre Wulfranck</h1>
                <span class="fa fa-superpowers fa-5x"></span>

            </div>
            <div class="services" id="services">
                <h1>Services</h1>
                <div class="list">
                    <div class="explain">
                        <span class="fa fa-desktop fa-3x"></span>
                        <p>Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus. Qui curis! Modo nobis certamen est, qui non credunt at. </p>
                    </div>
                    <div class="explain">
                        <span class="fa fa-sticky-note fa-3x"></span>
                        <p>Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus. Qui curis! Modo nobis certamen est, qui non credunt at. </p>
                    </div>
                    <div class="explain">
                        <span class="fa fa-check-square-o fa-3x"></span>
                        <p>Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus. Qui curis! Modo nobis certamen est, qui non credunt at. </p>
                    </div>
                    <div class="explain">
                        <span class="fa fa-bar-chart fa-3x"></span>
                        <p>Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus. Qui curis! Modo nobis certamen est, qui non credunt at. </p>
                    </div>
                </div>
            </div>

            <div class="gallerie" id="gallerie">
                <h1>Gallerie</h1>
                <div class="list">
                    <div class="explain">
                        <img src="https://lg-conception.be/images/wallomade.png">
                        <p>Wallomade</p>
                    </div>
                    <div class="explain">
                        <img src="https://lg-conception.be/images/wallomade.png">
                        <p>Wallomade</p>
                    </div>
                    <div class="explain">
                        <img src="https://lg-conception.be/images/wallomade.png">
                        <p>Wallomade</p>
                    </div>
                </div>
            </div>

            <div class="stream" id="stream">
                <h1>Comment je travail ?</h1>
                <p class="about_stud">A propos de mon travail</p>
                <br>
                <p>Le studio général de guaule est assez réputé pour manger des nems</p>
                <br>
                <p>Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus, ubi tu non Virginiae ornare vel ipsum. Ut enim Albuquerque et ille eum iure hic, et ego ducam te ad iustitiam. Quid dicis? </p>
                <br>
                <p>At nolo de me ipso turpis. Ut nullam curae. Scis quid mihi quod infernum sit amet nunc magis animum, nunc eros eget quam cogitatione emptio damnat. Purus? Sic, si fieri justi ... amabo.</p>
                <br>
                <p>Prohibere. Striga! Ut custodiant te sermonem dicens - periculi ... periculo! Non ego illud numquam. Dixi sunt implicatae. Elatus deinde manubrio!</p>
                <br>
                <p>Gus sit amet suum motum. Nescio quando, aut quomodo, nescio quo. Illud scio, amet tortor. Suarum impotens prohibere eum. </p>
            </div>

            <div class="contact" id="contact">
                <h1>Contact</h1>
                <form>
                <input type="text" id="nom" placeholder="Votre Nom">
                <input type="text" id="prenom" placeholder="Votre Prénom">
                <input type="email" id="mail" placeholder="Votre adresse mail">
                <input type="tel" id="phone" placeholder="Votre N° de téléphone">
                <textarea id="message" placeholder="Votre message"></textarea>
                </form>
            </div>
            <div id="tothetop">
                <a href="#header"><span class="fa fa-arrow-up fa-3x"></span></a>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function juizScrollTo(element) {
            $(element).click(function() {
                var goscroll = false;
                var the_hash = $(this).attr("href");
                var regex = new RegExp("\#(.*)", "gi");
                var the_element = '';

                if (the_hash.match("\#(.+)")) {
                    the_hash = the_hash.replace(regex, "$1");

                    if ($("#" + the_hash).length > 0) {
                        the_element = "#" + the_hash;
                        goscroll = true;
                    } else if ($("a[name=" + the_hash + "]").length > 0) {
                        the_element = "a[name=" + the_hash + "]";
                        goscroll = true;
                    }

                    if (goscroll) {
                        $('html, body').animate({
                            scrollTop: $(the_element).offset().top
                        }, 'slow');
                        return false;
                    }
                }
            });
        };
        juizScrollTo('a[href^="#"]');

    </script>
</body>

</html>

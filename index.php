<?php
	include ('db__connection.php');
    include ('header.php');
    OpenCon();
?>
<body>
        </div>
    </nav>
    <div class="home__page__body__inner">
        <!--  -->
        <!-- header -->
        <header>
            <!--  -->
            <!-- Hero banner main page -->
            <div class="hero__banner">
                <div class="container"></div>
            </div>
            <!--  -->
            <!--  -->
        </header>
        <!--  -->
    <!--  -->
    </div>
    <!--  -->
            <!-- Portfolio Title -->
            <H1 id="portfolio__title">Portfolio</H1>
    <!--  -->
        <!-- Main section of the home page -->
        <div class="inner__content">
            
            <!--  -->
            <!-- Project cards -->
            <div class="projects">
                <!--  -->
                <!-- Internal space for cards -->
                <div id="projects__inner" class="projects__inner">
                    <!--  -->
                    <!-- HTML for cards  -->
                    <div class="projects__inner__card">
                        <!--  -->
                        <!-- image for the cards -->
                        <a href="https://wordpress.daryl-boyce.netmatters-scs.co.uk/" id="woocommerce__image" >
                        </a>
                        <div class="projects__inner__card__lower">
                            <a href="https://wordpress.daryl-boyce.netmatters-scs.co.uk/"><h2>Wordpress WooCommerce Website</h2></a>
                            <div class="projects__inner__card__lower__aside">
                                <a href="https://wordpress.daryl-boyce.netmatters-scs.co.uk/">veiw project</a>
                                <i class="fas fa-2x fa-arrow-right"></i>
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                    </div>
                    <!--  -->
                    <!-- HTML for cards  -->
                    <div class="projects__inner__card">
                        <!--  -->
                        <!-- image for the cards -->
                        <a href="#" id="netmatters__reflection">
                        </a>
                        <div class="projects__inner__card__lower">
                            <h2>netmatters webpage</h2>
                            <div class="projects__inner__card__lower__aside">
                                <h4>view project</h4>
                                <i class="fas fa-2x fa-arrow-right"></i>
                            </div>
                        </div>
                        
                    </div>
                    <!--  -->
                </div>
                <!--  -->
            </div>
            <!--  -->
        </div>
        <!--  -->
        <div class="lower__form">
            <div class="lower__form__inner">
                <hr>
                <div class="lower__form__inner__description">
                    <h1>get in touch</h1>
                    <a href="#">contact@darylboyce.com</a>
                </div>
                <div class="lower__form__inner__inputs">
                    <form method= "post" onsubmit="return validateForm()"  action="form__success.php" name="contact__me">
                        <input type="text" id="first__name" name="first__name" placeholder="First Name*">
                        <span id="error__name" class="error__style__under">please enter your name</span>
                        <!--  -->
                        <input type="text" id="last__name" name="last__name" placeholder="Last Name*">
                        <span id="error__last" class="error__style__under">Please enter your Last name</span>
                        <!--  -->
                        <input type="text" id="email__address" name="email__address" placeholder="Email Address*">
                        <span id="error__email" class="error__style__under">Please enter a vaild email</span>
                        <!--  -->
                        <input type="text" id="subject" name="subject" placeholder="Subject">
                        <span id="error__subject" class="error__style__under">Please enter your subject</span>
                        <!--  -->
                        <textarea type="text" id="message" name="message" placeholder="Message"></textarea>
                        <span id="error__message" class="error__style__under">Please enter your message</span>
                        <!--  -->
                        <input  type="submit" id="submit"  value="Submit">
                    </form> 
                </div>
            </div>
        </div>
    <!--  -->
        <!-- Javascript scripts  -->
    <script src="jquery-3.6.0.js"></script>
    <script src="js\plugins\typed.js-master\lib\typed.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="smooth__scroll.js"></script>
    <script src="form__validation.js"></scrip>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@latest/lib/typed.min.js"></script>
    <script src="main.js"></script>
</body>
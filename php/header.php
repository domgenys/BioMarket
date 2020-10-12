<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>

    <body>
        <!-- ========== Header Starts ========== -->
        <header class='header'>
            <section class="header-section">


                <div class='icons'>
                    <!-- Logo  -->
                    <div class="logo">
                        <a href="?page=home"><img id='logo' src="img/logo_colour.png" /></a>
                        <a href="?page=home"><img id='logo-toggle' src="img/logo_colour_toggle.png" /></a> 
                    </div>
                    <!-- / Logo  -->

                    <!-- cart  -->

                    <!-- / cart  -->
                </div>

                <!-- Navbar -->
                <div id='top-menu'>
                    <ul class="top-menu">

                        <li class='current'><a href="?page=home"><img class='menu-logo' src="img/home.svg" /><span> Home</span></a></li>
                        <li><a href="?page=products_bakery"><img class='menu-logo' src="img/bread.svg" /><span> Bakery</span></a></li>
                        <li><a href="?page=products_drinks"><img class='menu-logo' src="img/coffee-cup.svg" /><span> Drinks</span></a></li>
                        <li><a href="?page=products_vegetables"><img class='menu-logo' src="img/broccoli.svg" /><span> Vegetables</span></a></li>
                        <li><a href="?page=products_dairy"><img class='menu-logo' src="img/piece-of-cheese.svg" /><span> Dairy</span></a></li>
                        <li><a href="?page=contact"><img class='menu-logo' src="img/contact.svg" /><span> Contact</span></a></li>
                    </ul>
                </div>
                <!-- / Navbar -->
                <!-- login -->
                <div class='sub-top-menu'>
                    <ul class="log-menu">
                        <li><a title='LOGIN' class='log-icon' href="?page=login" ><i class="fa fa-sign-in fa-2x"></i></a></li>
               <!--         <li><a title='LOGOUT'  class='log-icon' href="?logout" ><i class="fa fa-sign-out fa-2x"></i></a></li> -->
                        <li><a title='REGISTER'  class='log-icon' href="?page=register" ><i class="fa fa-plus-square fa-2x"></i></a></li>
               <!--         <li><a title='PROFILE'  class='log-icon' href="?page=profile" ><i class="fa fa-user fa-2x"></i></a></li> -->
                    </ul>
                </div>
                <!-- login -->

                <div class="social-link">
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com"> <i class="fa fa-facebook fa-2x"></i></a></li>

                        <li><a target="_blank" href="https://twitter.com"> <i class="fa fa-twitter fa-2x"></i></a></li>

                        <li><a target="_blank" href="https://www.instagram.com"> <i class="fa fa-instagram fa-2x"></i></a></li>

                        <li><a target="_blank" href="https://www.linkedin.com"> <i class="fa fa-linkedin fa-2x" ></i></a></li>
                    </ul>
                </div>

            </section>
        </header>

        <!-- ========== End Of Header ========== -->
        <script>

            $('.top-menu li').click(function () {
                $('li').removeClass();
                $(this).parent().addClass('current');
            });
//            $(".top-menu li").on("click", "a" function () {
//                event.preventDefault();
//                $(this).parent().addClass("current").siblings().removeClass("current");
//            });

        </script>

    </body>
    <!-- === End of Body === -->

</html>

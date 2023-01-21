<?php
/*
* This template is for displaying the header
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- header part -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#"><img src="<?php echo get_theme_mod('triTheme_logo', '/assets/images/dark-logo.png') ?>" alt=""></a>
            </div>
            <div class="col-md-9 d-flex align-items-center justify-content-end">
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Service</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

    <!-- js links -->
    <?php wp_footer(); ?>
</body>

</html>


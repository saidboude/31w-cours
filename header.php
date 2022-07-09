<?php
 /**
  * Template header
  * Ve template est intégré dans tous les modèles de thème
  * @link : https://developer.wordpress.org/themes/
  * @package : Mon WordPress
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>  >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <section class="site">
        <header class="site__header">
            <section class="site__branding">
                <h1>
                    <div>
                    <img scr="2022-31w/wp-content/themes/31w-cours/logo.jpg" alt="logo">
                    </div>
                    <a href="<?=esc_url(home_url('/'))?>"><?=bloginfo('name');?></a>
                    
                   
                </h1>
                <h2>
                    <?=bloginfo('description');?>
                </h2>
                </section>
            <nav class="site__navigation">
            <div>
            <a href="#">Accueil</a>
		    <a href="#">Programme</a>
		    <a href="#">Bibliothèque</a>
		    <a href="#">Biographie</a>
		    <a href="#">Contribuer</a>
            </div>
            </nav>
        </header>
        <section class="site__sidebar">
            <h3>Sidebar</h3>
        </section>
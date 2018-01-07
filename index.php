<?php
$data = require 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cantus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Sans"/>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<header class="site-header">
    <div class="nav-container">
        <nav class="left-list">
            <ul class="main-menu">
                <?php
                foreach ($data['mainMenu'] as $navItem) {
                    ?>
                    <li class="nav-item">
                        <a href="<?php echo $navItem['url']; ?>"><?php echo $navItem['title']; ?></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </nav>
        <a class="logo" href="#">
            <img src="<?php echo $data['logo']; ?>" alt="cantus">
        </a>
        <nav class="right-list">
            <ul class="social">
                <?php
                foreach ($data['social'] as $socialItem) {
                    ?>
                    <li class="social-item">
                        <a href="<?php echo $socialItem['url']; ?>">
                            <i class="fa <?php echo $socialItem['class']; ?>"></i>
                            <span><?php echo $socialItem['count']; ?></span>
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </nav>
        <div class="purchase-ticket">
            <a href="<?php echo $data['btnHeader']['url']; ?>"
               class="battons battons-ticket"><?php echo $data['btnHeader']['title']; ?>
            </a>
        </div>
    </div>
</header>
<!--1-->
<section class="preview">
    <div class="main-slider">
        <?php
        foreach ($data['mainSlider'] as $mainSlide) { ?>
            <div class="preview-slide" style="background-image:url(<?php echo $mainSlide['url']; ?>)"></div>
            <?php
        }
        ?>
    </div>
    <div class="container">
        <div class="rock-with-preview">
            <h1 class="rock-preview"><?php echo $data['rockwithPreview']['rockPreview']; ?></h1>
            <span><?php echo $data['rockwithPreview']['subTitle']; ?></span>
            <div class="discover-top">
                <a href="<?php echo $data['btnDiscover']['url']; ?>"
                   class="battons battons-discover"><?php echo $data['btnDiscover']['title']; ?>
                </a>
            </div>
        </div>
    </div>
    <div class="bottom_line"></div>
</section>
<!--2-->
<section class="intro-members">
    <div class="container">
        <div class="introduction">
            <h2 class="intro"><?php echo $data['introMembers']['intro']; ?></h2>
            <span><?php echo $data['introMembers']['subtitle']; ?></span>
        </div>
        <div class="introducing-section-slider">
            <div class="inner">
                <div class="pagination">
                    <div class="row multiple-slide">
                        <?php
                        foreach ($data['introMembers']['slider'] as $slideItem) { ?>
                            <div class="column-4 card">
                                <div class="container-img">
                                    <img src="<?php echo $slideItem['url']; ?>" alt="Jone Smith">
                                    <div class="text-card">
                                        <h5><?php echo $slideItem['name']; ?></h5>
                                        <p><?php echo $slideItem['category']; ?></p>
                                        <ul class="share-counter">
                                            <?php
                                            foreach ($slideItem['shareCounter'] as $shareCounterItem) {
                                                ?>

                                                <li class="share-counter-item">
                                                    <a href="<?php echo $shareCounterItem['url']; ?>">
                                                        <i class="fa <?php echo $shareCounterItem['class']; ?>"></i>
                                                        <span><?php echo $shareCounterItem['count']; ?></span>
                                                    </a>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
</section>

<div class="container">
    <div class="row">
        <div class="column-8">
            <section class="upcoming-section">
                <div class="heading">
                    <h2 class="title-section"><?php echo $data['upcomingSection']['title'] ?></h2>
                    <span><?php echo $data['upcomingSection']['subtitle'] ?></span>
                </div>
                <div class="flex-wrap">
                    <div class="img-box">
                        <img src="<?php echo $data['upcomingSection']['imgBox'] ?>" alt="concert">
                    </div>
                    <div class="poster">
                        <h3><?php $catalog = $data['upcomingSection']['poster'];
                            echo $catalog['title'] ?></h3>
                        <dl class="poster-list">
                            <?php
                            foreach ($catalog['posterList'] as $key => $posterItem) { ?>
                                <dt><?php echo "$key" ?></dt>
                                <dd><?php echo $posterItem ?></dd>
                                <?php
                            }
                            ?>
                            <a href="<?php echo $catalog['btnDiscover']['url']; ?>"
                               class="battons battons-discover btn-upcoming">
                                <?php echo $catalog['btnDiscover']['title']; ?>
                            </a>
                    </div>
                </div>
                <div class="scroll-bar">
                    <div class="scroll-dragger"></div>
                </div>
            </section>
        </div>
        <!--3-->
        <div class="column-4">
            <section class="video-section">
                <div class="heading">
                    <h2 class="title-section"><?php echo $data['videoSection']['title'] ?></h2>
                    <span><?php echo $data['videoSection']['subtitle'] ?></span>
                </div>
                <div class="slider-videos-section">
                    <div class="pagination">
                        <div class="slider">
                            <?php
                            foreach ($data['videoSection']['slider'] as $slideItem) {
                                ?>
                                <div class="container-video">
                                    <iframe width="380" height="290"
                                            src="<?php echo $slideItem['url']; ?>?rel=0&modestbranding=1;rel=0&amp;controls=0&amp;showinfo=0"
                                            frameborder="0" gesture="media" allow="encrypted-media"
                                            allowfullscreen></iframe>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>


<!--<ul>
    <li>
        <a href="#" class="arrow arrow-left">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </a>
    </li>
    <li>
        <a href="#" class="arrow arrow-right">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
    </li>
</ul>


<!--4-->
<section class="container">
    <div class="background-cantus">
        <div class="cantus-founder">
            <h4 class="title-founder"><?php echo $data['founder']['title']; ?></h4>
            <p><?php echo $data['founder']['textFounder']; ?></p>
            <div class="b-container">
                <a href="<?php $btnLearn = $data['learn']['btnLearn'];
                echo $btnLearn['url']; ?>" class="battons battons-ticket"
                   id="popup-main'"><?php echo $btnLearn['title']; ?></a>
            </div>


            <!-- <h4>Our Founder staying in our hearts</h4>
             <p>1982 <span>cantus</span> Start jurny and now it‘s top class Rock Band in the California.</p>
             <div class="b-container">
                 <a href="javascript:PopUpShow()">learn more</a>
             </div>
             <div class="b-popup" id="popup1">
                 <div class="b-popup-content">
                     <h2>This content comes from a hidden element on this page.</h2>
                     <p>The inline option preserves bound JavaScript events an changes, and it puts the content back
                         where it came from when it is closed.</p>
                     <a class="show_popup" rel="reg_form" href="#">Click me, it will be preserved</a>
                     <a href="javascript:PopUpHide()">Hide</a>
                 </div>
             </div>-->
        </div>
    </div>
</section>

<!--popup
<div class="b-popup" id="popup1">
    <div class="b-popup-content">
        <div id="popup-close">X</div>
        <h2 class="popup-title"><?php echo $data['popup1']; ?></h2>
    </div>
    <div class="popup-content">
        <p><?php echo $data['popup1']['text1']; ?>
        </p>
        <a href="<?php echo $data['popup1']['url1']; ?>" class="link-popup">Click me, it will be preserved</a>
        <p><?php echo $data['popup1']['text2']; ?></p>
        <a href="<?php echo $data['popup1']['url2']; ?>" class="link-popup">Hide</a>
    </div>

    <div id="overlay"></div>
</div>
-->

<!--5-->
<section>
    <div class="container">
        <div class="popular-insta">
            <div class="popular">
                <h4 class="songs"><?php echo $data['songs']['title']; ?></h4>
                <p><?php echo $data['songs']['subtitle']; ?></p>
                <iframe width="100%" height="200" scrolling="no" frameborder="no"
                        src="<?php echo $data['songs']['url']; ?>color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;
                        show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true">
                </iframe>
                <ol class="play-list">
                    <?php
                    foreach ($data['songs']['playList'] as $listItem) {
                        ?>
                        <li class="song-item">
                            <a href="<?php echo $listItem['url']; ?>"><?php echo $listItem['title']; ?></a>
                        </li>
                        <?php
                    }
                    ?>
                </ol>
            </div>
            <div class="insta">
                <h4 class="insta-feed"><?php echo $data['instaFeed']['title']; ?></h4>
                <p><?php echo $data['instaFeed']['subtitle']; ?></p>
                <div class="list-insta">
                    <?php
                    foreach ($data['instaFeed']['galleryList'] as $listItem) {
                        ?>
                        <div class="insta-gallery">
                            <a href="<?php echo $listItem['url']; ?>">
                                <img src="<?php echo $listItem['list']; ?>" alt="insta">
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="container">
    <div class="bacground-download">
        <h4 class="official-apps"><?php echo $data['officialApps']['title']; ?></h4>
        <p><?php echo $data['officialApps']['footerText']; ?></p>
        <?php foreach ($data['officialApps']['battonGroup'] as $battonItem) {
            ?>
            <li>
                <a href="<?php echo $battonItem['url']; ?>" class="battons battons-store">
                    <img src="<?php echo $battonItem['battonImg']; ?>" alt="apple-store">
                </a>
            </li>
            <?php
        }
        ?>
    </div>
    <div class="form-newsletter">
        <div class="container">
            <form action="#" method="post" class="form-container">
                <div class="form-group">
                    <input type="email" id="box" name="email">
                    <label for="box">subscribe newsletter</label>
                </div>
                <button type="submit" class="battons-newsletter"><img src="images/icon.png" alt=""></button>
            </form>
        </div>
    </div>
    <ul class="menu-footer">
        <?php
        foreach ($data['mainMenu'] as $navItem) {
            ?>
            <li class="nav-item">
                <a href="<?php echo $navItem['url']; ?>"><?php echo $navItem['title']; ?></a>
            </li>
            <?php
        }
        ?>
    </ul>
    <p><?php echo $data['copyright']; ?></p>
</footer>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="js/main.js"></script>


</body>
</html>
<?php
/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>


<main class="main main--home">

  <div class="hero homesection1" id="main"> <!-- .hero -->
    <div class="hero__title">
      <h1 class="item-a">
        <span class="heading__one" style="display: block;">Make</span> 
        <span class="heading__two" style="display: block;">Positive</span>
        <span class="heading__three" style="display: block;">Tracks</span>
        <span class="sr-only">Yellow Sub Geo</span>
        <!--<img src="images/yellow-sub-geo.svg" />-->
      </h1>
    </div>
    <img class="hero__image item-b" src="<?php echo get_template_directory_uri(); ?>/img/TheMightySub_v01.png" alt="3d illustration of a yellow submarine with caterpillar tracks">
  </div><!-- .hero -->

  <div class="below-hero"><!-- .below-hero -->
    <a href="#sustainability"><img src="<?php echo get_template_directory_uri(); ?>/img/down.png" aria-hidden="true" width="50" alt=""></a>
  </div><!-- .below-hero -->

  <section class="section homesection2 edged--top edged--bottom">
    <div class="section__titlecontainer" id="sustainability">
      <h2 class="section__title">
        <strong>Swashbuckling</strong><br>
        Sustainability
      </h2>
    </div>
    <div class="section__column homesection2__globe">
      <img src="<?php echo get_template_directory_uri(); ?>/img/globe.png" alt="the Earth">
    </div>
    <div class="section__column homesection2__copy">
      <h3 class="h2" data-preventwidows="">
        Creating a sustainable&nbsp;planet
      </h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Ut sagittis fringilla velit. Cras pellentesque suscipit
        diam, a ultrices nibh sagittis quis. Sed nec laoreet
        nulla. Integer vel enim ut augue porta consectetur.
        Maecenas vulputate risus non nunc scelerisque porta.
        Donec erat ipsum, efficitur ullamcorper lectus quis,
        mattis tempor nunc.
      </p>
      <img src="<?php echo get_template_directory_uri(); ?>/img/global-goals.png" alt="The Global Goals for Sustainable Development logo">
    </div>
  </section>
  <div class="homesection3buffer" aria-hidden="true"></div>
  <div class="animatedwaves" aria-hidden="true">
    <canvas id="animatedwaves" width="845" height="60"></canvas>
  </div>
  <section class="section homecontact">
    <div class="section__titlecontainer">
      <h2 class="section__title">Contact</h2>
    </div>
    <div class="section__column">
      <p class="homecontact__large h1" data-preventwidows="">
        We're always keen to&nbsp;help.
      </p>
      <p>Drop us a line and we'll be in touch soon</p>
      <p class="homecontact__info">
        <a href="tel:07595843265">UK: (+44) 07595 843265</a>
        <a href="mailto:helpme@yellowsubgeo.com">helpme@yellowsubgeo.com</a>
      </p>
    </div>
    <form class="section__column contactform">
      <label class="contactform__label">
        <span class="contactform__text">Full name</span>
        <input class="contactform__input" type="text" name="fullname">
      </label>
      <label class="contactform__label">
        <span class="contactform__text">Email Address</span>
        <input class="contactform__input" type="email" name="email">
      </label>
      <label class="contactform__label contactform__label--hastextarea">
        <span class="contactform__text">Your Message</span>
        <textarea name="message" class="contactform__input contactform__input--textarea"></textarea>
      </label>
      <div class="contactform__buttoncontainer">
        <input type="submit" class="button">
      </div>
    </form>
  </section>
</main>

<?php get_footer(); ?>

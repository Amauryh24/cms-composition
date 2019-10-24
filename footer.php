<?php
// https://www.gregoirenoyelle.com/acf-pro-utiliser-ajouter-pages-options-wordpress/
wp_footer();


//The mobile numbers you need to internationalise:
//
//https://www.clockworksms.com/blog/convert-a-mobile-number-into-international-format/
//
$phone = get_field('phone', 'option');
$numbers = array($phone => 'BE'

//  '07123 456 781' => 'US',
//  '07123456782' => 'UK',
//  '07123456783' => '',
//  '447123456784' => 'UK',
//  '+44(0)7123456785' => 'UK',
//  '17123456786' => 'US'
);

//An array of country codes:
//Get a full list at: https://plugins.svn.wordpress.org/mediaburst-ecommerce-sms-notifications/tags/1.2.1/country-calling-codes.php
$country_codes = array(
  'UK' => '44',
  'US' => '1',
  'BE' => '32'
);

//The default country code if the recipient's is unknown:
$default_country_code  = '32';

//Loop through the numbers and make them international format:
foreach ( $numbers as $n => $c )
{
  //Remove any parentheses and the numbers they contain:
  $n = preg_replace("/\([0-9]+?\)/", "", $n);

  //Strip spaces and non-numeric characters:
  $n = preg_replace("/[^0-9]/", "", $n);

  //Strip out leading zeros:
  $n = ltrim($n, '0');

  //Look up the country dialling code for this number:
  if ( array_key_exists($c, $country_codes)  ) {
    $pfx = $country_codes[$c];
  } else {
    $pfx = $default_country_code;
  }

  //Check if the number doesn't already start with the correct dialling code:
  if ( !preg_match('/^'.$pfx.'/', $n)  ) {
    $n = $pfx.$n;
  }

  //return the converted number:
  //echo $n."\r\n";

  //Outputs: 17123456781 447123456782 447123456783 447123456784 447123456785 17123456786
}
?>


<footer id="mic">
    <div class="footer-content">
        <div class="row section">

            <!-- SPECIAL SECTION tissus -->
            <div class="col s12 m8">
                <!-- ROUND ICON tssus -->
                <div class="col s12 m3 center-align">
                    <img src="<?php bloginfo('template_directory'); ?>/images/footer/footer_250x250_01.jpg"
                        width="150px" alt="Image ronde d'un tissu vu de près" class="circle responsive-img">
                    <!-- notice the "circle" class -->
                </div>
                <div class="col s12 m9 center-align">
                    <!-- PAGE LINK tissus -->
                    <p>
                        <a href="#" class="valign-wrapper large">Tissus et habillage maison <img
                                src='<?php bloginfo('template_directory'); ?>/svg/fleche-droite.svg' alt=''
                                class="flechette" />
                        </a>
                    </p>
                </div>
            </div> <!-- end of SPECIAL SECTION tissus -->

            <!-- OPEN HOURS black chart -->
            <div class="col s12 m4 black white-text chart">
                <div class="col s1">
                    <h5><img src='<?php bloginfo('template_directory'); ?>/svg/time-clock.svg' height="17px" alt='' />
                    </h5>
                </div>
                <div class="col s11">
                    <h5>Horaires</h5>
                    <p>
                        Lundi > Dimanche : (Fermé le mardi)
                    </p>
                    <p>
                        <?php the_field('intervalle_ouverture', 'option'); ?> >
                        <?php the_field('intervalle_fermeture', 'option'); ?>
                    </p>
                </div>
            </div>
        </div> <!-- end of FOOTER TOP -->

        <!-- GREY LINE between top and bottom footer -->
        <div class="divider"></div>

        <!-- FOOTER BOTTOM -->
        <div class="row section">
            <div class="col s12 m4">
                <h4>Rendez-nous visite !</h4>
                <!-- Google map link -->
                <p>
                    <a href="<?php the_field('lien', 'option'); ?>" target="_blank" class="valign-wrapper large">Google
                        map <img src='<?php bloginfo('template_directory'); ?>/svg/fleche-droite.svg' alt=''
                            class="flechette" />
                    </a>
                </p>
            </div>

            <!-- CONTACT INFOS -->
            <div class="col s12 m4">
                <!-- STREET ADDRESSE -->
                <p class="valign-wrapper">
                    <img src='<?php bloginfo('template_directory'); ?>/svg/marker-road.svg'
                        alt='' /><?php the_field('adresse_prem_ligne_rue', 'option'); ?>,
                    <?php the_field('adresse_prem_ligne_numero', 'option'); ?> -
                    <?php the_field('adresse_sec_ligne_code_postal', 'option'); ?>
                    <?php the_field('adresse_sec_ligne_localite', 'option'); ?>
                </p>
                <!-- EMAIL and action link -->
                <p>
                    <a href="mailto:<?php the_field('email', 'option'); ?>" class="valign-wrapper"><img
                            src='<?php bloginfo('template_directory'); ?>/svg/icon-arrobas.svg'
                            alt='' /><?php the_field('email', 'option'); ?>
                    </a>
                </p>
                <!-- PHONE NUMBER and action link -->
                <p>
                    <a href="tel:<?php echo $n; ?>" class="valign-wrapper"><img
                            src='<?php bloginfo('template_directory'); ?>/svg/phone-2.svg'
                            alt='' /><?php echo $phone; ?>
                    </a>
                </p>
            </div> <!-- end of CONTACT INFOS -->

            <!-- SOCIAL NETWORK SVG ICONS -->
            <div class="col s12 m4 right-align">
                <p>
                    <!-- FACEBOOK SVG ICON -->
                    <a class="btn-floating btn-large waves-effect waves-black white"><img
                            src='<?php bloginfo('template_directory'); ?>/svg/logo-facebook.svg' alt='' height="24px"
                            class="facebook" />
                    </a>
                    <!-- INSTAGRAM SVG ICON -->
                    <a class="btn-floating btn-large waves-effect waves-black white"><img
                            src='<?php bloginfo('template_directory'); ?>/svg/logo-instagram.svg' alt='' height="24px"
                            class="instapin" />
                    </a>
                    <!-- PINTEREST SVG ICON -->
                    <a class="btn-floating btn-large waves-effect waves-black white"><img
                            src='<?php bloginfo('template_directory'); ?>/svg/logo-pinterest.svg' alt='' height="24px"
                            class="instapin" />
                    </a>
                </p>
                <!-- COPYRIGHT and SGPDR -->
                <p>
                    <a href="#" class="mini">© Composition 2019</a> - <a href="#" class="mini">politique de
                        confidentialité</a>
                </p>
            </div> <!-- end of SOCIAL NETWORK -->
        </div> <!-- end of FOOTER BOTTOM -->
    </div>
</footer>
</body>

</html>
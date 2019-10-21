<?php
    //The mobile numbers you need to internationalise:
    //
    //https://www.clockworksms.com/blog/convert-a-mobile-number-into-international-format/
    //
    $phone = get_field('phone', '296');
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
      <div class="col s12 m8">
        <div class="col s12 m3 center-align">
          <img src="http://localhost:8080/cms-composition/wp-content/themes/cms-composition/images/footer/footer_250x250_01.jpg" width="150px" alt="Image ronde d'un tissu vu de près" class="circle responsive-img"> <!-- notice the "circle" class -->
        </div>
        <div class="col s12 m9 center-align">
          <p><a href="#">Tissus et habillage maison</a></p>
        </div>
      </div>
      <div class="col s12 m4 black white-text">
        <p>Horaires</p>
        <p>Lundi > Dimanche : (Fermé le mardi)</p>
        <p><?php the_field('intervalle_ouverture', '296'); ?> > <?php the_field('intervalle_fermeture', '296'); ?></p>
      </div>
    </div>
    <div class="divider"></div>
    <div class="row section">
      <div class="col s12 m4">
        <h4>Rendez-nous visite !</h4>
        <p><a href="<?php the_field('lien', '296'); ?>" target="_blank">Google map</a></p>
      </div>
      <div class="col s12 m4">
        <p><?php the_field('adresse_prem_ligne_rue', '296'); ?>,  <?php the_field('adresse_prem_ligne_numero', '296'); ?> - <?php the_field('adresse_sec_ligne_code_postal', '296'); ?> <?php the_field('adresse_sec_ligne_localite', '296'); ?></p>
        <p><a href="mailto:<?php the_field('email', '296'); ?>"><?php the_field('email', '296'); ?></a></p>
        <p><a href="tel:<?php echo $n; ?>"><?php echo $phone; ?></a></p>
      </div>
      <div class="col s12 m4 right-align">
        <p>ACF social network</p>
        <p><a href="#">© Composition 2019</a> - <a href="#">politique de confidentialité</a></p>
      </div>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>

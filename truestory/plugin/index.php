<?php

/*
* Plugin Name: TrueStory Plugin
* Plugin URI: http://nnm.dk
* Desription: Plugin til tilmelding af truestory konkurrence
* Version: 1.0.4
* Author: Joakim Bækhøj Jensen
* Author URI: http://nnm.dk
*/







function konkurrence_form()
{
    $content = '';
    $content .= '<button class="open-button" onclick="openForm()">';
    $content .= '<img class="klokke" src=" '.plugins_url("truestory/img/klokke.png").' " >';
    $content .= '</button>';
    $content .= '<div class="myForm" id="myForm">';
    $content .= '<form action="#" method="POST" class="form-container">';
    $content .= '<h1>Årets Pletskud!</h1>';
    $content .= '<p class="tekst">Du har nu mulighed for at vinde et <strong>gavekort på 3.000 kr.</strong> til oplevelser hos Truestory 🌟 <br><br>Vi vil gerne se dit bedste pletskud fra en Truestory oplevelse, som du har været afsted<br><br> på i 2021 📸 For at deltage skal du dele et billede på Instagram fra en Truestory oplevelse,<br><br> som du har været på hos i 2021. Det er vigtigt, at du tagger <strong>@truestory.dk</strong> på billedet<br><br> for at kunne deltage 🍀</p>';
  	$content .= '<a href="https://www.instagram.com/p/CVVS9ekLepU/" target="_blank">';
    $content .= '<input type="button" value="Deltag!"  class="btn">'; 
    /*$content .= '<button class="btn" >Deltag!</button>';*/
    $content .= '</a>';
    $content .= '<input type="button" value="Luk"  class="btn" id="closeBtnTruestory">'; 
    /*$content .= '<button class="btn" id="closeBtnTruestory">Luk</button>'; */
    $content .= '</form>';
    $content .= '</div>';
    return $content;
}



add_shortcode('truestory_plugin','konkurrence_form');

add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');

function register_styles_and_scripts_for_plugin(){
        
wp_enqueue_style('CustomStylesheet', plugins_url('truestory/css/style.css'));
        
wp_deregister_script('jquery');
        
wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
wp_enqueue_script('CustomScript', plugins_url('truestory/java.js'), array('jquery'), null, true);

}

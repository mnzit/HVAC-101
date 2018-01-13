<?php
/**
 * HVAC101 Theme Customizer
 *
 * @package HVAC101
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function hvac101_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	$wp_customize->add_panel( 'business', array(
		'title' => __( 'Business Information'),
		'description' => "<p>All Information About Your Business Here</p>", // Include html tags such as <p>.
		'priority' => 2,
));
//Social Profile
$wp_customize->add_section(
'social_profile',
array(
			'title' => 'Social Profile',
			'panel'=> 'business',
			'description' => 'Add/ Edit links to your social media here',
			'priority' => 14,
)
);

$social=array();

$social[]=array('social_facebook', array('label'=>"Facebook", 'section'=>'social_profile', 'type'=>"url" ));
$social[]=array('social_twitter', array('label'=>"Twitter", 'section'=>'social_profile', 'type'=>"url" ));
$social[]=array('social_youtube', array('label'=>"Youtube", 'section'=>'social_profile', 'type'=>"url" ));
$social[]=array('social_gplus', array('label'=>"Google Plus", 'section'=>'social_profile', 'type'=>"url" ));
$social[]=array('social_linkedin', array('label'=>"Linkedin", 'section'=>'social_profile', 'type'=>"url" ));
$social[]=array('social_yelp', array('label'=>"Yelp", 'section'=>'social_profile', 'type'=>"url" ));
$social[]=array('social_angieslist', array('label'=>"Angie's List", 'section'=>'social_profile', 'type'=>"url" ));
$social[]=array('social_bbb', array('label'=>"BBB", 'section'=>'social_profile', 'type'=>"url" ));
$social[]=array('social_gbl', array('label'=>"Google Business Listing", 'section'=>'social_profile', 'type'=>"url" ));
$social[]=array('social_custom1', array('label'=>"Custom 1", 'section'=>'social_profile', 'type'=>"url" ));
$social[]=array('social_custom2', array('label'=>"Custom 2", 'section'=>'social_profile', 'type'=>"url" ));
$social[]=array('social_custom3', array('label'=>"Custom 3", 'section'=>'social_profile', 'type'=>"url" ));
$social[]=array('social_custom4', array('label'=>"Custom 4", 'section'=>'social_profile', 'type'=>"url" ));

foreach ($social as $soc) {

$wp_customize->add_setting($soc[0], array('default' => '', 'type'=>'option'));
$wp_customize->add_control($soc[0], $soc[1]);

}
}
add_action( 'customize_register', 'hvac101_customize_register' );



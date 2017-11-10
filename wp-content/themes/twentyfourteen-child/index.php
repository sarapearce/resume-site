<?php
//*
// Theme Name:   Twenty Fourteen Child - Florida Strong
// Theme URI:    http://sarapearce.net/florida-strong/wp-content/themes/twenty-fourteen-child/
// Description:  Twenty Fourteen Child Theme by Sara Pearce
// Author:       Sara Pearce
// Author URI:   http://sarapearce.net/florida-strong
// Template:     twentyfourteen
// Version:      1.0.0
// License:      GNU General Public License v2 or later
// License URI:  http://www.gnu.org/licenses/gpl-2.0.html
// Tags:         light, dark, two-columns, right-sidebar, responsive-layout, accessibility-ready
// Text Domain:  twenty-fourteen-child
//*/
// *
// * @link https://codex.wordpress.org/Template_Hierarchy
// *
// * @package WordPress
// * @subpackage Twenty_Fourteen
// * @since Twenty Fourteen 1.0
// */
get_header();
?>


<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
	<header>
	    <div id="main-header">
		<h1 id='header-text'>MoPortilla MoProblems</h1>
	    </div>
	</header>
	<div id="main-content">
	    <h1 id="ticking">TIME IS TICKING</h1>
	    <div id="counter"><?php get_sidebar('content'); ?></div>

	    <div id="copy">


		<h2>Pay to play? Diaz de la Portilla remains silent on radiation in Biscayne Bay</h2>
		<div id="bay" style="padding-left: 10%">
		    <h4>Biscayne Bay's aquifer provides drinking water to more than three million people in 
			South Florida, presenting health and safety concerns for residents from Boca Raton to the Keys.
			And yet, State Senator Miguel Diaz de la Portilla, who has actively workd on FPL's behalf
			as a lobbyist, has been disturbingly 
			<a class="link" href='https://florida-strong.org/state-sen-miguel-diaz-de-la-portilla-answer-fpls-direct-impact-district/'>silent on this issue.</a>
		    </h4>
		</div>

		<div id="questions-list">
		    <ul id="questions-list-ul">
			<!--will need to add an image of the arrow after each li-->
			<li><h4 class='questions'>• Why has Diaz de la Portilla not spoken out on the Turkey Point issue?</h4></li>
			<li><h4 class='questions'>• Will Diaz de la Portilla hold FPL accountable for the contemination of Biscayne Bay?</h4></li>
			<li><h4 class='questions'>• Is FPL paying for Diaz de la Portilla's silence?</h4></li>
			<li><h4 class='questions'>• Is Diaz de la Portilla proud of his apparent 
				<a class="link" href='https://florida-strong.org/floridastrong-launches-got-ethics-campaign-floridians-call-ethics-reform/'>pay-to-play problem?</a></h4></li>
		    </ul>
		</div>
	    </div>

	    <div>
		<img id='boat-img' width="100%" alt="boats" src="http://sarapearce.net/wp-content/uploads/2016/03/BiscayneBay.jpg"/>
		<h1 id="take-action">TAKE ACTION</h1>
	    </div>

	    <div id="call-to-action">
		<h3 class="top-text">TELL MIGUEL DIAZ DE LA PORTILLA</h3>
		<h1>- STAND UP FOR US -</h1>
		<h3>NOT BIG MONEY LOBBYING CLIENTS</h3>
		<h1> 305.643.7200 </h1>
		<a href="https://actionnetwork.org/petitions/tell-miguel-diaz-de-la-portilla-stand-up-for-us-not-big-money-lobbying-clients">
		    <button id="petition-button"></button>
		</a>
	    </div>
	    <a href="https://florida-strong.org" style="padding: 10px"><h4 id="sponsor">Sponsored by FloridaStrong</h4></a>
	</div>
    </div><!-- #content -->
</div><!-- #primary -->

</div><!-- #main-content -->

<?php
//get_sidebar();
//get_footer();


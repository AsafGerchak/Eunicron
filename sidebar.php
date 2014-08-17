<div class="sidebar">
	
	<!-- Headshot, name and sub title -->
	<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    
		<div class='site-logo'>
    	<img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
    </div> <!-- /.site-logo -->

    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ) ?></h2>
  </a>
	
	<!-- Nav menu -->
	<?php wp_nav_menu( array( 'container' => false, 'menu' => 'header' ) ); ?>

	<!-- Social media icons -->
	<ul class="social">
		
		<li class="socialIcon email">
			<a href="mailto:hi@euniemailcebae.net" class="socialLink">
				<svg version="1.1" class="emailIcon" id="emailIcon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 64.706" enable-background="new 0 0 100 64.706" xml:space="preserve">
					<path d="M5.882,0C0,0,2.941,1.996,5.882,4.412l41.177,33.823l47.06-33.823C97.061,1.996,100,0,94.119,0h-47.06H5.882z"/>
					<path d="M0,8.824v50c0,2.941,2.978,5.882,5.331,5.882H94.67c2.352,0,5.33-2.94,5.33-5.882V8.823L47.059,47.058L0,8.824z"/>
				</svg>
			</a> <!-- /.email -->
		</li>

		<li class="socialIcon facebook">
			<a href="https://www.facebook.com/eunice.bae" class="socialLink" target="_blank">
				<svg version="1.1" class="facebookIcon" id="facebookIcon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
					<path d="M9.025,5.242l0.004-1.38c0-0.719,0.049-1.104,1.08-1.104h1.906V0H9.283C6.634,0,6.024,1.369,6.024,3.618l0.003,1.624
					L4.016,5.243V8h2.011v8h2.999l0.002-8l2.723-0.001l0.292-2.757H9.025z"/>
				</svg>
			</a> <!-- /.facebook -->
		</li>
	
		<li class="socialIcon instagram">
			<a href="http://instagram.com/eunibae" class="socialLink" target="_blank">
				<svg class="instagramIcon" id="instagramIcon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
					<g id="Captions">
						<rect x="-192" width="185" height="99"/>
						<rect y="-36" width="100" height="30"/>
						<text transform="matrix(1 0 0 1 66 -19.5)" font-family="'Helvetica'" font-size="2.4">http://thenounproject.com</text>
						<text transform="matrix(1 0 0 1 7.166 -24.5)"><tspan x="0" y="0" font-family="'Helvetica-Bold'" font-size="6.1578">The Noun Project</tspan><tspan x="1.12" y="4.8" font-family="'Helvetica-Bold'" font-size="4">Icon Template</tspan></text>
						<text transform="matrix(1 0 0 1 -178.5 10.5)" font-family="'Helvetica-Bold'" font-size="6.1578">Reminders</text>
						<line stroke="#FFFFFF" stroke-miterlimit="10" x1="8" y1="-14.5" x2="18" y2="-14.5"/>
						<line stroke="#FFFFFF" stroke-miterlimit="10" x1="-179" y1="16.5" x2="-162" y2="16.5"/>
						<g>
							<g>
								<g>
									<rect x="-170.802" y="31.318" width="8.721" height="8.642"/>
									<path d="M-164.455,42.312h4.747v-4.703h-4.747V42.312z M-159.266,42.749h-5.63V37.17h5.63V42.749      L-159.266,42.749z M-166.221,44.062h8.279v-8.203h-8.279V44.062L-166.221,44.062z M-157.5,44.5h-9.163v-9.079h9.163V44.5      L-157.5,44.5z"/>
									<polygon points="-166.149,44.133 -166.292,43.991 -158.013,35.787 -157.871,35.929     "/>
								</g>
							</g>
						</g>
						<rect x="-179" y="58" fill="none" width="35" height="32.5"/>
						<text transform="matrix(1 0 0 1 -179 60.1572)"><tspan x="0" y="0" font-family="'Helvetica-Bold'" font-size="3">Strokes</tspan><tspan x="0" y="5" font-family="'Helvetica'" font-size="2.4">Try to keep strokes at 4px</tspan><tspan x="0" y="10" font-family="'Helvetica'" font-size="2.4">Minimum stroke weight is 2px</tspan><tspan x="0" y="14.5" font-family="'Helvetica'" font-size="2.4">For thicker strokes use even </tspan><tspan x="0" y="17.5" font-family="'Helvetica'" font-size="2.4">numbers: 6px, 8px etc.</tspan><tspan x="0" y="22" font-family="'Helvetica-Bold'" font-size="2.4">Remember to expand strokes </tspan><tspan x="0" y="25" font-family="'Helvetica-Bold'" font-size="2.4">before saving as an SVG </tspan></text>
						<rect x="-136.5" y="58" fill="none" width="35" height="32.5"/>
						<text transform="matrix(1 0 0 1 -136.5 60.1572)"><tspan x="0" y="0" font-family="'Helvetica-Bold'" font-size="3">Size</tspan><tspan x="0" y="5" font-family="'Helvetica'" font-size="2.4">Cannot be wider or taller than </tspan><tspan x="0" y="8.5" font-family="'Helvetica'" font-size="2.4">100px (artboard size)</tspan><tspan x="0" y="13.5" font-family="'Helvetica'" font-size="2.4">Scale your icon to fill as much of </tspan><tspan x="0" y="16.5" font-family="'Helvetica'" font-size="2.4">the artboard as possible</tspan></text>
						<rect x="-94" y="58" fill="none" width="35" height="32.5"/>
						<text transform="matrix(1 0 0 1 -94 60.1572)"><tspan x="0" y="0" font-family="'Helvetica-Bold'" font-size="3">Ungroup</tspan><tspan x="0" y="5" font-family="'Helvetica'" font-size="2.4">If your design has more than one </tspan><tspan x="0" y="8" font-family="'Helvetica'" font-size="2.4">shape, make sure to ungroup</tspan></text>
						<rect x="-50" y="58" fill="none" width="35" height="32.5"/>
						<text transform="matrix(1 0 0 1 -50 60.1572)"><tspan x="0" y="0" font-family="'Helvetica-Bold'" font-size="3">Save as</tspan><tspan x="0" y="5" font-family="'Helvetica'" font-size="2.4">Save as .SVG and make sure </tspan><tspan x="0" y="8" font-family="'Helvetica'" font-size="2.4">&#8220;Use Artboards&#8221; is checked</tspan></text>
						<text transform="matrix(1.0074 0 0 1 -125.542 30.5933)" font-family="'Helvetica'" font-size="2.5731">100px</text>
						<text transform="matrix(1.0074 0 0 1 -41 39)" font-family="'Helvetica-Bold'" font-size="5.1462">.SVG</text>
						<rect x="-126.514" y="34.815" width="10.261" height="10.185"/>
						<rect x="-126.477" y="31.766" width="0.522" height="2.337"/>
						<rect x="-116.812" y="31.766" width="0.523" height="2.337"/>
						<rect x="-127" y="32.337" width="11.233" height="0.572"/>
						<g>
							<rect x="-83.805" y="33.844" width="10.305" height="10.156"/>
							<rect x="-76.809" y="28.707" width="3.308" height="3.261"/>
						</g>
						<rect x="-178.5" y="22.5" stroke="#FFFFFF" stroke-miterlimit="10" width="30" height="30"/>
						<rect x="-136.5" y="22.5" stroke="#FFFFFF" stroke-miterlimit="10" width="30" height="30"/>
						<rect x="-93.5" y="22.5" stroke="#FFFFFF" stroke-miterlimit="10" width="30" height="30"/>
						<rect x="-49.5" y="22.5" stroke="#FFFFFF" stroke-miterlimit="10" width="30" height="30"/>
					</g>
					<g id="Your_Icon">
						<g id="Instagram_Icon">
							<g>
								<path d="M73.144,48.727c0,12.78-10.362,23.144-23.144,23.144c-12.781,0-23.141-10.363-23.141-23.144     c0-2.893,0.554-5.647,1.521-8.201H0v34.475C0,88.81,11.194,100,25,100h50.001C88.808,100,100,88.81,100,75.001V40.526H71.619     C72.588,43.079,73.144,45.834,73.144,48.727z"/>
								<circle cx="50" cy="48.726" r="13.889"/>
								<path d="M75.001,0.002H26.317v26.069h-5.467V0.375c-1.902,0.316-3.737,0.829-5.467,1.55v24.147H9.917V5.098     C3.9,9.663,0,16.869,0,25.003v7.32h33.678c4.186-4.163,9.953-6.738,16.322-6.738s12.135,2.575,16.32,6.738H100v-7.32     C100,11.196,88.808,0.002,75.001,0.002z M86.17,23.645c0,1.549-1.26,2.81-2.811,2.81h-8.428c-1.554,0-2.811-1.257-2.811-2.81     v-8.43c0-1.551,1.257-2.811,2.811-2.811h8.428c1.551,0,2.811,1.257,2.811,2.811V23.645z"/>
							</g>
						</g>
					</g>
					</svg>
			</a> <!-- /.instagram -->
		</li>
	
		<li class="socialIcon twitter">
			<a href="http://twitter.com/euni" class="socialLink" target="_blank">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="twitterIcon" id="twitterIcon" x="0px" y="0px" viewBox="0 0 71.467 71.465" enable-background="new 0 0 71.467 71.465" xml:space="preserve">
					<path d="M60.812,17.227C60.36,11.34,55.928,6.581,50.192,5.625c-0.688-0.114-1.388-0.187-2.11-0.187  c-0.729,0-1.442,0.067-2.138,0.187c-1.691,0.29-3.268,0.911-4.666,1.793c-1.365,0.861-2.561,1.961-3.51,3.26  c-0.028,0.035-0.061,0.067-0.085,0.104C37.616,10.875,0.084,64.486,0.084,64.486c0.074,0,21.532,0.002,30.384,0.002  c16.752,0.002,30.336-13.553,30.388-30.293c0-0.03,0.001-0.061,0.002-0.092v-6.768l10.296-5.044L60.812,17.227z M49.561,19.156  c-1.042,0-1.885-0.845-1.885-1.886c0-1.041,0.843-1.883,1.885-1.883c1.041,0,1.886,0.842,1.886,1.883  C51.446,18.311,50.602,19.156,49.561,19.156z"/>
				</svg>
			</a> <!-- /.twitter -->
		</li>

	</ul> <!-- /.social -->

</div> <!-- /.sidebar -->

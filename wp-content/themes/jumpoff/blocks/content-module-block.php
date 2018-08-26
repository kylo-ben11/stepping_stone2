<section class="section-block section-block-4">
	<h2 class=" h2"><span>Plugin Block</span></h2>
	<div class="section-block__inner grid-row">



		<?php if( have_rows('modules') ): ?>

			<?php $counter = 0; ?>

			<?php  while ( have_rows('modules') ) : the_row(); ?>
				<?php $counter++;  ?>
			<?php endwhile; ?>

			<?php

			if( $counter == 1){
				$classCount = "nb-12";
			}
            elseif($counter == 2){
				$classCount = "nb-6";
			}
            elseif($counter == 3){
				$classCount = "nb-4";
			}
            elseif($counter == 4){
				$classCount = "nb-3";
			}

			?>
		<?php endif; ?>



		<?php if( have_rows('modules') ): ?>
			<?php  while ( have_rows('modules') ) : the_row(); ?>

				<?php if ( get_row_layout() == 'text_box' ) { ?>
					<div class="section-block__item <?php echo $classCount; ?>">

						<?php include __DIR__ . '/../modules/content-textbox-module.php' ?>

					</div>

				<?php } elseif (get_row_layout() == 'contact_box') { ?>
                    <div class="section-block__item <?php echo $classCount; ?>">

						<?php include __DIR__ . '/../modules/content-contact-module.php' ?>

                    </div>

				<?php } else { ?>

				<?php } ?>

			<?php endwhile; ?>
		<?php endif; ?>





		<!--<div class="section-block__item nb-3">
			<div class="connect-plugin">
				<h4 class="h4 h4-alt plugin__heading">Contact Info</h4>
				<ul class="iconList iconList-marker">
					<li>9 Westridge Road, Suite 186</li>
					<li>Lutherville, MD 21093</li>
				</ul>
				<ul class="iconList iconList-phone">
					<li>(443) 900-2886</li>
				</ul>
				<ul class="iconList iconList-email">
					<li>info@peacetaxlaw.com</li>
				</ul>
				<div class="google-maps mapBlock">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2882.0161849708184!2d-88.45184348411041!3d43.75176067911798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8804751ab4bb282d%3A0x5d1108244118ca9b!2swisnet.com%2C+LLC!5e0!3m2!1sen!2sus!4v1477684067246"
						frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div class="section-block__item nb-3">
			<div class="review-plugin plugin">
				<h4 class="h4 h4-alt plugin__heading">Read Our Reviews</h4>
				<div class="plugin__group">
					<h5 class="h5 plugin__subHeading">Recent Review:</h5>
					<div class="review-plugin__stars">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					<p class="review-plugin__date">3/25/2015</p>
					<p class="plugin__content">What a great experience it was working with this company. Steve does taxes like a champ. And he's a big Green Bay Packe..</p>
				</div>

				<div class="plugin__group">
					<h5 class="h5 plugin__subHeading">Overall rating:</h5>
					<div class="review-plugin__stars">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>
					<a class="plugin__link" href="#">Read all reviews...</a>
				</div>
			</div>
		</div>
		<div class="section-block__item nb-3">
			<div class="newsBox-plugin">
				<h4 class="h4 h4-alt plugin__heading">Quick Connect</h4>
				<div class="newBox-plugin__content">
					<p>Sign Up for our newsletter and get the latest in tax updates and issues that affect your tax well being.By clicking 'Sign-Up' I accept the <a href="#">
						Privacy</a> </p>
				</div>
				<form>


				  <div class="formGroup">
					<label class="js-floatLabel" for="lname">Email</label>
					<input class="formInput js-floatInput" name="lname" placeholder="Email" />
				  </div>
					<div class="formGroup">
						<label class="js-floatLabel" for="lname">Comment</label>
						<textarea class="formInput js-floatInput" name="lname" placeholder="Comment"></textarea>
					</div>
				  <button class="btns btn1" type="submit">Submit</button>
				</form>
			</div>
		</div>
		<div class="section-block__item nb-3">
			<div class="quickLinks-plugin plugin">
				<h4 class="h4 h4-alt plugin__heading">Main Links</h4>
				<ul class="quickLinks-plugin__list">
					<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Home</a></li>
					<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> About</a></li>
					<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Services</a></li>
					<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> IRS Letters</a></li>
					<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Tax Center</a></li>
					<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Contact</a></li>
				</ul>
			</div>
		</div>-->
	</div>
</section>
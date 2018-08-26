<?php get_header(); ?>
<main class="main main-2col">
	<div class="main__inner">
		<div class="main__content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <em>page-contact.php</em>
              <br/><br/>
              <h2><?php the_title() ;?></h2>
               <?php the_content(); ?>
               
               <form>
                  <div class="formGroup">
                    <label for="fname">First Name</label>
                    <input class="formInput" name="fname">
                  </div>
                  <div class="formGroup">
                    <label for="lname">Last Name</label>
                    <input class="formInput" name="lname">
                  </div>
                  <div class="formGroup">
                    <select class="selectBox">
                      <option value="">SELECT GARAGE STALLS</option>
                      <option value="4">Thomas Edison</option>
                      <option value="1">Nikola</option>
                      <option value="3">Nikola Tesla</option>
                      <option value="5">Arnold Schwarzenegger</option>
                    </select>
                  </div>
                  
                  <div class="formGroup">
                    <p class="formLabel">Label</p>
                    <div class="formGroup-check">
                      <input class="formInput-check" type="checkbox" id="check1" name="check1">
                      <label for="check1"><span></span>Check Box 1</label>
                    </div>
                    <div class="formGroup-check">
                      <input class="formInput-check" type="checkbox" id="check2" name="check2">
                      <label for="check2"><span></span>Check Box 2</label>
                    </div>
                  </div>
                  <div class="formGroup">
                    <label for="city">Message</label>
                    <textarea class="formInput" name="message"></textarea>
                  </div>
                  <button class="btns btn3" type="submit">Send</button>
                </form>
               
               
        <?php endwhile; else: ?>
          <p>Sorry, no posts to list</p>
        <?php endif; ?>
		</div>
		<aside class="main__aside">
			<div class="google-maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7098.94326104394!2d78.0430654485247!3d27.172909818538997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1385710909804" width="600" height="450" frameborder="0" style="border:0"></iframe>
      </div>
		</aside>
	</div>
</main>
<?php get_footer(); ?>
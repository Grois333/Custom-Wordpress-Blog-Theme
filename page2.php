<?php /* Template Name: CustomPageT1 */ ?>


<?php get_header()  ?>

<section class="theme-bg-dark py-5 text-center text-light">
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
	    </section>
    

    <article class="content px-3 py-5 p-md-5">

     
      <?php


        if(have_posts() ){

            while(have_posts()){

                the_post();

                get_template_part('template-parts/content', 'page');
                
            }
        }


      ?>
    
    </article>
    
   


<?php get_footer()  ?>


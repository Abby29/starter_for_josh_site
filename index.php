<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid aboutbg text-center">
          <div class="container">
              
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=2');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>    

              
              <div class="blocker"> </div>
              </div>
        
          
          </section>
          
          
          <section class="container-fluid articlebg"> 
                <div class="container">
                    <div class="row">
                        
                    <div>
                        <h3 class="text-center article-title"> LATEST ARTICLES</h3>
                        </div>
                    
                        <div class="col-md-4 article-cent">
                            <img class="img-responsive" alt="portrait" src="http://206.189.45.97/~mesh14/wp-content/themes/starter_for_josh_site/images/image1.jpg">>
                            <h4> A PORTRAIT </h4>
                        <p class="date"> 12 December 2020 </p>
                            <p> STS has never been shy of seeking new terrains of investigation and more STS scholars are starting to explore and intervene. This object of study brings new challenges and opportunities that want to explore in this session. We would like to gather first of a simply new kinds of knowledge arising from STS study of the arts</p>
                            <p class="readmore"> continue reading</p>
                        
                        </div>
                        
                           <div class="col-md-4 article-cent">
                               <img class="img-responsive" alt="portrait" src="http://206.189.45.97/~mesh14/wp-content/themes/starter_for_josh_site/images/image2.jpg">
                            <h4> A MODEL </h4>
                        <p class="date"> 12 December 2020 </p>
                            <p> STS has never been shy of seeking new terrains of investigation and more STS scholars are starting to explore and intervene. This object of study brings new challenges and opportunities that want to explore in this session. We would like to gather first of a simply new kinds of knowledge arising from STS study of the arts</p>
                            <p class="readmore"> continue reading</p>
                        
                        </div>
                        
                           <div class="col-md-4 article-cent">
                               <img class="img-responsive" alt="portrait" src="http://206.189.45.97/~mesh14/wp-content/themes/starter_for_josh_site/images/image3.jpg">>
                            <h4> GAMES DESIGN </h4>
                        <p class="date"> 12 December 2020 </p>
                            <p> STS has never been shy of seeking new terrains of investigation and more STS scholars are starting to explore and intervene. This object of study brings new challenges and opportunities that want to explore in this session. We would like to gather first of a simply new kinds of knowledge arising from STS study of the arts</p>
                            <p class="readmore"> continue reading</p>
                        
                        </div>
                        
                    </div> 
<!--                    row-->
              </div>
          </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>      
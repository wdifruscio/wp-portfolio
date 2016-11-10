<?php get_header();  ?>
<body>
<nav>
    <ul>
        <li><a href="">About</a></li>
        <li><a href="">Projects</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">Contact</a></li>
    </ul>
</nav>
<header class="flex-wrapper">
    <div class="header___menu">
        <a id="header___button" class="hamburger" href="#">
            <div class="hamburger___inner"></div>
        </a>  
    </div>
    <?php $headerColor = get_field('header-color'); ?>
    <div class="half-container">
        <div class="inner-container" style="color:<?php echo $headerColor ?>" >
            <h1 class="header___title"><?php the_field('header-title'); ?></h1>
            <h2 class="header___title"><?php the_field('header-tagline'); ?></h2>
            <a href="#about" class=""><img class="header___title arrow-down" src="wp-content/themes/startertheme/images/arrow.png" alt=""></a>
        </div>
    </div>
    <div class="half-container">
    </div>
</header>
<main class="wrapper" id="about">
    <?php $profileImage = get_field('profile-picture'); ?>
    <section class="section___about">
        <div class="about___container">
            <div class="image-container">
                <img src="<?php echo $profileImage['url'] ?>" alt="">
            </div>
            <div class="about___text">
                <div>
                    <h2><?php the_field('about-title') ?></h2>
                    <p><?php the_field('about-copy') ?></p>
                    <ul class="social">
                        <li><a target="_blank" href="<?php echo the_field('about-twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="<?php echo the_field('about-linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="<?php echo the_field('about-github'); ?>"><i class="fa fa-github"></i></a></li>     
                        <li><a target="_blank" href="<?php echo the_field('about-codepen'); ?>"><i class="fa fa-codepen"></i></a></li>
                        <li><a target="_blank" href="malito:<?php echo the_field('about-email'); ?>"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                    <p>// <span class="small-text">hello[at]willcodes.ca</span></p>
                </div>
            </div>
        </div>
    </section>
    <?php 
    $portfolioArgs = array(
        'post_type' => 'portfolio_items',
    );
    $portfolioLoop = new WP_Query($portfolioArgs);
    if($portfolioLoop->have_posts()) while($portfolioLoop->have_posts()) : $portfolioLoop->the_post();
    ?>
    <section class="section___row flex-wrapper">
        <div class="half-container">
            <div class="inner-container">
                <h3><?php the_field('item-tagline');?></h3>
                <p><?php the_content(); ?></p>
                    <ul class = "project___skills">
                        <?php while(have_rows('item-skills')) : the_row();?>
                        <li><?php the_sub_field('single-skill'); ?></li>
                        <?php endwhile ?>
                    </ul>
                <span><a class="btn___view" href="">View Live &nbsp➜</a>
                <a class="btn___view" href="">Github  &nbsp➜</a></span>
            </div>
        </div>
        <?php $itemImage = get_field('item-image'); ?>
        <div class="half-container portfolio-box" style="background-image:url(<?php echo $itemImage['url']; ?>">
            <a href="" class="inner-container-2">   
                <div class="left"></div>
                <div class="right"></div>
                <div class="up"></div>
                <div class="down"></div>
                <h2><?php the_title(); ?></h2>
                <p><?php the_field('item-image-text') ?></p>
                <p class="btn___view---text">View Now ➜</p>
            </a>
        </div>
    </section>
      <?php endwhile ?>
      <?php wp_reset_postdata(); ?>
      <section class= "section___skills" id="skills">
          <h2>Skills & Tools</h2>
          <div class="skills___container">
              <figure>
                  <i class="devicon-html5-plain colored"></i>
                  <figcaption>HTML</figcaption>
              </figure>
              <figure>
                  <i class="devicon-css3-plain colored"></i>
                  <figcaption>CSS</figcaption>
              </figure>
              <figure>
                  <i class="devicon-javascript-plain colored"></i>
                  <figcaption>JavaScript</figcaption>
              </figure>
              <figure>
                  <i class="devicon-jquery-plain colored"></i>
                  <figcaption>jQuery</figcaption>
              </figure>
              <figure>
                  <i class="devicon-sass-plain colored"></i>
                  <figcaption>Sass</figcaption>
              </figure>
              <figure>
                  <i class="devicon-git-plain colored"></i>
                  <figcaption>Git</figcaption>
              </figure>
              <figure>
                  <i class="devicon-github-plain"></i>
                  <figcaption>Github</figcaption>
              </figure>
              <figure>
                  <i class="devicon-gulp-plain colored"></i>
                  <figcaption>Gulp</figcaption>
              </figure>
              <figure>
                  <i class="devicon-wordpress-plain colored"></i>
                  <figcaption>WordPress</figcaption>
              </figure>
          </div>
          <h2>Currently Exploring</h2>
          <div class="skills___container">
              <figure>
                  <i class="devicon-csharp-plain colored"></i>
                  <figcaption>C#</figcaption>
              </figure>
              <figure>
                  <i class="devicon-nodejs-plain colored"></i>
                  <figcaption>Nodejs</figcaption>
              </figure>
              <figure>
                  <i class="devicon-react-plain colored"></i>
                  <figcaption>react</figcaption>
              </figure>
          </div>
      </section>
<section class="section___contact flex-wrapper" id="contact">
    <div class="half-container">
            <!-- validation -->
          <?php if(count($errors)) { ?>
          <div class="error">
            <?php
            echo implode("<br>", $errors);
            ?>
          </div>
          <?php } else if ($sent) { ?>
          <div class="success">Message sent! I'll be in touch :)</div>
          <?php } ?>
          <!-- end php  -->
      <form name ="contactForm"  action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
        <input type="text" name="name" placeholder="Name" required maxlength="50" value="<?php echo $name;?>">      
        <input type="email" name="email" placeholder="Email" required maxlength="50" value="<?php echo $email;?>">     
        <input type="text" name="phone" placeholder="Phone Number" value="<?php echo $phone; ?>">       
        <textarea rows="4" name="message" placeholder="Message" maxlength="500"><?php echo $message;?></textarea>
        <input type="submit" name="submit" value="submit" class="submit-btn">
      </form>
    </div>
    <div class="half-container">
          <div class="contact___container">
            <h2>Get in touch</h2>
            <p>I love starting new projects and working with new people.
            Let's connect and build something new.</p>
          <ul class="social">
              <li><a target="_blank" href="https://www.github.com/willcodes"><i class="fa fa-github"></i></a></li>
              <li><a target="_blank" href="https://www.linkedin.com/in/willcodes"><i class="fa fa-linkedin"></i></a></li>
              <li><a target="_blank" href="https://www.codepen.io/willcodes"><i class="fa fa-codepen"></i></a></li>
              <li><a target="_blank" href="https://www.twitter.com/willcodes_"><i class="fa fa-twitter"></i></a></li>
              <li><a target="_blank" href="mailto:hello@willcodes.ca"><i class="fa fa-envelope"></i></a></li>
          </ul>
          <p>// <span class="small-text">hello[at]willcodes.ca</span></p>                        
          </div>  
    </div>
    </section>
</main>

<?php get_footer(); ?>
SINGLE

<h1><?php the_title(); ?></h1>

<div class="page">
  <?php
    get_template_part('template-parts/meta');
    the_content();
  ?>
</div>

<?php

get_sidebar();

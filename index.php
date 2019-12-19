<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo bloginfo('name')?></title>
</head>
<body <?php body_class();?>>

<?php
if(have_posts()):
  while(have_posts()): the_post(); ?>

  <h1><?php the_title();?></h1>
  <p><?php the_content();?></p>

<?php endwhile;
else:
  echo "Nenhum resultado encontrado.";
endif;
?>
  
</body>
</html>
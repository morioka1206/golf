<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <?php the_title(); ?>
    <?php the_content(); ?>
    <?php echo SCF::get('title'); ?>
  </div>
</body>

</html>
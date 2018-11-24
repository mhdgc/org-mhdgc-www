<!DOCTYPE html>
<html lang="en">
<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->fetch('title') ?></title>
  <?= $this->Html->meta('icon') ?>

  <?=$this->element('Common/google_site_verification')?>

  <?= $this->Html->css('base.css') ?>
  <?= $this->Html->css('style.css') ?>

  <?= $this->fetch('meta') ?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" />
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
</head>
<body role="document">
  <?=$this->element('Common/menu')?>
  <div class="container clearfix" role="main">
    <h1><i class="fa fa-poo"></i><a href=""><?= $this->fetch('title') ?></a></h1>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
  </div>
  <?=$this->element('Common/footer')?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <?=$this->element('Common/google_analytics')?>
</body>
</html>

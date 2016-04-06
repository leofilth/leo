<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta "charset=utf-8" />
    <title><?php echo $this->layout->getTitle(); ?></title>
    <meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">
    <meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>"/>
    <link href="<?php echo base_url() ?>public/css/estilos2.css" rel='stylesheet' type='text/css' media='all'/>
    <!--Bootstrap CSS-->
    <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel='stylesheet' type='text/css' media='all'/>
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/funciones.js"></script>
    <!--JS bootstrap*/-->
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/bootstrap.min.js"></script>
    <!--*************auxiliares*****************-->
    <?php echo $this->layout->css; ?>
    <?php echo $this->layout->js; ?>
    <!--**********fin auxiliares*****************-->
</head>
<body>
<?php echo $content_for_layout; ?>
</body>
</html>
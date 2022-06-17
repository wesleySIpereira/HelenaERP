<?php   echo $this->extend('template/template'); //sempre extender primeiro ao layout ?> 

<?php echo $this->section('titulo'); ?>
 <?php echo $titulo; ?>
<?php echo $this->endSection('titulo'); ?>


<?php echo $this->section('estilos'); ?>
 <?php echo $titulo; ?>
<?php echo $this->endSection('estilos'); ?>





<?php echo $this->section('conteudo'); ?>

<?php echo $this->endSection('conteudo'); ?>








<?php echo $this->section('scripts'); ?>



<?php echo $this->endSection('scripts'); ?>

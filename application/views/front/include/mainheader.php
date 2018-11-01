<div class="main-header">
<div class="container">
<div class="logo">
<a class="logo-img" href="<?php echo base_url(); ?>" title="WorldPlus">
<img class="default_logo" alt="WorldPlus" src="<?php echo base_url('assets/front/'); ?>images/haberlogo.png">
<img class="retina_logo" alt="WorldPlus" src="<?php echo base_url('assets/front/'); ?>images/haberlogo.png">
</a>
</div>
<div class="worldplus-ad worldplus-ad-header-1">
<?php $reklamlar = reklamcek(); $btt = date('Y-m-d'); foreach ($reklamlar as $reklam) { if ($reklam['durum'] == 1 && $reklam['bitis'] > $btt) { if($reklam['link']) { ?>
<a href="<?php echo $reklam['link']; ?>" target="_blank"><img title="<?php echo $reklam['sirket']; ?>" alt="<?php echo $reklam['sirket']; ?>" src="<?php echo base_url(); echo $reklam['tmb'];  ?>"></a>
<?php }else{ ?>
<a href="#"><img alt="bos reklam" src="<?php echo base_url('assets/front/'); ?>images/reklam/bos/bosbanner.png"></a>
<?php } } } ?>
</div>
<div class="worldplus-ad-clearfix clearfix"></div>
</div>
</div>
<div class="with-sidebar-container">
<div class="col-md-12 main-container">
<div class="v-post post-contact-us post-no-border">
<div class="post-inner">
<div class="post-title"><h3>BİZİM HABER</h3></div>
<div class="row">
<div class="col-md-12">
<div class="screen-reader-response"></div>
<h3>Bizim Haber</h3>
<?php $ayarlar = siteayarlari(); foreach ($ayarlar as $ayar) { ?>
<p>Adres : <?php echo $ayar['site_adres']; ?></p>
<p>Telefon : <?php echo $ayar['site_telefon']; ?></p>
<p>Email : <?php echo $ayar['site_mail']; ?></p>
<?php } ?>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>

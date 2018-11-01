<div class="with-sidebar-container">
<div class="col-md-12 main-container">
<div class="v-post post-contact-us post-no-border">
<div class="post-inner">
<div class="post-title"><h3>İLETİŞİM FORMU</h3></div>
<div class="row">
<div class="col-md-12">
<div class="comment-form vpanel-form">
<div class="screen-reader-response"></div>
<?php echo $this->session->flashdata('hata') ?>
<?php echo $this->session->flashdata('basarili') ?>
<form action="<?php echo base_url('anasayfa/mesajal'); ?>" method="post">
<p>İsim Soyisim ( zorunlu )<br />
<span class="wpcf7-form-control-wrap"><input type="text" name="adsoyad" size="40" required /></span></p>
<p>Email ( zorunlu )<br />
<span class="wpcf7-form-control-wrap"><input type="email" name="email" size="40" required /></span></p>
<p>Konu ( zorunlu )<br />
<span class="wpcf7-form-control-wrap"><input type="text" name="konu" size="40" required /></span></p>
<input type="hidden" name="ip" value="<?php //echo GetIP(); ?>">
<p>Mesajınız ( zorunlu )<br />
<span class="wpcf7-form-control-wrap"><textarea name="mesaj" cols="40" rows="10" required></textarea></span></p>
</div>
<p><input type="submit" value="Mesajı Gönder" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>

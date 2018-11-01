<div class="breaking-news main-block breaking-news-3">
<div class="container">
<div class="breaking-news-all">
<div class="breaking-news-title">
<h3 class="title">SON DAKİKA</h3>
</div>
<div class="breaking-news-content">
<ul>
<?php $sd = 2; $veriler = sondakika($sd); foreach ($veriler as $veri) { ?>
<?php if ($veri['kategori'] == 'Siyaset') { ?>
<li><a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $veri['sef']; ?>" title="<?php echo $veri['title']; ?>"><?php echo $veri['title']; ?></a></li>
<?php }elseif ($veri['kategori'] == 'Ekonomi') { ?>
<li><a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $veri['sef']; ?>" title="<?php echo $veri['title']; ?>"><?php echo $veri['title']; ?></a></li>
<?php }elseif ($veri['kategori'] == 'Sağlık') { ?>
<li><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $veri['sef']; ?>" title="<?php echo $veri['title']; ?>"><?php echo $veri['title']; ?></a></li>
<?php }elseif ($veri['kategori'] == 'Spor') { ?>
<li><a href="<?php echo base_url('anasayfa/spordetay/'); echo $veri['sef']; ?>" title="<?php echo $veri['title']; ?>"><?php echo $veri['title']; ?></a></li>
<?php }elseif ($veri['kategori'] == 'Magazin') { ?>
<li><a href="<?php echo base_url('anasayfa/magazindetay/'); echo $veri['sef']; ?>" title="<?php echo $veri['title']; ?>"><?php echo $veri['title']; ?></a></li>
<?php }elseif ($veri['kategori'] == 'Kültür') { ?>
<li><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $veri['sef']; ?>" title="<?php echo $veri['title']; ?>"><?php echo $veri['title']; ?></a></li>
<?php } ?>
<?php } ?>
</ul>
<div class="clear"></div>
</div>
</div>
</div>
</div>
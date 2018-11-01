<div class="col-md-12">	<div class="box-border">
<div class="box-slideshow box-slideshow-full slide-show-full slideshow-style-10">
<ul>
<?php $galeriler = galeri(); foreach ($galeriler as $galeri) { ?>
<li class="slider-item">
<div class="box-slideshow-main box-slideshow-bigger">
<div class="box-slideshow-img">
<img alt='<?php echo $galeri['title']; ?>' width='1140' height='500' src='<?php echo base_url(); echo $galeri['resim']; ?>'>
</div>
<div class="slideshow-overlay"></div>
<div class="box-slideshow-content">
<div class="box-slideshow-outer">
<div class="box-slideshow-inner">
<?php if ($galeri['kategori'] == 'Siyaset') { ?>
<a class="box-news-overlay-3" href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $galeri['sef']; ?>" title="<?php echo $galeri['title']; ?>" rel="bookmark"></a>
<?php }elseif ($galeri['kategori'] == 'Ekonomi') { ?>
<a class="box-news-overlay-3" href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $galeri['sef']; ?>" title="<?php echo $galeri['title']; ?>" rel="bookmark"></a>
<?php }elseif ($galeri['kategori'] == 'Sağlık') { ?>
<a class="box-news-overlay-3" href="<?php echo base_url('anasayfa/saglikdetay/'); echo $galeri['sef']; ?>" title="<?php echo $galeri['title']; ?>" rel="bookmark"></a>
<?php }elseif ($galeri['kategori'] == 'Spor') { ?>
<a class="box-news-overlay-3" href="<?php echo base_url('anasayfa/spordetay/'); echo $galeri['sef']; ?>" title="<?php echo $galeri['title']; ?>" rel="bookmark"></a>
<?php }elseif ($galeri['kategori'] == 'Magazin') { ?>
<a class="box-news-overlay-3" href="<?php echo base_url('anasayfa/magazindetay/'); echo $galeri['sef']; ?>" title="<?php echo $galeri['title']; ?>" rel="bookmark"></a>
<?php }elseif ($galeri['kategori'] == 'Kültür') { ?>
<a class="box-news-overlay-3" href="<?php echo base_url('anasayfa/kulturdetay/'); echo $galeri['sef']; ?>" title="<?php echo $galeri['title']; ?>" rel="bookmark"></a>
<?php } ?>
<span class="slide-category">
<?php if ($galeri['kategori'] == 'Siyaset') { ?>
<a href="<?php echo base_url('anasayfa/siyaset/'); ?>" title="<?php echo $galeri['kategori']; ?>" rel="bookmark"><?php echo $galeri['kategori']; ?></a>
<?php }elseif ($galeri['kategori'] == 'Ekonomi') { ?>
<a href="<?php echo base_url('anasayfa/ekonomi/'); ?>" title="<?php echo $galeri['kategori']; ?>" rel="bookmark"><?php echo $galeri['kategori']; ?></a>
<?php }elseif ($galeri['kategori'] == 'Sağlık') { ?>
<a href="<?php echo base_url('anasayfa/saglik/'); ?>" title="<?php echo $galeri['kategori']; ?>" rel="bookmark"><?php echo $galeri['kategori']; ?></a>
<?php }elseif ($galeri['kategori'] == 'Spor') { ?>
<a href="<?php echo base_url('anasayfa/spor/'); ?>" title="<?php echo $galeri['kategori']; ?>" rel="bookmark"><?php echo $galeri['kategori']; ?></a>
<?php }elseif ($galeri['kategori'] == 'Magazin') { ?>
<a href="<?php echo base_url('anasayfa/magazin/');?>" title="<?php echo $galeri['kategori']; ?>" rel="bookmark"><?php echo $galeri['kategori']; ?></a>
<?php }elseif ($galeri['kategori'] == 'Kültür') { ?>
<a href="<?php echo base_url('anasayfa/kultur/'); ?>" title="<?php echo $galeri['kategori']; ?>" rel="bookmark"><?php echo $galeri['kategori']; ?></a>
<?php } ?>
</span>
<span class="slide-date"><i class="fa fa-calendar"></i><?php echo $galeri['tarih']; ?></span>
<div class="clearfix"></div>
<?php if ($galeri['kategori'] == 'Siyaset') { ?>
<a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $galeri['sef']; ?>" title="<?php echo $galeri['title']; ?>" rel="bookmark"><?php echo $galeri['title']; ?></a>
<?php }elseif ($galeri['kategori'] == 'Ekonomi') { ?>
<a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $galeri['sef']; ?>" title="<?php echo $galeri['title']; ?>" rel="bookmark"><?php echo $galeri['title']; ?></a>
<?php }elseif ($galeri['kategori'] == 'Sağlık') { ?>
<a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $galeri['sef']; ?>" title="<?php echo $galeri['title']; ?>" rel="bookmark"><?php echo $galeri['title']; ?></a>
<?php }elseif ($galeri['kategori'] == 'Spor') { ?>
<a href="<?php echo base_url('anasayfa/spordetay/'); echo $galeri['sef']; ?>" title="<?php echo $galeri['title']; ?>" rel="bookmark"><?php echo $galeri['title']; ?></a>
<?php }elseif ($galeri['kategori'] == 'Magazin') { ?>
<a href="<?php echo base_url('anasayfa/magazindetay/'); echo $galeri['sef']; ?>" title="<?php echo $galeri['title']; ?>" rel="bookmark"><?php echo $galeri['title']; ?></a>
<?php }elseif ($galeri['kategori'] == 'Kültür') { ?>
<a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $galeri['sef']; ?>" title="<?php echo $galeri['title']; ?>" rel="bookmark"><?php echo $galeri['title']; ?></a>
<?php } ?>
</div>
</div>
</div>
</div>
</li>
<?php } ?>
</ul>
</div>
<div class="clearfix"></div>
</div>
</div>

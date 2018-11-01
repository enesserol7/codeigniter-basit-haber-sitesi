<div class="col-md-12">
<div class="box-border">
<div class="post-title post-title-news">
<h3><a href='category/world/index.html'>SAĞLIK HABERLERİ</a></h3></div>
<div class="clearfix"></div>
<div class="box-news box-news-1 box-news-sidebar">
<div class="row">
<ul>
<?php $skat = 10; $sveriler = sagliksoncek($skat); foreach ($sveriler as $sveri) { $kid = $sveri['id'] ?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-big">
<div class="box-news-img">
<img alt="<?php echo $sveri['title']; ?>" width='409' height='260' src='<?php echo base_url(); echo $sveri['tmb']; ?>'>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $sveri['sef']; ?>" title="<?php echo $sveri['title']; ?>" rel="bookmark"></a></div>
</div>
<div class="box-news-content">
<div class="box-news-title">
<a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $sveri['sef']; ?>" title="<?php echo $sveri['title']; ?>" rel="bookmark"><?php echo $sveri['title']; ?></a>
</div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $sveri['tarih']; ?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i><?php echo yorumcek($kid); ?></a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i><?php echo $sveri['hit']; ?></div>
</div>
<div class="box-news-desc">
<p><?php echo word_limiter($sveri['icerik'],25); ?></p>
</div>
<div class="post-more"><a class="button-default medium" href="<?php echo base_url('anasayfa/saglikdetay/'); echo $sveri['sef']; ?>" title="<?php echo $sveri['title']; ?>" rel="bookmark"><i class="fa fa-long-arrow-right"></i>Devamı</a></div>
</div>
<div class="clearfix"></div>
</div>
</li>
<?php } ?>
<?php $skat = 10; $veriler = saglikcek($skat); foreach ($veriler as $veri) { $kid = $veri['id'] ?>
<li class="col-md-6 col-sm-6 col-xs-6 col-mo-100">
<div class="box-news-small">
<div class="box-news-img">
<img alt="<?php echo $veri['title']; ?>" width='94' height='73' src='<?php echo base_url(); echo $sveri['tmb']; ?>'>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $veri['sef']; ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"></a></div>
</div>
<div class="box-news-content">
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $veri['sef']; ?>" title="<?php echo $veri['title']; ?>" rel="bookmark"><?php echo $veri['title']; ?> </a></div>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $veri['tarih']; ?></time>
<a class="box-news-meta-comment" href="#"><i class="fa fa-comments-o"></i><?php echo yorumcek($kid); ?></a>
<div class="box-news-meta-view"><i class="fa fa-eye"></i><?php echo $veri['hit']; ?></div>
</div>
</div>
<div class="clearfix"></div>
</div>
</li>
<?php } ?>
</ul>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
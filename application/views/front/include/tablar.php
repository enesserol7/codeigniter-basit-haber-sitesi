<div class='widget tabs-warp widget-tabs'>
<div class="widget-title widget-title-tabs">
<ul class="tabs tabs359">
<li class="tab"><a href="#">Çok Okunan</a></li>
<li class="tab"><a href="#">Yorumlar</a></li>
<li class="tab"><a href="#">Tag</a></li>
<li class="clearfix"></li>
</ul>
</div>
<div class="widget-wrap">
<div class='tab-inner-warp tab-inner-warp359'>
<ul class='widget-posts'>
<?php $bilgi = tabcokokunanhaberler(); foreach ($bilgi as $bilgi) { $kid = $bilgi['id'] ?>
<li class="widget-posts-slideshow">
<div class="box-news-small">
<div class="box-news-img">
<img alt="<?php echo $bilgi['title']; ?>" width='94' height='73' src='<?php echo base_url(); echo $bilgi['tmb']; ?>'>
<?php if ($bilgi['kategori'] == 'Siyaset') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $bilgi['sef']; ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgi['kategori'] == 'Ekonomi') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $bilgi['sef']; ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgi['kategori'] == 'Sağlık') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $bilgi['sef']; ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgi['kategori'] == 'Spor') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/spordetay/'); echo $bilgi['sef']; ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgi['kategori'] == 'Magazin') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/magazindetay/'); echo $bilgi['sef']; ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgi['kategori'] == 'Kültür') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $bilgi['sef']; ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"></a></div>
<?php } ?>
</div>
<div class="box-news-content">
<?php if ($bilgi['kategori'] == 'Siyaset') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $bilgi['sef']; ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title']; ?> </a></div>
<?php }elseif ($bilgi['kategori'] == 'Ekonomi') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $bilgi['sef']; ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title']; ?> </a></div>
<?php }elseif ($bilgi['kategori'] == 'Sağlık') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $bilgi['sef']; ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title']; ?> </a></div>
<?php }elseif ($bilgi['kategori'] == 'Spor') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/spordetay/'); echo $bilgi['sef']; ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title']; ?> </a></div>
<?php }elseif ($bilgi['kategori'] == 'Magazin') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/magazindetay/'); echo $bilgi['sef']; ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title']; ?> </a></div>
<?php }elseif ($bilgi['kategori'] == 'Kültür') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $bilgi['sef']; ?>" title="<?php echo $bilgi['title']; ?>" rel="bookmark"><?php echo $bilgi['title']; ?> </a></div>
<?php } ?>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $bilgi['tarih']; ?></time>
<a class="box-news-meta-comment"><i class="fa fa-comments-o"></i><?php echo yorumcek($kid); ?></a>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</li>
<?php } ?>
</ul>
</div>
<div class='tab-inner-warp tab-inner-warp359'>
<div class='widget-comments'>
<ol class='commentlist clearfix'>
<?php $yorumlar = yorumlaricek(); foreach ($yorumlar as $yorum) { ?>
<li class="comment">
<div class="comment-body">
<div class="avatar">
<a href="#">
<img alt='avatar' src='<?php echo base_url('assets/front/'); ?>images/avatar.png'>
</a>
</div>
<div class="comment-text">
<div class="author clearfix">
<div class="comment-meta">
<span class="comment-author fn"><a href='#' target='_blank'><?php echo $yorum['adsoyad']; ?></a></span>
<div class="clearfix"></div>
</div>
</div>
<div class="text">
<p><a href="#"><?php echo $yorum['yorum']; ?></a></p>
</div>
</div>
</div>
</li>
<?php } ?>
</ol>
</div>
</div>
<div class='tab-inner-warp tab-inner-warp359'>
<div class='widget_tag_cloud'>
<?php $taglar = taglaricek(); foreach ($taglar as $tag) { $tag = explode(",", $tag['tag']); foreach ($tag as $etiket) { ?>
<a href="#" class="tag-cloud-link" style="font-size: 13.6pt;"><?php echo $etiket; ?></a>
<?php } } ?>
</div>
</div>
</div>
</div>
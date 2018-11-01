<footer id="main-footer">
<div class="top-footer top-footer-2" style=" padding-top:60px; padding-bottom:60px;">
<div class="container">
<div class="row">
<div class="col-md-4">
<div id="about_me-widget-4" class="widget widget-about">
<div class="widget-title">
<h3>Hakkımızda</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<div class="about-widget">
<div class="widget-about-img">
<a href='<?php echo base_url(); ?>' data-rel='prettyPhoto'><img alt='' src='<?php echo base_url('assets/front/'); ?>images/logodark.png'></a> </div>
<?php $bilgi = siteayarlari(); foreach ($bilgi as $bilgi) { ?>
<p style='margin-top: 20px'><?php echo $bilgi['site_bilgi']; ?> </p>
<p style='margin-top: 20px'>Telefon:  <?php echo $bilgi['site_telefon']; ?> </p>
<p style='margin-top: 20px'>E-Mail:  <?php echo $bilgi['site_mail']; ?> </p>
<p style='margin-top: 20px'>Adres:  <?php echo $bilgi['site_adres']; ?> </p>
<?php } ?>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div id="widget_posts-7" class="widget widget-posts">
<div class="widget-title">
<h3>Son Haberler</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<ul class='widget-posts'>
<?php $bilgim = footersonhaberler(); foreach ($bilgim as $bilgim) { $kid = $bilgim['id'] ?>
<li class="widget-posts-image">
<div class="box-news-small">
<div class="box-news-img">
<img alt="<?php echo $bilgim['title']; ?>" width='94' height='73' src='<?php echo base_url(); echo $bilgim['tmb'] ?>'>
<?php if ($bilgim['kategori'] == 'Siyaset') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $bilgim['sef']; ?>" title="<?php echo $bilgim['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgim['kategori'] == 'Ekonomi') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $bilgim['sef']; ?>" title="<?php echo $bilgim['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgim['kategori'] == 'Sağlık') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $bilgim['sef']; ?>" title="<?php echo $bilgim['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgim['kategori'] == 'Spor') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/spordetay/'); echo $bilgim['sef']; ?>" title="<?php echo $bilgim['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgim['kategori'] == 'Magazin') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/magazindetay/'); echo $bilgim['sef']; ?>" title="<?php echo $bilgim['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgim['kategori'] == 'Kültür') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $bilgim['sef']; ?>" title="<?php echo $bilgim['title']; ?>" rel="bookmark"></a></div>
<?php } ?>
</div>
<div class="box-news-content">
<?php if ($bilgim['kategori'] == 'Siyaset') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $bilgim['sef']; ?>" title="<?php echo $bilgim['title']; ?>" rel="bookmark"><?php echo $bilgim['title']; ?> </a></div>
<?php }elseif ($bilgim['kategori'] == 'Ekonomi') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $bilgim['sef']; ?>" title="<?php echo $bilgim['title']; ?>" rel="bookmark"><?php echo $bilgim['title']; ?> </a></div>
<?php }elseif ($bilgim['kategori'] == 'Sağlık') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $bilgim['sef']; ?>" title="<?php echo $bilgim['title']; ?>" rel="bookmark"><?php echo $bilgim['title']; ?> </a></div>
<?php }elseif ($bilgim['kategori'] == 'Spor') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/spordetay/'); echo $bilgim['sef']; ?>" title="<?php echo $bilgim['title']; ?>" rel="bookmark"><?php echo $bilgim['title']; ?> </a></div>
<?php }elseif ($bilgim['kategori'] == 'Magazin') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/magazindetay/'); echo $bilgim['sef']; ?>" title="<?php echo $bilgim['title']; ?>" rel="bookmark"><?php echo $bilgim['title']; ?> </a></div>
<?php }elseif ($bilgim['kategori'] == 'Kültür') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $bilgim['sef']; ?>" title="<?php echo $bilgim['title']; ?>" rel="bookmark"><?php echo $bilgim['title']; ?> </a></div>
<?php } ?>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $bilgim['tarih']; ?></time>
<a class="box-news-meta-comment"><i class="fa fa-comments-o"><?php echo yorumcek($kid); ?></i></a>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</li>
<?php } ?>
</ul>
</div>
</div>
</div>
<div class="col-md-4">
<div id="widget_posts-7" class="widget widget-posts">
<div class="widget-title">
<h3>Çok Okunan Haberler</h3></div>
<div class="clearfix"></div>
<div class="widget-wrap">
<ul class='widget-posts'>
<?php $bilgim1 = footercokokunanhaberler(); foreach ($bilgim1 as $bilgim1) { $kid = $bilgim1['id'] ?>
<li class="widget-posts-image">
<div class="box-news-small">
<div class="box-news-img">
<img alt='' width='94' height='73' src='<?php echo base_url(); echo $bilgim1['tmb'] ?>'>
<?php if ($bilgim1['kategori'] == 'Siyaset') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $bilgim1['sef']; ?>" title="<?php echo $bilgim1['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgim1['kategori'] == 'Ekonomi') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $bilgim1['sef']; ?>" title="<?php echo $bilgim1['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgim1['kategori'] == 'Sağlık') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $bilgim1['sef']; ?>" title="<?php echo $bilgim1['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgim1['kategori'] == 'Spor') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/spordetay/'); echo $bilgim1['sef']; ?>" title="<?php echo $bilgim1['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgim1['kategori'] == 'Magazin') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/magazindetay/'); echo $bilgim1['sef']; ?>" title="<?php echo $bilgim1['title']; ?>" rel="bookmark"></a></div>
<?php }elseif ($bilgim1['kategori'] == 'Kültür') { ?>
<div class="box-news-overlay"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $bilgim1['sef']; ?>" title="<?php echo $bilgim1['title']; ?>" rel="bookmark"></a></div>
<?php } ?>
</div>
<div class="box-news-content">
<?php if ($bilgim1['kategori'] == 'Siyaset') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/siyasetdetay/'); echo $bilgim1['sef']; ?>" title="<?php echo $bilgim1['title']; ?>" rel="bookmark"><?php echo $bilgim1['title']; ?> </a></div>
<?php }elseif ($bilgim1['kategori'] == 'Ekonomi') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/ekonomidetay/'); echo $bilgim1['sef']; ?>" title="<?php echo $bilgim1['title']; ?>" rel="bookmark"><?php echo $bilgim1['title']; ?> </a></div>
<?php }elseif ($bilgim1['kategori'] == 'Sağlık') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/saglikdetay/'); echo $bilgim1['sef']; ?>" title="<?php echo $bilgim1['title']; ?>" rel="bookmark"><?php echo $bilgim1['title']; ?> </a></div>
<?php }elseif ($bilgim1['kategori'] == 'Spor') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/spordetay/'); echo $bilgim1['sef']; ?>" title="<?php echo $bilgim1['title']; ?>" rel="bookmark"><?php echo $bilgim1['title']; ?> </a></div>
<?php }elseif ($bilgim1['kategori'] == 'Magazin') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/magazindetay/'); echo $bilgim1['sef']; ?>" title="<?php echo $bilgim1['title']; ?>" rel="bookmark"><?php echo $bilgim1['title']; ?> </a></div>
<?php }elseif ($bilgim1['kategori'] == 'Kültür') { ?>
<div class="box-news-title"><a href="<?php echo base_url('anasayfa/kulturdetay/'); echo $bilgim1['sef']; ?>" title="<?php echo $bilgim1['title']; ?>" rel="bookmark"><?php echo $bilgim1['title']; ?> </a></div>
<?php } ?>
<div class="box-news-meta">
<time class="box-news-meta-date"><i class="fa fa-calendar"></i><?php echo $bilgim1['tarih']; ?></time>
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
</div>
</div>
</div>
</div>
</div>
<div id="footer" class='main-block footer-normal footer-social-copyrights footer-have-top footer-2'>
<div class="container">
<div class="social-ul">
<ul>
<?php $smedya = sosyalmedya(); foreach ($smedya as $smedya) { ?>
<li class="social-<?php echo $smedya['sef']; ?>"><a class="tooltip-n" href="<?php echo $smedya['url']; ?>" target='_blank'><i class="fa fa-<?php echo $smedya['sef']; ?>"></i></a></li>
<?php } ?>
</ul>
</div>
<div class="copyrights">Copyright <?php echo date('Y'); ?> Coder By  <a href=http://www.eneserol.com.tr/ target=_blank>  Enes EROL</a></div>
</div>
</div>
</footer>
<div class="clearfix"></div>
</div>
</div>
<div class="go-up"><i class="fa fa-chevron-up"></i></div>
<?php $this->load->view('front/include/script'); ?>
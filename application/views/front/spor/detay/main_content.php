<article class="v-post clearfix article-title-meta-image animation post--content image_post post-no-border post-1897 post type-post status-publish format-standard has-post-thumbnail hentry category-world" data-animate="fadeInUp" itemscope="" itemtype="https://schema.org/Article">
<h1 class="post-head-title">
<a itemprop="url" title="<?php echo $bilgi['title']; ?>" rel="bookmark">
<?php echo $bilgi['title']; $kid = $bilgi['id']; ?>
</a>
</h1>
<div class="clearfix"></div>
<div class="post-meta">
<div class="post-meta-date"><i class="fa fa-calendar"></i><?php echo $bilgi['tarih']; ?></div>
<div class="post-meta-category"><i class="fa fa-folder-o"></i><a href="<?php echo base_url('anasayfa/spor'); ?>" rel="category tag">Spor</a></div>
<div class="post-meta-comment"><i class="fa fa-comments-o"></i><a href="#"><?php echo yorumcek($kid); ?> Yorum</a></div>
<div class="post-meta-view"><i class="fa fa-eye"></i>Okunma : <?php echo $bilgi['hit']; ?></div>
</div>
<div class="clearfix"></div>
<div  class="post-img post-img-9">
<div class="post-type"><i class="fa fa-image"></i></div>
<a title="<?php echo $bilgi['title']; ?>" rel="bookmark">
<img alt='<?php echo $bilgi['title']; ?>' width='750' height='354' src='<?php echo base_url(); echo $bilgi['resim']; ?>'>
</a>
</div>
<div class="post-inner">
<p><?php echo $bilgi['icerik']; ?></p>
<div class="clearfix"></div>
</div>
</article>
<?php if ($bilgi['yorum'] == 1) { ?>
<div class="post-title"><h3>Yorumlar</h3></div><div class="clearfix"></div>
<ol class="commentlist clearfix">
<?php $ysay = yorumsay($bilgi['id']); foreach ($ysay as $ysay) { ?>
<li class="comment even thread-even depth-1 single-comment" id="li-comment-73">
<div id="comment-73" class="comment-body">
<div class="avatar">
<img alt="" src="http://localhost:9090/magazin/assets/front/images/avatar.png"
srcset="http://localhost:9090/magazin/assets/front/images/avatar.png" class="avatar avatar-70 photo" height="70" width="70">
</div>
<div class="comment-text">
<div class="author clearfix">
<div class="comment-meta">
<span class="comment-author fn"><?php echo $ysay['adsoyad']; ?></span>
<div class="date"><a><i class="fa fa-calendar"></i><time><?php echo $ysay['tarih']; ?></time></a></div>
<div class="clearfix"></div>
</div>
</div>
<div class="text">
<p><?php echo $ysay['yorum']; ?></p>
</div>
</div>
</div>
</li>
<?php } ?>
</ol>
<div class="post-inner">
<?php echo $this->session->flashdata('hata') ?>
<?php echo $this->session->flashdata('basarili') ?>
<div class="post-title"><h3>Yorum Yazın</h3></div><div class="clearfix"></div>
<div class="comment-form">
<form action="<?php echo base_url('anasayfa/yorumlar'); ?>" method="post" id="commentform">
<div class="form-input">
<input type="text" name="adsoyad" required placeholder="İsim Soyisim">
</div>
<div class="form-input form-input-last">
<input type="email" name="email" required placeholder="Email Adresiniz">
</div>
<div class="form-input form-textarea">
<textarea id="comment" name="yorum" required placeholder="Yorumunuz"></textarea>
</div>
<input name="submit" type="submit" id="submit" value="Yorum Yap" class="button-default">
<input type='hidden' name='konuid' value="<?php echo $bilgi['id']; ?>" />
<input type='hidden' name='konusef' value="<?php echo $bilgi['sef']; ?>" />
<input type="hidden" name="konukat" value="<?php echo $bilgi['kategori']; ?>" />
<input type="hidden" name="ip" value="" />
<div class="clearfix"></div>
</form>
</div>
</div>
<?php }else{ ?>
<div class="quote">
<blockquote>
<div class="quote-inner">
<div class="post-inner-content">
<p>Üzgünüz </p>
<p>Bu Habere Yorum Yapılamıyor...</p>
</div>
</div>
</blockquote>
</div>
<?php } ?>
<section class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-newspaper-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Haber Sayısı</span>
              <?php $habercek = habercek(); ?>
              <span class="info-box-number"><?php echo $habercek ?> <small> Adet</small></span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-edit"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Köşe Yazarı Sayısı</span>
              <?php $kyazaricek = kyazaricek(); ?>
              <span class="info-box-number"><?php echo $kyazaricek; ?> <small> Adet</small></span>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-television"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Reklam Sayısı</span>
              <?php $reklamsay = reklamsay(); ?>
              <span class="info-box-number"><?php echo $reklamsay; ?> <small> Adet</small></span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-twitter"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sosyal Medya Hesabı</span>
              <?php $smedyacek = smedyacek(); ?>
              <span class="info-box-number"><?php echo $smedyacek; ?> <small> Adet</small></span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-comments-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Onaylanmış Yorum Sayısı</span>
              <?php $durum = 1; $yorumsayi = yorumsayi($durum); ?>
              <span class="info-box-number"><?php echo $yorumsayi; ?> <small> Adet</small></span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-comments"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Onaysız Yorum Sayısı</span>
              <?php $odurum = 0; $yorumsayi = yorumsayi($odurum); ?>
              <span class="info-box-number"><?php echo $yorumsayi; ?> <small> Adet</small></span>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-envelope-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Okunmuş Mesaj Sayısı</span>
              <?php $mdurum = 1; $mesajcek = mesajcek($mdurum); ?>
              <span class="info-box-number"><?php echo $mesajcek; ?> <small> Adet</small></span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-envelope"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Okunmamış Mesaj Sayısı</span>
              <?php $omdurum = 0; $mesajcek = mesajcek($omdurum); ?>
              <span class="info-box-number"><?php echo $mesajcek; ?> <small> Adet</small></span>
            </div>
          </div>
        </div>
      </div>
   <div class="row">
	  <div class="col-md-4">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Son 5 Siyaset Haberi</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Haber Başlık</th>
                    <th>Hit</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $katID = 5; $sayi=1; $veriler = haberkatcek($katID); foreach ($veriler as $veri) { ?>
                  <tr>
                    <td></a><?php echo $sayi++; ?></td>
                    <td><?php echo word_limiter($veri['title'],5); ?></td>
                    <td><?php echo $veri['hit']; ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-4">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Son 5 Magazin Haberi</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Haber Başlık</th>
                    <th>Hit</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $katID = 8; $sayi=1; $veriler = haberkatcek($katID); foreach ($veriler as $veri) { ?>
                  <tr>
                    <td></a><?php echo $sayi++; ?></td>
                    <td><?php echo word_limiter($veri['title'],5); ?></td>
                    <td><?php echo $veri['hit']; ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-4">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Son 5 Kültür Haberi</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Haber Başlık</th>
                    <th>Hit</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $katID = 7; $sayi=1; $veriler = haberkatcek($katID); foreach ($veriler as $veri) { ?>
                  <tr>
                    <td></a><?php echo $sayi++; ?></td>
                    <td><?php echo word_limiter($veri['title'],5); ?></td>
                    <td><?php echo $veri['hit']; ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-4">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Son 5 Ekonomi Haberi</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Haber Başlık</th>
                    <th>Hit</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $katID = 6; $sayi=1; $veriler = haberkatcek($katID); foreach ($veriler as $veri) { ?>
                  <tr>
                    <td></a><?php echo $sayi++; ?></td>
                    <td><?php echo word_limiter($veri['title'],5); ?></td>
                    <td><?php echo $veri['hit']; ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-4">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Son 5 Spor Haberi</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Haber Başlık</th>
                    <th>Hit</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $katID = 9; $sayi=1; $veriler = haberkatcek($katID); foreach ($veriler as $veri) { ?>
                  <tr>
                    <td></a><?php echo $sayi++; ?></td>
                    <td><?php echo word_limiter($veri['title'],5); ?></td>
                    <td><?php echo $veri['hit']; ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-4">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Son 5 Sağlık Haberi</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Haber Başlık</th>
                    <th>Hit</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $katID = 10; $sayi=1; $veriler = haberkatcek($katID); foreach ($veriler as $veri) { ?>
                  <tr>
                    <td></a><?php echo $sayi++; ?></td>
                    <td><?php echo word_limiter($veri['title'],5); ?></td>
                    <td><?php echo $veri['hit']; ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
  </div>
</section>

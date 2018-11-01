  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Reklam Düzenleme Formu</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('yonetim/reklamduzenleme'); ?>" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Şirket Adı</label>

                  <div class="col-sm-6">
                    <input type="text" name="sirket" value="<?php echo $bilgi['sirket']; ?>" class="form-control" placeholder="Şirket Adı">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                    <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Link</label>

                  <div class="col-sm-6">
                    <input type="text" name="link" value="<?php echo $bilgi['link']; ?>" class="form-control" placeholder="Yönlenme Linki">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Resim</label>

                  <div class="col-sm-6">
                    <input type="file" name="resim" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mevcut Resim</label>

                  <div class="col-sm-6">
                    <img src="<?php echo base_url($bilgi['tmb']); ?>" class="img img-responsive profile-user-image" alt="">
                    <p class="text-blue">Mevcut Haber Resmini Değiştirmeyecekseniz Seçim Yapmayınız!!!</p>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Başlangıç Tarihi</label>

                  <div class="col-sm-2">
                    <input type="date" name="baslangic" value="<?php echo $bilgi['baslangic']; ?>" class="form-control">
                  </div>
                  <label class="col-sm-2 control-label">Bitiş Tarihi</label>

                  <div class="col-sm-2">
                    <input type="date" name="bitis" value="<?php echo $bilgi['bitis']; ?>" class="form-control">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/reklam'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle</button>
              </div>
            </form>
          </div>
      </div>
  </section>
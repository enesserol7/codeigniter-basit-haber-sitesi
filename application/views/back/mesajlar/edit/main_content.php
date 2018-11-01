  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Mesaj Okuma Formu</h3>
            </div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">İsim Soyisim</label>

                  <div class="col-sm-6">
                    <input type="text" name="adsoyad" disabled value="<?php echo $sonuc['adsoyad']; ?>" class="form-control" placeholder="İsim Soyisim">
                    <input type="hidden" name="id" value="<?php echo $sonuc['id']; ?>">
                    <input type="hidden" name="durum" value="<?php echo $sonuc['durum']; ?>">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">E-mail</label>

                  <div class="col-sm-6">
                    <input type="email" name="email" disabled value="<?php echo $sonuc['email']; ?>" class="form-control" placeholder="Email Adresi">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Konu</label>

                  <div class="col-sm-6">
                    <input type="email" name="email" disabled value="<?php echo $sonuc['konu']; ?>" class="form-control" placeholder="Konu">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">IP Adresi</label>

                  <div class="col-sm-6">
                    <input type="text" name="ip" disabled value="<?php echo $sonuc['ip']; ?>" class="form-control" placeholder="IP Adresi">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mesaj Tarihi</label>
                  <div class="col-sm-3">
                    <input type="date" name="tarih" disabled value="<?php echo $sonuc['tarih']; ?>" class="form-control">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mesaj</label>

                  <div class="col-sm-6">
                    <textarea name="yorum" class="form-control" disabled rows="8" cols="80" placeholder="Mesaj"><?php echo $sonuc['mesaj']; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mesajı Cevapla</label>
                  <div class="col-sm-3">
                    <a class="btn btn-primary" href="mailto:<?php echo $sonuc['email']; ?>">Mesajı Cevapla</a>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/mesajlar'); ?>">Geri Dön</a>
              </div>
            </form>
          </div>
      </div>
  </section>
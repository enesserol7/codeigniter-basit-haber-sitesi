  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Yorum Düzenleme Formu</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('yonetim/yorumduzenleme'); ?>" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">İsim Soyisim</label>

                  <div class="col-sm-6">
                    <input type="text" name="adsoyad" value="<?php echo $bilgi['adsoyad']; ?>" class="form-control" placeholder="İsim Soyisim">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                    <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">E-mail</label>

                  <div class="col-sm-6">
                    <input type="email" name="email" disabled value="<?php echo $bilgi['email']; ?>" class="form-control" placeholder="Email Adresi">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">IP Adresi</label>

                  <div class="col-sm-6">
                    <input type="text" name="ip" disabled value="<?php echo $bilgi['ip']; ?>" class="form-control" placeholder="IP Adresi">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yorum Tarihi</label>
                  <div class="col-sm-3">
                    <input type="date" name="tarih" disabled value="<?php echo $bilgi['tarih']; ?>" class="form-control">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yorum</label>

                  <div class="col-sm-6">
                    <textarea name="yorum" class="form-control" rows="8" cols="80" placeholder="Yorum"><?php echo $bilgi['yorum']; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/yorumlar'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle</button>
              </div>
            </form>
          </div>
      </div>
  </section>
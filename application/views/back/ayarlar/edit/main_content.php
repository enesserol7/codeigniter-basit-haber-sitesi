  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Site Ayarları Düzenleme Formu</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('yonetim/ayarguncelle'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Title</label>

                  <div class="col-sm-6">
                    <input type="text" name="title" value="<?php echo $bilgi['title']; ?>" class="form-control" placeholder="Site Başlık">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Mail</label>

                  <div class="col-sm-6">
                    <input type="email" name="mail" value="<?php echo $bilgi['site_mail']; ?>" class="form-control" placeholder="Site Mail">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Telefon</label>

                  <div class="col-sm-6">
                    <input type="tel" class="form-control" value="<?php echo $bilgi['site_telefon']; ?>" name="telefon" placeholder="Site Telefon">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Açıklama</label>

                  <div class="col-sm-6">
                    <input type="tel" class="form-control" value="<?php echo $bilgi['site_desc']; ?>" name="desc" placeholder="Site Açıklama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Anahtar Kelimeler</label>

                  <div class="col-sm-6">
                    <input type="tel" class="form-control" value="<?php echo $bilgi['site_keyw']; ?>" name="keyw" placeholder="Site Anahtar Kelimeler">
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Site Bilgi</label>

                  <div class="col-sm-6">
                    <textarea name="bilgi" rows="8" cols="80" class="form-control"><?php echo $bilgi['site_bilgi']; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Adres</label>

                  <div class="col-sm-6">
                    <textarea name="adres" rows="8" cols="80" class="form-control"><?php echo $bilgi['site_adres']; ?></textarea>
                  </div>
                </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/ayarlar'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle</button>
              </div>
            </form>
          </div>
      </div>
  </section>
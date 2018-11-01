  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Künye Düzenleme Formu</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('yonetim/kunyeduzenleme'); ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ad Soyad</label>

                  <div class="col-sm-6">
                    <input type="text" name="adsoyad" value="<?php echo $bilgi['adsoyad']; ?>" class="form-control" placeholder="Ad Soyad">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                    <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Görev</label>

                  <div class="col-sm-6">
                    <input type="text" name="gorev" value="<?php echo $bilgi['gorev']; ?>" class="form-control" placeholder="Görev">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/kunye'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle</button>
              </div>
            </form>
          </div>
      </div>
  </section>
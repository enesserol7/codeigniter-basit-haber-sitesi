  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Reklam Ekleme Formu</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('yonetim/reklamekleme'); ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Şirket Adı</label>

                  <div class="col-sm-6">
                    <input type="text" name="sirket" value="" class="form-control" placeholder="Şirket Adı">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Link</label>

                  <div class="col-sm-6">
                    <input type="text" name="link" value="" class="form-control" placeholder="Yönlenme Linki">
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
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Başlangıç Tarihi</label>

                  <div class="col-sm-2">
                    <input type="date" name="baslangic" class="form-control">
                  </div>
                  <label class="col-sm-2 control-label">Bitiş Tarihi</label>

                  <div class="col-sm-2">
                    <input type="date" name="bitis" class="form-control">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/reklam'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-primary pull-right">Ekle</button>
              </div>
            </form>
          </div>
      </div>
  </section>
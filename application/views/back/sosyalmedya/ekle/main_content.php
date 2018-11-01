  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Sosyal Medya Ekleme Formu</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('yonetim/smedyaekleme'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Title</label>

                  <div class="col-sm-6">
                    <input type="text" name="title" value="" class="form-control" placeholder="Site Başlık">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Url</label>

                  <div class="col-sm-6">
                    <input type="text" name="url" value="" class="form-control" placeholder="Site Url">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/sosyalmedya'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-primary pull-right">Ekle</button>
              </div>
            </form>
          </div>
      </div>
  </section>
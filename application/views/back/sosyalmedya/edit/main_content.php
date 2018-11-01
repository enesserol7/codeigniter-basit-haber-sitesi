  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Site Ayarları Düzenleme Formu</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('yonetim/smedyaguncelle'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Title</label>

                  <div class="col-sm-6">
                    <input type="text" name="title" value="<?php echo $bilgi['title']; ?>" class="form-control" placeholder="Site Başlık">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                  </div>
                </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Site Url</label>

                  <div class="col-sm-6">
                    <input type="text" name="url" value="<?php echo $bilgi['url']; ?>" class="form-control" placeholder="Site Url">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/sosyalmedya'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle</button>
              </div>
            </form>
          </div>
      </div>
  </section>
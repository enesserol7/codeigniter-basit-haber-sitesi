  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Haber Düzenleme Formu</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('yonetim/haberduzenleme'); ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Haber Title</label>

                  <div class="col-sm-6">
                    <input type="text" name="title" value="<?php echo $bilgi['title']; ?>" class="form-control" placeholder="Haber Başlık">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                    <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Haber Kategori</label>

                  <div class="col-sm-6">
                    <select class="form-control" name="katID">
                      <?php $bilgim = kategoriliste(); foreach ($bilgim as $bilgim) { if($bilgim['id'] == $bilgi['katID']) { ?>
                      <option selected="selected" value="<?php echo $bilgim['id']; ?>"><?php echo $bilgim['title']; ?></option>
                      <?php } else{ ?><option value="<?php echo $bilgim['id']; ?>"><?php echo $bilgim['title']; ?></option><?php } }?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Haber Resim</label>

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
                  <label class="col-sm-2 control-label">Haber Tarih</label>

                  <div class="col-sm-6">
                    <input type="date" name="tarih" value="<?php echo $bilgi['tarih']; ?>" class="form-control">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Haber İçerik</label>

                  <div class="col-sm-10">
                    <textarea name="icerik" id="editor1" value="" rows="8" cols="80"><?php echo $bilgi['icerik']; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Haber Yorum İzin</label>

                  <div class="col-sm-6">
                    <select class="form-control" name="yorum">
                      <?php if($bilgi['yorum'] == 1) { ?>
                      <option selected="selected" value="1">Yorum Yapılabilir</option>
                      <option value="2">Yorum Yapılamaz!</option>
                      <?php }else { ?><option value="1">Yorum Yapılabilir</option>
                      <option selected="selected" value="2">Yorum Yapılamaz!</option><?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Haber Manşet İzin</label>

                  <div class="col-sm-6">
                    <select class="form-control" name="sondakika">
                      <?php if($bilgi['sondakika'] == 1) { ?>
                      <option selected="selected" value="1">Normal Haber</option>
                      <option value="2">Son Dakika Haber</option>
                      <?php }else { ?><option value="1">Normal Haber</option>
                      <option selected="selected" value="2">Son Dakika Haber!</option><?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Haber Tag</label>

                  <div class="col-sm-6">
                    <input type="text" name="tag" value="<?php echo $bilgi['tag']; ?>" class="form-control" placeholder="Tag İçin Virgül Kullanın Örn: siyaset,spor,magazin">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('yonetim/haberler'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle</button>
              </div>
            </form>
          </div>
      </div>
  </section>
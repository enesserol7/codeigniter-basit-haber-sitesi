    <section class="content">
      <div class="row">
        <?php echo $this->session->flashdata('durum'); ?>
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Köşe Yazarları Listesi</h3>
              <a href="<?php echo base_url('yonetim/kyazariekle'); ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Ekle</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>İsim Soyisim</th>
                  <th>Resim</th>
                  <th>Durum</th>
                  <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php $sayi = 1; foreach ($bilgi as $bilgi) { ?>
                <tr>
                  <td><?php echo $sayi++; ?></td>
                  <td><?php echo word_limiter($bilgi['adsoyad'],5); ?></td>
                  <td><img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); echo $bilgi['mini']?>"></td>
                  <td><input class="toggle_check" data-on="Aktif" data-onstyle="success" data-off="Pasif" data-offstyle="danger" type="checkbox" dataID="<?php echo $bilgi['id']; ?>" dataURL="<?php echo base_url('yonetim/kyazariset'); ?>" <?php echo ($bilgi['durum'] == 1 ) ? "checked" : ""; ?>></td>
                  <td><a href="<?php echo base_url('yonetim/kyazariduzenle/'.$bilgi['id'].'') ?>"><button type="button" class="btn btn-info" name="button">Düzenle</button></a> <a href="<?php echo base_url('yonetim/kyazarisil/'.$bilgi['id'].'/id/koseyazarlari') ?>"><button type="button" class="btn btn-danger" name="button">Sil</button></a></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
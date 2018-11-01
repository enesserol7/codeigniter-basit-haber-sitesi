    <section class="content">
      <div class="row">
        <?php echo $this->session->flashdata('durum'); ?>
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Reklam Listesi</h3>
              <a href="<?php echo base_url('yonetim/reklamekle'); ?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Ekle</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Şirket Adı</th>
                  <th>Şirket Url</th>
                  <th>Başlangıç Tarihi</th>
                  <th>Bitiş Tarihi</th>
                  <th>Resim</th>
                  <th>Durum</th>
                  <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php $sayi = 1; foreach ($bilgi as $bilgi) { ?>
                <tr>
                  <td><?php echo $sayi++; ?></td>
                  <td><?php echo $bilgi['sirket']; ?></td>
                  <td><?php echo $bilgi['link']; ?></td>
                  <td><?php echo $bilgi['baslangic']; ?></td>
                  <td><?php echo $bilgi['bitis']; ?></td>
                  <td><img class="profile-user-img img-responsive" src="<?php echo base_url(); echo $bilgi['tmb']?>"></td>
                  <td><input class="toggle_check" data-on="Aktif" data-onstyle="success" data-off="Pasif" data-offstyle="danger" type="checkbox" dataID="<?php echo $bilgi['id']; ?>" dataURL="<?php echo base_url('yonetim/reklamset'); ?>" <?php echo ($bilgi['durum'] == 1 ) ? "checked" : ""; ?>></td>
                  <td><a href="<?php echo base_url('yonetim/reklamduzenle/'.$bilgi['id'].'') ?>"><button type="button" class="btn btn-info" name="button">Düzenle</button></a> <a href="<?php echo base_url('yonetim/reklamsil/'.$bilgi['id'].'/id/reklam') ?>"><button type="button" class="btn btn-danger" name="button">Sil</button></a></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
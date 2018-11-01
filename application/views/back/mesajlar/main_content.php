    <section class="content">
      <div class="row">
        <?php echo $this->session->flashdata('durum'); ?>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Mesaj Listesi</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>İsim Soyisim</th>
                  <th>Email</th>
                  <th>Mesaj Tarihi</th>
                  <th>Durum</th>
                  <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php $sayi = 1; foreach ($bilgi as $bilgi) { ?>
                <tr>
                  <td><?php echo $sayi++; ?></td>
                  <td><?php echo $bilgi['adsoyad']; ?></td>
                  <td><?php echo $bilgi['email']; ?></td>
                  <td><?php echo $bilgi['tarih']; ?></td>
                  <td><?php if($bilgi['durum'] == 1) { ?><a class="btn btn-success">Mesaj Okunmuş</a><?php }else{ ?><a class="btn btn-danger">Mesaj Okunmamış</a><?php } ?>
                  </td>
                  <td><a href="<?php echo base_url('yonetim/mesajoku/'.$bilgi['id'].'') ?>"><button type="button" class="btn btn-info" name="button">Mesajı Oku</button></a> <a href="<?php echo base_url('yonetim/mesajsil/'.$bilgi['id'].'/id/mesajlar') ?>"><button type="button" class="btn btn-danger" name="button">Sil</button></a></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
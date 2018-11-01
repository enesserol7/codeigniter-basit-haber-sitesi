    <section class="content">
      <div class="row">
      	<?php echo $this->session->flashdata('durum'); ?>
        <div class="col-xs-12">

          <div class="box">
          </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Site Ayarları Listesi</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Site Başlık</th>
                  <th>Site Url</th>
                  <th>Site Açıklama</th>
                  <th>Site Anahtar Kelime</th>
                  <th>Site Email</th>
                  <th>Site Telefon</th>
                  <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php $sayi = 1; foreach ($bilgi as $bilgi) { ?>
                <tr>
                  <td><?php echo $sayi++; ?></td>
                  <td><?php echo $bilgi['title']; ?></td>
                  <td><?php echo $bilgi['url']; ?></td>
                  <td><?php echo $bilgi['site_desc']; ?></td>
                  <td><?php echo $bilgi['site_keyw']; ?></td>
                  <td><?php echo $bilgi['site_mail']; ?></td>
                  <td><?php echo $bilgi['site_telefon']; ?></td>
                  <td><a href="<?php echo base_url('yonetim/ayarduzenle/'.$bilgi['id'].'') ?>"><button type="button" class="btn btn-info" name="button">Düzenle</button></a></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
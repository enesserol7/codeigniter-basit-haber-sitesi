<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yonetim extends CI_Controller{

	function protect(){
		$giris = $this->session->userdata('giris');
		if (!$giris) {
			redirect('yonetim');
		}
	}

  	function index()
  	{
  		$giris = $this->session->userdata('giris');
  		if ($giris) {
  			redirect('yonetim/anasayfa');
  		}

    	$this->load->view('back/giris');
  	}

  	public function girisyap()
  	{
	  	$email = $this->input->post('email');
	  	$sifre = $this->input->post('sifre');
	  	$kontrol = $this->dtbs->kontrol($email,$sifre);

	  	if ($kontrol) {
	  		$this->session->set_userdata('giris',true);
	  		redirect('yonetim/anasayfa');
	  	}
	  	else{
	  		$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Email adresi ya da şifreniz uyuşmuyor!!. Lütfen bilgilerinizi tekrar giriniz.
              </div>
	  		</div>');

	  		redirect('yonetim');
	  	}
	}

	public function anasayfa(){
		$this->protect();
	  	$this->load->view('back/anasayfa');
	}

	public function cikis(){
		$this->session->sess_destroy();
		redirect('yonetim');
	}

// site Yönetim genel işlemler bitiş


// site ayarlar başlangıç


	public function ayarlar(){

		$sonuc = $this->dtbs->listele('site_ayarlari');
		$data['bilgi'] = $sonuc;
		$this->load->view('back/ayarlar/anasayfa',$data);
	}

	public function ayarduzenle($id){

		$sonuc = $this->dtbs->cek('site_ayarlari',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('back/ayarlar/edit/anasayfa',$data);
	}

	public function ayarguncelle(){

		$data = array(
			'id' => $id = $this->input->post('id'),
			'title' => $title = $this->input->post('title'),
			'site_desc' => $desc = $this->input->post('desc'),
			'site_keyw' => $keyw = $this->input->post('keyw'),
			'site_mail' => $mail = $this->input->post('mail'),
			'site_telefon' => $mail = $this->input->post('telefon'),
			'site_bilgi' => $bilgi = $this->input->post('bilgi'),
			'site_adres' => $adres = $this->input->post('adres')
		);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','site_ayarlari');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Site Ayarlarını Başarıyla Güncellediniz...
              </div>
	  		</div>');

	  		redirect('yonetim/ayarlar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/ayarlar');
		}

	}


	// Genel ayarlar bitiş 


	// sosyal medya başlangıç



	public function sosyalmedya(){

		$sonuc = $this->dtbs->listele('sosyal_medya');
		$data['bilgi'] = $sonuc;
		$this->load->view('back/sosyalmedya/anasayfa',$data);
	}

	public function smedyaduzenle($id){

		$sonuc = $this->dtbs->cek('sosyal_medya',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('back/sosyalmedya/edit/anasayfa',$data);
	}

	public function smedyaekle(){

		$this->load->view('back/sosyalmedya/ekle/anasayfa');
	}

	public function smedyaekleme(){

		$data = array(
			'title' => $title = $this->input->post('title'),
			'sef' => seflink($title),
			'url' => $url = $this->input->post('url'),
			'durum' => 1
		);

		$sonuc = $this->dtbs->ekle('sosyal_medya',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Sosyal Medya Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('yonetim/sosyalmedya');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/sosyalmedya');
		}
	}

	public function smedyaguncelle(){

		$data = array(
			'id' => $id = $this->input->post('id'),
			'title' => $title = $this->input->post('title'),
			'sef' => seflink($title),
			'url' => $url = $this->input->post('url'),
			'durum' => 1
		);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','sosyal_medya');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Sosyal Medya Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('yonetim/sosyalmedya');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/sosyalmedya');
		}
	}

	public function smedyasil($id,$where,$from){
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Sosyal Medya Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('yonetim/sosyalmedya');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('yonetim/sosyalmedya');
		}

	}

	public function smedyaset(){
		$id = $this->input->post('id');
		$durum = ($this->input->post('durum') == "true") ? 1 : 0;
		$this->db->where('id',$id)->update('sosyal_medya',array('durum'=>$durum));
	}

	// sosyal medya bitis

	// kategoriler baslangic

	public function kategoriler(){
		$sonuc = $this->dtbs->listele('kategoriler');
		$data['bilgi'] = $sonuc;
		$this->load->view('back/kategoriler/anasayfa',$data);
	}

	public function kategoriekle(){
		$this->load->view('back/kategoriler/ekle/anasayfa');
	}

	public function kategoriekleme(){
		$data = array(
			'title' => $title = $this->input->post('title'),
			'sef' => seflink($title)
		);

		$sonuc = $this->dtbs->ekle('kategoriler',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Kategori Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('yonetim/kategoriler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/kategoriler');
		}
	}
	public function kategoriduzenle($id){

		$sonuc = $this->dtbs->cek('kategoriler',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('back/kategoriler/edit/anasayfa',$data);
	}
	public function kategoriguncelle(){

		$data = array(
			'id' => $id = $this->input->post('id'),
			'title' => $title = $this->input->post('title'),
			'sef' => seflink($title)
		);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','kategoriler');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Kategori Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('yonetim/kategoriler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/kategoriler');
		}
	}

	public function kategorisil($id,$where,$from){
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Kategori Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('yonetim/kategoriler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('yonetim/kategoriler');
		}

	}

	// kategoriler bitis


	// haberler baslangic

	public function haberler(){
		$sonuc = $this->dtbs->listele('haberler');
		$data['bilgi'] = $sonuc;
		$this->load->view('back/haberler/anasayfa',$data);
	}

	public function haberekle(){
		$this->load->view('back/haberler/ekle/anasayfa');
	}

	public function haberekleme(){

		$title = $this->input->post('title');
		$sef = seflink($title);
		$katID = $this->input->post('katID');
		if ($katID == 5) {
			$kategori = 'Siyaset';
		}elseif($katID == 6){
			$kategori = 'Ekonomi';
		}elseif($katID == 7){
			$kategori = 'Kültür';
		}elseif($katID == 8){
			$kategori = 'Magazin';
		}elseif($katID == 9){
			$kategori = 'Spor';
		}elseif($katID == 10){
			$kategori = 'Sağlık';
		}
		$katsef = seflink($kategori);
		$tarih = $this->input->post('tarih');
		$icerik = $this->input->post('icerik');
		$yorum = $this->input->post('yorum');
		$sondakika = $this->input->post('sondakika');
		$tag = $this->input->post('tag');
		$hit = 0;
		$durum = 1;

		$config['upload_path'] = FCPATH.'assets/front/images/haber';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		if ($this->upload->do_upload('resim')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/images/haber/'.$resimyolu.'';
			$resimtmb = 'assets/front/images/haber/tmb/'.$resimyolu.'';
			$resimmini = 'assets/front/images/haber/mini/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/images/haber/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/images/haber/tmb/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '60%';
			$config['width'] = 409;
			$config['height'] = 260;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();
			// tmb kalsor islemleri bitis
			// mini klasor islemleri baslangic
			$config1['image_library'] = 'gd2';
			$config1['source_image'] = 'assets/front/images/haber/'.$resimyolu.'';
			$config1['new_image'] = 'assets/front/images/haber/mini/'.$resimyolu.'';
			$config1['create_thumb'] = false;
			$config1['maintain_ratio'] = false;
			$config1['quality'] = '60%';
			$config1['width'] = 94;
			$config1['height'] = 73;
			$this->load->library('image_lib',$config1);
			$this->image_lib->initialize($config1);
			$this->image_lib->resize();
			$this->image_lib->clear();


		$data = array('resim'=>$resimkayit,'tmb'=>$resimtmb,'mini'=>$resimmini,'title'=>$title,'sef'=>$sef,'katID'=>$katID,'kategori'=>$kategori,'katsef'=>$katsef,'tarih'=>$tarih,'icerik'=>$icerik,'yorum'=>$yorum,'sondakika'=>$sondakika,'tag'=>$tag,'hit'=>$hit,'durum'=>$durum);

		$sonuc = $this->dtbs->ekle('haberler',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Haber Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('yonetim/haberler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/haberler');
		}


		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Resim Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/haberler');
		}

	}

	public function haberset(){
		$id = $this->input->post('id');
		$durum = ($this->input->post('durum') == "true") ? 1 : 0;
		$this->db->where('id',$id)->update('haberler',array('durum'=>$durum));
	}

	public function haberduzenle($id){

		$sonuc = $this->dtbs->cek('haberler',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('back/haberler/edit/anasayfa',$data);
	}

	public function haberduzenleme(){
		$id = $this->input->post('id');
		$durum = $this->input->post('durum');
		$title = $this->input->post('title');
		$sef = seflink($title);
		$katID = $this->input->post('katID');
		if ($katID == 5) {
			$kategori = 'Siyaset';
		}elseif($katID == 6){
			$kategori = 'Ekonomi';
		}elseif($katID == 7){
			$kategori = 'Kültür';
		}elseif($katID == 8){
			$kategori = 'Magazin';
		}elseif($katID == 9){
			$kategori = 'Spor';
		}elseif($katID == 10){
			$kategori = 'Sağlık';
		}
		$katsef = seflink($kategori);
		$tarih = $this->input->post('tarih');
		$icerik = $this->input->post('icerik');
		$yorum = $this->input->post('yorum');
		$sondakika = $this->input->post('sondakika');
		$tag = $this->input->post('tag');

		$config['upload_path'] = FCPATH.'assets/front/images/haber';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		if ($this->upload->do_upload('resim')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/images/haber/'.$resimyolu.'';
			$resimtmb = 'assets/front/images/haber/tmb/'.$resimyolu.'';
			$resimmini = 'assets/front/images/haber/mini/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/images/haber/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/images/haber/tmb/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '60%';
			$config['width'] = 409;
			$config['height'] = 260;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();
			// tmb kalsor islemleri bitis
			// mini klasor islemleri baslangic
			$config1['image_library'] = 'gd2';
			$config1['source_image'] = 'assets/front/images/haber/'.$resimyolu.'';
			$config1['new_image'] = 'assets/front/images/haber/mini/'.$resimyolu.'';
			$config1['create_thumb'] = false;
			$config1['maintain_ratio'] = false;
			$config1['quality'] = '60%';
			$config1['width'] = 94;
			$config1['height'] = 73;
			$this->load->library('image_lib',$config1);
			$this->image_lib->initialize($config1);
			$this->image_lib->resize();
			$this->image_lib->clear();

			$hsil = haberresim($id);
			$hts = habertmb($id);
			$hms = habermini($id);
			unlink($hsil);
			unlink($hts);
			unlink($hms);


		$data = array('resim'=>$resimkayit,'tmb'=>$resimtmb,'mini'=>$resimmini,'title'=>$title,'sef'=>$sef,'katID'=>$katID,'kategori'=>$kategori,'katsef'=>$katsef,'tarih'=>$tarih,'icerik'=>$icerik,'yorum'=>$yorum,'sondakika'=>$sondakika,'tag'=>$tag,'durum'=>$durum);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','haberler');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Haber Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('yonetim/haberler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/haberler');
		}


		}else{
		$data = array('title'=>$title,'sef'=>$sef,'katID'=>$katID,'kategori'=>$kategori,'katsef'=>$katsef,'tarih'=>$tarih,'icerik'=>$icerik,'yorum'=>$yorum,'sondakika'=>$sondakika,'tag'=>$tag,'durum'=>$durum);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','haberler');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Haber Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('yonetim/haberler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/haberler');
		}
		}		
	}

	public function habersil($id,$where,$from){
		$hsil = haberresim($id);
		$hts = habertmb($id);
		$hms = habermini($id);
		unlink($hsil);
		unlink($hts);
		unlink($hms);
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Haber Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('yonetim/haberler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('yonetim/haberler');
		}

	}

	// haberler bitis


	// kose yazarlari baslangic

	public function koseyazarlari(){
		$sonuc = $this->dtbs->listele('koseyazarlari');
		$data['bilgi'] = $sonuc;
		$this->load->view('back/koseyazarlari/anasayfa',$data);
	}

	public function kyazariekle(){
		$this->load->view('back/koseyazarlari/ekle/anasayfa');
	}

	public function kyazariekleme(){
		$config['upload_path'] = FCPATH.'assets/front/images/koseyazarlari';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		if ($this->upload->do_upload('resim')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/images/koseyazarlari/'.$resimyolu.'';
			$resimmini = 'assets/front/images/koseyazarlari/mini/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/images/koseyazarlari/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/images/koseyazarlari/mini/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '60%';
			$config['width'] = 94;
			$config['height'] = 73;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();

		$adsoyad = $this->input->post('adsoyad');
		$data = array('resim'=>$resimkayit,'mini'=>$resimmini,'adsoyad'=>$adsoyad,'durum'=>$durum = 1);

		$sonuc = $this->dtbs->ekle('koseyazarlari',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Köşe Yazarı Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('yonetim/koseyazarlari');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/koseyazarlari');
		}


		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Resim Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/koseyazarlari');
		}
	}

	public function kyazariset(){
		$id = $this->input->post('id');
		$durum = ($this->input->post('durum') == "true") ? 1 : 0;
		$this->db->where('id',$id)->update('koseyazarlari',array('durum'=>$durum));
	}

	public function kyazariduzenle($id){
		$sonuc = $this->dtbs->cek('koseyazarlari',$id);
		$data['bilgi'] = $sonuc;
		$this->load->view('back/koseyazarlari/edit/anasayfa',$data);
	}

	public function kyazariduzenleme(){
		$id = $this->input->post('id');
		$durum = $this->input->post('durum');
		$config['upload_path'] = FCPATH.'assets/front/images/koseyazarlari';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		if ($this->upload->do_upload('resim')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/images/koseyazarlari/'.$resimyolu.'';
			$resimmini = 'assets/front/images/koseyazarlari/mini/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/images/koseyazarlari/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/images/koseyazarlari/mini/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '60%';
			$config['width'] = 94;
			$config['height'] = 73;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();
		$ksil = koseyazariresim($id);
		$kms = koseyazarimini($id);
		unlink($ksil);
		unlink($kms);
		$adsoyad = $this->input->post('adsoyad');
		$data = array('resim'=>$resimkayit,'mini'=>$resimmini,'adsoyad'=>$adsoyad,'durum'=>$durum);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','koseyazarlari');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Köşe Yazarı Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('yonetim/koseyazarlari');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/koseyazarlari');
		}


		}else{
		$adsoyad = $this->input->post('adsoyad');
		$data = array('adsoyad'=>$adsoyad,'durum'=>$durum);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','koseyazarlari');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Köşe Yazarı Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('yonetim/koseyazarlari');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/koseyazarlari');
		}
	}
}

	public function kyazarisil($id,$where,$from){
		$ksil = koseyazariresim($id);
		$kms = koseyazarimini($id);
		unlink($ksil);
		unlink($kms);
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Köşe Yazarı Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('yonetim/koseyazarlari');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('yonetim/koseyazarlari');
		}
	}

	// kose yazarlari bitis

	// kunye baslangic

	public function kunye(){
		$sonuc = $this->dtbs->listele('kunye');
		$data['bilgi'] = $sonuc;
		$this->load->view('back/kunye/anasayfa',$data);
	}

	public function kunyeekle(){
		$this->load->view('back/kunye/ekle/anasayfa');
	}

	public function kunyeekleme(){
		$data = array(
			'adsoyad' => $adsoyad = $this->input->post('adsoyad'),
			'gorev' => $gorev = $this->input->post('gorev'),
			'durum' => $durum = 1
		);

		$sonuc = $this->dtbs->ekle('kunye',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Künye Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('yonetim/kunye');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/kunye');
		}
	}

	public function kunyeset(){
		$id = $this->input->post('id');
		$durum = ($this->input->post('durum') == "true") ? 1 : 0;
		$this->db->where('id',$id)->update('kunye',array('durum'=>$durum));
	}

	public function kunyeduzenle($id){
		$sonuc = $this->dtbs->cek('kunye',$id);
		$data['bilgi'] = $sonuc;
		$this->load->view('back/kunye/edit/anasayfa',$data);
	}

	public function kunyeduzenleme(){
		$data = array(
			'id' => $id = $this->input->post('id'),
			'adsoyad' => $adsoyad = $this->input->post('adsoyad'),
			'gorev' => $gorev = $this->input->post('gorev'),
			'durum' => $durum = $this->input->post('durum')
		);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','kunye');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Künye Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('yonetim/kunye');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/kunye');
		}
	}

	public function kunyesil($id,$where,$from){
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Künye Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('yonetim/kunye');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('yonetim/kunye');
		}

	}

	// kunye bitis

	// reklam baslangic


	public function reklam(){
		$sonuc = $this->dtbs->listele('reklam');
		$data['bilgi'] = $sonuc;
		$this->load->view('back/reklam/anasayfa',$data);
	}

	public function reklamset(){
		$id = $this->input->post('id');
		$durum = ($this->input->post('durum') == "true") ? 1 : 0;
		$this->db->where('id',$id)->update('reklam',array('durum'=>$durum));
	}

	public function reklamekle(){
		$this->load->view('back/reklam/ekle/anasayfa');
	}

	public function reklamekleme(){
		$config['upload_path'] = FCPATH.'assets/front/images/reklam';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		if ($this->upload->do_upload('resim')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/images/reklam/'.$resimyolu.'';
			$resimtmb = 'assets/front/images/reklam/tmb/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/images/reklam/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/images/reklam/tmb/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '60%';
			$config['width'] = 729;
			$config['height'] = 90;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();
		$data = array('resim'=>$resimkayit,'tmb'=>$resimtmb,'sirket'=>$sirket=$this->input->post('sirket'),'link'=>$link=$this->input->post('link'),'baslangic'=>$baslangic=$this->input->post('baslangic'),'bitis'=>$bitis=$this->input->post('bitis'),'durum'=>$durum=1);

		$sonuc = $this->dtbs->ekle('reklam',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Reklam Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('yonetim/reklam');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/reklam');
		}


		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Resim Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/reklam');
		}

	}

	public function reklamduzenle($id){
		$sonuc = $this->dtbs->cek('reklam',$id);
		$data['bilgi'] = $sonuc;
		$this->load->view('back/reklam/edit/anasayfa',$data);
	}

	public function reklamduzenleme(){
		$id = $this->input->post('id');
		$durum = $this->input->post('durum');
		$config['upload_path'] = FCPATH.'assets/front/images/reklam';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		if ($this->upload->do_upload('resim')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/images/reklam/'.$resimyolu.'';
			$resimtmb = 'assets/front/images/reklam/tmb/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/images/reklam/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/images/reklam/tmb/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '60%';
			$config['width'] = 729;
			$config['height'] = 90;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();
		$rsil = reklamresim($id);
		$rts = reklamtmb($id);
		unlink($rsil);
		unlink($rts);
		$data = array('resim'=>$resimkayit,'tmb'=>$resimtmb,'sirket'=>$sirket=$this->input->post('sirket'),'link'=>$link=$this->input->post('link'),'baslangic'=>$baslangic=$this->input->post('baslangic'),'bitis'=>$bitis=$this->input->post('bitis'),'durum'=>$durum=1);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','reklam');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Reklam Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('yonetim/reklam');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/reklam');
		}


		}else{
		$data = array('sirket'=>$sirket=$this->input->post('sirket'),'link'=>$link=$this->input->post('link'),'baslangic'=>$baslangic=$this->input->post('baslangic'),'bitis'=>$bitis=$this->input->post('bitis'),'durum'=>$durum=1);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','reklam');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Reklam Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('yonetim/reklam');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/reklam');
		}
	}
}

	public function reklamsil($id,$where,$from){
		$rsil = reklamresim($id);
		$rts = reklamtmb($id);
		unlink($rsil);
		unlink($rts);
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Reklam Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('yonetim/reklam');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('yonetim/reklam');
		}
	}

	// reklam bitis

	// yorum baslangic

	public function yorumlar(){
		$sonuc = $this->dtbs->listele('yorumlar');
		$data['bilgi'] = $sonuc;
		$this->load->view('back/yorumlar/anasayfa',$data);
	}
	public function yorumset(){
		$id = $this->input->post('id');
		$durum = ($this->input->post('durum') == "true") ? 1 : 0;
		$this->db->where('id',$id)->update('yorumlar',array('durum'=>$durum));
	}

	public function yorumekle(){
		$this->load->view('back/yorumlar/ekle/anasayfa');
	}
	public function yorumsil($id,$where,$from){
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Yorum Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('yonetim/yorumlar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('yonetim/yorumlar');
		}
	}
	public function yorumduzenle($id){
		$sonuc = $this->dtbs->cek('yorumlar',$id);
		$data['bilgi'] = $sonuc;
		$this->load->view('back/yorumlar/edit/anasayfa',$data);
	}
	public function yorumduzenleme(){
		$data = array(
			'id' => $id = $this->input->post('id'),
			'adsoyad' => $adsoyad = $this->input->post('adsoyad'),
			'yorum' => $gorev = $this->input->post('yorum'),
			'durum' => $durum = $this->input->post('durum')
		);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','yorumlar');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Yorum Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('yonetim/yorumlar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('yonetim/yorumlar');
		}
	}

	// yorumlar bitis

	// mesajlar baslangic

	public function mesajlar(){
		$sonuc = $this->dtbs->listele('mesajlar');
		$data['bilgi'] = $sonuc;
		$this->load->view('back/mesajlar/anasayfa',$data);
	}
	public function mesajsil($id,$where,$from){
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Mesaj Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('yonetim/mesajlar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('yonetim/mesajlar');
		}
	}
	public function mesajoku($id){
		$sonuc = $this->dtbs->cek('mesajlar',$id);
		if ($sonuc) {
			$data['sonuc'] = $sonuc;
			$this->load->view('back/mesajlar/edit/anasayfa',$data);
			$data = array('durum'=>1);
			$this->dtbs->mesajupdate($sonuc['id'],$data);
		}
	}
}
?>

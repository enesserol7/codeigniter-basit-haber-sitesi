<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Anasayfa extends CI_Controller{
	public function index(){
		$sonuc = $this->dtbs->habersayisi();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'anasayfa';
		$config['total_rows'] = $sonuc;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['first_link'] = false;
		$config['first_link_open'] = '<a class="first">';
		$config['first_link_close'] = '</a>';
		$config['last_link'] = false;
		$config['last_link_open'] = '<a class="last">';
		$config['last_link_close'] = '</a>';
		$config['next_link'] = '&raquo;';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<a class="page">';
		$config['prev_tag_close'] = '</a>';
		$config['cur_tag_open'] = '<span class="current">';
		$config['cur_tag_close'] = '</span>';
		$this->pagination->initialize($config);
		$data['linkler'] = $this->pagination->create_links();
		$data['bilgi'] = $this->dtbs->habercek($config['per_page'],$this->uri->segment(2,0));
		$this->load->view('anasayfa',$data);
	}
	public function siyaset(){
		$sonuc = $this->dtbs->siyasetsayisi();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'anasayfa/siyaset';
		$config['total_rows'] = $sonuc;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['first_link'] = false;
		$config['first_link_open'] = '<a class="first">';
		$config['first_link_close'] = '</a>';
		$config['last_link'] = false;
		$config['last_link_open'] = '<a class="last">';
		$config['last_link_close'] = '</a>';
		$config['next_link'] = '&raquo;';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<a class="page">';
		$config['prev_tag_close'] = '</a>';
		$config['cur_tag_open'] = '<span class="current">';
		$config['cur_tag_close'] = '</span>';
		$this->pagination->initialize($config);
		$data['linkler'] = $this->pagination->create_links();
		$data['bilgi'] = $this->dtbs->siyasetcek($config['per_page'],$this->uri->segment(3,0));
		$this->load->view('front/siyaset/anasayfa',$data);
	}
	public function spor(){
		$sonuc = $this->dtbs->sporsayisi();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'anasayfa/spor';
		$config['total_rows'] = $sonuc;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['first_link'] = false;
		$config['first_link_open'] = '<a class="first">';
		$config['first_link_close'] = '</a>';
		$config['last_link'] = false;
		$config['last_link_open'] = '<a class="last">';
		$config['last_link_close'] = '</a>';
		$config['next_link'] = '&raquo;';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<a class="page">';
		$config['prev_tag_close'] = '</a>';
		$config['cur_tag_open'] = '<span class="current">';
		$config['cur_tag_close'] = '</span>';
		$this->pagination->initialize($config);
		$data['linkler'] = $this->pagination->create_links();
		$data['bilgi'] = $this->dtbs->sporcek($config['per_page'],$this->uri->segment(3,0));
		$this->load->view('front/spor/anasayfa',$data);
	}
	public function magazin(){
		$sonuc = $this->dtbs->magazinsayisi();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'anasayfa/magazin';
		$config['total_rows'] = $sonuc;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['first_link'] = false;
		$config['first_link_open'] = '<a class="first">';
		$config['first_link_close'] = '</a>';
		$config['last_link'] = false;
		$config['last_link_open'] = '<a class="last">';
		$config['last_link_close'] = '</a>';
		$config['next_link'] = '&raquo;';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<a class="page">';
		$config['prev_tag_close'] = '</a>';
		$config['cur_tag_open'] = '<span class="current">';
		$config['cur_tag_close'] = '</span>';
		$this->pagination->initialize($config);
		$data['linkler'] = $this->pagination->create_links();
		$data['bilgi'] = $this->dtbs->magazincek($config['per_page'],$this->uri->segment(3,0));
		$this->load->view('front/magazin/anasayfa',$data);
	}
	public function saglik(){
		$sonuc = $this->dtbs->sagliksayisi();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'anasayfa/saglik';
		$config['total_rows'] = $sonuc;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['first_link'] = false;
		$config['first_link_open'] = '<a class="first">';
		$config['first_link_close'] = '</a>';
		$config['last_link'] = false;
		$config['last_link_open'] = '<a class="last">';
		$config['last_link_close'] = '</a>';
		$config['next_link'] = '&raquo;';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<a class="page">';
		$config['prev_tag_close'] = '</a>';
		$config['cur_tag_open'] = '<span class="current">';
		$config['cur_tag_close'] = '</span>';
		$this->pagination->initialize($config);
		$data['linkler'] = $this->pagination->create_links();
		$data['bilgi'] = $this->dtbs->saglikcek($config['per_page'],$this->uri->segment(3,0));
		$this->load->view('front/saglik/anasayfa',$data);
	}
	public function ekonomi(){
		$sonuc = $this->dtbs->ekonomisayisi();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'anasayfa/ekonomi';
		$config['total_rows'] = $sonuc;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['first_link'] = false;
		$config['first_link_open'] = '<a class="first">';
		$config['first_link_close'] = '</a>';
		$config['last_link'] = false;
		$config['last_link_open'] = '<a class="last">';
		$config['last_link_close'] = '</a>';
		$config['next_link'] = '&raquo;';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<a class="page">';
		$config['prev_tag_close'] = '</a>';
		$config['cur_tag_open'] = '<span class="current">';
		$config['cur_tag_close'] = '</span>';
		$this->pagination->initialize($config);
		$data['linkler'] = $this->pagination->create_links();
		$data['bilgi'] = $this->dtbs->ekonomicek($config['per_page'],$this->uri->segment(3,0));
		$this->load->view('front/ekonomi/anasayfa',$data);
	}
	public function kultur(){
		$sonuc = $this->dtbs->kultursayisi();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'anasayfa/kultur';
		$config['total_rows'] = $sonuc;
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['first_link'] = false;
		$config['first_link_open'] = '<a class="first">';
		$config['first_link_close'] = '</a>';
		$config['last_link'] = false;
		$config['last_link_open'] = '<a class="last">';
		$config['last_link_close'] = '</a>';
		$config['next_link'] = '&raquo;';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<a class="page">';
		$config['prev_tag_close'] = '</a>';
		$config['cur_tag_open'] = '<span class="current">';
		$config['cur_tag_close'] = '</span>';
		$this->pagination->initialize($config);
		$data['linkler'] = $this->pagination->create_links();
		$data['bilgi'] = $this->dtbs->kulturcek($config['per_page'],$this->uri->segment(3,0));
		$this->load->view('front/kultur/anasayfa',$data);
	}
	public function siyasetdetay($sef){
		$sonuc = $this->dtbs->hit($sef);
		$hit = $sonuc['hit']+1;
		$id = $sonuc['id'];
		$data = array('id'=>$id,'hit'=>$hit);
		$this->dtbs->guncelle($data,$id,'id','haberler');
		$sonuc = $this->dtbs->haberdetay($sef);
		$data['bilgi'] = $sonuc;
		$this->load->view('front/siyaset/detay/anasayfa',$data);
	}
	public function spordetay($sef){
		$sonuc = $this->dtbs->hit($sef);
		$hit = $sonuc['hit']+1;
		$id = $sonuc['id'];
		$data = array('id'=>$id,'hit'=>$hit);
		$this->dtbs->guncelle($data,$id,'id','haberler');
		$sonuc = $this->dtbs->haberdetay($sef);
		$data['bilgi'] = $sonuc;
		$this->load->view('front/spor/detay/anasayfa',$data);
	}
	public function saglikdetay($sef){
		$sonuc = $this->dtbs->hit($sef);
		$hit = $sonuc['hit']+1;
		$id = $sonuc['id'];
		$data = array('id'=>$id,'hit'=>$hit);
		$this->dtbs->guncelle($data,$id,'id','haberler');
		$sonuc = $this->dtbs->haberdetay($sef);
		$data['bilgi'] = $sonuc;
		$this->load->view('front/saglik/detay/anasayfa',$data);
	}
	public function kulturdetay($sef){
		$sonuc = $this->dtbs->hit($sef);
		$hit = $sonuc['hit']+1;
		$id = $sonuc['id'];
		$data = array('id'=>$id,'hit'=>$hit);
		$this->dtbs->guncelle($data,$id,'id','haberler');
		$sonuc = $this->dtbs->haberdetay($sef);
		$data['bilgi'] = $sonuc;
		$this->load->view('front/kultur/detay/anasayfa',$data);
	}
	public function magazindetay($sef){
		$sonuc = $this->dtbs->hit($sef);
		$hit = $sonuc['hit']+1;
		$id = $sonuc['id'];
		$data = array('id'=>$id,'hit'=>$hit);
		$this->dtbs->guncelle($data,$id,'id','haberler');
		$sonuc = $this->dtbs->haberdetay($sef);
		$data['bilgi'] = $sonuc;
		$this->load->view('front/magazin/detay/anasayfa',$data);
	}
	public function ekonomidetay($sef){
		$sonuc = $this->dtbs->hit($sef);
		$hit = $sonuc['hit']+1;
		$id = $sonuc['id'];
		$data = array('id'=>$id,'hit'=>$hit);
		$this->dtbs->guncelle($data,$id,'id','haberler');
		$sonuc = $this->dtbs->haberdetay($sef);
		$data['bilgi'] = $sonuc;
		$this->load->view('front/ekonomi/detay/anasayfa',$data);
	}
	public function yorumlar(){
		$this->form_validation->set_rules('adsoyad','İsim Soyisim','trim|required|min_length[5]|xss_clean');
		$this->form_validation->set_rules('email','Email Adresi','trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('yorum','Yorum','trim|required|xss_clean');
		$hatalar = array(
			'required' => "{field} alanlarını doldurmak zorundasınız!",
			'min_length' => "İsim Soyisim en az 5 karakter olmak zorundadır!!",
			'valid_email' => "{field} geçerli değil.!! Lütfen geçerli bir email adresi giriniz!!"
		);
		$this->form_validation->set_message($hatalar);
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('hata','<div class="quote">
			<blockquote>
			<div class="quote-inner">
			<div class="post-inner-content">
			<p>'.$hatalar['hata']=validation_errors().'</p>
			</div>
			</div>
			</blockquote>
			</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$data = array(
				'adsoyad' => $this->input->post('adsoyad',true),
				'email' => $this->input->post('email',true),
				'yorum' => $this->input->post('yorum',true),
				'konuid' => $this->input->post('konuid'),
				'konusef' => $this->input->post('konusef'),
				'konukat' => $this->input->post('konukat'),
				'ip' => $this->input->post('ip'),
				'durum' => $durum = 0,
				'tarih' => $tarih = date('d-m-Y')
			);
			$sonuc = $this->dtbs->ekle('yorumlar',$data);
			if ($sonuc) {
				$this->session->set_flashdata('basarili','<div class="quote">
				<blockquote>
				<div class="quote-inner">
				<div class="post-inner-content">
				<p>Teşekkürler</p>
				<p>Yorumunuz Onaylandıktan Sonra Yayınlanacaktır..</p>
				</div>
				</div>
				</blockquote>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('hata','<div class="quote">
				<blockquote>
				<div class="quote-inner">
				<div class="post-inner-content">
				<p>Üzgünüz</p>
				<p>Yorumunuz İletilemedi!! Daha Sonra Tekrar Deneyiniz...</p>
				</div>
				</div>
				</blockquote>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}
	public function iletisim(){
		$this->load->view('front/iletisim/anasayfa');
	}
	public function kunye(){
		$this->load->view('front/kunye/anasayfa');
	}
	public function hakkimizda(){
		$this->load->view('front/hakkimizda/anasayfa');
	}
	public function mesajal(){
		$this->form_validation->set_rules('adsoyad','İsim Soyisim','trim|required|min_length[5]|xss_clean');
		$this->form_validation->set_rules('email','Email Adresi','trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('konu','Konu','trim|required|xss_clean');
		$this->form_validation->set_rules('mesaj','Mesaj','trim|required|xss_clean');
		$hatalar = array(
			'required' => "{field} alanlarını doldurmak zorundasınız!",
			'min_length' => "İsim Soyisim en az 5 karakter olmak zorundadır!!",
			'valid_email' => "{field} geçerli değil!! Lütfen geçerli bir email adresi giriniz!!"
		);
		$this->form_validation->set_message($hatalar);
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('hata','<div class="quote">
			<blockquote>
			<div class="quote-inner">
			<div class="post-inner-content">
			<p>'.$hatalar['hata']=validation_errors().'</p>
			</div>
			</div>
			</blockquote>
			</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$data = array(
				'adsoyad' => $adsoyad = $this->input->post('adsoyad',true),
				'email' => $email = $this->input->post('email',true),
				'konu' => $konu = $this->input->post('konu',true),
				'mesaj' => $mesaj = $this->input->post('mesaj',true),
				'ip' => $id = $this->input->post('ip'),
				'durum' => $durum = 0,
				'tarih' => $tarih = date('d-m-Y')
			);
			$sonuc = $this->dtbs->ekle('mesajlar',$data);
			if ($sonuc) {
				$this->session->set_flashdata('basarili','<div class="quote">
				<blockquote>
				<div class="quote-inner">
				<div class="post-inner-content">
				<p>Teşekkürler</p>
				<p>Mesajınız Alındı En Kısa Sürede Tarafınıza Dönüş Sağlanacaktır..</p>
				</div>
				</div>
				</blockquote>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('hata','<div class="quote">
				<blockquote>
				<div class="quote-inner">
				<div class="post-inner-content">
				<p>Üzgünüz</p>
				<p>Mesajınız İletilemedi!! Daha Sonra Tekrar Deneyiniz...</p>
				</div>
				</div>
				</blockquote>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}
}
?>
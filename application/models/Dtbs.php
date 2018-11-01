<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dtbs extends CI_Model{
	function Kontrol($email,$sifre){
		$sonuc = $this->db->select('*')->from('yonetici')->where('email',$email)->where('sifre',sha1(md5($sifre)))->get()->row();
		return $sonuc;
	}
	function listele($from){
		$sonuc = $this->db->select('*')->from($from)->order_by('id','desc')->get()->result_array();
		return $sonuc;
	}
	function cek($from,$id){
		$sonuc = $this->db->select('*')->from($from)->where('id',$id)->get()->row_array();
		return $sonuc;
	}
	function guncelle($data = array(),$id,$where,$from){
		$sonuc = $this->db->where($where,$id)->update($from,$data);
		return $sonuc;
	}
	function ekle($from,$data = array()){
		$sonuc = $this->db->insert($from,$data);
		return $sonuc;
	}
	function sil($id,$where,$from){
		$sonuc = $this->db->delete($from,array($where=>$id));
		return $sonuc;
	}
	function habersayisi(){
		$sonuc = $this->db->select('*')->from('haberler')->where('durum','1')->count_all_results();
		return $sonuc;
	}
	function habercek($per,$set){
		$sonuc = $this->db->select('*')->from('haberler')->where('durum','1')->order_by('id','desc')->limit($per,$set)->get()->result_array();
		return $sonuc;
	}
	function siyasetsayisi(){
		$sonuc = $this->db->select('*')->from('haberler')->where('katID','5')->where('durum','1')->count_all_results();
		return $sonuc;
	}
	function siyasetcek($per,$set){
		$sonuc = $this->db->select('*')->from('haberler')->where('katID','5')->where('durum','1')->order_by('id','desc')->limit($per,$set)->get()->result_array();
		return $sonuc;
	}
	function magazinsayisi(){
		$sonuc = $this->db->select('*')->from('haberler')->where('katID','8')->where('durum','1')->count_all_results();
		return $sonuc;
	}
	function magazincek($per,$set){
		$sonuc = $this->db->select('*')->from('haberler')->where('katID','8')->where('durum','1')->order_by('id','desc')->limit($per,$set)->get()->result_array();
		return $sonuc;
	}
	function sporsayisi(){
		$sonuc = $this->db->select('*')->from('haberler')->where('katID','9')->where('durum','1')->count_all_results();
		return $sonuc;
	}
	function sporcek($per,$set){
		$sonuc = $this->db->select('*')->from('haberler')->where('katID','9')->where('durum','1')->order_by('id','desc')->limit($per,$set)->get()->result_array();
		return $sonuc;
	}
	function sagliksayisi(){
		$sonuc = $this->db->select('*')->from('haberler')->where('katID','10')->where('durum','1')->count_all_results();
		return $sonuc;
	}
	function saglikcek($per,$set){
		$sonuc = $this->db->select('*')->from('haberler')->where('katID','10')->where('durum','1')->order_by('id','desc')->limit($per,$set)->get()->result_array();
		return $sonuc;
	}
	function ekonomisayisi(){
		$sonuc = $this->db->select('*')->from('haberler')->where('katID','6')->where('durum','1')->count_all_results();
		return $sonuc;
	}
	function ekonomicek($per,$set){
		$sonuc = $this->db->select('*')->from('haberler')->where('katID','6')->where('durum','1')->order_by('id','desc')->limit($per,$set)->get()->result_array();
		return $sonuc;
	}
	function kultursayisi(){
		$sonuc = $this->db->select('*')->from('haberler')->where('katID','7')->where('durum','1')->count_all_results();
		return $sonuc;
	}
	function kulturcek($per,$set){
		$sonuc = $this->db->select('*')->from('haberler')->where('katID','7')->where('durum','1')->order_by('id','desc')->limit($per,$set)->get()->result_array();
		return $sonuc;
	}
	function haberdetay($sef){
		$sonuc = $this->db->select('*')->from('haberler')->where('durum','1')->where('sef',$sef)->get()->row_array();
		return $sonuc;
	}
	function hit($sef){
		$sonuc = $this->db->select('*')->from('haberler')->where('durum','1')->where('sef',$sef)->get()->row_array();
		return $sonuc;
	}
	function mesajupdate($id,$data=array()){
		$sonuc = $this->db->where('id',$id)->update('mesajlar',$data);
		return $sonuc;
	}
}
?>

<?php
/**
 * @param $str
 * @param array $options
 * @return string
 */
function seflink($str, $options = array())
{
    $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
    $defaults = array(
        'delimiter' => '-',
        'limit' => null,
        'lowercase' => true,
        'replacements' => array(),
        'transliterate' => true
    );
    $options = array_merge($defaults, $options);
    $char_map = array(
        // Latin
        'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C',
        'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
        'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O',
        'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH',
        'ß' => 'ss',
        'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c',
        'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
        'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o',
        'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th',
        'ÿ' => 'y',
        // Latin symbols
        '©' => '(c)',
        // Greek
        'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
        'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
        'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
        'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
        'Ϋ' => 'Y',
        'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
        'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
        'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
        'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
        'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',
        // Turkish
        'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
        'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g',
        // Russian
        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
        'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
        'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
        'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
        'Я' => 'Ya',
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
        'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
        'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
        'я' => 'ya',
        // Ukrainian
        'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
        'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',
        // Czech
        'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U',
        'Ž' => 'Z',
        'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
        'ž' => 'z',
        // Polish
        'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z',
        'Ż' => 'Z',
        'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
        'ż' => 'z',
        // Latvian
        'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N',
        'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
        'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
        'š' => 's', 'ū' => 'u', 'ž' => 'z'
    );
    $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
    if ($options['transliterate']) {
        $str = str_replace(array_keys($char_map), $char_map, $str);
    }
    $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
    $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
    $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
    $str = trim($str, $options['delimiter']);
    return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
}
    function tarih($tarih){
        $tyeni = date('d-m-Y',strtotime($tarih));
        $ayarla = array(
            01 => "Ocak", 02 => "Şubat", 03 => "Mart", 04 => "Nisan", 05 => "Mayıs", 06 => "Haziran", 07 => "Temmuz", 08 => "Ağustos", 09 => "Eylül", 10 => "Ekim", 11 => "Kasım", 12 => "Aralık",
        );
        $parcala = explode("-", $tyeni);
        $gun = $parcala[0];
        $ay = $parcala[1];
        $yil = $parcala[2];
        $turkceay = $ayarla[$ay];
        $bitir = $gun.' '.$turkceay.' '.$yil;
        return $bitir;
    }
    function kategoriliste(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('kategoriler')->order_by('id','asc')->get()->result_array();
        return $sonuc;
    }
    function haberresim($id){
        $ci =& get_instance();
        $sonuc = $ci->db->from('haberler')->where('id',$id)->get()->row();
        return $sonuc->resim;
    }
    function habertmb($id){
        $ci =& get_instance();
        $sonuc = $ci->db->select('tmb')->from('haberler')->where('id',$id)->get()->row();
        return $sonuc->tmb;
    }
    function habermini($id){
        $ci =& get_instance();
        $sonuc = $ci->db->select('mini')->from('haberler')->where('id',$id)->get()->row();
        return $sonuc->mini;
    }
    function koseyazariresim($id){
        $ci =& get_instance();
        $sonuc = $ci->db->from('koseyazarlari')->where('id',$id)->get()->row();
        return $sonuc->resim;
    }
    function koseyazarimini($id){
        $ci =& get_instance();
        $sonuc = $ci->db->select('mini')->from('koseyazarlari')->where('id',$id)->get()->row();
        return $sonuc->mini;
    }
    function reklamresim($id){
        $ci =& get_instance();
        $sonuc = $ci->db->from('reklam')->where('id',$id)->get()->row();
        return $sonuc->resim;
    }
    function reklamtmb($id){
        $ci =& get_instance();
        $sonuc = $ci->db->select('tmb')->from('reklam')->where('id',$id)->get()->row();
        return $sonuc->tmb;
    }
    function siyasetsoncek($skat){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('katID',$skat)->order_by('id','desc')->limit('1')->where('durum',1)->get()->result_array();
        return $sonuc;
    }
    function siyasetcek($skat){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('katID',$skat)->order_by('id','desc')->limit('5','1')->where('durum',1)->get()->result_array();
        return $sonuc;
    }
    function sagliksoncek($skat){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('katID',$skat)->order_by('id','desc')->limit('1')->where('durum',1)->get()->result_array();
        return $sonuc;
    }
    function saglikcek($skat){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('katID',$skat)->order_by('id','desc')->limit('5','1')->where('durum',1)->get()->result_array();
        return $sonuc;
    }
    function magazinsoncek($skat){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('katID',$skat)->order_by('id','desc')->limit('1')->where('durum',1)->get()->result_array();
        return $sonuc;
    }
    function magazincek($skat){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('katID',$skat)->order_by('id','desc')->limit('5','1')->where('durum',1)->get()->result_array();
        return $sonuc;
    }
    function kultursoncek($skat){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('katID',$skat)->order_by('id','desc')->limit('1')->where('durum',1)->get()->result_array();
        return $sonuc;
    }
    function kulturcek($skat){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('katID',$skat)->order_by('id','desc')->limit('5','1')->where('durum',1)->get()->result_array();
        return $sonuc;
    }
    function ekonomisoncek($skat){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('katID',$skat)->order_by('id','desc')->limit('1')->where('durum',1)->get()->result_array();
        return $sonuc;
    }
    function ekonomicek($skat){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('katID',$skat)->order_by('id','desc')->limit('5','1')->where('durum',1)->get()->result_array();
        return $sonuc;
    }
    function sporsoncek($skat){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('katID',$skat)->order_by('id','desc')->limit('1')->where('durum',1)->get()->result_array();
        return $sonuc;
    }
    function sporcek($skat){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('katID',$skat)->order_by('id','desc')->limit('5','1')->where('durum',1)->get()->result_array();
        return $sonuc;
    }
    function sondakika($sd){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('sondakika',$sd)->where('durum','1')->order_by('id','desc')->get()->result_array();
        return $sonuc;
    }
    function sondakika1($sd){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('sondakika',$sd)->where('durum','1')->order_by('id','desc')->limit('3')->get()->result_array();
        return $sonuc;
    }
    function sondakika2($sdi){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('sondakika',$sdi)->where('durum','1')->order_by('id','desc')->limit('3','4')->get()->result_array();
        return $sonuc;
    }
    function sonhaberler(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('durum','1')->order_by('id','desc')->limit('5')->get()->result_array();
        return $sonuc;
    }
    function koseyazarlari(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('koseyazarlari')->where('durum','1')->order_by('id','desc')->get()->result_array();
        return $sonuc;
    }
    function siteayarlari(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('site_ayarlari')->get()->result_array();
        return $sonuc;
    }
    function footersonhaberler(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('durum','1')->order_by('id','desc')->limit('3')->get()->result_array();
        return $sonuc;
    }
    function footercokokunanhaberler(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('durum','1')->order_by('hit','desc')->limit('3')->get()->result_array();
        return $sonuc;
    }
    function tabcokokunanhaberler(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('durum','1')->order_by('hit','desc')->limit('5')->get()->result_array();
        return $sonuc;
    }
    function sosyalmedya(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('sosyal_medya')->where('durum','1')->get()->result_array();
        return $sonuc;
    }
    function yorumlaricek(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('yorumlar')->where('durum','1')->order_by('id','desc')->limit('5')->get()->result_array();
        return $sonuc;
    }
    function taglaricek(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('tag','DISTINCT')->from('haberler')->where('durum','1')->get()->result_array();
        return $sonuc;
    }
    function reklamcek(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('reklam')->get()->result_array();
        return $sonuc;
    }
    function yorumsay($ysay){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('yorumlar')->where('durum','1')->where('konuid',$ysay)->order_by('id','desc')->get()->result_array();
        return $sonuc;
    }
    function yorumcek($kid){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('yorumlar')->join('haberler','haberler.id = yorumlar.konuid','inner')->where('yorumlar.durum','1')->where('yorumlar.konuid',$kid)->count_all_results();
        return $sonuc;
    }
    function kunyecek(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('kunye')->where('durum','1')->get()->result_array();
        return $sonuc;
    }
    function galeri(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('durum','1')->order_by('rand()')->limit('10')->get()->result_array();
        return $sonuc;
    }
    function habercek(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('durum','1')->count_all_results();
        return $sonuc;
    }
    function mesajcek($durum){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('mesajlar')->where('durum',$durum)->count_all_results();
        return $sonuc;
    }
    function smedyacek(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('sosyal_medya')->where('durum','1')->count_all_results();
        return $sonuc;
    }
    function yorumsayi($durum){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('yorumlar')->where('durum',$durum)->count_all_results();
        return $sonuc;
    }
    function reklamsay(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('reklam')->where('durum','1')->count_all_results();
        return $sonuc;
    }
    function kyazaricek(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('koseyazarlari')->where('durum','1')->count_all_results();
        return $sonuc;
    }
    function haberkatcek($katID){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('kategoriler')->join('haberler','haberler.kategori = kategoriler.title','inner')->where('haberler.katID',$katID)->where('haberler.durum','1')->order_by('haberler.hit','desc')->limit('5')->get()->result_array();
        return $sonuc;
    }
?>
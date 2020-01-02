<?php

/**
 * RadCheck dosyası
 * RadCheck tablosunu temsil edecek
 */
class RadCheck extends model
{

/**
 * App\Models\RadCheck
 *
 * @property int $id
 * @property string $UserName
 * @property string $Attribute
 * @property string $op
 * @property string $Value
 * @property string $TcKimlikNo
 * @property string $adsoyad
 * @property string $tarih
 * @property string $sifre
 * @property string $dtarih
 * @property dateTime $created_at
 * @property dateTime $updated_at
 * @method static |\App\Models\RadCheck whereAttribute($value)
 * @method static |\App\Models\RadCheck whereCreatedAt($value)
 * @method static |\App\Models\RadCheck whereId($value)
 * @method static |\App\Models\RadCheck whereOp($value)
 * @method static |\App\Models\RadCheck whereTcKimlikNo($value)
 * @method static |\App\Models\RadCheck whereUpdatedAt($value)
 * @method static |\App\Models\RadCheck whereUserName($value)
 * @method static |\App\Models\RadCheck whereValue($value)
 */



		public $id;
		public $UserName;
		public $Attribute;
		public $op;
		public $Value;
		public $Tip;
		public $TcKimlikNo;
		public $Telefon;
		public $adsoyad;
		public $tarih;
		public $sifre;
		public $dtarih;
		public $created_at;
		public $updated_at;



	    const CREATED_AT = 'created_at';
    	const UPDATED_AT = 'updated_at';

    	
	/**
	 * Bütün Nas Tablosundan  tek bir satırı getirmesini sağlayalım
	 * $this->fetch'ı genişlettiğimiz (extend) model sınıfı aracılığıyla kullanıyoruz
	 * @return array
	 */
	public function getAll()
	{
		$Data = $this->fetchAll('SELECT * FROM radcheck ');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new RadCheck();
				$classModelData->id=$modelData['id'];
				$classModelData->UserName=$modelData['username'];
				$classModelData->Attribute=$modelData['attribute'];
				$classModelData->op=$modelData['op'];
				$classModelData->Value=$modelData['value'];
				$classModelData->Tip=$modelData['tip'];
				$classModelData->Telefon=$modelData['telefon'];
				$classModelData->TcKimlikNo=$modelData['tcno'];
				$classModelData->adsoyad=$modelData['adsoyad'];
				$classModelData->tarih=$modelData['tarih'];
				$classModelData->sifre=$modelData['sifre'];
				$classModelData->dtarih=$modelData['dtarih'];

			
				if (is_null($modelListNew))
					{
						$modelListNew = array($classModelData);
					}
				else
					{
						array_push($modelListNew,$classModelData);
					}
			}
		return $modelListNew;
	}

	public function getHotspotUser($userid)
	{
		
		
				$Data = $this->fetch("SELECT * FROM radcheck WHERE id='{$userid}' ");

				$this->id=$Data['id'];
				$this->UserName=$Data['username'];
				$this->Attribute=$Data['attribute'];
				$this->op=$Data['op'];
				$this->Value=$Data['value'];
				$this->Tip=$Data['tip'];
				$this->Telefon=$Data['telefon'];
				$this->TcKimlikNo=$Data['tcno'];
				$this->adsoyad=$Data['adsoyad'];
				$this->tarih=$Data['tarih'];
				$this->sifre=$Data['sifre'];
				$this->dtarih=$Data['dtarih'];

	}

	

	public function addUser()
	{
		$query = $this->fetch("INSERT INTO radcheck SET username='{$this->Username}',
													attribute='{$this->Attribute}',
													op='{$this->op}',
													value='{$this->Value}',
													tip='{$this->Tip}',
													telefon='{$this->Telefon}',
													tcno='{$this->TcKimlikNo}',
													adsoyad='{$this->adsoyad}',
													tarih='{$this->tarih}',
													dtarih='{$this->dtarih}'");

		//$radreplyquery = $this->fetch("INSERT INTO radreply SET username='{$this->username}',attribute='Expiration', op=':=', value='{$this->tarih}' ");

		return "Hotspot Kullanıcısı  Eklendi";

	}

	public function editUser()
	{
		$query = $this->fetch("UPDATE  radcheck SET username='{$this->Username}',
													attribute='{$this->Attribute}',
													op='{$this->op}',
													value='{$this->Value}',
													tip='{$this->Tip}',
													telefon='{$this->Telefon}',
													tcno='{$this->TcKimlikNo}',
													adsoyad='{$this->adsoyad}',
													tarih='{$this->tarih}',
													dtarih='{$this->dtarih}' WHERE id='{$this->id}'");

		//$radreplyquery = $this->fetch("UPDATE radreply SET value='{$this->tarih}' WHERE username='{$this->Username}' and attribute='{$this->attribute}' ");


			return "Hotspot Kullanıcısı Başarıyla Eklendi.";

	}


	 public function forSoap($kelime){

            $k = array("ç","Ç","ğ","Ğ","ı","I","i","İ","ö","Ö","ş","Ş","ü","Ü");
            $b = array("Ç","Ç","Ğ","Ğ","I","I","İ","İ","Ö","Ö","Ş","Ş","Ü","Ü");
            $kelime=str_replace($k, $b, $kelime);
            $kelime=strtoupper($kelime);
            return $kelime;
    }  

	 public function TcValidation($tc_no,$ad,$soyad,$dogum_yili){
            $ad=$this->forSoap($ad);
            $soyad=$this->forSoap($soyad);
            $bilgiler = array(
                "tcno" => $tc_no,
                "isim" => $ad,
                "soyisim" => $soyad,
                "dogumyili" => $dogum_yili
            );
            $gonder = '<?xml version="1.0" encoding="utf-8"?>
            <soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
            <soap:Body>
            <TCKimlikNoDogrula xmlns="http://tckimlik.nvi.gov.tr/WS">
            <TCKimlikNo>'.$bilgiler["tcno"].'</TCKimlikNo>
            <Ad>'.$bilgiler["isim"].'</Ad>
            <Soyad>'.$bilgiler["soyisim"].'</Soyad>
            <DogumYili>'.$bilgiler["dogumyili"].'</DogumYili>
            </TCKimlikNoDogrula>
            </soap:Body>
            </soap:Envelope>';

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,            "https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx" );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
            curl_setopt($ch, CURLOPT_POST,           true );
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_POSTFIELDS,    $gonder);
            curl_setopt($ch, CURLOPT_HTTPHEADER,     array(
            'POST /Service/KPSPublic.asmx HTTP/1.1',
            'Host: tckimlik.nvi.gov.tr',
            'Content-Type: text/xml; charset=utf-8',
            'SOAPAction: "http://tckimlik.nvi.gov.tr/WS/TCKimlikNoDogrula"',
            'Content-Length: '.strlen($gonder)
            ));
            $gelen = curl_exec($ch);
            curl_close($ch);

            return strip_tags($gelen); // true veya false cevabı gelir

            
    }



	
}

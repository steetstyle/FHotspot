<?php

/**
 * Account tablosunu temsil edecek
 */
class Account extends model
{


	public $id;
	public $username;
	public $password;
	public $ad_soyad;

		/**
		 * App\Models\Account
		 *
		 * @property int $id
		 * @property string $username
		 * @property string $password
		 * @property string $ad_soyad
		 * 
		 */

	/**
	 * üye varsa getirmesini sağlayalım
	 * $this->fetch'i genişlettiğimiz (extend) model sınıfı aracılığıyla kullanıyoruz
	 * @return array
	 */
	public function get($Username,$Password)
	{

		$sorgu =  $this->fetch('SELECT * FROM account WHERE username="'.$Username.'" AND password="'.md5($Password).'"');

		 $this->id = $sorgu['id'];
		 $this->username = $sorgu['username'];
		 $this->password = $sorgu['password'];
		 $this->ad_soyad = $sorgu['ad_soyad'];


		 if (empty($this->username)) {

		 	return false;
		 }

		 return true;
	}



	
}

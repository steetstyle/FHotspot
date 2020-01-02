<?php

class adminController extends controller
{
	public function __construct()
	{
		// Oturumu başlatalım
		session_start();
	}

	/**
	 * Yönetim ana sayfası
	 * @return void
	 */
	public function indexAction()
	{
		// Admin giriş yapmış mı kontrol ediyoruz
		$this->checkLogin();

		// View'da kullanabilmek için $title değişkeni oluşturuyoruz
		$data['title'] = 'FHotspot FreeRadius Yönetim Paneli';
		$data['description'] = "FHotspot FreeRadius Yönetim Panelini kullanarak ağınızdaki kullanıcıları yönetebilirsiniz.";

		$RadCheckModel = $this->model('RadCheck');
		$data['HotspotUsers'] = $RadCheckModel->getAll();

		$HotspotGroupModel = $this->model('HotspotGroup');
		$data['HotspotGroups'] = $HotspotGroupModel->getAll();


		// views/admin/index.php sayfasını yorumluyoruz
		return $this->render('admin/index', $data);
	}

	/**
	 * Yönetici giriş yapmış mı bunun kontrolünü sağlar
	 * @return void
	 */
	private function checkLogin()
	{

		if ($_SESSION['adminloggedIn']) {
	
			if ($_SESSION['adminloggedIn'] == true) {
				


			}	
			else
			{
				return $this->redirect($this->url('admin/login'));
			}

		}
		else if ($_SESSION['adminloggedIn'] == false ) {

			return $this->redirect($this->url('admin/login'));
		}
	}

	public function loginAction()
	{
		$data['title'] = 'FHotspot FreeRadius Yönetim Paneli';
		$data['description'] = "FHotspot FreeRadius Yönetim Panelini kullanarak ağınızdaki kullanıcıları yönetebilirsiniz.";


		// Eğer GET isteği ile sayfaya geldiyse kullanıcı
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {

			$data['title'] = 'Giriş';

			// views/admin/login.php görünümünü yorumluyoruz
			return $this->render('admin/login', $data);

		// Eğer POST isteğiyle yani giriş formunun yönlendirmesi sonucu
		// kullanıcı sayfaya geldiyse:
		} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {


		
			// Kullanıcı adı ve şifre doğruysa
				$AccountModel = $this->model('Account');

			if ($AccountModel->get($_POST['username'],$_POST['password'])) {

				$_SESSION['adminloggedIn'] = true;
				$_SESSION['adsoyad'] = $AccountModel->adsoyad;
				$_SESSION['username'] = $AccountModel->username;
			
				// Yönlendir
				return $this->redirect($this->url('admin/index'));
			

			// Kullanıcı adı ve şifre doğru değilse
			} else {
				$data['title'] = 'Giriş';
				$data['message'] = 'Kullanıcı adı ya da şifre hatalı';
				return $this->render('admin/login', $data);
			}

		}
	}

	/* çıkış */

	public function logoutAction()
	{
		// Oturumu kaldır/sil/yok et!
		session_destroy();
		return $this->redirect($this->url('admin/login'));
	}



	// HotSpot User Ekleme

	public function addHotspotUserAction()
	{
		$data['title'] = 'FHotspot FreeRadius Yönetim Paneli - Hotspot Kullanıcı Ekle';
		$data['description'] = "FHotspot FreeRadius Yönetim Panelini kullanarak bu sayfadan hotspot kullanıcısı ekleyebilirisiniz.";


	
		// Eğer POST isteğiyle yani giriş formunun yönlendirmesi sonucu
		// kullanıcı sayfaya geldiyse:
		 if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		 	
		 	if(empty($_POST["gtarihi"])){
            $gtarihi = $_POST["gtarihi"]="12/12/2099";
        	}
        	if (!empty($_POST['ad']) && !empty($_POST['soyad'])  && !empty($_POST['password']) && !empty($_POST['tcno']) && !empty($_POST['telefon']) && !empty($_POST['dtarihi'])) {
        		

        		$RadCheckModel = $this->model('RadCheck');

        		if ($RadCheckModel->TcValidation($_POST['tcno'],$_POST['ad'],$_POST['soyad'],$_POST['dtarihi']) == true) {

        			$RadCheckModel->Username=$_POST['tcno'];
					$RadCheckModel->Attribute=FreeRADIUSAttribute;
					$RadCheckModel->op=FreeRADIUSOperator;
					$RadCheckModel->Value=$_POST['password'];
					$RadCheckModel->Tip="Hotspot";
					$RadCheckModel->Telefon=$_POST['telefon'];
					$RadCheckModel->TcKimlikNo=$_POST['tcno'];
					$RadCheckModel->adsoyad=$_POST['ad']." ".$_POST['soyad'];
					$RadCheckModel->tarih=$_POST['gtarihi'];
					$RadCheckModel->sifre=$_POST['password'];
					$RadCheckModel->dtarih=$_POST['dtarihi'];
        			$data['message'] = $RadCheckModel->addUser();
        		}
        	}




		
			
		} 
		return $this->render('admin/hotspot/addUser',$data);
	}

		// HotSpot User Güncelleme

	public function editHotspotUserAction($userid)
	{
		$data['title'] = 'FHotspot FreeRadius Yönetim Paneli - Hotspot Kullanıcını Düzenle';
		$data['description'] = "FHotspot FreeRadius Yönetim Panelini kullanarak bu sayfadan hotspot kullanıcısını düzenleyebilirsiniz.";

		$RadCheckModel = $this->model('RadCheck');

		$RadCheckModel->getHotspotUser($userid);

		$HotspotGroupModel = $this->model('HotspotGroup');

		$data['HotspotGroups'] = $HotspotGroupModel->getAll();

		$data['HotspotUser'] = $RadCheckModel;
	
		// Eğer POST isteğiyle yani giriş formunun yönlendirmesi sonucu
		// kullanıcı sayfaya geldiyse:
		 if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		 	
		 	if(empty($_POST["gtarihi"])){
            $gtarihi = $_POST["gtarihi"]="12/12/2099";
        	}

        	if (!empty($_POST['ad']) && !empty($_POST['soyad'])  && !empty($_POST['password'])  && !empty($_POST['id']) && !empty($_POST['tcno']) && !empty($_POST['telefon']) && !empty($_POST['dtarihi'])) {
        		

        		

        		if ($RadCheckModel->TcValidation($_POST['tcno'],$_POST['ad'],$_POST['soyad'],$_POST['dtarihi']) == true) {

        			$RadCheckModel->id=$userid;
        			$RadCheckModel->Username=$_POST['tcno'];
					$RadCheckModel->Attribute=FreeRADIUSAttribute;
					$RadCheckModel->op=FreeRADIUSOperator;
					$RadCheckModel->Value=$_POST['password'];
					$RadCheckModel->Tip="Hotspot";
					$RadCheckModel->Telefon=$_POST['telefon'];
					$RadCheckModel->TcKimlikNo=$_POST['tcno'];
					$RadCheckModel->adsoyad=$_POST['ad']." ".$_POST['soyad'];
					$RadCheckModel->tarih=date('Y:m:d',strtotime($_POST['gtarihi']));
					$RadCheckModel->sifre=$_POST['password'];
					$RadCheckModel->dtarih=date('Y:m:d',strtotime($_POST['dtarihi']));
        			$data['message'] = $RadCheckModel->editUser();
        		}
        	}




		
			
		} 
		return $this->render('admin/hotspot/editUser',$data);
	}
	

		// HotSpot Userını Gruba Ekleme
	public function addtogroupHotspotUserAction($username,$user_id)
	{
		
		 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        	if (!empty($username) && !empty($_POST['groupname'])) {
    
    				$RadUserGroupModel = $this->model('RadUserGroup');

        			$RadUserGroupModel->Username=$username;

					$RadUserGroupModel->GroupName=$_POST['groupname'];
	
        			$data['message'] = $RadUserGroupModel->add();

        			echo $data['message'];
        		
        	}

			
		} 

		$this->redirect($this->url('admin/editHotspotUser/'.$user_id));
	}


	public function addHotspotGroupAction()
	{

		$data['title'] = 'FHotspot FreeRadius Yönetim Paneli - Hotspot Kullanıcını Düzenle';
		$data['description'] = "FHotspot FreeRadius Yönetim Panelini kullanarak bu sayfadan hotspot grubu ekleyebilirsiniz.";

		

		


		 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        	if (!empty($_POST['group_name'])) {
    
	    			if (empty($_POST['max_down'])) {
	        			$_POST['max_down']="999999";
	        		}
	        		if (empty($_POST['max_up'])) {
	        			$_POST['max_up']="999999";
	        		}
	        		if (empty($_POST['redirect_URL'])) {
	        			$_POST['redirect_URL']="https://www.google.com";
	        		}

    				$HotspotGroup = $this->model('HotspotGroup');

        			$HotspotGroup->group_name=$_POST['group_name'];
        			$HotspotGroup->max_down = $_POST['max_down'];
        			$HotspotGroup->max_up = $_POST['max_up'];
        			$HotspotGroup->redirect_URL = $_POST['redirect_URL'];
					$HotspotGroup->add();
        		
        	}

			
		} 


		return $this->render('admin/hotspot/addHotspotGroup',$data);
	}	

	public function editHotspotGroupAction($id)
	{

		$data['title'] = 'FHotspot FreeRadius Yönetim Paneli - Hotspot Kullanıcını Düzenle';
		$data['description'] = "FHotspot FreeRadius Yönetim Panelini kullanarak bu sayfadan hotspot grubunu düzenleyebilirsiniz.";

		
		$HotspotGroupModel = $this->model('HotspotGroup');

		$HotspotGroupModel->get($id);
	

		$data['HotspotGroup'] = $HotspotGroupModel;

		 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        	if (!empty($_POST['group_name'])) {

        		if (empty($_POST['max_down'])) {
        			$_POST['max_down']="999999";
        		}
        		if (empty($_POST['max_up'])) {
        			$_POST['max_up']="999999";
        		}
        		if (empty($_POST['redirect_URL'])) {
        			$_POST['redirect_URL']="https://www.google.com";
        		}
    
    				
        			$HotspotGroupModel->cache = $HotspotGroupModel->group_name;
        			$HotspotGroupModel->group_name=$_POST['group_name'];
        			$HotspotGroupModel->max_down = $_POST['max_down'];
        			$HotspotGroupModel->max_up = $_POST['max_up'];
        			$HotspotGroupModel->redirect_URL = $_POST['redirect_URL'];

					$HotspotGroupModel->edit();
        		
        	}

			
		} 



		return $this->render('admin/hotspot/editHotspotGroup',$data);
	}	

	public function editGroupAttributes()
	{
				$radgroupreply = [
                        "groupname" => "$gadi",
                        "attribute" => "WISPr-Bandwidth-Max-Down",
                        "op" => ":=",
                        "value" => "$downh"
                            ];
                $radgroupreply1 = [
                        "groupname" => "$gadi",
                        "attribute" => "WISPr-Bandwidth-Max-Up",
                        "op" => ":=",
                        "value" => "$uph"
                            ];
                $radgroupreply2 = [
                        "groupname" => "$gadi",
                        "attribute" => "WISPr-Redirection-URL",
                        "op" => "==",
                        "value" => "$yonlendirme"
                            ];
	}



	
}

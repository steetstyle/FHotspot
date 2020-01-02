 <?php

/**
 * RadUserGroup dosyası
 * RadUserGroup tablosunu temsil edecek
 */
class RadUserGroup extends model
{

/**
 * App\Models\RadUserGroup
 *
 * @property int $id
 * @property string $Username
 * @property string $GroupName
 * @property string $priority

 */



		public $id;
		public $Username;
		public $GroupName;
		public $priority;


		public function add()
		{
			$query = $this->fetch("INSERT INTO radusergroup SET username='{$this->Username}' , groupname='{$this->GroupName}' , priority=1");
		}


	
}

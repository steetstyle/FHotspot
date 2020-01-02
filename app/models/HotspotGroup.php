<?php

/**
 * HotspotGroup tablosunu temsil edecek
 */
class HotspotGroup extends model
{

		/**
		 * App\Models\HotspotGroup
		 *
		 * @property int $id
		 * @property string $group_name
		 * @property string $cache
		 * 
		 */


	public $id;
	public $group_name;
	public $cache;

	public $max_down;
	public $max_up;
	public $redirect_URL;
		

	/**
	 * Bütün Nas Tablosundan  tek bir satırı getirmesini sağlayalım
	 * $this->fetch'ı genişlettiğimiz (extend) model sınıfı aracılığıyla kullanıyoruz
	 * @return array
	 */
	public function getAll()
	{
		$Data = $this->fetchAll('SELECT * FROM hotspotgroup ');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new HotspotGroup();
				$classModelData->id=$modelData['id'];
				$classModelData->group_name=$modelData['group_name'];

			
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

	public function get($id)
	{
			$query = $this->fetch("SELECT * FROM hotspotgroup WHERE id='{$id}' ");
			$radgroupcheck_maxdown_query = $this->fetch("SELECT * FROM radgroupreply WHERE attribute='WISPr-Bandwidth-Max-Down' ");
			$radgroupcheck_maxup_query = $this->fetch("SELECT * FROM radgroupreply WHERE attribute='WISPr-Bandwidth-Max-Up'");
			$radgroupcheck_redirectURL_query = $this->fetch("SELECT * FROM radgroupreply WHERE attribute='WISPr-Redirection-URL'");
			$this->id=$query['id'];
			$this->group_name=$query['group_name'];
			$this->max_down=$radgroupcheck_maxdown_query['value'];
			$this->max_up=$radgroupcheck_maxup_query['value'];
			$this->redirect_URL=$radgroupcheck_redirectURL_query['value'];
	}

	public function add()
	{
			$query = $this->fetch("INSERT INTO hotspotgroup SET group_name='{$this->group_name}' ");

			$radgroupcheck_maxdown_query = $this->fetch("INSERT INTO radgroupreply SET groupname='{$this->group_name}',attribute='WISPr-Bandwidth-Max-Down', op=':=', value='{$this->max_down}' ");
			$radgroupcheck_maxup_query = $this->fetch("INSERT INTO radgroupreply SET groupname='{$this->group_name}',attribute='WISPr-Bandwidth-Max-Up', op=':=', value='{$this->max_up}' ");
			$radgroupcheck_redirectURL_query = $this->fetch("INSERT INTO radgroupreply SET groupname='{$this->group_name}',attribute='WISPr-Redirection-URL', op='==', value='{$this->redirect_URL}' ");


	}

	public function edit()
	{
		$hotspotgroupquery  = $this->fetch("UPDATE hotspotgroup SET group_name='{$this->group_name}' WHERE id='{$this->id}' ");
		$radusergroupquery  = $this->fetch("UPDATE radusergroup SET groupname='{$this->group_name}' WHERE groupname='{$this->cache}' ");
		$radgroupcheckquery = $this->fetch("UPDATE radgroupcheck SET groupname='{$this->group_name}' WHERE groupname='{$this->cache}' ");	 
		$radgroupcheckquery = $this->fetch("UPDATE radgroupreply SET groupname='{$this->group_name}' WHERE groupname='{$this->cache}' ");	 

		$radgroupcheck_maxdown_query = $this->fetch("UPDATE radgroupreply SET value='{$this->max_down}' WHERE groupname='{$this->group_name}' and attribute='WISPr-Bandwidth-Max-Down' ");
		$radgroupcheck_maxup_query = $this->fetch("UPDATE radgroupreply SET value='{$this->max_up}' WHERE groupname='{$this->group_name}' and attribute='WISPr-Bandwidth-Max-Up' ");
		$radgroupcheck_redirectURL_query = $this->fetch("UPDATE radgroupreply SET  value='{$this->redirect_URL}' WHERE groupname='{$this->group_name}' and attribute='WISPr-Redirection-URL' ");

	}

	
}

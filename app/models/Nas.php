<?php

/**
 * Nas dosyası
 * Nas tablosunu temsil edecek
 */
class Nas extends model
{

	/**
 * App\Models\Nas
 *
 * @property int $id
 * @property string $nasname
 * @property string $shortname
 * @property string $type
 * @property int $ports
 * @property string $secret
 * @property string $server
 * @property string $community
 * @property string $description
 * @method static |\App\Models\Nas whereCommunity($value)
 * @method static |\App\Models\Nas whereDescription($value)
 * @method static |\App\Models\Nas whereId($value)
 * @method static |\App\Models\Nas whereNasname($value)
 * @method static |\App\Models\Nas wherePorts($value)
 * @method static |\App\Models\Nas whereSecret($value)
 * @method static |\App\Models\Nas whereServer($value)
 * @method static |\App\Models\Nas whereShortname($value)
 * @method static |\App\Models\Nas whereType($value)
 * @mixin \Eloquent
 */


		public $id;
		public $nasname;
		public $shortname;
		public $type;
		public $ports;
		public $secret;
		public $server;
		public $community;
		public $description;



	/**
	 * Bütün Nas Tablosunu  getirmesini sağlayalım
	 * $this->fetchAll'ı genişlettiğimiz (extend) model sınıfı aracılığıyla kullanıyoruz
	 * @return array
	 */
	/**
	 * Bütün Nas Tablosundan  tek bir satırı getirmesini sağlayalım
	 * $this->fetch'ı genişlettiğimiz (extend) model sınıfı aracılığıyla kullanıyoruz
	 * @return array
	 */
	public function whereCommunity($value)
	{
		$Data = $this->fetchAll('SELECT * FROM Nas WHERE community={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->id=$modelData['id'];
				$classModelData->nasname=$modelData['nasname'];
				$classModelData->shortname=$modelData['shortname'];
				$classModelData->type=$modelData['type'];
				$classModelData->ports=$modelData['ports'];
				$classModelData->secret=$modelData['secret'];
				$classModelData->server=$modelData['server'];
				$classModelData->community=$modelData['community'];
				$classModelData->description=$modelData['description'];

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

	public function whereDescription($value)
	{
		$Data = $this->fetchAll('SELECT * FROM Nas WHERE description={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->id=$modelData['id'];
				$classModelData->nasname=$modelData['nasname'];
				$classModelData->shortname=$modelData['shortname'];
				$classModelData->type=$modelData['type'];
				$classModelData->ports=$modelData['ports'];
				$classModelData->secret=$modelData['secret'];
				$classModelData->server=$modelData['server'];
				$classModelData->community=$modelData['community'];
				$classModelData->description=$modelData['description'];

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

	public function whereId($value)
	{
		$Data = $this->fetchAll('SELECT * FROM Nas WHERE id={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->id=$modelData['id'];
				$classModelData->nasname=$modelData['nasname'];
				$classModelData->shortname=$modelData['shortname'];
				$classModelData->type=$modelData['type'];
				$classModelData->ports=$modelData['ports'];
				$classModelData->secret=$modelData['secret'];
				$classModelData->server=$modelData['server'];
				$classModelData->community=$modelData['community'];
				$classModelData->description=$modelData['description'];

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

	public function whereNasname($value)
	{
		$Data = $this->fetchAll('SELECT * FROM Nas WHERE nasname={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->id=$modelData['id'];
				$classModelData->nasname=$modelData['nasname'];
				$classModelData->shortname=$modelData['shortname'];
				$classModelData->type=$modelData['type'];
				$classModelData->ports=$modelData['ports'];
				$classModelData->secret=$modelData['secret'];
				$classModelData->server=$modelData['server'];
				$classModelData->community=$modelData['community'];
				$classModelData->description=$modelData['description'];

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

	public function wherePorts($value)
	{
		$Data = $this->fetchAll('SELECT * FROM Nas WHERE ports={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->id=$modelData['id'];
				$classModelData->nasname=$modelData['nasname'];
				$classModelData->shortname=$modelData['shortname'];
				$classModelData->type=$modelData['type'];
				$classModelData->ports=$modelData['ports'];
				$classModelData->secret=$modelData['secret'];
				$classModelData->server=$modelData['server'];
				$classModelData->community=$modelData['community'];
				$classModelData->description=$modelData['description'];

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

	public function whereSecret($value)
	{
		$Data = $this->fetchAll('SELECT * FROM Nas WHERE secret={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->id=$modelData['id'];
				$classModelData->nasname=$modelData['nasname'];
				$classModelData->shortname=$modelData['shortname'];
				$classModelData->type=$modelData['type'];
				$classModelData->ports=$modelData['ports'];
				$classModelData->secret=$modelData['secret'];
				$classModelData->server=$modelData['server'];
				$classModelData->community=$modelData['community'];
				$classModelData->description=$modelData['description'];

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

	public function whereServer($value)
	{
		$Data = $this->fetchAll('SELECT * FROM Nas WHERE server={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->id=$modelData['id'];
				$classModelData->nasname=$modelData['nasname'];
				$classModelData->shortname=$modelData['shortname'];
				$classModelData->type=$modelData['type'];
				$classModelData->ports=$modelData['ports'];
				$classModelData->secret=$modelData['secret'];
				$classModelData->server=$modelData['server'];
				$classModelData->community=$modelData['community'];
				$classModelData->description=$modelData['description'];

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

	public function whereType($value)
	{
		$Data = $this->fetchAll('SELECT * FROM Nas WHERE type={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->id=$modelData['id'];
				$classModelData->nasname=$modelData['nasname'];
				$classModelData->shortname=$modelData['shortname'];
				$classModelData->type=$modelData['type'];
				$classModelData->ports=$modelData['ports'];
				$classModelData->secret=$modelData['secret'];
				$classModelData->server=$modelData['server'];
				$classModelData->community=$modelData['community'];
				$classModelData->description=$modelData['description'];

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


	
}

<?php

/**
 * RadAcct dosyası
 * RadAcct tablosunu temsil edecek
 */
class RadAcct extends model
{
/**
 * @property int $RadAcctId
 * @property string $AcctSessionId
 * @property string $AcctUniqueId
 * @property string $UserName
 * @property string $Realm
 * @property string $NASIPAddress
 * @property string $NASPortId
 * @property string $NASPortType
 * @property \Carbon\Carbon $AcctStartTime
 * @property \Carbon\Carbon $AcctStopTime
 * @property int $AcctSessionTime
 * @property string $AcctAuthentic
 * @property string $ConnectInfo_start
 * @property string $ConnectInfo_stop
 * @property int|null $AcctInputOctets
 * @property int|null $AcctOutputOctets
 * @property string $CalledStationId
 * @property string $CallingStationId
 * @property string $AcctTerminateCause
 * @property string $ServiceType
 * @property string $FramedProtocol
 * @property string $FramedIPAddress
 * @property int $AcctStartDelay
 * @property int $AcctStopDelay
 * @property-write mixed $acct_start_time
 * @property-write mixed $acct_stop_time
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereAcctAuthentic($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereAcctInputOctets($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereAcctOutputOctets($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereAcctSessionId($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereAcctSessionTime($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereAcctStartDelay($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereAcctStartTime($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereAcctStopDelay($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereAcctStopTime($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereAcctTerminateCause($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereAcctUniqueId($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereCalledStationId($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereCallingStationId($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereConnectInfoStart($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereConnectInfoStop($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereFramedIPAddress($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereFramedProtocol($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereNASIPAddress($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereNASPortId($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereNASPortType($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereRadAcctId($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereRealm($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereServiceType($value)
 * @method public \Illuminate\Database\Eloquent\Builder|\App\Models\RadAcct whereUserName($value)
 */


		public $RadAcctId;
		public $AcctSessionId;
		public $AcctUniqueId;
		public $UserName;
		public $Realm;
		public $NASIPAddress;
		public $NASPortId;
		public $NASPortType;
		public $AcctStartTime;
		public $AcctStopTime;
		public $AcctSessionTime;
		public $AcctAuthentic;
		public $ConnectInfo_start;
		public $ConnectInfo_stop;
		public $AcctInputOctets=null;
		public $AcctOutputOctets=null;
		public $CalledStationId;
		public $CallingStationId;
		public $ServiceType;
		public $FramedProtocol;
		public $FramedIPAddress;
		public $AcctStartDelay;
		public $AcctStopDelay;
		public $acct_start_time;
		public $acct_stop_time;



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
	public function whereAcctAuthentic($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE AcctAuthentic={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereAcctInputOctets($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE AcctInputOctets={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereAcctOutputOctets($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE AcctOutputOctets={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereAcctSessionId($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE AcctSessionId={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereAcctSessionTime($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE AcctSessionTime={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereAcctStartDelay($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE AcctStartDelay={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereAcctStartTime($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE AcctStartTime={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereAcctStopDelay($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE AcctStopDelay={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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


	public function whereAcctStopTime($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE AcctStopTime={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereAcctTerminateCause($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE AcctTerminateCause={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereAcctUniqueId($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE AcctUniqueId={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereCalledStationId($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE CalledStationId={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereCallingStationId($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE CallingStationId={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereConnectInfoStart($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE ConnectInfoStart={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereConnectInfoStop($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE ConnectInfoStop={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereFramedIPAddress($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE FramedIPAddress={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereFramedProtocol($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE FramedProtocol={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereNASIPAddress($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE NASIPAddress={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereNASPortId($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE NASPortId={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereNASPortType($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE NASPortType={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereRadAcctId($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE RadAcctId={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereRealm($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE Realm={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereServiceType($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE ServiceType={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

	public function whereUserName($value)
	{
		$Data = $this->fetchAll('SELECT * FROM RadAcct WHERE UserName={$value}');
		$modelListNew = null;
		foreach ($Data as $modelData) 
			{
				$classModelData = new Nas();
				$classModelData->RadAcctId=$modelData['RadAcctId'];
				$classModelData->AcctSessionId=$modelData['AcctSessionId'];
				$classModelData->AcctUniqueId=$modelData['AcctUniqueId'];
				$classModelData->UserName=$modelData['UserName'];
				$classModelData->Realm=$modelData['Realm'];
				$classModelData->NASIPAddress=$modelData['NASIPAddress'];
				$classModelData->NASPortId=$modelData['NASPortId'];
				$classModelData->NASPortType=$modelData['NASPortType'];
				$classModelData->AcctStartTime=$modelData['AcctStartTime'];
				$classModelData->AcctStopTime=$modelData['AcctStopTime'];
				$classModelData->AcctSessionTime=$modelData['AcctSessionTime'];
				$classModelData->AcctAuthentic=$modelData['AcctAuthentic'];
				$classModelData->ConnectInfo_start=$modelData['ConnectInfo_start'];
				$classModelData->ConnectInfo_stop=$modelData['ConnectInfo_stop'];
				$classModelData->AcctInputOctets=$modelData['AcctInputOctets'];
				$classModelData->AcctOutputOctets=$modelData['AcctOutputOctets'];
				$classModelData->CalledStationId=$modelData['CalledStationId'];
				$classModelData->CallingStationId=$modelData['CallingStationId'];
				$classModelData->ServiceType=$modelData['ServiceType'];
				$classModelData->FramedProtocol=$modelData['FramedProtocol'];
				$classModelData->FramedIPAddress=$modelData['FramedIPAddress'];
				$classModelData->AcctStartDelay=$modelData['AcctStartDelay'];
				$classModelData->AcctStopDelay=$modelData['AcctStopDelay'];
				$classModelData->acct_start_time=$modelData['acct_start_time'];
				$classModelData->acct_stop_time=$modelData['acct_stop_time'];

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

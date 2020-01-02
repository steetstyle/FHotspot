<?php

/**
 * RadPostAuth dosyası
 * RadPostAuth tablosunu temsil edecek
 */
class RadPostAuth extends model
{

/**
 * App\Models\RadPostAuth
 *
 * @property int $id
 * @property string $username
 * @property string $pass
 * @property string $reply
 * @property string $authdate
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RadPostAuth whereAuthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RadPostAuth whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RadPostAuth wherePass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RadPostAuth whereReply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RadPostAuth whereUsername($value)
 */



		public $id;
		public $username;
		public $pass;
		public $reply;
		public $authdate;


	
}

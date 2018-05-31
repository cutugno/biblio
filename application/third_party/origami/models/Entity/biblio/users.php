<?php
namespace Entity\biblio;

defined('BASEPATH') OR exit('No direct script access allowed');

class users extends \Origami\Entity
{

	public static $table = 'users';

	/**
	 * @property integer $id
	 * @property string $username
	 * @property string $password
	 * @property string $name
	 * @property date $created
	 * @property date $last_login
	 */
	public static $fields = array(
		array('name' => 'id', 'type' => 'int'),
		array('name' => 'username', 'type' => 'string'),
		array('name' => 'password', 'type' => 'string'),
		array('name' => 'name', 'type' => 'string', 'allow_null' => true),
		array('name' => 'created', 'type' => 'date', 'date_format' => 'Y-m-d H:i:s'),
		array('name' => 'last_login', 'type' => 'date', 'date_format' => 'Y-m-d H:i:s', 'allow_null' => true)
	);

	public static $primary_key = 'id';

}


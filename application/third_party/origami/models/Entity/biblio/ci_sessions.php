<?php
namespace Entity\biblio;

defined('BASEPATH') OR exit('No direct script access allowed');

class ci_sessions extends \Origami\Entity
{

	public static $table = 'ci_sessions';

	/**
	 * @property string $id
	 * @property string $ip_address
	 * @property integer $timestamp
	 * @property string $data
	 */
	public static $fields = array(
		array('name' => 'id', 'type' => 'string'),
		array('name' => 'ip_address', 'type' => 'string'),
		array('name' => 'timestamp', 'type' => 'int'),
		array('name' => 'data', 'type' => 'string')
	);

}


<?php
namespace Entity\biblio;

defined('BASEPATH') OR exit('No direct script access allowed');

class migrations extends \Origami\Entity
{

	public static $table = 'migrations';

	/**
	 * @property integer $version
	 */
	public static $fields = array(
		array('name' => 'version', 'type' => 'int')
	);

}


<?php
/**
 * Model for app_methods
 * 
 * Generated by BlackPHP
 */

class appMethodsModel
{
	use ORM;

	/** @var int $method_id ID de la tabla */
	private $method_id;

	/** @var int $module_id ID del módulo */
	private $module_id;

	/** @var string $method_name Nombre del método */
	private $method_name;

	/** @var string $method_url URL del método (Nombre de la función PHP) */
	private $method_url;

	/** @var string $method_icon Ícono del método en el menú */
	private $method_icon;

	/** @var string $method_description Descripción del método */
	private $method_description;

	/** @var int $default_order Orden por defecto */
	private $default_order;

	/** @var int $element_id Elemento al que requiere permisos */
	private $element_id;

	/** @var int $permissions Tipo de permisos requeridos */
	private $permissions;

	/** @var int $status Estado 0:inactivo, 1:activo */
	private $status;


	/** @var string $_table_name Nombre de la tabla */
	private static $_table_name = "app_methods";

	/** @var string $_table_type Tipo de tabla */
	private static $_table_type = "BASE TABLE";

	/** @var string $_primary_key Llave primaria */
	private static $_primary_key = "method_id";

	/** @var bool $_timestamps La tabla usa marcas de tiempo para la inserción y edición de datos */
	private static $_timestamps = false;

	/** @var bool $_soft_delete La tabla soporta borrado suave */
	private static $_soft_delete = true;

	/** @var int|null $_deleted_status Valor a asignar en caso de borrado suave. */
	private static $_deleted_status = 0;

	/**
	 * Constructor de la clase
	 * 
	 * Se inicializan las propiedades de la clase.
	 * @param bool $default Determina si se utilizan, o no, los valores por defecto
	 * definidos en la base de datos.
	 **/
	public function __construct($default = true)
	{
		if($default)
		{
			$this->status = 1;
		}
	}

	public function getMethodId()
	{
		return $this->method_id;
	}

	public function setMethodId($value)
	{
		$this->method_id = $value === null ? null : (int)$value;
	}

	public function getModuleId()
	{
		return $this->module_id;
	}

	public function setModuleId($value)
	{
		$this->module_id = $value === null ? null : (int)$value;
	}

	public function getMethodName()
	{
		return $this->method_name;
	}

	public function setMethodName($value)
	{
		self::validateStringSize($value, 32);
		$this->method_name = $value === null ? null : (string)$value;
	}

	public function getMethodUrl()
	{
		return $this->method_url;
	}

	public function setMethodUrl($value)
	{
		self::validateStringSize($value, 32);
		$this->method_url = $value === null ? null : (string)$value;
	}

	public function getMethodIcon()
	{
		return $this->method_icon;
	}

	public function setMethodIcon($value)
	{
		self::validateStringSize($value, 32);
		$this->method_icon = $value === null ? null : (string)$value;
	}

	public function getMethodDescription()
	{
		return $this->method_description;
	}

	public function setMethodDescription($value)
	{
		self::validateStringSize($value, 255);
		$this->method_description = $value === null ? null : (string)$value;
	}

	public function getDefaultOrder()
	{
		return $this->default_order;
	}

	public function setDefaultOrder($value)
	{
		$this->default_order = $value === null ? null : (int)$value;
	}

	public function getElementId()
	{
		return $this->element_id;
	}

	public function setElementId($value)
	{
		$this->element_id = $value === null ? null : (int)$value;
	}

	public function getPermissions()
	{
		return $this->permissions;
	}

	public function setPermissions($value)
	{
		$this->permissions = $value === null ? null : (int)$value;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($value)
	{
		$this->status = $value === null ? null : (int)$value;
	}

	public function entityMethods()
	{
		entityMethodsModel::flush();
		return entityMethodsModel::where("method_id", $this->method_id);
	}

	public function userMethods()
	{
		userMethodsModel::flush();
		return userMethodsModel::where("method_id", $this->method_id);
	}
}
?>

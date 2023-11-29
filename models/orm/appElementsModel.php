<?php
/**
 * Model for app_elements
 * 
 * Generated by BlackPHP
 */

class appElementsModel
{
	use ORM;

	/** @var int $element_id ID de la tabla */
	private $element_id;

	/** @var string $element_key Clave del elemento */
	private $element_key;

	/** @var string $element_name Nombre del elemento */
	private $element_name;

	/** @var string $singular_name Nombre singular del elemento */
	private $singular_name;

	/** @var string $element_gender M: Masculino, F: Femenino */
	private $element_gender;

	/** @var int $unique_element Es un elemento único */
	private $unique_element;

	/** @var int $module_id ID del módulo */
	private $module_id;

	/** @var string $method_name Nombre del método para ver detalle */
	private $method_name;

	/** @var int $is_creatable Se pueden crear nuevos elementos */
	private $is_creatable;

	/** @var int $is_updatable Se pueden modificar los elementos */
	private $is_updatable;

	/** @var int $is_deletable Se pueden eliminar los elementos */
	private $is_deletable;

	/** @var string $table_name Nombre de la tabla */
	private $table_name;


	/** @var string $_table_name Nombre de la tabla */
	private static $_table_name = "app_elements";

	/** @var string $_table_type Tipo de tabla */
	private static $_table_type = "BASE TABLE";

	/** @var string $_primary_key Llave primaria */
	private static $_primary_key = "element_id";

	/** @var bool $_timestamps La tabla usa marcas de tiempo para la inserción y edición de datos */
	private static $_timestamps = false;

	/** @var bool $_soft_delete La tabla soporta borrado suave */
	private static $_soft_delete = false;

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
			$this->unique_element = 0;
		}
	}

	public function getElementId()
	{
		return $this->element_id;
	}

	public function setElementId($value)
	{
		$this->element_id = $value === null ? null : (int)$value;
	}

	public function getElementKey()
	{
		return $this->element_key;
	}

	public function setElementKey($value)
	{
		self::validateStringSize($value, 32);
		$this->element_key = $value === null ? null : (string)$value;
	}

	public function getElementName()
	{
		return $this->element_name;
	}

	public function setElementName($value)
	{
		self::validateStringSize($value, 32);
		$this->element_name = $value === null ? null : (string)$value;
	}

	public function getSingularName()
	{
		return $this->singular_name;
	}

	public function setSingularName($value)
	{
		self::validateStringSize($value, 32);
		$this->singular_name = $value === null ? null : (string)$value;
	}

	public function getElementGender()
	{
		return $this->element_gender;
	}

	public function setElementGender($value)
	{
		self::validateStringSize($value, 1);
		$this->element_gender = $value === null ? null : (string)$value;
	}

	public function getUniqueElement()
	{
		return $this->unique_element;
	}

	public function setUniqueElement($value)
	{
		$this->unique_element = $value === null ? null : (int)$value;
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

	public function getIsCreatable()
	{
		return $this->is_creatable;
	}

	public function setIsCreatable($value)
	{
		$this->is_creatable = $value === null ? null : (int)$value;
	}

	public function getIsUpdatable()
	{
		return $this->is_updatable;
	}

	public function setIsUpdatable($value)
	{
		$this->is_updatable = $value === null ? null : (int)$value;
	}

	public function getIsDeletable()
	{
		return $this->is_deletable;
	}

	public function setIsDeletable($value)
	{
		$this->is_deletable = $value === null ? null : (int)$value;
	}

	public function getTableName()
	{
		return $this->table_name;
	}

	public function setTableName($value)
	{
		self::validateStringSize($value, 64);
		$this->table_name = $value === null ? null : (string)$value;
	}

	public function appMethods()
	{
		appMethodsModel::flush();
		return appMethodsModel::where("element_id", $this->element_id);
	}

	public function roleElements()
	{
		roleElementsModel::flush();
		return roleElementsModel::where("element_id", $this->element_id);
	}

	public function userLogs()
	{
		userLogsModel::flush();
		return userLogsModel::where("element_id", $this->element_id);
	}
}
?>
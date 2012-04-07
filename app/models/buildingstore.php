<?php



include_once('building.php');



/**
 * building Store class
 *
 * @version 1.0.0
 */
class Buildingstore {

	// Private Properties
	protected $_db = null;



	/**
	 * Constructor
	 *
	 * @param  object  $database  An Ecl_Db data access object.
	 */
	public function __construct($database) {
		$this->_db = $database;
	}// /->__construct()



/* --------------------------------------------------------------------------------
 * Public Methods
 */



	/**
	 * Convert a domain object to a database row
	 *
	 * @param  object  $object
	 *
	 * @return  array
	 */
	public function convertObjectToRow($object) {
		$row = array (
			'building_id'  => $object->id ,
			'code'         => $object->code ,
			'name'         => $object->name ,
			'site_id'      => $object->site_id ,
		);

		return $row;
	}// /method



	/**
	 * Convert a database row to a domain object
	 *
	 * @param  array  $row
	 *
	 * @return  object
	 */
	public function convertRowToObject($row) {
		$object = $this->newbuilding();

		$object->id = $row['building_id'];
		$object->code = $row['code'];
		$object->name = $row['name'];
		$object->site_id = $row['site_id'];

		return $object;
	}// /method



	/**
	 * Delete a building.
	 *
	 * @param  integer  $id  The record to delete.
	 *
	 * @return  boolean  The operation was successful.
	 */
	public function delete($id) {
		$id = $this->_db->prepareValue($id);
		$affected_count = $this->_db->delete('building', "building_id=$id");

		$binds = array (
			'building_id'  => null ,
		);

		$this->_db->update('item', $binds, "building_id=$id");

		return ($affected_count>0);
	}// /method



	/**
	 * Find the building(s) specified.
	 *
	 * @param  mixed  $id  The ID, or array of IDs, to find.
	 *
	 * @return  mixed  The object, or array of objects, requested.  On fail, null.
	 */
	public function find($id) {
		if (is_array($id)) {
			$id_set = $this->_db->prepareSet($id);

			return $this->_db->newRecordset("
				SELECT *
				FROM building
				WHERE building_id IN $id_set
				ORDER BY name ASC
			", null, array($this, 'convertRowToObject') );
		} else {

			$binds = array (
				'building_id'  => (int) $id ,
			);

			$row_count = $this->_db->query("
				SELECT *
				FROM building
				WHERE building_id=:building_id
			", $binds);

			return $this->_db->getObject(array($this, 'convertRowToObject') );
		}
	}// /method



	/**
	 * Find all buildings.
	 *
	 * @return  mixed  An array of objects.  On fail, null.
	 */
	public function findAll() {
		return $this->_db->newRecordset("
			SELECT *
			FROM building
			ORDER BY name ASC
		", null, array($this, 'convertRowToObject') );
	}// /method



	/**
	 * Find all buildings used by at least one item of equipment, for the given visibility.
	 *
	 * @param  integer  $visibility  (optional) The item visibility to check
	 *
	 * @return  mixed  An array of objects.  On fail, null.
	 */
	public function findAllUsed($visibility = null) {

		$sql__visibility = $this->_db->escapeString($visibility);

		return $this->_db->newRecordset("
			SELECT b.*
			FROM building b INNER JOIN item i ON b.building_id=i.building_id
			WHERE (i.visibility & $sql__visibility)=$sql__visibility
			ORDER BY b.name ASC
		", null, array($this, 'convertRowToObject') );
	}// /method



	/**
	 * Find buildings for department.
	 *
	 * @param  string  $department_id  The department ID to check for.
	 *
	 * @return  mixed  An array of objects.  On fail, null.
	 */
	public function findForDepartment($department_id) {

		$binds = array (
			'department'  => $department_id ,
		);

		return $this->_db->newRecordset("
			SELECT DISTINCT s.*
			FROM building s
				INNER JOIN item i ON s.building_id=i.building
			WHERE i.building=:building
			ORDER BY name ASC
		", $binds, array($this, 'convertRowToObject'));
	}// /method



	/**
	 * Find a building by its name.
	 *
	 * @param  string  $name
	 *
	 * @return  mixed  An array of objects.  On fail, null.
	 */
	public function findForName($name) {

		$binds = array (
			'name'  => $name ,
		);

		$this->_db->query("
			SELECT *
			FROM building
			WHERE name=:name
		", $binds);

		return $this->_db->getObject(array($this, 'convertRowToObject') );
	}// /method



	/**
	 * Insert a new building.
	 *
	 * @param  object  $object  The building to create.
	 *
	 * @return  mixed  The new id created.  On fail, null.
	 */
	public function insert($object) {
		$binds = $this->convertObjectToRow($object);

		unset($binds['building_id']);   // Don't insert the id, we want a new one

		$new_id = $this->_db->insert('building', $binds);

		return ($new_id>0) ? $new_id : null ;
	}// /method



	/**
	 * Get a new instance of a Building object.
	 *
	 * @return  object  A Building object.
	 */
	public function newBuilding() {
		return new Building();
	}// /method



	/**
	 * Update an existing building.
	 *
	 * @param  object  $object
	 *
	 * @return  boolean  The operation was successful.
	 */
	public function update($object) {
		$binds = $this->convertObjectToRow($object);

		$id = $this->_db->prepareValue($object->id);

		$affected_count = $this->_db->update('building', $binds, "building_id=$id");

		return ($affected_count>0);
	}// /method



/* --------------------------------------------------------------------------------
 * Private Methods
 */



}// /class
?>

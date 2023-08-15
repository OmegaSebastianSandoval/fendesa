<?php 
/**
* clase que genera la insercion y edicion  de Im&aacute;genes en la base de datos
*/
class Administracion_Model_DbTable_Imagenes extends Db_Table
{
	/**
	 * [ nombre de la tabla actual]
	 * @var string
	 */
	protected $_name = 'imagenes_galeria';

	/**
	 * [ identificador de la tabla actual en la base de datos]
	 * @var string
	 */
	protected $_id = 'imagen_id';

	/**
	 * insert recibe la informacion de un Im&aacute;genes y la inserta en la base de datos
	 * @param  array Array array con la informacion con la cual se va a realizar la insercion en la base de datos
	 * @return integer      identificador del  registro que se inserto
	 */
	public function insert($data){
		$imagen_nombre = $data['imagen_nombre'];
		$imagen_imagen = $data['imagen_imagen'];
		$imagen_fecha = $data['imagen_fecha'];
		$imagen_estado = $data['imagen_estado'];
		$imagen_album = $data['imagen_album'];
		$query = "INSERT INTO imagenes_galeria( imagen_nombre, imagen_imagen, imagen_fecha, imagen_estado, imagen_album) VALUES ( '$imagen_nombre', '$imagen_imagen', '$imagen_fecha', '$imagen_estado', '$imagen_album')";
		$res = $this->_conn->query($query);
        return mysqli_insert_id($this->_conn->getConnection());
	}

	/**
	 * update Recibe la informacion de un Im&aacute;genes  y actualiza la informacion en la base de datos
	 * @param  array Array Array con la informacion con la cual se va a realizar la actualizacion en la base de datos
	 * @param  integer    identificador al cual se le va a realizar la actualizacion
	 * @return void
	 */
	public function update($data,$id){
		
		$imagen_nombre = $data['imagen_nombre'];
		$imagen_imagen = $data['imagen_imagen'];
		$imagen_fecha = $data['imagen_fecha'];
		$imagen_estado = $data['imagen_estado'];
		$imagen_album = $data['imagen_album'];
		$query = "UPDATE imagenes_galeria SET  imagen_nombre = '$imagen_nombre', imagen_imagen = '$imagen_imagen', imagen_fecha = '$imagen_fecha', imagen_estado = '$imagen_estado', imagen_album = '$imagen_album' WHERE imagen_id = '".$id."'";
		$res = $this->_conn->query($query);
	}
}
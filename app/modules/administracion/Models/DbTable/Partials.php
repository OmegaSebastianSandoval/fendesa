<?php 
/**
* clase que genera la insercion y edicion  de header y footer en la base de datos
*/
class Administracion_Model_DbTable_Partials extends Db_Table
{
	/**
	 * [ nombre de la tabla actual]
	 * @var string
	 */
	protected $_name = 'partials';

	/**
	 * [ identificador de la tabla actual en la base de datos]
	 * @var string
	 */
	protected $_id = 'partials_id';

	/**
	 * insert recibe la informacion de un header y footer y la inserta en la base de datos
	 * @param  array Array array con la informacion con la cual se va a realizar la insercion en la base de datos
	 * @return integer      identificador del  registro que se inserto
	 */
	public function insert($data){
		$partials_color_fondo_header = $data['partials_color_fondo_header'];
		$partials_color_texto_header = $data['partials_color_texto_header'];
		$partials_color_fondo_btn_asociados = $data['partials_color_fondo_btn_asociados'];
		$partials_color_txt_btn_asociados = $data['partials_color_txt_btn_asociados'];
		$partials_color_bandera_asociados = $data['partials_color_bandera_asociados'];
		$partials_color_fondo_btn_afiliate = $data['partials_color_fondo_btn_afiliate'];
		$partials_color_txt_btn_afiliate = $data['partials_color_txt_btn_afiliate'];
		$partials_color_bandera_afiliate = $data['partials_color_bandera_afiliate'];
		$partials_color_fondo_footer = $data['partials_color_fondo_footer'];
		$partials_color_iconos = $data['partials_color_iconos'];
		$partials_color_texto_footer = $data['partials_color_texto_footer'];
		$partials_color_footer_bandera = $data['partials_color_footer_bandera'];
		$query = "INSERT INTO partials( partials_color_fondo_header, partials_color_texto_header, partials_color_fondo_btn_asociados, partials_color_txt_btn_asociados, partials_color_bandera_asociados, partials_color_fondo_btn_afiliate, partials_color_txt_btn_afiliate, partials_color_bandera_afiliate, partials_color_fondo_footer, partials_color_iconos, partials_color_texto_footer, partials_color_footer_bandera) VALUES ( '$partials_color_fondo_header', '$partials_color_texto_header', '$partials_color_fondo_btn_asociados', '$partials_color_txt_btn_asociados', '$partials_color_bandera_asociados', '$partials_color_fondo_btn_afiliate', '$partials_color_txt_btn_afiliate', '$partials_color_bandera_afiliate', '$partials_color_fondo_footer', '$partials_color_iconos', '$partials_color_texto_footer', '$partials_color_footer_bandera')";
		$res = $this->_conn->query($query);
        return mysqli_insert_id($this->_conn->getConnection());
	}

	/**
	 * update Recibe la informacion de un header y footer  y actualiza la informacion en la base de datos
	 * @param  array Array Array con la informacion con la cual se va a realizar la actualizacion en la base de datos
	 * @param  integer    identificador al cual se le va a realizar la actualizacion
	 * @return void
	 */
	public function update($data,$id){
		
		$partials_color_fondo_header = $data['partials_color_fondo_header'];
		$partials_color_texto_header = $data['partials_color_texto_header'];
		$partials_color_fondo_btn_asociados = $data['partials_color_fondo_btn_asociados'];
		$partials_color_txt_btn_asociados = $data['partials_color_txt_btn_asociados'];
		$partials_color_bandera_asociados = $data['partials_color_bandera_asociados'];
		$partials_color_fondo_btn_afiliate = $data['partials_color_fondo_btn_afiliate'];
		$partials_color_txt_btn_afiliate = $data['partials_color_txt_btn_afiliate'];
		$partials_color_bandera_afiliate = $data['partials_color_bandera_afiliate'];
		$partials_color_fondo_footer = $data['partials_color_fondo_footer'];
		$partials_color_iconos = $data['partials_color_iconos'];
		$partials_color_texto_footer = $data['partials_color_texto_footer'];
		$partials_color_footer_bandera = $data['partials_color_footer_bandera'];
		$query = "UPDATE partials SET  partials_color_fondo_header = '$partials_color_fondo_header', partials_color_texto_header = '$partials_color_texto_header', partials_color_fondo_btn_asociados = '$partials_color_fondo_btn_asociados', partials_color_txt_btn_asociados = '$partials_color_txt_btn_asociados', partials_color_bandera_asociados = '$partials_color_bandera_asociados', partials_color_fondo_btn_afiliate = '$partials_color_fondo_btn_afiliate', partials_color_txt_btn_afiliate = '$partials_color_txt_btn_afiliate', partials_color_bandera_afiliate = '$partials_color_bandera_afiliate', partials_color_fondo_footer = '$partials_color_fondo_footer', partials_color_iconos = '$partials_color_iconos', partials_color_texto_footer = '$partials_color_texto_footer', partials_color_footer_bandera = '$partials_color_footer_bandera' WHERE partials_id = '".$id."'";
		$res = $this->_conn->query($query);
	}
}
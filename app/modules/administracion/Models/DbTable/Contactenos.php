<?php 
/**
* clase que genera la insercion y edicion  de contactenos en la base de datos
*/
class Administracion_Model_DbTable_Contactenos extends Db_Table
{
	/**
	 * [ nombre de la tabla actual]
	 * @var string
	 */
	protected $_name = 'contactenos';

	/**
	 * [ identificador de la tabla actual en la base de datos]
	 * @var string
	 */
	protected $_id = 'contactenos_id';

	/**
	 * insert recibe la informacion de un contactenos y la inserta en la base de datos
	 * @param  array Array array con la informacion con la cual se va a realizar la insercion en la base de datos
	 * @return integer      identificador del  registro que se inserto
	 */
	public function insert($data){
		$contactenos_titulo = $data['contactenos_titulo'];
		$contactenos_color_txt = $data['contactenos_color_txt'];
		$contactenos_color_fondo = $data['contactenos_color_fondo'];
		$contactenos_color_bandera = $data['contactenos_color_bandera'];
		$contactenos_cuadro_color = $data['contactenos_cuadro_color'];
		$contactenos_cuadro_img_fondo = $data['contactenos_cuadro_img_fondo'];
		$contactenos_cuadro_img = $data['contactenos_cuadro_img'];
		$contactenos_img_fendy = $data['contactenos_img_fendy'];
		$contactenos_titulo_boton = $data['contactenos_titulo_boton'];
		$contactenos_boton_color = $data['contactenos_boton_color'];
		$contactenos_boton_color_fondo = $data['contactenos_boton_color_fondo'];
		$contactenos_logo = $data['contactenos_logo'];
		$contactenos_logo2 = $data['contactenos_logo2'];
		$contactenos_color_bandera2 = $data['contactenos_color_bandera2'];
		$contactenos_color_fondo_1 = $data['contactenos_color_fondo_1'];
		$contactenos_color_fondo_2 = $data['contactenos_color_fondo_2'];
		$contactenos_escribenos = $data['contactenos_escribenos'];
		$contactenos_color_escribenos = $data['contactenos_color_escribenos'];
		$contactenos_descripcion = $data['contactenos_descripcion'];
		$contactenos_btn1_color = $data['contactenos_btn1_color'];
		$contactenos_btn1_img = $data['contactenos_btn1_img'];
		$contactenos_btn1_link = $data['contactenos_btn1_link'];
		$contactenos_btn2_color = $data['contactenos_btn2_color'];
		$contactenos_btn2_img = $data['contactenos_btn2_img'];
		$contactenos_btn2_link = $data['contactenos_btn2_link'];
		$contactenos_btn3_color = $data['contactenos_btn3_color'];
		$contactenos_btn3_img = $data['contactenos_btn3_img'];
		$contactenos_btn3_link = $data['contactenos_btn3_link'];
		$contactenos_btn4_color = $data['contactenos_btn4_color'];
		$contactenos_btn4_img = $data['contactenos_btn4_img'];
		$contactenos_btn4_link = $data['contactenos_btn4_link'];
		$contactenos_btn4_txt = $data['contactenos_btn4_txt'];
		$contactenos_btn5_color = $data['contactenos_btn5_color'];
		$contactenos_btn5_img = $data['contactenos_btn5_img'];
		$contactenos_btn5_link = $data['contactenos_btn5_link'];
		$contactenos_btn5_txt = $data['contactenos_btn5_txt'];
		$contactenos_btn6_color = $data['contactenos_btn6_color'];
		$contactenos_btn6_img = $data['contactenos_btn6_img'];
		$contactenos_btn6_txt = $data['contactenos_btn6_txt'];
		$query = "INSERT INTO contactenos( contactenos_titulo, contactenos_color_txt, contactenos_color_fondo, contactenos_color_bandera, contactenos_cuadro_color, contactenos_cuadro_img_fondo, contactenos_cuadro_img, contactenos_img_fendy, contactenos_titulo_boton, contactenos_boton_color, contactenos_boton_color_fondo, contactenos_logo, contactenos_logo2, contactenos_color_bandera2, contactenos_color_fondo_1, contactenos_color_fondo_2, contactenos_escribenos, contactenos_color_escribenos, contactenos_descripcion, contactenos_btn1_color, contactenos_btn1_img, contactenos_btn1_link, contactenos_btn2_color, contactenos_btn2_img, contactenos_btn2_link, contactenos_btn3_color, contactenos_btn3_img, contactenos_btn3_link, contactenos_btn4_color, contactenos_btn4_img, contactenos_btn4_link, contactenos_btn4_txt, contactenos_btn5_color, contactenos_btn5_img, contactenos_btn5_link, contactenos_btn5_txt, contactenos_btn6_color, contactenos_btn6_img, contactenos_btn6_txt) VALUES ( '$contactenos_titulo', '$contactenos_color_txt', '$contactenos_color_fondo', '$contactenos_color_bandera', '$contactenos_cuadro_color', '$contactenos_cuadro_img_fondo', '$contactenos_cuadro_img', '$contactenos_img_fendy', '$contactenos_titulo_boton', '$contactenos_boton_color', '$contactenos_boton_color_fondo', '$contactenos_logo', '$contactenos_logo2', '$contactenos_color_bandera2', '$contactenos_color_fondo_1', '$contactenos_color_fondo_2', '$contactenos_escribenos', '$contactenos_color_escribenos', '$contactenos_descripcion', '$contactenos_btn1_color', '$contactenos_btn1_img', '$contactenos_btn1_link', '$contactenos_btn2_color', '$contactenos_btn2_img', '$contactenos_btn2_link', '$contactenos_btn3_color', '$contactenos_btn3_img', '$contactenos_btn3_link', '$contactenos_btn4_color', '$contactenos_btn4_img', '$contactenos_btn4_link', '$contactenos_btn4_txt', '$contactenos_btn5_color', '$contactenos_btn5_img', '$contactenos_btn5_link', '$contactenos_btn5_txt', '$contactenos_btn6_color', '$contactenos_btn6_img', '$contactenos_btn6_txt')";
		$res = $this->_conn->query($query);
        return mysqli_insert_id($this->_conn->getConnection());
	}

	/**
	 * update Recibe la informacion de un contactenos  y actualiza la informacion en la base de datos
	 * @param  array Array Array con la informacion con la cual se va a realizar la actualizacion en la base de datos
	 * @param  integer    identificador al cual se le va a realizar la actualizacion
	 * @return void
	 */
	public function update($data,$id){
		
		$contactenos_titulo = $data['contactenos_titulo'];
		$contactenos_color_txt = $data['contactenos_color_txt'];
		$contactenos_color_fondo = $data['contactenos_color_fondo'];
		$contactenos_color_bandera = $data['contactenos_color_bandera'];
		$contactenos_cuadro_color = $data['contactenos_cuadro_color'];
		$contactenos_cuadro_img_fondo = $data['contactenos_cuadro_img_fondo'];
		$contactenos_cuadro_img = $data['contactenos_cuadro_img'];
		$contactenos_img_fendy = $data['contactenos_img_fendy'];
		$contactenos_titulo_boton = $data['contactenos_titulo_boton'];
		$contactenos_boton_color = $data['contactenos_boton_color'];
		$contactenos_boton_color_fondo = $data['contactenos_boton_color_fondo'];
		$contactenos_logo = $data['contactenos_logo'];
		$contactenos_logo2 = $data['contactenos_logo2'];
		$contactenos_color_bandera2 = $data['contactenos_color_bandera2'];
		$contactenos_color_fondo_1 = $data['contactenos_color_fondo_1'];
		$contactenos_color_fondo_2 = $data['contactenos_color_fondo_2'];
		$contactenos_escribenos = $data['contactenos_escribenos'];
		$contactenos_color_escribenos = $data['contactenos_color_escribenos'];
		$contactenos_descripcion = $data['contactenos_descripcion'];
		$contactenos_btn1_color = $data['contactenos_btn1_color'];
		$contactenos_btn1_img = $data['contactenos_btn1_img'];
		$contactenos_btn1_link = $data['contactenos_btn1_link'];
		$contactenos_btn2_color = $data['contactenos_btn2_color'];
		$contactenos_btn2_img = $data['contactenos_btn2_img'];
		$contactenos_btn2_link = $data['contactenos_btn2_link'];
		$contactenos_btn3_color = $data['contactenos_btn3_color'];
		$contactenos_btn3_img = $data['contactenos_btn3_img'];
		$contactenos_btn3_link = $data['contactenos_btn3_link'];
		$contactenos_btn4_color = $data['contactenos_btn4_color'];
		$contactenos_btn4_img = $data['contactenos_btn4_img'];
		$contactenos_btn4_link = $data['contactenos_btn4_link'];
		$contactenos_btn4_txt = $data['contactenos_btn4_txt'];
		$contactenos_btn5_color = $data['contactenos_btn5_color'];
		$contactenos_btn5_img = $data['contactenos_btn5_img'];
		$contactenos_btn5_link = $data['contactenos_btn5_link'];
		$contactenos_btn5_txt = $data['contactenos_btn5_txt'];
		$contactenos_btn6_color = $data['contactenos_btn6_color'];
		$contactenos_btn6_img = $data['contactenos_btn6_img'];
		$contactenos_btn6_txt = $data['contactenos_btn6_txt'];
		$query = "UPDATE contactenos SET  contactenos_titulo = '$contactenos_titulo', contactenos_color_txt = '$contactenos_color_txt', contactenos_color_fondo = '$contactenos_color_fondo', contactenos_color_bandera = '$contactenos_color_bandera', contactenos_cuadro_color = '$contactenos_cuadro_color', contactenos_cuadro_img_fondo = '$contactenos_cuadro_img_fondo', contactenos_cuadro_img = '$contactenos_cuadro_img', contactenos_img_fendy = '$contactenos_img_fendy', contactenos_titulo_boton = '$contactenos_titulo_boton', contactenos_boton_color = '$contactenos_boton_color', contactenos_boton_color_fondo = '$contactenos_boton_color_fondo', contactenos_logo = '$contactenos_logo', contactenos_logo2 = '$contactenos_logo2', contactenos_color_bandera2 = '$contactenos_color_bandera2', contactenos_color_fondo_1 = '$contactenos_color_fondo_1', contactenos_color_fondo_2 = '$contactenos_color_fondo_2', contactenos_escribenos = '$contactenos_escribenos', contactenos_color_escribenos = '$contactenos_color_escribenos', contactenos_descripcion = '$contactenos_descripcion', contactenos_btn1_color = '$contactenos_btn1_color', contactenos_btn1_img = '$contactenos_btn1_img', contactenos_btn1_link = '$contactenos_btn1_link', contactenos_btn2_color = '$contactenos_btn2_color', contactenos_btn2_img = '$contactenos_btn2_img', contactenos_btn2_link = '$contactenos_btn2_link', contactenos_btn3_color = '$contactenos_btn3_color', contactenos_btn3_img = '$contactenos_btn3_img', contactenos_btn3_link = '$contactenos_btn3_link', contactenos_btn4_color = '$contactenos_btn4_color', contactenos_btn4_img = '$contactenos_btn4_img', contactenos_btn4_link = '$contactenos_btn4_link', contactenos_btn4_txt = '$contactenos_btn4_txt', contactenos_btn5_color = '$contactenos_btn5_color', contactenos_btn5_img = '$contactenos_btn5_img', contactenos_btn5_link = '$contactenos_btn5_link', contactenos_btn5_txt = '$contactenos_btn5_txt', contactenos_btn6_color = '$contactenos_btn6_color', contactenos_btn6_img = '$contactenos_btn6_img', contactenos_btn6_txt = '$contactenos_btn6_txt' WHERE contactenos_id = '".$id."'";
		$res = $this->_conn->query($query);
	}
}
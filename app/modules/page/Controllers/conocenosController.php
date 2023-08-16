<?php

use PHP_CodeSniffer\Standards\Squiz\Sniffs\Strings\EchoedStringsSniff;

class Page_conocenosController extends Page_mainController
{
  public function indexAction()
  {
    $contactoModel = new Page_Model_DbTable_Contactenos();
    $imagenesModel = new Page_Model_DbTable_Imagenes();


    $this->_view->contactanos = $contactoModel->getById(2);
    $this->_view->botones = $contactoModel->getList("contactenos_padre = 2", "orden ASC");

    $id = $this->_getSanitizedParam("id");
    if ($id) {
      $this->_view->primerRegistro = $primerRegistro = $contactoModel->getById($id);
      $this->_view->imagenes = $imagenesModel->getList("imagen_album = '$primerRegistro->contactenos_id'", "orden ASC");
      if ($primerRegistro->tipo == 2) {
        $this->_view->contenidoCarousel =  $contenidoCarousel = $contactoModel->getList("contactenos_padre = '$id' AND tipo=3", "");
      }
    } else {
      $this->_view->primerRegistro = $primerRegistro = $contactoModel->getList("contactenos_padre = 2", "")[0];
      $this->_view->imagenes = $imagenesModel->getList("imagen_album = '$primerRegistro->contactenos_id'", "orden ASC");
      if ($primerRegistro->tipo == 2) {
        $this->_view->contenidoCarousel = $contenidoCarousel = $contactoModel->getList("contactenos_padre = '$id' AND tipo=3", "");
      }
    }


   /*  echo '<pre>';
    print_r($this->_view->contenidoCarousel);
    echo '</pre>'; */
  }
}

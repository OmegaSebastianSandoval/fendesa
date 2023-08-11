<?php

use PHP_CodeSniffer\Standards\Squiz\Sniffs\Strings\EchoedStringsSniff;

class Page_contactoController extends Page_mainController
{
  public function indexAction()
  {
    $contactoModel = new Page_Model_DbTable_Contactenos();
    $publicidadModel = new Page_Model_DbTable_Publicidad();

    $this->_view->contactanos = $contactoModel->getById(1);
    $this->_view->status = $this->_getSanitizedParam('status');

 /* echo '<pre>';
 print_r($this->_view->contactanos);
 echo '</pre>'; */
    $this->_view->botonesFlotantes = $publicidadModel->getList("publicidad_seccion = '102' AND publicidad_estado = 1", "");
  }
  public function enviarAction()
  {
    $this->setLayout('blanco');

    $data = array();
    $res = array();
    $data['nombre'] = $this->_getSanitizedParam('nombre');

    $data['lastname'] = $this->_getSanitizedParam('lastname');
    $data['phone'] = $this->_getSanitizedParam('phone');
    $data['message'] = $this->_getSanitizedParam('message');



    $data['email'] = $this->_getSanitizedParam('email');
    $data['asunto'] = $this->_getSanitizedParam('asunto');
    $data['mensaje'] = $this->_getSanitizedParam('mensaje');

    if ($data['lastname'] != 1 ||  $data['phone'] != 1 || $data['message'] != '') {
      header("Location: /page/contacto?status=ok1");
    } else {
      $mailModel = new Core_Model_Sendingemail($this->_view);

      if ($mailModel->sendMailContact($data) == 1) {
        $res['status'] = 'ok';
      } else {  
        $res['status'] = 'error';
      }
      header("Location: /page/contacto?status=" . $res['status']);
    }
  }
}

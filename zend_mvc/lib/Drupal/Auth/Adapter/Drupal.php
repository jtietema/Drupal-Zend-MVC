<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Zend/Auth/Adapter/Interface.php';

/**
 * Description of Drupal
 *
 * @author jeroen
 */
class Drupal_Auth_Adapter_Drupal  implements Zend_Auth_Adapter_Interface
{
    public function authenticate()
    {
      global $user;

      if ($user->uid != 0){

      }
    }
}

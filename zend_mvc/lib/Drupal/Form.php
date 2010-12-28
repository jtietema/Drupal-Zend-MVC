<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Zend/Form.php';

/**
 * Description of Form
 *
 * @author jeroen
 */
class Drupal_Form extends Zend_Form {
    public function isValid($data) {
      $valid = parent::isValid($data);
      if (!$valid) {
        $errors = $this->getMessages();
        foreach ($errors as $object => $messages) {
          foreach($messages as $message) {
            drupal_set_message($object . ': ' . $message, 'error');
          }
        }
      }
      return $valid;
    }
}

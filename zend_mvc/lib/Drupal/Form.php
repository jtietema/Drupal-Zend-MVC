<?php
/**
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.voidwalkers.nl/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@voidwalkers.nl so we can send you a copy immediately.
 *
 * @copyright Copyright (c) 2010-2011 Voidwalkers (http://www.voidwalkers.nl)
 * @license http://www.voidwalkers.nl/license/new-bsd The New BSD License
 */

require_once 'Zend/Form.php';

/**
 * Provides form feedback from Zend_Form to Drupal
 *
 * @author Jeroen Tietema <jeroen@voidwalkers.nl>
 */
class Drupal_Form extends Zend_Form {

  /**
   * Wrapper arround Zend_Form::isValid
   * Adds Form errors to Drupal
   *
   * @param array $data
   * @return boolean
   */
  public function isValid($data)
  {
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

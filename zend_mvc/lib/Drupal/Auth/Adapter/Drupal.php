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

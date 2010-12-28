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

/**
 * Zend_Translate_Adapter for Drupal translation system
 *
 * @author Jeroen Tietema <jeroen@voidwalkers.nl>
 */
class Drupal_Translate_Adapter extends Zend_Translate_Adapter {

  /**
   * Pass translation on to Drupal
   * 
   * @param string $messageId
   * @return string
   */
  public function translate($messageId)
  {
    return t($messageId);
  }

  /**
   * We don't need to load anything as we pass everthing to Drupal
   */
  public function _loadTranslationData()
  {}

  public function toString()
  {
    return "Drupal";
  }
}

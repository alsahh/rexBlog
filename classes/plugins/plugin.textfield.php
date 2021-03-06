<?php

/**
 * Copyright (c) 2010, mediastuttgart werbeagentur, http://www.mediastuttgart.de
 *
 * Diese Datei steht unter der MIT-Lizenz. Der Lizenztext befindet sich in der
 * beiliegenden Lizenz Datei. Alternativ kann der Lizenztext auch unter
 * folgenden Web-Adressen eingesehen werden.
 *
 * http://www.opensource.org/licenses/mit-license.php
 * http://de.wikipedia.org/wiki/MIT-Lizenz
 */

abstract class _rex488_content_plugin_textfield
{
  const ID   = 'textfield';
  const NAME = '01.01 - Einfaches Textfeld';

  public static function read_element($index, $value, $article_plugin_settings)
  {
    $article_plugin_settings['excerpt'] = (!empty($article_plugin_settings['excerpt']) && $article_plugin_settings['excerpt'] == 'on') ? ' checked="checked"' : '';

    eval("include _rex488_PATH . 'classes/plugins/templates/backend/template." . self::ID . ".phtml';");
  }

  public static function read_id()
  {
    return self::ID;
  }

  public static function read_name()
  {
    return self::NAME;
  }
}

?>

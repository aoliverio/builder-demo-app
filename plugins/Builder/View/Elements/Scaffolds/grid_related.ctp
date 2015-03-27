<?php

/**
 * Description ...
 * 
 * Licensed under The MIT License
 * Redistributions of files must retain the below copyright notice.
 *
 * @author     Antonio Oliverio <antonio.oliverio@gmail.com>
 * @copyright  Copyright 2014, Antonio Oliverio (http://www.aoliverio.com)
 * @license    MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @since      CakePHP(tm) v 2.1.1
 */
pr($scaffold);
extract($scaffold);

/**
 * 
 */
$tab_options = array(
    array(
        'label' => 'Main Tab',
        'badge' => 60,
        'active' => TRUE,
        'content' => array(
            'text' => 'main tab',
        )
    ),
    array(
        'label' => 'Second Tab',
        'badge' => 60,
        'active' => FALSE,
        'content' => array(
            'text' => 'second tab',
        ),
    )
);
$panel = array(
    'header' => $scaffold['title_for_grid'] . ' <small>Related</small>',
    'body' => $this->element('Bootstrap/tabs', array('options' => $tab_options)),
    'footer' => NULL
);
echo $this->element('Bootstrap/panel', array('panel' => $panel));

<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php echo Configure::read('Builder.app_name'); ?>: <?php echo $this->fetch('title'); ?></title>
        <?php echo $this->Html->meta('icon'); ?>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Custom theme -->
        <?php echo $this->Html->css('custom'); ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Fixed navbar -->
        <?php echo $this->element('navigation'); ?>
        <!-- Page content -->
        <div class="container">
            <?php echo $this->Session->flash(); ?>
            <?php if (isset($title_for_layout)): ?>
                <h1 class="page-header"><?php echo $title_for_layout; ?></h1>
            <?php endif; ?>
            <?php echo $this->fetch('content'); ?>
        </div>
        <!-- Sticky footer -->
        <?php echo $this->element('sticky-footer'); ?>
    </body>
</html>
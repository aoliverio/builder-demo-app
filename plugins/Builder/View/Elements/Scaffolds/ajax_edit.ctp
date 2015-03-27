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
extract($scaffold);
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title" id="myModalLabel"><?php echo $singularHumanName; ?> - EDIT data</h4>
</div>
<div class="modal-body">
    <!-- Render datagrid content -->
    <?php echo $this->Form->create($modelClass, array('type' => 'file')); ?>
    <?php
    /**
     * 
     */
    $html = null;
    $Model = ClassRegistry::init($modelClass);

    foreach ($fields as $fieldName => $fieldOptions) :

        /**
         * If $fieldName is numeric
         */
        if (is_numeric($fieldName) && !is_array($fieldOptions)) {
            $fieldName = $fieldOptions;
            $fieldOptions = array();
        }

        /**
         * Blacklist
         */
        $entity = explode('.', $fieldName);
        if (is_array($blacklist) && (in_array($fieldName, $blacklist) || in_array(end($entity), $blacklist)))
            continue;

        /**
         * Set options for all inputs
         */
        $uid = $modelClass . '_' . $fieldName;
        $caption = str_replace('_id', '', $fieldName);
        $caption = Inflector::humanize($caption);

        $fieldOptions['label'] = false;
        $fieldOptions['div'] = false;
        $fieldOptions['id'] = $uid;

        /**
         * For the fields in associations
         */
        foreach ($Model->belongsTo as $bgOptions) :
            if ($bgOptions['foreignKey'] == $fieldName) :
                $belongModel = ClassRegistry::init($bgOptions['className']);

                /**
                 * Set options for SELECT input
                 */
                $options['type'] = null;
                $options['empty'] = 'choose one ...';
                $options['options'] = $belongModel->find('list', array(
                    'conditions' => $bgOptions['conditions'],
                    'fields' => $bgOptions['fields'],
                    'order' => $bgOptions['order'],
                ));
                $options['selected'] = $data[$modelClass][$fieldName];
                $fieldOptions = array_merge($fieldOptions, $options);
            endif;
        endforeach;

        /**
         * Default template for scaffold row
         */
        $html .= '<div class="form-group">';
        $html .= '<label for="' . $uid . '" class="col-sm-2 control-label">' . $caption . '</label>';
        $html .= '<div class="col-sm-10">' . $this->Form->input($fieldName, $fieldOptions) . '</div>';
        $html .= '</div>';

    endforeach;
    echo $html;
    ?>
    <hr/>
    <?php echo $this->Form->end(__d('cake', $actionButton)); ?>
</div>
<div class="modal-footer">
    EDIT data
</div>
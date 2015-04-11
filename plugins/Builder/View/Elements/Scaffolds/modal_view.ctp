<?php
extract($scaffold);
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4 class="modal-title" id="myModalLabel"><?php echo $singularHumanName; ?> - View item</h4>
</div>
<div class="modal-body">
    <!-- Render datagrid  -->
    <?php if ($data) : ?>
        <form class="form-horizontal" role="form">
            <?php
            $html = null;
            foreach ($fields as $fieldName => $fieldOptions) :

                /**
                 * 
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
                 * Field settings
                 */
                $uid = $modelClass . '_' . $fieldName;
                $isKeyField = false;

                /**
                 * Render key field
                 */
                if (!empty($associations['belongsTo'])) {
                    foreach ($associations['belongsTo'] as $_alias => $_details) {
                        if ($fieldName === $_details['foreignKey']) {
                            $isKeyField = true;
                            $fieldHtml = $this->Html->link($data[$_alias][$_details['displayField']], array('controller' => $_details['controller'], 'action' => 'view', $data[$_alias][$_details['primaryKey']]));
                        }
                    }
                }

                /**
                 * Render not-key field
                 */
                if (!$isKeyField) {
                    $type = (key_exists($fieldName, $fieldTypes)) ? $fieldTypes[$fieldName] : NULL;
                    switch ($type) {
                        case 'boolean':
                            $checked = ($data[$modelClass][$fieldName] == 1) ? 'checked' : '';
                            $fieldHtml = '<input type="checkbox" ' . $checked . ' disabled />';
                            break;
                        case 'file':
                            $fieldHtml = $this->Html->link(h($val), h($val)) . h($val);
                            break;
                        default:
                            $fieldHtml = '&nbsp;';
                            if (!empty($data[$modelClass][$fieldName]))
                                $fieldHtml = $data[$modelClass][$fieldName];
                            break;
                    }
                }

                /**
                 * Default template for scaffold row
                 */
                $html .= '<label>' . $fieldOptions['label'] . '</label>';
                $html .= '<p>' . $fieldHtml . '</p>';
                $html .= '<hr/>'; 

            endforeach;
            echo $html;
            ?>
        </form>
    <?php endif; ?>
</div>
<div class="modal-footer">
    <small>Use datagrid view</small>
</div>
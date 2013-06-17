<?php echo $this->Form->create('#', array('id' => 'users_index')); ?>
<table class="table table-hover table-bordered">
    <thead>        
        <tr>
            <th width="5%"><input type="checkbox" name="checker" id="checker" /></th>
            <th><?php echo __d('cloggy','Aro'); ?></th>  
            <th><?php echo __d('cloggy','Object'); ?></th>
            <th><?php echo __d('cloggy','Adapter'); ?></th>
            <th><?php echo __d('cloggy','Permission'); ?></th>
            <th><?php echo __d('cloggy','Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($perms)) : ?>
            <?php foreach ($perms as $perm) : ?>
                <tr>
                    <td><input type="checkbox" name="perm[]" value="<?php echo $perm['CloggyUserPerm']['id']; ?>" /></td>
                    <td>
                        <?php
                        
                        if ($perm['CloggyUserPerm']['aro_object'] == '*') {
                            $aro = 'All';
                        }else{
                            $aro = $perm['CloggyUserRole']['role_name'];
                        }
                        
                        echo $this->Html->link(
                                $aro, 
                                CloggyCommon::urlModule('cloggy_users', 'cloggy_users_perm/edit/'.$perm['CloggyUserPerm']['id']));
                        ?>
                    </td>
                    <td>
                        <?php echo $perm['CloggyUserPerm']['aco_object']; ?>
                    </td>
                    <td>
                        <?php echo $perm['CloggyUserPerm']['aco_adapter']; ?>
                    </td>
                    <td>
                        <?php
                        if($perm['CloggyUserPerm']['allow'] == 1) echo '<span class="label label-success">Allow</span>';
                        if($perm['CloggyUserPerm']['allow'] == 0) echo '<span class="label label-important">Deny</span>';
                        ?>
                    </td>                    
                    <td>
                        <?php echo $this->Html->link(__d('cloggy','Edit'), CloggyCommon::urlModule('cloggy_users', 'cloggy_users_perm/edit/'.$perm['CloggyUserPerm']['id']));
                        ?>
                        |
                        <?php echo $this->Html->link(__d('cloggy','Remove'), 
                                CloggyCommon::urlModule('cloggy_users', 'cloggy_users_perm/remove/'.$perm['CloggyUserPerm']['id']),
                                array(
                                    'class' => 'perm_remove'
                                ));
                        ?>                                                
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7"><?php echo __d('cloggy','No data available'); ?></td>
            </tr>
        <?php endif; ?>	
        <tr id="checkbox_all" style="display:none">
            <td colspan="8">
                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo __d('cloggy','With Selected'); ?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link(__d('cloggy','Delete All'), '#', array('id' => 'action_delete_all', 'class' => 'action_js')); ?></li>                        
                    </ul>
                </div>	
            </td>
        </tr>	
    </tbody>
</table>
<?php echo $this->Form->end(); ?>

<div class="pagination pagination-centered">
    <ul>
        <?php
        $this->CloggyPaginator->paginatorBootstrap(CloggyCommon::urlModule('cloggy_users'));
        ?>		
    </ul>
</div>

<?php $this->append('cloggy_js_module_page'); ?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#checker').on('click',function(e) {
            jQuery('tbody').find(':checkbox').attr('checked',this.checked);
            if(this.checked) {
                jQuery('#checkbox_all').fadeIn('slow');
            }else{
                jQuery('#checkbox_all').fadeOut('slow');
            }
        });
        jQuery('.action_js').on('click',function(e) {

            e.preventDefault();
            var id = jQuery(this).attr('id');
            var urlAjax;
            var formData = jQuery('input[type="checkbox"]').serializeArray();
            formData.shift();
            var confirmAction = true;
		
            switch(id) {

                case 'action_delete_all':
                    urlAjax = '<?php echo Router::url(CloggyCommon::urlModule('cloggy_users', 'cloggy_users_ajax/delete_all_perms')); ?>';
                    confirmAction = confirm('<?php echo __d('cloggy','Are you sure want to delete all these permissions?') ?>');		
                    break;                		
                }			

                if(confirmAction) {

                    jQuery.ajax({
                        url: urlAjax,
                        data: formData,
                        dataType: 'json',
                        type: 'POST',
                        cache: false,
                        success: function(data,status,jqxhr) {
					
                            if(data.msg && data.msg == 'success') {
                                window.location = window.location.href;
                            }
					
                        }
                    });
				
                }		
		
            });
            jQuery('.perm_remove').on('click',function(e) {
                e.preventDefault();
                var href = jQuery(this).attr('href');
                if(confirm('<?php echo __d('cloggy','Are you sure to remove this perm?') ?>')) {
                    window.location = href;
                }	
            });            
        });
</script>
<?php $this->end(); ?>
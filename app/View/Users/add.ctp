<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin')
        ));
        ?>
        <div class="form-group">
                                       <?php 
                                         $rand = rand(0,999);
                                         if ($rand<10){
                                             $rand = "00"+$rand;
                                         }else if ($rand<100){
                                             $rand = "0"+$rand;
                                         }
					 echo $this->Form->input('Captcha', array('class' => 'form-control')); 
					 echo "Veuillez entrer ce chiffre : $rand ."
					?>
                                        <input type="hidden" name="random" value="$rand"> 
					</div><!-- .form-group -->
    
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
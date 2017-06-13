<?php
/**
 * Output of the all contactmessages
 * @author: peter böthig<pboethig@gmail.com>
 */
?>
<h2>Contact List</h2>
<hr/>
<?php if(empty($contacts->all())):?>
    <p class="message">No Datas available.</p>
<?php endif;?>
<?php foreach ($contacts->all() as $contact):?>
    <?php foreach ($contacts->fillableFields as $field):?>
        <p class="contactItem"><strong><?php echo ucfirst($field)?>: </strong></p><p style="border-bottom: 1px dashed silver"><?php echo $contact[$field] ?></p>
    <?php endforeach;?>
    <hr style="border-bottom: 1px solid lightgrey">
<?php endforeach;?>

<?php
/**
 * Output of the all contactmessages
 * @author: peter böthig<pboethig@gmail.com>
 */
?>
<h2>Contact List</h2>
<table cellpadding="0" cellspacing="0" border="0" width="100%" class="contactList">
    <thead style="border-bottom: 1px solid green">
    <tr>
        <th align="left" width="200">Firstname</th>
        <th align="left" width="200">Lastname</th>
        <th align="left" width="200">Email</th>
        <th align="left" width="150">Entrydate</th>
        <th align="left">Message</th>
    </tr>
    </thead>

    <tbody>
    <?php if(empty($contacts->all())):?>
        <tr>
            <td colspan="4">No Datas available.</td>
        </tr>
    <?php endif;?>
    <?php foreach ($contacts->all() as $contact):?>
        <tr style="border-bottom: 1px solid lightgrey">
            <td><?php echo $contact['firstname'] ?></td>
            <td><?php echo $contact['lastname'] ?></td>
            <td><?php echo $contact['email'] ?></td>
            <td><?php echo $contact['entrydate'] ?></td>
            <td><?php echo $contact['message'] ?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
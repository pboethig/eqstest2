<?php
/**
 * Contact formular
 * Validation see js/custom.js
 *
 * @author: Peter Böthig<pb@gmail.com>
 */
?>
<form action="" method="POST" onsubmit="return validateContactForm(this)">
    <fieldset class="contactForm">
        <h2>Contact Form</h2>

        <?php if(!empty($contacts->errors)):?>
            <h3 class="error">There are some errors. Please correct your input</h3>
            <hr/>
        <?php endif;?>

        <?php foreach ($contacts->errors as $error):?>
            <p class="error"><?php echo $error?></p><br/>
        <?php endforeach;?>

        <hr/>
        <br/>
        <label>Firstname</label>
        <input type="text" name="firstname" id="firstname" value="<?php (isset($_POST['firstname']) ? $_POST['firstname'] : '')?>">

        <label>Lastname</label>
        <input type="text" name="lastname" id="lastname" value="<?php (isset($_POST['lastname']) ? $_POST['lastname'] : '')?>">

        <label>Email</label>
        <input type="text" name="email" id="email" value="<?php (isset($_POST['email']) ? $_POST['email'] : '')?>">

        <label>Message</label>
        <textarea name="message" id="message" rows="10"><?php (isset($_POST['message']) ? $_POST['message'] : '')?></textarea>

        <input type="hidden" name="entrydate" value="<?php echo date("YYYY-mm-dd H:i:s")?>"/>
        <br/>
        <input type="submit" value="send message" />
    </fieldset>
</form>
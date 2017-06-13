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
        <input type="text" name="firstname" id="firstname">
        <label>Lastname</label>
        <input type="text" name="lastname" id="lastname">

        <label>Email</label>
        <input type="text" name="email" id="email">

        <label>Message</label>
        <textarea name="message" id="message" rows="10"></textarea>

        <br/>
        <input type="submit" value="send message" />
    </fieldset>
</form>
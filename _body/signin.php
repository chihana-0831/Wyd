<?php

require('../_parts/header.php');

?>

<div class="signin_form">
    <h3>Sign-in to Your Account</h3>
    <form action="" method="post">
        <input type="hidden" name="signin" value="signedin">
        <label for="email">School Email : </label>
        <input type="email" name="email" required> <br>
        <label for="password">Password : </label>
        <input type="password" name="password" required minlength="8"> <br>
        <!-- submit -->
        <input type="submit" value="Sign In" class="signin"><br>
    </form>
    <a href="#" class="create_account">Create Your Account</a>
</div>

<?php

include('../_parts/footer.php');

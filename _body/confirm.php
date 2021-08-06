<?php

require('../_parts/header.php');

?>

<div class="confirm_form">
    <h3>Confirm Your Information</h3>
    <form action="" method="POST">
        <p class="confirm_p">To change your information, <br>click "Back" to go back to a previous page.</p>
        <p>Name: </p>
        <p>Email: </p>
        <p>UserID: </p>
        <input type="submit" class="back" value="Back">
        <input type="submit" class="confirm" value="Confirm">
    </form>
</div>

<?php

include('../_parts/footer.php');

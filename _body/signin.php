<?php

require('../_parts/header.php');

?>


<div class="signin_form">
    <h3>Sign-in to Your Account</h3>
    <form action="" method="post">
        <input type="hidden" name="signin" value="signedin">
        <label for="name">Name : </label>
        <input type="text" name="name" required class="name"> <br>
        <label for="email">School Email : </label>
        <input type="email" name="email" required class="email"> <br>
        <label for="grade">Grade : </label>
        <select name="grade" required>
            <option value="9th">9</option>
            <option value="10th">10</option>
            <option value="11th">11</option>
            <option value="12th">12</option>
        </select><br>
        <label for="password">Password : </label>
        <input type="password" name="password" class="password" required minlength="8"> <br>
        <button type="submit" class="signin">Sign In</button>
    </form>
    <p class="CreateYourAccount"><a href="#" class="submit">Creat Your Account</a></p>
</div>


<?php

include('../_parts/footer.php');

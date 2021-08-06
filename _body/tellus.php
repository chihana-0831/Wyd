<?php

require('../_parts/header.php');

?>


<div class="tellus_form">
    <h3>Tell us about yourself</h3>
    <form action="" method="post">
        <div>
            <label for="advisor">Advisor : </label>
            <select name="advisor" required>
                <option value="teacher1">teacher1</option>
                <option value="teacher2">teacher2</option>
            </select>
        </div>
        <div>
            <label for="club">Club : </label>
            <select name="club" required>
                <option value="club1">club1</option>
                <option value="club2">club2</option>
            </select>
        </div>
        <div>
            <label for="v-jv">Versity/JV : </label>
            <select name="v-jv" required>
                <option value="sport1">sport1</option>
                <option value="sport2">sport2</option>
            </select>
        </div>
        <div>
            <label for="interests">Interests/Hobbies : </label>
            <select name="interests" required>
                <option value="interest1">interest1</option>
                <option value="interest2">interest2</option>
            </select>
        </div>
        <input type="submit" class="submit" value="Submit">
    </form>
</div>


<?php

include('../_parts/footer.php');

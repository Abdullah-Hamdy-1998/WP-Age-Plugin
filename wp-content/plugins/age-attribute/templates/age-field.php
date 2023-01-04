<table class="form-table">
    <tr>
        <th><label for="age">Age</label></th>
        <td>
            <input type="number" min="1" name="age" id="age" value="<?php echo esc_attr(get_the_author_meta('age', $user->ID)); ?>">
            <p class="description">Please enter the age.</p>
        </td>
    </tr>
</table>
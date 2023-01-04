<table class="form-table">
    <tr>
        <th><label for="age">Age</label></th>
        <td>
            <input type="number" min="1" name="age" id="age" value="<?php echo esc_attr(get_the_author_meta('age', $user->ID)); ?>">
            <p class="description">Please enter the age.</p>
            <div id="age-error"></div>
        </td>
    </tr>
</table>

<script>
    document.getElementById('age').addEventListener('input', function() {
        document.getElementById('age-error').innerHTML = '';
        if (this.value <= 0) {
            document.getElementById('age-error').innerHTML = '<p class="error">Please enter a positive age.</p>';
            document.getElementById('submit').disabled = true;
        } else {
            document.getElementById('submit').disabled = false;
        }
    });
</script>
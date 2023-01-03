<?php

class AdminView
{
    public function render_age_field()
    {
?>
        <table class="form-table">
            <tr>
                <th>
                    <label for="age">Age</label>
                </th>
                <td>
                    <input type="number" min="1" name="age" id="age">
                </td>
            </tr>
        </table>
<?php
    }
}

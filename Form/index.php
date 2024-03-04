<form action="./user.php" method="get">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="radio" name="radio_test">
    <input type="checkbox" name="radio_checkbox[]" value="red">
    <input type="checkbox" name="radio_checkbox[]" value="green">
    <select name="arr[]" multiple>
        <option value="">please select</option>
        <option value="1">Apple</option>
        <option value="2">Cheery</option>
        <option value="3">Banana</option>
    </select>

    <input type="submit" value="submit">
</form>
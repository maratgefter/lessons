<form action="index.php" method="post">
    <p>Enter your nik: <input type="text" name="nik"></p>
    <p>Выберите цвет страницы:</p>
    <select name="color">
        <option value="red">red</option>
        <option value="green">green</option>
        <option value="blue">blue</option>
    </select>
    <select name="font_color">
        <option value="">none</option>
        <option value="red">red</option>
        <option value="green">green</option>
        <option value="blue">blue</option>
    </select>
    <p><input type="hidden" name="formlogin" value="login"></p>
    <p><input type="submit" value="Log In"></p>
</form>
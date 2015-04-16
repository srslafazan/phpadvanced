<!DOCTYPE html>
<html>
<head>
    <title>Product Demo</title>
</head>
<body>

    <h1>Product Demo</h1>

    <form action='checkout.php' method='post'>
        Your Name: <input type='text' name='name'/>
        Email: <input type='text' name='email'/>
        Purchasing:
            <select name='item'>
                <option value='CodingDojo_Shirt'>CodingDojo Shirt</option>
                <option value='CodingDojo_Cup'>CodingDojo Cup</option>
            </select><br />
        Quanitity: <input type='text' name='quantity'/>
        <input type='submit' value='Purchase'/>
    </form>

</body>
</html>
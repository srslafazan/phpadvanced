<!DOCTYPE html>
<html>
<head>
    <title>basicassignment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
    <style>
        input, select, option {
            display:block;
        }
    </style>
</head>
<body>
    <form action="basicassignment.php" method="post">
        Your Name:<input type="text" name="name">
        Dojo Location:
        <select name='location'>
            <option value="Mountain View" selected>Mountain View</option>
            <option value="Seattle">Seattle</option>
            <option value="Los Angeles">Los Angeles</option> 
        </select>

        Favorite Language:
        <select name='language'>
            <option value="Javascript" selected>Javascript</option>
            <option value="Hascal">Hascal</option>
            <option value="Node">Node</option>
            <option value="Latin">Latin</option> 
        </select>
        Comment(optional): 
        <input type="text" name='comment'>
        <input type="submit">
    </form>

</body>
</html>
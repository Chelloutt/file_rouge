<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>
<body>
    <h1>ADMIN ZONE</h1>

    <main>

    <h3>Add a post</h3>
        <form action="insert.php" method="post" enctype="multipart/form-data">
        <div class="forms">
            
            
            <label id="title">
            Title :<br><input name="title" type="text" placeholder="Enter Title" required>

            
            <label id="author"><br>
            author :<br><input name="author" type="text" placeholder="author" required>

            <label id="content"><br>
            content :<br><textarea name="content" id="content" cols="70" rows="25" placeholder="Add content" required></textarea><br>

             <input list="category" name="category" placeholder="select category" required>
                <datalist id="categoy">
                    <option value="Sport">
                    <option value="Art">
                    <option value="Politics">
                    <option value="Culture">
                </datalist>

            <label id="photo"><br>
            photo :<br><input name="image" type="file" placeholder="upload picture" required>

            <label id="date"><br>
            date :<br><input name="date" type="date"><br>

            <button name="submit">Submit</button>


            
        </label>

        </div>
        </form>
    </main>









</body>
</html>
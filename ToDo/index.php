<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checklist</title>
    <link rel="stylesheet" href="CSS/checklist.css">
    <link rel="icon" href="images/checklist.jpg">
</head>
<body>
    <section class="todo_section">
        <div class="heading"><h1>To-Do List</h1></div>
        <form action="./Database/data.php" method="post">
            <div class="add-checklist">
                <input type="text" class="item" name="item" placeholder="Add checklist item here......." required>
                <input type="submit" value="Add" class="add_btn" name="add_btn">
            </div>
            <h1>Checklist:-</h1>
            <div class="checklist-items">
                <input type="checkbox" class="checkbox" name="checkbox">
                <span class="inventory" name="inventory"></span>
                <div class="buttons">
                    <input type="submit" value="edit" class="btn" name="edit_btn">
                    <input type="submit" value="delete" class="btn" name="delete_btn">
                </div>
            </div>
        </form>
    </section>
</body>
</html>
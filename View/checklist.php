<?php
include("../Model/connection.php");
?>
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
        <form action="../Model/logic.php" method="post">
            <div class="add-checklist">
                <input type="text" class="item" name="item" placeholder="Add checklist item here.......">
                <input type="submit" value="Add" class="add_btn" name="add_btn">
            </div>
            <h1>Checklist:-</h1>
            <ul class="checklist-items">
                <?php
                    $itemlist = get_items();
                    while($row=$itemlist->fetch_assoc()){
                ?>
                <li class="task">
                    <p><?php echo $row["item"]; ?></p>
                    <div class="changes">
                        <button type="submit" name="check_btn" class="check_btn" value="<?php echo $row["id"]; ?>"><i class="fa-solid fa-circle-check"></i></button>
                        <button type="submit" name="delete_btn" class="delete_btn" value="<?php echo $row["id"]; ?>"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
                <?php } ?>
            </ul>
            <hr>
            <ul class="checklist-items">
                <?php
                    $itemlist = get_items_checked();
                    while($row=$itemlist->fetch_assoc()){
                ?>
                <li class="task fade">
                    <p><span><?php echo $row["item"]; ?></span></p>
                    <div class="changes">
                        <button type="submit" name="check_btn" class="check_btn hidden" value="<?php echo $row["id"]; ?>"><i class="fa-solid fa-circle-check"></i></button>
                        <button type="submit" name="delete_btn" class="delete_btn" value="<?php echo $row["id"]; ?>"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </form>
    </section>
</body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List App</title>
    <link rel="stylesheet" href="todolist.css">
</head>
<body>
    <div class="container">
        <h1>To Do List</h1>
        <p class="tanggal" id="tanggal"></p>
        <script src="script.js"></script>
        <form action="add.php" method="post" class="add-form">
            <input type="text" name="task" id="task" placeholder="" class="task-input">
            <button type="submit" class="add-btn">Add Task</button>
        </form>
        <ul class="task-list">
            <?php include 'tasks.php'; ?>
        </ul>
    </div>

    <script>
        function updateTask(index) {
            var checkbox = document.getElementById('task' + index);
            var label = checkbox.nextElementSibling;
            var tasks = label.innerText.split('\n');
            tasks[0] = checkbox.checked ? "<s>" + tasks[0] + "</s>" : tasks[0].replace("<s>", "").replace("</s>", "");
            label.innerHTML = tasks.join('\n');
        }
    </script>
</body>
</html>

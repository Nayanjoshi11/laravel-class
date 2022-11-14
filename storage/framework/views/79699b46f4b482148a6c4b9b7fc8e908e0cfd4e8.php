<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Todo application</h2>


         <div>
           
            <form action="<?php echo e(route('saveTodo')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type = "text" name="todo">
                <button type="submit">Save</button>
            </form>
         </div>

</body>
</html><?php /**PATH E:\projects\after vacation\second\resources\views/welcome.blade.php ENDPATH**/ ?>
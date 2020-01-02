<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="insert.php" method="post">
姓名:<input type="text" name="name">
价格:<input type="text" name="tt">
<button class="btn">添加</button>
</form>
</body>
</html>
<script src="jquery.min.js">
</script>
<script>
    $(".btn").click(function () {
        $input=$(this).attr('input');
        $.ajax({
            url:'insert.php',
            type:'post',
            dataType:'json',
            success:function (data) {
                // console.log(data);
                if(data.code==1){
                    location.href="01.php";
                }else{
                    alert('更新失败');
                }

            }

        })
    })
</script>

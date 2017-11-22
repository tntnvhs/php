<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>ddd</title>
    
</head>
<body>
    <? if ($mycookie) {?>
    <h1>저장된 쿠키값: <?=$mycookie?></h1>
    <?}else{?>
    <h1>쿠기없음</h1>
    <?}?>
    
    <form method="post" action="<?=base url()?>ex12_cookie/result">
        <input type="text" name="username" placeholder="Username"/>
        <button type="submit">쿠키저장</button>
    
    </form>
</body>


</html>
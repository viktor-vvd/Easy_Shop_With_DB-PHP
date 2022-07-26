<?php
require_once ("datab.php");
$id = $_GET['id'];
$myPost = getTovar($id);
require_once ("datab.php");
$comments=getComment($id);
?>
<html>
<head>

</head>
<body>
<ul>
        <div style = "width:200px; height: 130px; background-color: darkgrey; display:inline-block; margin-left: 20px; text-align: center; margin-top: 20px;"  >
            <span style= "color: white;" >
                    <?=$myPost['code']?>
                <br>
                <?=$myPost['name']?>
                <?php if($myPost['descr']!=NULL)
                {?>
                    <br><i><?=$myPost['descr']?></i>
                <?php }
                else
                {?>
                    <br><i>~</i><?php
                }?>
            </span>
            <br>
            <a href="/tovar.php?id=<?=$myPost['ID']?>">
                <div style = "background-color: black; width:180px; height: 30px; margin: 0px auto; margin-top: 10px; color: white; text-align: center; padding-top: 17px;" >
                    <span>
                    Buy:
                            <?=$myPost['price']?>
                    </span>
                </div>
            </a>
        </div>
    <p>Comments:</p><br>
    <?php
    foreach ($comments as $comment)
    {
    ?>
        <p><b><?=$comment['author'] ?>: </b><?=$comment['comment'] ?></p>
    <?php
    }
    ?>
</ul>
</body>
</html>
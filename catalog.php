<?php
require_once ("datab.php");
$tovars = getCategories();
?>
<html>
<head>

</head>
<body>
<ul>
    <?php
    foreach ($tovars as $tovar)
    {
        ?>
        <div style = "width:200px; height: 130px; background-color: darkgrey; display:inline-block; margin-left: 20px; text-align: center; margin-top: 20px;"  >
            <span style= "color: white;" >
                    <?=$tovar['code']?>
                <br>
                <?=$tovar['name']?>
                <?php if($tovar['descr']!=NULL)
                {?>
                    <br><i><?=$tovar['descr']?></i>
                <?php }
                else
                {
                    ?><br><i>~</i><?php
                }?>
            </span>
            <br>
            <a href="/tovar.php?id=<?=$tovar['ID']?>">
                <div style = "background-color: black; width:180px; height: 30px; margin: 0px auto; margin-top: 10px; color: white; text-align: center; padding-top: 17px;" >
                    <span>
                    Buy:
                            <?=$tovar['price']?>
                    </span>
                </div>
            </a>
        </div>
        <?php
    }
    ?>
</ul>
</body>
</html>
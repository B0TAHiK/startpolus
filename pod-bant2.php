<?php
    session_start();
    $thisPage="katalog";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8">
<title>Банты, звездочки, розочки</title>
<meta name="Description" content="Компания Старт Полюс производит банты-звездочки и розочки">
<meta name="Keywords" content="бумажные пакеты, бумажные пакеты производство, бумажные пакеты на заказ, бумажные пакеты с логотипом, пакеты из картона, пакеты из эфалина, готовые бумажные пакеты, банты-розочки">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="navigation.css">
</head>
<body>
<div class="all">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody>
            <tr>
                <?php include "top.php"?>
            </tr>
        </tbody>
    </table>
<table border="0" width="100%" cellspacing="0" cellpadding="0" >
	<tr>
		<td valign=top width="236"><img border="0" src="images/01.gif" width="8" height="6"><img border="0" src="images/p5.gif" width="62" height="14" usemap="#m1">&nbsp;&nbsp; 
		<a href="#" onClick="window.external.addFavorite('', 'Start polus. Бумажные пакеты, коробки, подарочная упаковка'); return false;"><img border="0" src="images/p1.gif" width="20" height="12" alt="добавить в избранное"></a>
<a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage(''); 
return false;" href="#" ><img border="0" src="images/p3.gif" width="20" height="12" alt="сделать стартовой"></a>
<br>
<img border="0" src="images/01.gif" width="43" height="5"><br>
<?php include "katnavi.php"; ?>
		</td>
		<td valign=top><div class="text"><br>
                        <div class="head">Банты - звездочки и розочки</div>
                        Что может быть прекраснее россыпи звезд на черном бархате неба? Мы предлагаем <b>банты-звездочки </b>более 10 цветов этих бантиков из разных материалов в трех размерных группах.<br>
                        ХИТ ПРОДАЖ! Собственное производство.<br><br>
                        <img src="im/402.jpg" alt="подарочная упаковка - банты-звездочки"><br><br>
                        <b>Роза</b> - романтический цветок, символ любви, нежности и красоты. Мы предлагаем более 20 цветов этих бантиков из разных материалов в трех размерных группах. Прекрасный аксессуар для украшения подарков. Собственное производство.<br><br>
                        <img border="0" src="im/401.jpg" width="608" height="307" alt="подарочная упаковка - банты-розочки">
                </div></td>		
	</tr></table>
<?php include "bot.php" ?>
</div>
</body>
</html>
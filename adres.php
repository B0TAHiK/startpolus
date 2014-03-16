<?php
    session_start();
    $thisPage="adres";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8">
<title>Наш адрес - бумажные пакеты производство, полиэтиленовые пакеты, подарочная упаковка с символикой фирмы, изготовление пакетов,  логотип, заказ</title>
<meta name="Description" content="производство бумажные пакеты, полиэтиленовые пакеты, подарочная упаковка с символикой фирмы, изготовление пакетов,  логотип, заказ, пакеты ПВД, пакеты ПНД, шелкография, флексопечать">
<meta name="Keywords" content="бумажные пакеты производство, полиэтиленовые пакеты, подарочная упаковка с символикой фирмы, изготовление пакетов,  логотип, заказ, логотип, пвд, пнд, ручка, производители, дизайн, флексография, шелкография">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="navigation.css">
</head>
<body>
    <div class="all">
    <table border="0" width="100%" cellspacing="0" cellpadding="0" height=104>
	<tr>
            <?php include "top.php"?>
	</tr>
    </table>
    <table border="0" width="100%" cellspacing="0" cellpadding="0" >
	<tr>
            <td valign=top><img border="0" src="images/01.gif" width="8" height="6"><img border="0" src="images/p5.gif" width="62" height="14" usemap="#m1">&nbsp;&nbsp; 
		<a href="#" onClick="window.external.addFavorite('', 'Start polus. Бумажные пакеты, коробки, подарочная упаковка'); return false;"><img border="0" src="images/p1.gif" width="20" height="12" alt="добавить в избранное"></a>
                <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage(''); 
                return false;" href="#" ><img border="0" src="images/p3.gif" width="20" height="12" alt="сделать стартовой"></a>
                <br>
                <img border="0" src="images/01.gif" width="43" height="5"><br>
                <?php include "news.php" ?>
            </td>
            <td valign=top><br>
                <div class="text">
		<div class="head">Наш адрес:</div><br>		
                Москва, ул. Краснобогатырская, д. 42, офис 222,  2-й этаж.<br><br>
                <b>Коммерческий директор:</b><br>Ромодановский Матвей (495) 223-3281<br>
                <a href="mailto:matvey@start-polus.ru">matvey@start-polus.ru</a><br><br>
                <b>Менеджеры:</b>
                <br>Сухотина Альбина (495) 223-3281<br>
                <a href="mailto:albina@start-polus.ru">albina@start-polus.ru</a><br><br>
                Сепиашвили Альберт (495) 223-3281<br>
                <a href="mailto:albert@start-polus.ru">albert@start-polus.ru</a><br><br>
                <div class="head2">Часы работы:</div>
                понедельник - пятница: с 10-00 до 18-00 без перерыва на обед,<br>
                суббота: работаем по предварительным заявкам оптовых клиентов.<br><br>
                <div class="head2">Проезд:</div>
                Ст. м. Преображенская пл., далее на любом трамвае в сторону ВДНХ до остановки "Объединение "ЛИТ".Мы находимся в здании НИИ Резиновых изделий - 12-ти этажное сиреневое здание. На проходной самостоятельно выписываете пропуск в фирму "Старт Полюс". Обращаем ваше внимание, что размещение автотранспорта на территории института платное. Въезд легкового а/м стоит 50 руб., грузового а/м до 3,5 тонн - 100 руб., свыше 3,5 тонн - 150 руб.<br>
                <div align=center><img border="0" src="images/shema.gif" width="380" height="297"></div>
            </td>
		
		<td width="160" valign=top><br>
		<?php include "clients.php"?>
                </td>			
            </tr>
        </tbody>
    </table><br>

	
<?php include "bot.php" ?>
</div>
</body>
</html>
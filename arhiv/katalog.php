<?php
    session_start();
    $thisPage="katalog";
?>﻿
<html>
    <head>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8">
<title>Каталог бумажных пакетов, полиэтиленовых пакетов, подарочной упаковки с символикой фирмы, коробок</title>
<meta name="Description" content="Производство полиэтиленовых пакетов, подарочной упаковки с символикой фирмы, изготовление бумажных пакетов, фирменных пакетов с логотипом. Изготовление пакетов любыми тиражами шелкографией, офсетом, флексопечатью">
<meta name="Keywords" content="бумажные пакеты производство, полиэтиленовые пакеты, подарочная упаковка с символикой фирмы, изготовление пакетов,  логотип, заказ, логотип, пвд, пнд, ручка, производители, дизайн, флексография, шелкография">
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
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody>
            <tr>
		<td valign="top"><img src="images/01.gif" border="0" height="6" width="8"><span style="font-size: 9px; font-weight: normal;"><map name="m1"><area href="index.html" shape="rect" coords="0, 0, 14, 14" alt="на главную">
                    <area href="map.php" shape="rect" coords="24, 0, 37, 14" alt="карта сайта">
                    <area href="mailto:matvey@start-polus.ru" shape="rect" coords="47, 0, 60, 14" alt="написать письмо"></map></span><img src="images/p5.gif" usemap="#m1" border="0" height="14" width="62">&nbsp;&nbsp;
                    <a href="#" onclick="window.external.addFavorite('', 'Start polus. Бумажные пакеты, коробки, подарочная упаковка'); return false;"><img src="images/p1.gif" alt="добавить в избранное" border="0" height="12" width="20"></a>
                    <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage(''); 
                    return false;" href="#"><img src="images/p3.gif" alt="сделать стартовой" border="0" height="12" width="20"></a>
                    <?php include "news.php" ?>
                </td>
		<td valign="top"><div class="text"><br>	
                    <table width="98%">
                        <tbody>
                            <td valign="top" width="1%">
                                <div class="text">
                                    <div class="head">Каталог продукции</div><br>
                                    <div class="head2"><a href="index.html">Бумажные пакеты:</a></div>
                                        Наша компания производит различные типы бумажных пакетов:
                                        <ul>
                                            <li>
                                                <div class="head2"><a href="bumglos.php">Бумажные пакеты c ламинацией</a></div>
                                                <ul>
                                                    <li><div class="head2"><a href="bumglos.php">Бумажные пакеты с глянцевой ламинацией</a>.</div>Пакеты получаются яркими, а благодаря глянцевой ламинации долговечными.</li>
                                                    <li><div class="head2"><a href="bumglos.php#bummat">Бумажные пакеты с матовой ламинацией</a>.</div>Такие пакеты стоят немного дороже, но благодаря матовой ламинации выглядят очень стильно.</li>
                                                </ul>
                                            </li><br>
                                            <li><div class="head2"><a href="bumbezlam.php">Бумажные пакеты без ламинации</a></div>
                                                <ul>
                                                    <li><div class="head2"><a href="bumbezlam.php">Бумажные пакеты из крафт-бумаги</a>.</div>Получаются очень качественными, при этом их производство дешевле, что позволяет клиентам сэкономить значительное количество средств.</li>
                                                    <li><div class="head2"><a href="bumbezlam.php#des">Бумажные пакеты из дизайнерской бумаги</a>.</div>Помогут воплотить в жизнь любую вашу дизайнерскую идею.</li>
                                                    <li><div class="head2"><a href="bumbezlam.php#len">Бумажные пакеты из картона</a>.</div> Оптимальны при изготовлении тиражом от 1000 экземпляров.</li>
                                                    <li><div class="head2"><a href="bumefalin.php">Бумажные пакеты из эфалина</a>.</div>Переплетные материалы, идеальны для изготовления пакетов ограниченным тиражом.</li>
                                                </ul>
                                           </li><br>
                                           <li>
                                            <div class="head2""><a href="bumbox.php">Коробки:</a></div>
                                            Особняком стоит другое направление нашей кампании - производство <a href="bumbox.php">коробок</a>. Коробки могут быть любой формы и цвета. Вашему бизнесу нужны коробки для корпоративных подарков - не вопрос! Вам нужны коробки с прозрачным окном для упаковки постельного белья - сделаем.
                                           </li>
                                        </ul>
                                </div>
                            </td>
                        </tbody>
                    </table>
                </div>
		<td valign="top" width="160"><br>
		<?php include "clients.php" ?></td>		
	</tr></tbody></table>	
<?php include "bot.php" ?>
</div>    
</body>
</html>
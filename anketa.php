<?php
    session_start();
    $thisPage="job";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8">
<title>Анкета соискателя, список вакансий</title>
<meta name="Description" content="Вакансии, работа, анкета соискателя">
<meta name="Keywords" content="Вакансии, бумажные пакеты производство, полиэтиленовые пакеты, подарочная упаковка с символикой фирмы, изготовление пакетов,  логотип, заказ, логотип, пвд, пнд, ручка, производители, дизайн, флексография, шелкография">
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
            <td valign=top width="207">
                <img border="0" src="images/01.gif" width="8" height="6"><img border="0" src="images/p5.gif" width="62" height="14" usemap="#m1">&nbsp;&nbsp; 
                <a href="#" onClick="window.external.addFavorite('', 'Start polus. Бумажные пакеты, коробки, подарочная упаковка'); return false;"><img border="0" src="images/p1.gif" width="20" height="12" alt="добавить в избранное"></a>
                <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage(''); 
                return false;" href="#" ><img border="0" src="images/p3.gif" width="20" height="12" alt="сделать стартовой"></a>
                <?php include "news.php" ?>
            </td>
            <td valign=top ><div class="text"><br>
			<div class="head">Анкета соискателя</div><br>
			<? // WR-anketa v 1.2  //  01.12.05 г.  //  Miha-ingener@yandex.ru

$myemail= "admin@start-polus.ru, matvey@start-polus.ru";  // Ваш электронный адрес

$refreshpage="";  // Страница, куда возвращается человек после отправки сообщения
                 // оставьте пустым и тогда обновиться страница, где установлена эта форма

$maxname="30";   // Максимальное кол-во символов в имени
$maxmsg="1500";  // Максимальное количество символов в сообщении

// Далее настраивается цвет таблицы и текста: цвет таблицы и цвет текста в заголовке таблицы
// Для Выбора схемы - раскоментируйте её и закоментируйте текущую символами //

//$bdcolor="#79BBEF";  $fcolor="#FFFFFF";  // Светлоголубой
//$bdcolor="#FFffff"; $fcolor="#FFFFFF";   // Оранжевый
//$bdcolor="#FFE51A"; $fcolor="#00253B";   // Жёлтый
//$bdcolor="#00E900"; $fcolor="#00253B";   // Светло-зеленый
//$bdcolor="#007800"; $fcolor="#FFFFFF";   // Темно зеленый
//$bdcolor="#D2A500"; $fcolor="#FFFFFF";   // Золотой
//$bdcolor="#BCC0C0"; $fcolor="#FFFFFF";   // Серый
//$bdcolor="#00253B"; $fcolor="#FFFFFF";   // Темно-синий

$addstyle="style='font-family: Tahoma; font-size: 11px; text-decoration: none; color: #000000; cursor: default; background-color: #FFFFFF; border-style: solid; border-width: 1px; border-color: #7F9DB9;'";

$back="<center>Вернитесь <a href='javascript:history.back(1)'><B>назад</B></a>"; // Удобная строка
//******************* Ниже лучше ничего не трогать ************************//

print "<center><table border=0 width=310 cellpadding=1 cellspacing=0 bgcolor=$bdcolor><tr><td>
<table border=0 width=100% cellpadding=1 cellspacing=0 bgcolor=$bdcolor><tr><td>";

// Событие проверки на ошибки и отправки сообщения //

if (isset($_GET['event'])) {
if ($_GET['event']=="add")  // if ($event =="add")
{
$name=$_POST['name'];$iname=$_POST['iname']; $msg=$_POST['msg']; $email= $_POST['email'];
$oname=$_POST['oname'];$vak=$_POST['vak'];$dayr=$_POST['dayr'];$sex=$_POST['sex'];$grag=$_POST['grag'];$metro=$_POST['metro'];
$tel=$_POST['tel'];$educ=$_POST['educ'];$educat=$_POST['educat'];$opyt=$_POST['opyt'];$lang=$_POST['lang'];$prof=$_POST['prof'];$lich=$_POST['lich'];
if ($vak == "выбрать") {print "$back Вы не выбрали Вакансию!</B></center>"; exit;}
if ($name == "" || strlen($name) > $maxname) {print "$back Вы не ввели Фамилию, или ввели слишком длинную Фамилию!</B></center>"; exit;}
if ($iname == "" || strlen($iname) > $maxname) {print "$back Вы не ввели имя, или ввели слишком длинное имя!</B></center>"; exit;}
if ($dayr == "" || strlen($dayr) > $maxname) {print "$back Вы не ввели Дату рождения, или ввели слишком большое количествово символов!</B></center>"; exit;}
if ($sex == "выбрать") {print "$back Вы не выбрали пол!</B></center>"; exit;}
if ($grag == "" || strlen($dayr) > $maxname) {print "$back Вы не ввели Адрес прописки, или ввели слишком большое количествово символов!</B></center>"; exit;}
if ($tel == "" || strlen($tel) > $maxname) {print "$back Вы не ввели № телефона, или ввели слишком большое количествово символов!</B></center>"; exit;}
if (isset($_POST['email'])) { if(!preg_match("/^[a-z0-9\.\-_]+@[a-z0-9\-_]+\.([a-z0-9\-_]+\.)*?[a-z]+$/is", $_POST['email']) or $_POST['email']=="") {print "$back и введите корректный E-mail адрес!</B></center>"; exit;}} else {print"Введите емайл!"; exit;}
if ($educ == "выбрать") {print "$back Вы не выбрали Образование!</B></center>"; exit;}
if ($educat == "" || strlen($educat) > $maxmsg) {print "$back Вы не ввели Специальность, или данное поле превышает $maxmsg символов.</B></center>"; exit;}
if ($lang == "" || strlen($lang) > $maxname) {print "$back Вы не указали владение языками, или ввели слишком большое количествово символов!</B></center>"; exit;}
if ($opyt == "" || strlen($opyt) > $maxmsg) {print "$back Вы не ввели Опыт работы, или данное поле превышает $maxmsg символов.</B></center>"; exit;}
if ($prof == "" || strlen($prof) > $maxmsg) {print "$back Вы не указали Профессиональные умения или данное поле превышает $maxmsg символов.</B></center>"; exit;}

// Настройки для отправки писем
$headers=null;
$headers.="Соискатель $name <".$email.">, вакансия $vak";
$headers.=" ";


// Собираем всю информацию в теле письма
$host=$_SERVER["HTTP_HOST"]; $self=$_SERVER["PHP_SELF"];
  $allmsg='1. Вакансия: '.$vak.chr(13).chr(10).
  ' '.chr(13).chr(10).
         '2. Фамилия: '.$name.chr(13).chr(10).
       ' '.chr(13).chr(10).
         '3. Имя: '.$iname.chr(13).chr(10).
        ' '.chr(13).chr(10).
         '4. Отчество: '.$oname.chr(13).chr(10).
         ' '.chr(13).chr(10).
         '5. Дата рождения: '.$dayr.chr(13).chr(10).
         ' '.chr(13).chr(10).
         '6. Пол: '.$sex.chr(13).chr(10).
         ' '.chr(13).chr(10).
         '7. Адрес прописки (город, область): '.$grag.chr(13).chr(10).
         ' '.chr(13).chr(10).
         '8. Станция метро: '.$metro.chr(13).chr(10).
         ' '.chr(13).chr(10).
         '9. Контактный телефон : '.$tel.chr(13).chr(10).
         ' '.chr(13).chr(10).
         '10. E-mail: '.$email.chr(13).chr(10).
         ' '.chr(13).chr(10).
         '11. Образование: '.$educ.chr(13).chr(10).
         ' '.chr(13).chr(10).
         '12. Квалификация: '.chr(13).chr(10).
         '   '.$educat.chr(13).chr(10).
         ' '.chr(13).chr(10).
         '13. Опыт работы: '.chr(13).chr(10).
         '   '.$opyt.chr(13).chr(10).
         ' '.chr(13).chr(10).
         '14. Иностранные языки : '.$lang.chr(13).chr(10).
         ' '.chr(13).chr(10).
         '15. Профессиональные умения : '.chr(13).chr(10).
         '   '.$prof.chr(13).chr(10).
         ' '.chr(13).chr(10).
         '16. Личностные качества: '.chr(13).chr(10).
         '   '.$lich.chr(13).chr(10).
         ' '.chr(13).chr(10).
		 '17. Дополнительная информация: '.chr(13).chr(10).
		 '   '.$msg.chr(13).chr(10);
// Отправляем письмо майлеру на съедение ;-)
mail("$myemail", $headers, "Соискатель $name на вакансию $vak", $allmsg );

// Пишем пользователю "Спасибо" и обновляем страницу через JavaScript
if ($refreshpage=="") {$refreshpage="anketa.php";}
print "<script language='Javascript'><!--
function reload() {location = \"$refreshpage\"}; setTimeout('reload()', 5000);
//--></script>
<center><font size=+1><B>Cообщение отправлено</B></font>
</td></tr><tr><td width=100% bgcolor=#FFFFFF>
<BR><BR><BR><center><table border=0 width=300><tr><td><center>
Спасибо <B>$name</B>, <BR>Ваше сообщение <B>успешно отправлено.</B><BR>
Нажмите <B><a href=\"$refreshpage\"> здесь</a></B> для возврата. </td></tr></table></center><BR><BR><BR>";
}

}  else  {   // Типо главной страницы

print "
<center><b><font color=$fcolor></font></b></center>
</td></tr><tr><td colspan=2 width=100% bgcolor=#FFFFFF><center>
<form action=anketa.php?event=add method=post name=REPLIER>
<table border=0 cellpadding=0 cellspacing=0 width=90%>
<tr><td><B>Вакансия *</B></td>
<td><select name=vak $addstyle><option>выбрать</option><option>0101 Менеджер по работе с клиентами</option><option>0102 Дизайнер-верстальщик</option></select></td></tr>
<tr><td>Фамилия*</td><td><input type=text $addstyle value='' name=name size=23></td></tr>
<tr><td>Имя*</td><td><input type=text $addstyle value='' name=iname size=23></td></tr>
<tr><td>Отчество</td><td><input type=text $addstyle value='' name=oname size=23></td></tr>
<tr><td>Дата рождения*</td><td><input type=text $addstyle value='' name=dayr size=23></td></tr>
<tr><td>Пол*</td><td><select name=sex $addstyle><option>выбрать</option><option>мужской</option><option>женский</option></select></td></tr>
<tr><td>Адрес прописки (город, область)*</td><td><input type=text $addstyle value='' name=grag size=23></td></tr>
<tr><td>Станция метро</td><td><input type=text $addstyle value='' name=metro size=23></td></tr>
<tr><td>Контактный телефон*</td><td><input type=text $addstyle value='' name=tel size=23></td></tr>
<tr><td>E-mail*</td><td><input type=text $addstyle value='' name=email size=23></td></tr>
<tr><td><img border=0 src=images/01.gif width=190 height=1></td><td></td></tr>
<tr><td>Образование*</td><td><select $addstyle name=educ><option>выбрать</option><option>высшее</option><option>неполное высшее</option><option>средне-специальное</option><option>среднее</option></select></td></tr>
<tr><td>Квалификация*</td><td><input type=text $addstyle value='' name=educat size=42></td></tr>
<tr><td>Иностранные языки*</td><td><input type=text $addstyle value='' name=lang size=42></td></tr>
<tr><td><br>Опыт работы*<br><br><br><br><br></td><td><textarea $addstyle cols=42 rows=4 size=500 name=opyt></textarea></td></tr>
<tr><td><br>Профессиональные умения*<br><br><br><br><br></td><td><textarea $addstyle cols=42 rows=4 size=500 name=prof></textarea></td></tr>
<tr><td><br>Личностные качества<br><br><br><br><br></td><td><textarea $addstyle cols=42 rows=4 size=500 name=lich></textarea></td></tr>
<tr><td><br>Дополнительная информация<br><br><br><br><br></td><td><textarea $addstyle cols=42 rows=4 size=500 name=msg></textarea>
<tr><td  colspan=2><br>Символом * отмечены поля, обязательные для заполнения.<br><br><center><input type=submit $addstyle value='Отправить'></form></td></tr></table>";
}

?>

</div></td></tr></table></td></tr></table>

Если у Вас уже есть готовое резюме, удовлетворяющее запрашиваемой информации, вы можете прислать его по e-mail <a href="mailto:matvey@start-polus.ru?subject=Анкета соискателя">matvey@start-polus.ru</a> <br>
или по факсу: (495) 223-3281. <br>
Контактное лицо:	Ромодановский Матвей Валентинович<br>
</td>
		
		<td width="160" valign=top><br>
		<?php include "clients.php"?></td>		
	</tr></table>
<br>

<?php include "bot.php" ?>
</div>
</body>
</html>
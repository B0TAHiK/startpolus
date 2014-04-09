<?php
echo<<<_END
<td>
        <div id="navigation" class="top-color">
        <img src="images/logo1-tr.png">
        <img src="images/logo.png" width="133">
        <span><font color="#ffffff" size="5"><b>+7 (495) 223-32-81<br></b></font><font color="#ffffff" size="2">многоканальный</font><b></b></span>
        <ul>
            <li
_END;
if ($thisPage=="index") {
    echo " class=\"active\"";
    echo "><a href=\"index.php\"><b>Главная</b></a></li>
        <li";
} else {
    echo " class=\"passive\"";
    echo "><a href=\"index.php\"><b>Главная</b></a></li>
        <li";
};
if ($thisPage=="rekomend") {
      echo " class=\"active\"";
      echo "><a href=\"rekomend.php\">Производство</a></li>
        <li";
} else {
    echo " class=\"passive\"";
    echo "><a href=\"rekomend.php\">Производство</a></li>
        <li";
};
if ($thisPage=="region") {
      echo " class=\"active\"";
      echo "><a href=\"region.php\">Регионам</a></li>
        <li";
} else {
    echo " class=\"passive\"";
    echo "><a href=\"region.php\">Регионам</a></li>
        <li";
};
if ($thisPage=="ra") {
      echo " class=\"active\"";
      echo "><a href=\"ra.php\">Рекламным агенствам</a></li>
        <li";
} else {
    echo " class=\"passive\"";
    echo "><a href=\"ra.php\">Рекламным агенствам</a></li>
        <li";
};
if ($thisPage=="about") {
      echo " class=\"active\"";
      echo "><a href=\"about.php\">О компании</a></li>
        <li";
} else {
    echo " class=\"passive\"";
    echo "><a href=\"about.php\">О компании</a></li>
        <li";
};
      if ($thisPage=="adres") {
      echo " class=\"active\"";
      echo "><a href=\"adres.php\">Контакты</a></li>
  </ul>
 </div>";
} else {
    echo " class=\"passive\"";
    echo "><a href=\"adres.php\">Контакты</a></li>
  </ul>
 </div></td>";
}
?>
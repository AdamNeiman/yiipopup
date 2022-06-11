<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>

<span style="font-size: small;">Тестовое задание для PHP-разработчика.</span>
<br>
<span style="font-size: small;">Использовать фреймворк Yii 1.</span>
<br>

<span style="font-size: small;">Создание всплывающих окон (попапов) для сайта.<br>  </span><span style="font-size: small;"><b>Пример всплывающего окна в приложении </b></span><span style="font-size: small;">   </span><span style="font-size: small;"><b>Задачи</b></span>
<br>

<span style="font-size: small;">1.Реализовать сущность Попапа </span>
<br>
<span style="font-size: small;"> - Название</span>
<br>
<span style="font-size: small;"> - Текст содержимого</span>
<br>
<span style="font-size: small;"> - Включен он или выключен</span>
<br>
<span style="font-size: small;">2. Реализовать административную часть CRUD операции для попапа.<br>  3. Реализовать статистику по количеству показов. В списке попапов для каждой записи должно быть выведено количество показов данного попапа.</span>
<br>
<span style="font-size: small;">4. Реализовать демонстративную страницу на которой будет установлен код попапа.<br>  <br>5. Реализовать произвольный эффект появления и закрытия всплывающего окна (анимацию).<br> </span><span style="font-size: small;"><i><br> Примечание: Все таблицы для БД должны быть созданы при помощи миграций <br></i></span><span style="font-size: small;"><br> </span><span style="font-size: small;"><b>Общее описание задачи</b></span><span style="font-size: small;"><br>  После создания попапа должна генерироваться ссылка на js скрипт, который возможно поставить на любой сайт. Скрипт устанавливается единожды. Все внесенные в попап изменения должны быть применены </span><span style="font-size: small;"><b>к уже установленным попапам</b></span><span style="font-size: small;">.</span>
<br>
<span style="font-size: small;">При подключении данного скрипта через 10 секунд после загрузки страницы должно отображаться созданное пользователем всплывающее окно. Если попап был отключен пользователем в административной части, то он не должен быть показан.<br>  По каждому попапу в административной части должна быть информация о количестве показов.  </span><span style="font-size: small;"><br><b>Результат предоставить ссылкой на репозиторий.</b></span>
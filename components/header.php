<!DOCTYPE html>
<html lang="ru">
<div class="btn-up btn-up_hide"></div>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="/img/360logo.svg">
  <title><?= $title ?> – <?= $name ?> </title>
</head>
<body class="page">
  <header class="page-header">
    <div class="container">
      <h1 class="page-title"><?= $title ?></h1>
      <p><i>По всем вопросам пишите:</i><br><a href="mailto:<?= $email ?>"><?= $email ?></a></p>
      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Меню</button>
        <div id="myDropdown" class="dropdown-content">
          <nav class="menu">
            <ul>
               <li><a href="about">Обо мне</a></li>
              <li><a href="photos">Фото</a></li>
              <li><a href="news">Новости</a></li>
              <li><a href="contacts">Контакты</a></li>
              <li><a href="pages/more.php">Подробнее</a></li>
            <ul>
          </nav>
        </div>
      </div>
      <button class="theme-button" type="button">Изменить тему</button>
    </div>
  </header>
  <main>

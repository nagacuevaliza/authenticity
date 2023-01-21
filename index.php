<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="media.css">
    <link rel="icon" href="./images/doc.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <title>AUTHENTICITY</title>
  </head>
  <body>

  <header class="header">
    <div class="wrap">
      <div class="header_wrap">
        <div><a href="index.php"><img src="./images/doc.svg" alt="logo" width="50px" style="margin-bottom: 10px;"/></a></div>
        <div class="logo"><a href="index.php">AUTHENTICITY</a></div>
        <ul class="menu">
          <li><a href="about_project.php" class="menu_item">О ПРОЕКТЕ</a></li>
          <li><a href="signin.php" class="menu_item">АВТОРИЗАЦИЯ</a></li>
        </ul>
      </div>
    </div>
  </header>

  <intro class="intro" id="start">
    <div class="container"> 
        <div class="row">
          <div class="col">
            <div class="header__info">
              <h1 class="title">Проверка справок на подлинность</h1>
              <p class="suptitle">
              Здесь Вы можете проверить законно ли была приобретена Ваша медицинская справка.<br>
              При помощи номера лицензии, указанного на документе, узнайте статус организации, выдавшей его.<br>
              ______________________________________________<br>
              При необходимости рекомендуется ознакомиться с последстивиями использования подделанной справки,<br>
              которые представлены ниже.<br>
              При необходимости рекомендуется ознакомиться с последстивиями использования подделанной справки<br>
              A именно - наказание по кодексу об административных правонарушениях или статья по УК РФ.<br>
              </p>
              
            </div>
          </div>

          <div class="col">
            <div class="loan-link" style="text-align: center">
                <p><a href="http://www.consultant.ru/document/cons_doc_LAW_10699/eb1160e707f86680589d651351beda77dbbde1f5/">
                  <img src="./images/law.svg" alt="law" width="50"/></a></p>
                <div class="text-loan_link">
                  <a href="http://www.consultant.ru/document/cons_doc_LAW_10699/eb1160e707f86680589d651351beda77dbbde1f5/"
                  target="_blank">УК РФ Статья 327</a>
                </div>
            </div>
          </div>
        </div>
      </div>
</intro>


    <section class="about">
      <div class="container">
        <!-- <div class="row">
          <div class="col">
          <div class="col-12"> -->
            <!-- <h2 class="about__title">Выберите действие</h2> -->

            <div class="row_buttons">
              <button type='submit' class="btn-success"><a href="./check_license.php">Проверить лицензию</a></button>
            </div>

            <!-- <div class="row_buttons">
              <button type='submit' class="btn-success"><a href="./main.php">Войти</a></button>
            </div> -->

          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php require("./elements/footer.php") ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

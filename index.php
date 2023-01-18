<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="media.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <title>AUTHENTICITY</title>
  </head>
  <body>
    <header class="header">
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
    </header>


    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col">
          <div class="col-12">
            <h2 class="about__title">Выберите действие</h2>

            <div class="row_buttons">
              <button type='submit' class="btn-success"><a href="./main.php">Проверить лицензию</a></button>
            </div>

            <div class="row_buttons">
              <button type='submit' class="btn-success"><a href="./main.php">Войти</a></button>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- LINK -->

    <section class="link_section">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="link_title">Использованный набор открытых данных доступен по ссылке:</h1>
                </div>
            </div>
            <div class="database_link">
                <a href="https://data.mos.ru/opendata/7707089084-perechen-organizatsiy-imeyushchih-litsenziyu-na-vydachu-spravok-dlya-polucheniya-voditelskih-udostovereniy-noshenie-orujiya-i-drugie?pageNumber=4&versionNumber=3&releaseNumber=21"
                target="_blank">Перечень организаций, имеющих лицензию на выдачу справок для получения 
                водительских удостоверений, ношение оружия и другие</a>
            </div>            
        </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

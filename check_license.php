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
    <title>CHECKING</title>
  </head>
  <body>
    <header class="header">
        
      <div class="nav-link" style="text-align: left">
        <p><a href="./index.php">
            <img src="./images/back.png" alt="law" width="50"/></a></p>
      </div>


      <div class="container"> 
        <div class="row">
          <div class="col">
            <div class="header__info">
              <h1 class="title">Проверка лицензии организациии</h1>
              <p class="suptitle"  style="font-size: 20px;">
              Введите в поле номер лицензии, указанный на справке, для проверки организации.<br>
              
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
          </div>
        </div>
      </div> 
    </header>


    <section class="about">
      <div class="container">
        <div class="row_license">
          <div class="col">

            <h2 class="license_format_text">Введите номер лицензии в формате:</h2>
            <p class="license_format">YY-00-00-000000</p>

            <form method="get" action="answer.php">
                <input required type="text" name="license" id="license" class="license_input">
                <div class="row_buttons">
                <button type='submit' class="btn-success">Проверить</button>
                  <!-- <button type='submit' class="btn-success"><a href="./answer.php">Проверить</a></button> -->
                </div>
            </form>

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

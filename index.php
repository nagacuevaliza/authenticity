

<!-- HEADER -->

<?php require("./elements/header.php") ?>

<!-- MAIN -->

  <intro class="intro" id="start">
    <div class="container"> 
        <div class="row">
          <div class="col">
            <div class="header__info">
              <h1 class="title" style="margin-top:80px;">Проверка справок на подлинность</h1>
              <p class="suptitle">
              Здесь Вы можете проверить законно ли была приобретена Ваша медицинская справка.<br>
              При помощи номера лицензии, указанного на документе, узнайте статус организации, выдавшей его.<br>
              ______________________________________________<br>
              <br>
              При необходимости рекомендуется ознакомиться с последстивиями использования подделанной справки,<br>
              а именно: наказание по кодексу об административных правонарушениях или статья по УК РФ.<br>
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
        <div class="row_buttons">
          <button type='submit' class="btn-success"><a href="./check_license.php">Проверить лицензию</a></button>
        </div>
      </div>
    </section>

    <!-- FOOTER -->

    <?php require("./elements/footer.php") ?>
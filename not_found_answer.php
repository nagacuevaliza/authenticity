<!-- HEADER -->

<?php require("./elements/header.php") ?>

<!-- MAIN -->

    <intro class="intro">
        
      <div class="nav-link" style="text-align: left">
        <p><a href="./check_license.php">
            <img src="./images/back.png" alt="law" width="50"/></a></p>
      </div>

      <div class="container"> 
        <div class="row">
          <div class="col">
            <div class="header__info">
              <h1 class="title">Организациия с номером лицензии "<?=$not_license?>" не найдена</h1>
              <p class="suptitle">Просьба ознакомиться с возможными последствиями иcпользования данной справки</p> 
            </div>
          </div>
        </div>        
      </div> 

    </intro>

    <section class="about">
      <div class="answer_container">
        <div class="col">

          <p class="suptitle">
            В случае подделки, использования, безвозмездной передачи, обмена или сбыта справки <br>
            с данным номером лицензии предусмотрена <b><a style="color: black" href="http://www.consultant.ru/document/cons_doc_LAW_34661/59ce7f424f1ff3101021c7a1e0ea10cf61853f8a/#:~:text=%D0%A0%D0%A4%20%D0%A1%D1%82%D0%B0%D1%82%D1%8C%D1%8F%2019.23.-,%D0%9F%D0%BE%D0%B4%D0%B4%D0%B5%D0%BB%D0%BA%D0%B0%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%BE%D0%B2%2C%20%D1%88%D1%82%D0%B0%D0%BC%D0%BF%D0%BE%D0%B2%2C%20%D0%BF%D0%B5%D1%87%D0%B0%D1%82%D0%B5%D0%B9%20%D0%B8%D0%BB%D0%B8%20%D0%B1%D0%BB%D0%B0%D0%BD%D0%BA%D0%BE%D0%B2%2C,%D0%B8%D1%85%20%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%2C%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B0%20%D0%BB%D0%B8%D0%B1%D0%BE%20%D1%81%D0%B1%D1%8B%D1%82&text=%D0%B2%D0%BB%D0%B5%D1%87%D0%B5%D1%82%20%D0%BD%D0%B0%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%B0%D0%B4%D0%BC%D0%B8%D0%BD%D0%B8%D1%81%D1%82%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D1%88%D1%82%D1%80%D0%B0%D1%84%D0%B0%20%D0%BD%D0%B0,%D0%BA%D0%BE%D0%BD%D1%84%D0%B8%D1%81%D0%BA%D0%B0%D1%86%D0%B8%D0%B5%D0%B9%20%D0%BE%D1%80%D1%83%D0%B4%D0%B8%D0%B9%20%D1%81%D0%BE%D0%B2%D0%B5%D1%80%D1%88%D0%B5%D0%BD%D0%B8%D1%8F%20%D0%B0%D0%B4%D0%BC%D0%B8%D0%BD%D0%B8%D1%81%D1%82%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%BF%D1%80%D0%B0%D0%B2%D0%BE%D0%BD%D0%B0%D1%80%D1%83%D1%88%D0%B5%D0%BD%D0%B8%D1%8F.
            " style="color: black">ст. 19.23 КоАП РФ.</a></b><br>
          </p>

          <p class="suptitle">
            Согласно этой норме права для юридических лиц подобные деяния влекут наложение административного штрафа<br>
            в размере от 30 до 50 тысяч рублей, с дополнительным наказанием в виде конфискации орудий совершения<br>
            данного умышленного административного правонарушения.<br>
          </p>
          
          <div class="row_buttons">
            <button type='submit' class="btn"><a href="./check_license.php" style="color: black">Вернуться</a></button>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->

    <?php require("./elements/footer.php") ?>
<!-- HEADER -->
<?php require("session.php"); ?>
<?php require("./elements/header.php") ?>

    <intro class="intro">
        
      <div class="nav-link" style="text-align: left">
        <p><a href="./check_license.php">
            <img src="./images/back.png" alt="law" width="50"/></a></p>
      </div>


      <div class="container"> 
        <div class="row">
          <div class="col">
            <div class="header__info">
              <h1 class="title">Номер лицензии организациии:</h1>
              <h1 class="title"><?=$licence?></h1>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
          </div>
        </div>
      </div> 
    </intro>


    <section class="about">
      <div class="answer_container">
        <div class="col">

          <table class="table">
            <tr class="tr">
             <th width="3%"><img class="table_image" src="images/building.png" alt="building" /></th>
             <th width="20%" style="margin: middle"><br>Название организации</th>
             <th width="60%" height="100" ><?=$title?></th>
            </tr>

            <tr class="tr">
             <th width="3%"><img class="table_image" src="images/geozone.png" alt="geozone" /></th>
             <th width="10%" style="margin: middle"><br>Адрес места оказания услуг</th>
             <th width="60%" height="100" ><?=$address?></th>
            </tr>
          
            <tr class="tr">
             <th width="3%"><img class="table_image" src="images/date.png" alt="date" /></th>
             <th width="20%" style="margin: middle"><br>Дата принятия решения о предоставлении (переоформлении) лицензии</th>
             <th width="60%" height="100" ><?=$validity?></th>
            </tr>

            <tr class="tr">
             <th width="3%"><img class="table_image" src="images/inn.png" alt="inn" /></th>
             <th width="20%" style="margin: middle"><br>ИНН</th>
             <th width="60%" height="100" ><?=$inn?></th>
            </tr>

            <tr class="tr">
             <th width="3%"><img class="table_image" src="images/ogrn.png" alt="ogrn" /></th>
             <th width="20%" style="margin: middle"><br>ОГРН</th>
             <th width="60%" height="100" ><?=$ogrn?></th>
            </tr>

            <?php
            if (isset($session_user)){
              echo '<tr class="tr">
              <th width="3%"><img class="table_image" src="images/ogrn.png" alt="ogrn" /></th>
              <th width="20%" style="margin: middle"><br>Предоставляемые слуги</th>
              <th width="60%" height="100" >'.$services.'</th>
             </tr>';
            }
            ?>

          </table>
          <div class="row_buttons">
            <button type='submit' class="btn"><a href="./check_license.php" style="color: black">Вернуться</a></button>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->

    <?php require("./elements/footer.php") ?>
<!-- HEADER -->

<?php require("./elements/header.php") ?>


    <section class="about">
      <div class="answer_container">
        <div class="col">
        <h2 class="title">Оказываемые услуги</h2>

        <p class="suptitle"><?=$services?></p>
         
          <div class="row_buttons">
            <button type='submit' class="btn"><a href="./check_license.php" style="color: black">Вернуться</a></button>
          </div>

          <h2 class="license_format_text">Достпен просмотр услуг, предоставляемых данной организацией</h2>

          <div class="row_buttons">
            <button type='submit' class="btn"><a href="./services.php" style="color: black">Услуги организации</a></button>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->

    <?php require("./elements/footer.php") ?>
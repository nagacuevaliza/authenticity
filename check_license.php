<!-- HEADER -->

<?php require("./elements/header.php") ?>
<?php require("session.php"); ?>

<!-- MAIN -->

    <intro class="intro">
     
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
      </div> 
    </intro>


    <section class="about">
      <div class="container">
        <div class="row_license">
          <div class="col">

            <h2 class="license_format_text">Введите номер лицензии в формате:</h2>
            <p class="license_format">YY-00-00-000000</p>

            <form method="get" action="./answer.php">
                <input required type="text" name="license" id="license" class="license_input">
                <div class="row_buttons">
                  <button type='submit' class="btn">Проверить</button>
                </div>
            </form>
           

          </div>
        </div>
      </div>
    </section>

     <!-- FOOTER -->

     <?php require("./elements/footer.php") ?>

<!-- HEADER -->

<?php require("./elements/header.php") ?>

<!-- MAIN -->

    <intro class="intro">
        
      <div class="nav-link" style="text-align: left">
        <p><a href="./index.php">
            <img src="./images/back.png" alt="law" width="50"/></a></p>
      </div>

      <div class="form_container"> 
        <div class="row">
          <div class="col">

          <form method="get" action="./register.php" class="registration-form">
            <label class="col-one-half">
                <span class="label-text">Фамилия</span>
                <input type="text" name="firstname">
            </label>
            <label class="col-one-half">
                <span class="label-text">имя</span>
                <input type="text" name="lastname">
            </label>
            <label>
                <span class="label-text">Email</span>
                <input type="text" name="email">
            </label>
            <label class="password">
                <span class="label-text">Пароль</span>
                <button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
                    <span class="glyphicon glyphicon-eye-close"></span>
                </button>
                <input type="password" name="password">
            </label>
            
            <div class="text-center">
                <button class="submit" name="register">Регистрация</button>
            </div>
	      </form>

          </div>
        </div>
      </div> 
    </intro>

    <!-- FOOTER -->

    <?php require("./elements/footer.php") ?>
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

          <form method="get" action="./auth.php" class="registration-form">
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
                <button class="submit" name="register">Войти</button>
            </div>
	      </form>

          <p class="suptitle">
          <!-- Вы можете <b><a style="color: black" href="signup.php" style="color: black">зарегистрироваться</a></b>, если у вас нет акаунта<br>
        </p>
          </div> -->
        </div>
      </div> 
    </intro>

    <!-- FOOTER -->

    <?php require("./elements/footer.php") ?>
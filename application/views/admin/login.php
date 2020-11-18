<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema CONFCAMILA</title> 
  </head>
  <body>
    <div class="col-md-4">
    <img src="<?php echo base_url( ). "assets/"; ?>imagenes/logotecsa.png" style="
    width: 1300px;
    height: 650px;">
    </div>
  
    <div class="login-box">
      <img src="<?php echo base_url( ). "assets/"; ?>imagenes/logoo.png" class="avatar" alt="Avatar Image">
      
      <h1>Sistema de ventas</h1>
        <?php if($this->session->flashdata("error")):?>
                  <div class="alert alert-danger">
                    <p><?php echo $this->session->flashdata("error") ?></p>
                  </div>
                
        <?php endif;?>
      <form action="<?php echo base_url();?>auth/login" method="post">
        <!-- USERNAME INPUT -->
        <label for="username">Username</label>
        <input type="text" placeholder="Enter Username" name="nombreusuario">
        <!-- PASSWORD INPUT -->
        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" name="contrasena">
        <input type="submit" value="Entrar">
        <!-- <a href="#">Lost your Password?</a><br>
        <a href="#">Don't have An account?</a> -->
      </form>
    </div>
  </body>
</html>

<style>
  body {
  margin: 0;
  padding: 0;
  background: url(img/logotecsa.png) no-repeat center top;
  background-size: cover;
  font-family: sans-serif;
  height: 100vh;
}

.login-box {
  width: 320px;
  height: 337px;
  background: #222cf1;
  color: #fff;
  top: 65%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
}

.login-box .avatar {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  border: 1px;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}

.login-box h1 {
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 22px;
}

.login-box label {
  margin: 0;
  padding: 0;
  font-weight: bold;
  display: block;
}

.login-box input {
  width: 100%;
  margin-bottom: 20px;
}

.login-box input[type="text"], .login-box input[type="password"] {
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
}

.login-box input[type="submit"] {
  border: none;
  outline: none;
  height: 40px;
  background: red;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;
}

.login-box input[type="submit"]:hover {
  cursor: pointer;
  background: #ffc107;
  color: #000;
}

.login-box a {
  text-decoration: none;
  font-size: 12px;
  line-height: 20px;
  color: darkgrey;
}

.login-box a:hover {
  color: #fff;
}

</style>

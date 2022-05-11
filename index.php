<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./Accets/img/e-voting.png" type="image/x-icon" />
  <title>e-voting</title>
  <link rel="stylesheet" href="./Accets/css/main.css" />
</head>

<body>
  <header id="mainHeader">
    <h1>Hey Wellcome To <span>E-Voting 👨‍💻</span></h1>
  </header>
  <section id="loginSection">
    <div class="container">
      <div class="leftContent">
        <img src="./Accets/img/register.svg" alt="Login" class="login_img" />
      </div>
      <div class="rightContent">
        <form action="./action/login.php" method="POST">
          <div class="loinTitle">
            <span>
              <i class="fas fa-user"></i>
              <h1>Voter Login</h1>
            </span>
          </div>
          <div class="inputField">
            <!-- <label for="">Name</label> -->
            <input type="text" placeholder="Enter Your Username" required name="username" />
          </div>
          <div class="inputField">
            <!-- <label for="">Number</label> -->
            <input type="number" placeholder="Enter Your Number" required name="ph_number" />
          </div>
          <div class="inputField">
            <!-- <label for="">Number</label> -->
            <input type="email" placeholder="Enter Your Email" required name="email" />
          </div>
          <div class="inputField">
            <!-- <label for="">Password</label> -->
            <input type="password" placeholder="Enter Your Password" required name="password" />
          </div>
          <div class="inputField">
            <select name="std_g" id="grup" class="voter_opction" required>
              <option value="select_opction">Select Your Role</option>
              <option value="voter">Voter</option>
              <option value="grup">Grupe</option>
            </select>
          </div>
          <input type="submit" value="Login" class="login_btn" style="cursor: pointer;" />
          <div class="register_btn">
            <span>Don't Have Any Account ?
              <a href="./Component/register.php" target="_blank">Register Here</a></span>
          </div>
        </form>
      </div>
    </div>
  </section>
  <footer>
    <a href="">© Developed By Codewithashim</a>
  </footer>

  <script src="https://kit.fontawesome.com/866403cfce.js" crossorigin="anonymous"></script>
</body>

</html>
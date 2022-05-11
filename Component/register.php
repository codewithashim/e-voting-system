<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link rel="shortcut icon" href="../Accets/img/e-voting.png" type="image/x-icon" />
  <link rel="stylesheet" href="../Accets/css/main.css" />
</head>

<body>

  <header id="mainHeader">
    <h1>Hey Wellcome To <span>E-Voting 👨‍💻</span></h1>
  </header>
  <section id="registerSection" class="registerSection loginSection">
    <div class="container">
      <div class="leftContent">
        <img src="../Accets/img/login.svg" alt="Register" />
      </div>
      <div class="rightContent">
        <form action="../action/register.php" method="POST" enctype="multipart/form-data">
          <div class="loinTitle">
            <span>
              <i class="fas fa-user"></i>
              <h1>Voter Registeretion</h1>
            </span>
          </div>
          <div class="inputField">
            <!-- <label for="">Name</label> -->
            <input type="text" placeholder="Enter Your Username" required name="user_name" />
          </div>
          <div class="inputField">
            <!-- <label for="">Number</label> -->
            <input type="number" placeholder="Enter Your Number" required name="reg_ph_number" />
          </div>
          <div class="inputField">
            <!-- <label for="">Number</label> -->
            <input type="email" placeholder="Enter Your Email" required name="reg_email" />
          </div>
          <div class="inputField">
            <!-- <label for="">Password</label> -->
            <input type="password" placeholder="Type A New Password" required name="reg_password" />
          </div>
          <div class="inputField">
            <!-- <label for="">Password</label> -->
            <input type="password" placeholder="Type Confirem Password" required name="reg_conf_password" />
          </div>
          <div class="inputField">
            <input type="file" name="profile_photo" id="profile_photo" class="profile_input" style="border: 1px solid #000; border-radius: 0.2rem; cursor: pointer; ">
          </div>
          <div class="inputField">
            <select name="std_grup" id="grup" class="voter_opction" required>
              <option value="select_opction">Select Your Role</option>
              <option value="voter">Voter</option>
              <option value="grup">Grupe</option>
            </select>
          </div>
          <input type="submit" value="Register" class="login_btn" style="cursor: pointer;" />
          <div class="register_btn">
            <span>I'm Already A Voter
              <a href="../index.php" target="_blank">Login</a>
            </span>
          </div>
        </form>
      </div>
    </div>
  </section>
  <footer>
    <a href="">© Developed By Codewithashim</a>
  </footer>


  <!-- fontawsome -->
  <script src="https://kit.fontawesome.com/866403cfce.js" crossorigin="anonymous"></script>
</body>

</html>
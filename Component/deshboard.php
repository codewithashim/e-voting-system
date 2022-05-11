<?php
session_start();
if(!isset($_SESSION['id'])){
header('location:../');
}
$data=$_SESSION['data'];
if ($_SESSION['status'] == 1) {
  $status = '<b style="color: green;"> Voted</b>';
} else {
  $status = '<b style="color: red;"> You Are Not Voted</b>';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../Accets/img/e-voting.png" type="image/x-icon" />
  <title>Deshboard</title>
  <!-- css link -->
  <link rel="stylesheet" href="../Accets/css/main.css" />
</head>

<body>
  <!-- ======= header start ========-->
  <header id="mainHeader" style="width: 100%; background: #fafafa; box-shadow: none; text-align: center;">
    <h1>Hey Wellcome To <span>E-Voting 👨‍💻</span></h1>
  </header>
  <!-- ======= header end ======= -->
  <!-- ==== loout or back btn section start ==== -->
  <section id="main_page" class="back_to_main_page_btn">
    <div class="contianer btn_content">
      <a href="../index.php">
        <button type="button" class="common_btn back_btn">Back</button>
      </a>
      <a href="../Component/logout.php">
        <button type="button" class="common_btn logout_btn">Logout</button>
      </a>
    </div>
  </section>
  <!-- ==== logut or back btn section end ==== -->
  <main id="user_grup">
    <div class="user_grup_container">
      <div class="grup_section">
        <?php
        if (isset($_SESSION['grup'])) {
          $grups = $_SESSION['grup'];
          for ($i = 0; $i < count($grups); $i++) {
        ?>
            <div class="grup_img_part">
              <img src="../upload/<?php echo $grups[$i]['photo'] ?>" alt="Group Profile">
            </div>
            <div class="grup_name">
              <h3>Group Name : <?php echo $grups[$i]['username'] ?></h3>
              <h3>Votes : <?php echo $grups[$i]['vote'] ?></h3>
            </div>

            <form action="../action/voting.php" method="POST">
              <input type="hidden" name="grupe_vote" value="<?php echo $grups[$i]['vote'] ?>">
              <input type="hidden" name="grupe_id" value="<?php echo $grups[$i]['id'] ?>">

              <?php
              if ($_SESSION['status'] == 1) {
              ?>
                <button class="vote_btn voted">Voted</button>
              <?php
              } else {
              ?>
                <button class="vote_btn vote" type="submit">Vote</button>
              <?php
              }
              ?>
            </form>

            <hr class="line">
        <?php
          }
        } else{
          ?>
          <div class="no_grup_msg">
            <p>No Grup's To Display In This Moment..👨‍💻👨‍💻</p>
          </div>
          <?php
        }
        ?>

      </div>
      <div class="user_section">
        <div class="user_profile">
          <img src="../upload/<?php echo $data['photo']; ?>" alt="User Profile">
        </div>
        <div class="user_details">
          <h3>Name : <?php echo $data['username']; ?></h3>
          <h3>Mobile : <?php echo $data['moblile']; ?></h3>
          <h3>Email : <?php echo $data['email']; ?></h3>
          <h3>Status : <?php echo $status; ?></h3>
        </div>
      </div>
    </div>
  </main>
  <!--======= footer ======-->
  <footer>
    <a href="">© Developed By Codewithashim</a>
  </footer>
</body>

</html>
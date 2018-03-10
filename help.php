<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Osman || Online Exam System</title>
    <link rel="stylesheet" href="css/help.css">
  </head>
  <body>
    <div class="main">
        <div class="header">
          <img src="img/mainheader.jpg" alt="" >
        </div>
        <div class="mainmenue">
          <a class="active" href="index.php">Home</a>
          <a href="instruction.php">Instruction</a>
          <a href="notice.php">Notice</a>
          <a href="home.php">UserLogin</a>
          <a href="adminlogin.php">Admin</a>
        </div>
        <div class="mainbody">
          <h3>Wellcome to Online Exam System</h3>
          <div class="content">
            <ul >
             <li style="list-style-type:none;">
               <p>
                 যেকোন সমস্যা হলে প্রয়োজনে যোগাযোগ করুন-<br><br>
                 E-mail: osmansmartphone@gmail.com.<br><br>
                 Mobile: 01722649033.<br><br>
                 ২৪ ঘণ্টা আমাদের টিম আপনাদের সেবা দেওয়ার জন্য প্রস্তুত আছে।
                 <br><br><mark>মানসম্মত সেবা দেওয়াই আমাদের উদ্দেশ্য।</mark>

              </p>
          </div>

        </div>
    </div>
    <div class="footer">
      <p>copyright &copy Md. Osman Gani-2018, All rights reserved.  &nbsp;&nbsp;&nbsp; <a href="">LICT TUP-OFF IT BDJ-22, Dinajpur.</a></p>
    </div>

    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("lictslides");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 4000); // Change image every 4 seconds
    }
    </script>

  </body>
</html>

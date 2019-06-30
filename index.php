<?php  
 include 'connect.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>University of Michigan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/slideShowImage.css">
    <script type="text/javascript" src="validation.js"></script>
    <style>
* {
  box-sizing: border-box;
  }

/* Create three equal columns that floats next to each other */
.column {
  position: relative;
    margin-left: 60px;
    margin-bottom:60px;
    display: inline-block;
    float: left; 
    height: 700px;
 /* float: left;
  width: 33.33%;
  padding: 10px;
  height: 700px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row {
 /* content: "";
  display: table;
  clear: both;*/
  border:none;
    width:350px;
    position: relative;
    left: 20px;
    
}
</style>
</head>
<body style="background-color: white;" style="overflow: scroll; overflow-x: scroll;">
    <header class="header">
        <table><tr>
            <div>
            <td><img src="images/michiganLogo.png" style="width:50px;height:50px;"></td>
            <td><h1 style = "color: red;font-size: 150%;">University of Michigan</h1></td></div>
            <div class="login"><a href="login.php" style="font-size: 20px;color: white;"> Login</a>
            </div>
            </tr></table>
    </header>

    
    <div class="slideshow-container" >
        <div class="mySlides fade">
            <img src="images/slideshowimage1.jpg" style="width: 100%;height: 300px;">
        </div>`
        <div class="mySlides fade">
            <img src="images/slideshowimage2.jpg" style="width: 100%;height: 300px;">
        </div>
        <div class="mySlides fade">
            <img src="images/slideshowimage3.jpg" style="width: 100%;height: 300px;">
        </div>
    </div>

    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>
    <script type="text/javascript" src="javascripts/slideshowimage.js"></script>

    <div style="background-color: white ;width: 100%; height: 300px;">
            <h1 class="heading" style = "font-size: 250%;">WHY SOE?<h5 class="heading" style=" font-family: calibiri">The School of Education'$ reputational ranking continues<br>to be the highest of any public University</h5></h1><br>
            <table width="100%"><tr>
                <div><td><h2 class="heading">#1<h6 class="heading" >Education and<br> Educational Research</h6></h2></td>

                    <td><h2 class="heading">#1<h6 class="heading" >centre for the study of higher<br> and postsecondary education</h6></h2></td>

                    <td><h2 class="heading">1:8<h6 class="heading" >study to faculty ratio</h6></h2></td>
                </div></tr>

                <tr><div><td><h2 class="heading">97%<h6 class="heading" >of graduates have jobsin<br> their field within 6 months</h6></h2></td>

                    <td><h2 class="heading">7<h6 class="heading" >Member of National <br>academy of education</h6></h2></td>

                    <td><h2 class="heading">37<h6 class="heading" >Active research grants</h6></h2></td>
                </div></tr>
            </table>
    </div>
    <h1 style="font-size: 250%;text-align: center;">NEWS</h1><br>
            <?php
                $query = "SELECT * FROM tbl_images ORDER BY date DESC LIMIT 3 ";

                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                { ?>
                    <div class="column">
                    <div class="row">
                     <img src="data:image/jpeg;base64,<?php echo base64_encode($row['name'] );?>" height="200px" width="100%" class="heading" />
                     <h3><?php echo $row['title']; ?></h3>
                     <p><?php echo $row['description']; ?></p>           
                        </div>
                    </div>
                <?php } ?>     
    <footer class="footer">
        <table><tr><div>
        <td>
            <img src="images/footerimage.jpg" style=" width:80px;height: 80px;">
        </td>
        <td>
            <h5 style="color: white;">© 2019 The Regents of the University of Michigan<br> 500 S. State Street, Ann Arbor, MI 48109 USA<br></h5>
        </td>
        <td>
            <address>
            <a href="tel:9954822536" style="color: White;"><img src="images/phone.png" style="width:15px;height: 15px;">: 9954822536</a><br><br>
            <a href="https://bit.ly/2tRzDj5" style="color: White;"><img src="images/mail.jpg" style="width:15px;height: 15px;">: rajatstms@gmail.com</a><br></address>
        </td>
        </div></tr>
        </table>
    </footer>

</body>
</html>

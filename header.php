<!DOCTYPE HTML>
<html>

<head>
  <title>An experiment</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">An experiment.<span class="logo_colour">(alpha)</span></a></h1>
          <h2>A tagline !</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <?php
            $pname=basename($_SERVER['PHP_SELF']);
          ?>
          <?php
          if($pname=="index.php")
          {
            ?>
         <li class="selected"><a href="index.php">Home</a></li>
          <?php
          }
          else
          {
            ?>
            <li><a href="index.php">Home</a></li>
          <?php
          }
          ?>
         
          <?php
          if($pname=="page.php")
          {
            ?>
                      <li class="selected"><a href="page.php">Login</a></li>
                      <?php
          }
          else
          {
            ?>
                      <li><a href="page.php">Login</a></li>
          <?php
          }
          ?> 
          <?php
          if($pname=="anotherpage.php")
          {
            ?>
                      <li class="selected"><a href="anotherpage.php">Account</a></li>
                      <?php
          }
          else
          {
            ?>
                      <li><a href="anotherpage.php">Account</a></li>
          <?php
          }
          ?>
           <?php
          if($pname=="contact.php")
          {
            ?>
                      <li class="selected"><a href="contact.php">Contact US</a></li>
                      <?php
          }
          else
          {
            ?>
                      <li><a href="contact.php">Contact US</a></li>
          <?php
          }
          ?>
            <?php
          if($pname=="addstudent.php")
          {
            ?>
                      <li class="selected"><a href="addstudent.php">Add student data</a></li>
                      <?php
          }
          else
          {
            ?>
                      <li><a href="addstudent.php">Add student data</a></li>
          <?php
          }
          ?>
            <?php
          if($pname=="addcompany.php")
          {
            ?>
                      <li class="selected"><a href="addcompany.php">Add company data</a></li>
                      <?php
          }
          else
          {
            ?>
                      <li><a href="addcompany.php">Add company data</a></li>
          <?php
          }
          ?>
           <?php
          if($pname=="viewdata.php")
          {
            ?>
                      <li class="selected"><a href="viewdata.php">View Data</a></li>
                      <?php
          }
          else
          {
            ?>
                      <li><a href="viewdata.php">View data</a></li>
          <?php
          }
          ?> 
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>Experiment initiated</h4>
        <h5>June 1st,2019</h5>
        <p>Some tabs require signing in first!<br>
          That is why if you are not signed in you will be taken to the login page.
          Some features are reserved for company representatives only.
          The tabs that require signing in are :<br>
          <b>1.The account page.</b><br>
          <b>2.The view data page.</b><br>
          You can always contact us incase you are facing any issues!
        </p><br>
        I will update this sidebar once something pops up !</p>
        <h3>Useful Links</h3>
        <ul>
          <li><a href="contact.php">Submit issues</a></li>
          <li><a href="contact.php">Become a part of the team</a></li>
          <li><a href="newheader.php">Change theme to white</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
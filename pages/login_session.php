<?PHP 
        if(isset($_SESSION['name']) && isset($_SESSION['login'])){ ?>
<div id="welcome"> Welcome visitor <?PHP echo $_SESSION['name'] ?> <a href="../pages/logout.php">Logout</a>.</div>  
        
          <?PHP } else {?>
        ?>
        <div id="welcome"> Welcome visitor you can <a href="../viewPages/account.php">login</a> or <a href="viewPages/customer_reg.php">create an account</a>. </div>
          <?PHP } ?>

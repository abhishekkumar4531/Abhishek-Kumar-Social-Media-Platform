<nav>
  <div class="container">
    <ul>
      <li>
        <?php
          if(isset($_SESSION['logged_in'])){
            echo '<a href="http://mvc-task.com/afterLogin">Home</a>';
          }
          else{
            echo '<a href="http://mvc-task.com/userControl">Home</a>';
          }
        ?>
      </li>
      <li>
        <?php
          if(isset($_SESSION['logged_in'])){
            echo '<a href="http://mvc-task.com/afterLogin">Register</a>';
          }
          else{
            echo '<a href="http://mvc-task.com/userControl/userSignup">Register</a>';
          }
        ?>
      </li>
      <li>
        <?php
          if(isset($_SESSION['logged_in'])){
            echo '<a href="http://mvc-task.com/afterLogin/userLogout">Logout</a>';
          }
          else{
            echo '<a href="http://mvc-task.com/userControl">Login</a>';
          }
        ?>
      </li>
      <li>
        <?php
          if(isset($_SESSION['logged_in'])){
            echo '<a href="http://mvc-task.com/afterLogin/userProfile">Profile</a>';
          }
          else{
            echo '<a href="http://mvc-task.com/userControl">Profile</a>';
          }
        ?>
      </li>
    </ul>
  </div>
</nav>
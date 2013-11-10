<?
$title = "Login";
include "header.php";
?>

  <body>
    <form id="center" action="process_login_form.php" method="post">
      <table>
        <tr>
          <td>Username:</td>
          <td>
            <input name="user" type="text"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input name="pass" type="password"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Log In"></td>
        </tr>
      </table>      
    </form>
  </body>
</html>
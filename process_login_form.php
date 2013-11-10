<?
include"connect.php";

// if username and password were submitted, check them
    // if username and password were submitted, check them
    if (isset($_POST["user"]) && isset($_POST["pass"]))
    {
        // prepare SQL
        $sql = sprintf("SELECT 1 FROM users WHERE user='%s' AND pass=AES_ENCRYPT('%s', 'muser')",
                       mysql_real_escape_string($_POST["user"]),
                       mysql_real_escape_string($_POST["pass"]));

        
        // die($sql);
        // execute query
        $result = mysql_query($sql);
        if ($result === false)
            die("Could not query database");

        // check whether we found a row
        if (mysql_num_rows($result) == 1)
        {
            // remember that user's logged in
            $_SESSION["authenticated"] = true;

            // redirect user to home page, using absolute path, per
            // http://us2.php.net/manual/en/function.header.php
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: http://$host$path/home.php");
            exit;
        }
        else {
          $host = $_SERVER["HTTP_HOST"];
          $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
          header("Location: http://$host$path/login_form.php");
          exit;
        }
    }
    mysqli_close($connection);
?>


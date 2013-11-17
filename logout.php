<? 
    /**
     * logout.php
     *
     * A simple logout module for all of our login modules.
     *
     * David J. Malan
     * Computer Science S-75
     * Harvard Summer School
     */

    // enable sessions
    session_start();

    // delete cookies, if any
    setcookie("user", "", time() - 3600);
    setcookie("pass", "", time() - 3600);

    // log user out
    setcookie(session_name(), "", time() - 3600);
    session_destroy();

    $host = $_SERVER["HTTP_HOST"];
    $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
    header("Location: http://$host$path/home.php");
?>
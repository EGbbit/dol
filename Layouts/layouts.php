<?php
class layouts{
    public function heading($conf) {
        echo "<h1>Welcome to BBIT DevOps</h1>";
    }
    public function welcome($conf) {
        echo "This is a new semester";
    }
    public function footer($conf) {
        echo "<footer>
         Copyrights &copy; ".date("Y") . " " . $conf['site_name'] . "
         <br> Contact us at <a href='mailto:{$conf['site_email']}'>{$conf['site_email']}</a></footer>";
    }
} 
<?php
$user = get_current_user();
$cmd = shell_exec("find /home/$user/ -regextype posix-egrep -regex \".*\.(php|xml|html|tpl)$\"  -print0 | xargs -0 grep -r '/export/linux/\|/export/www\|mysql-server\|mysql-server01\|mysql-server02' | grep -v 'cfind.php'");
echo "<pre>";
print_r($cmd);
echo "</pre>";
?>

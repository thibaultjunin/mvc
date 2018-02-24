<?php
chdir($argv[2]);
shell_exec("git reset --hard");
shell_exec("git pull {$argv[1]}");
shell_exec('composer install');
shell_exec('composer update');

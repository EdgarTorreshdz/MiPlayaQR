<?php
exec('git fetch --all 2>&1', $output);
var_dump($output);

exec('git reset --hard origin/master 2>&1', $output);
var_dump($output);

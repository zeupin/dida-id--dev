<?php
/**
 * Dida Framework  -- A Rapid Development Framework
 * Copyright (c) Zeupin LLC. (http://zeupin.com)
 *
 * Licensed under The MIT License
 * Redistributions of files MUST retain the above copyright notice.
 */

echo PHP_INT_MAX . PHP_EOL;
echo base_convert(PHP_INT_MAX, 10, 2) . PHP_EOL;
echo time() .PHP_EOL;
echo base_convert(time(), 10, 2) . PHP_EOL;


echo base_convert('01111111111111111111111111111111', 2, 10) . PHP_EOL;

echo microtime() . PHP_EOL;
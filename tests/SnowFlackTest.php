<?php
/**
 * Dida Framework  -- A Rapid Development Framework
 * Copyright (c) Zeupin LLC. (http://zeupin.com)
 *
 * Licensed under The MIT License.
 * Redistributions of files MUST retain the above copyright notice.
 */

use \PHPUnit\Framework\TestCase;
use \Dida\ID\SnowFlack;

/**
 * SnowFlackTest
 */
class SnowFlackTest extends TestCase
{
    public function test_make()
    {
        $id = SnowFlack::make();
        var_dump($id);
    }
}

<?php
/**
 * This file is part of CaptainHook.
 *
 * (c) Sebastian Feldmann <sf@sebastian.feldmann.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace CaptainHook\App\Console\IO;

use CaptainHook\App\Console\IO;

trait Mockery
{
    /**
     * Create IO mock
     *
     * @return \CaptainHook\App\Console\IO
     */
    public function createIOMock(): IO
    {
        return $this->getMockBuilder(DefaultIO::class)
                   ->disableOriginalConstructor()
                   ->getMock();
    }
}

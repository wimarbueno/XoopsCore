<?php
require_once(dirname(__FILE__).'/../init_new.php');

require_once(XOOPS_TU_ROOT_PATH . '/kernel/module.php');

/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
class legacy_moduleTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function test___construct()
    {
        $instance=new \XoopsModule();
        $this->assertInstanceOf('\Xoops\Core\Kernel\Handlers\XoopsModule', $instance);
    }
}

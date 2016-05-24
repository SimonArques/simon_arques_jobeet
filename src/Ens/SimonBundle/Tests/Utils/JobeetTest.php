<?php
/**
 * Created by PhpStorm.
 * User: EVER
 * Date: 24/05/2016
 * Time: 13:50
 */

namespace Ens\SimonBundle\Utils;
use Ens\SimonBundle\Utils\Jobeet;

class JobeetTest extends \PHPUnit_Framework_TestCase
{
    public function testSlugify()
    {
        $this->assertEquals('n-a', Jobeet::slugify(''));
    }
}
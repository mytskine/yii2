<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yiiunit\framework\web;

use yii\data\DataProviderInterface;
use yii\web\Controller;
use yii\web\Request;
use yiiunit\framework\web\stubs\VendorImage;

/**
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @author Sam Mousa<sam@mousa.nl>
 * @author Brandon Kelly <branodn@craftcms.com>
 */
class FakeController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionAksi1($fromGet, $other = 'default')
    {
    }

    public function actionAksi2(int $foo, float $bar = null, bool $true, bool $false)
    {
    }

    public function actionInjection($before, Request $request, $between, VendorImage $vendorImage, Post $post = null, $after)
    {

    }

    public function actionNullableInjection(?Request $request, ?Post $post)
    {
    }

    public function actionModuleServiceInjection(DataProviderInterface $dataProvider)
    {
    }
}

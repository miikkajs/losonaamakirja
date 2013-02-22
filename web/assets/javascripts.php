<?php

use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;
use Assetic\Filter\Yui\JsCompressorFilter as YuiCompressorFilter;

$js = new AssetCollection(array(
    new FileAsset('home/user/losofacebook/web/js/less.min.js'),
    new FileAsset('home/user/losofacebook/web/js/app.min.js'),
    new FileAsset('home/user/losofacebook/web/js/services.js'),
    new FileAsset('home/user/losofacebook/web/js/controllers.js'),
    new FileAsset('home/user/losofacebook/web/js/filters.js'),
    new FileAsset('home/user/losofacebook/web/js/directives.js')
    //new FileAsset(__DIR__.'/application.js'),
), array(
    new YuiCompressorFilter('home/user/losofacebook/web/js/yuicompressor.jar'),
));

header('Content-Type: application/js');
echo $js->dump();

?>
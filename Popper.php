<?php

namespace nolbertovilchez\yii2\asset;

class Popper extends \Yii\web\AssetBundle {

    /**
     * @inherit
     */
    public $baseUrl = '@web/static/third_party/popper.js/dist';
    
    /**
     * @inherit
     */
    public $js = [
        'umd/popper.min.js'
    ];

}

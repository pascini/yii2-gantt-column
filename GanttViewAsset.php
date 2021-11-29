<?php

namespace pascini\ganttcolumn;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the javascript and css files for the [[GanttView]] widget.
 *
 * @author Markus Rottter <rottriges@gmail.com>
 */
class GanttViewAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
    public $js = [
        'js/ganttView.js',
    ];
    public $css = [
        'css/ganttColumn.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
    public $publishOptions = [
         //coopies always the assets make it work only in debug mode:
        'forceCopy' => YII_DEBUG
    ];
}

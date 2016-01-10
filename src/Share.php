<?php

namespace bigpaulie\social\share;

use bigpaulie\social\share\Widget;
use yii\helpers\Html;

class Share extends Widget {

    public function run() {
        $html =  Html::beginTag($this->tag , $this->htmlOptions);
        foreach ($this->networks as $key => $val) {
            $html .= $this->parseTemplate($key);
        }
        $html .= Html::endTag($this->tag);
        return $html;
    }

}

<?php

namespace App;

class ResumeManager
{
    protected $resume;

    /**
     * 履歴書の元となるJSONを読み込み
     */
    public function read($resume)
    {
        $this->resume = file_get_contents(__DIR__ . '/../' . $resume . '.json');
        return $this;
    }

    /**
     * 履歴書のPDFを生成
     */
    public function generate()
    {
        return $this;
    }
}
<?php

namespace Other;

class Timestamp {
    // インスタンス生成時の時刻を保持
    protected int $generated_time;

    public function __construct(){
        $this->generated_time = time();
    }
    
    /**
     * インスタンス生成時の時間を返す
     *
     * @return string
     */
    public function getTime() : string{
        return date("Y/m/d H:i:s", $this->generated_time);
    }

    /**
     * 引数の時刻と、インスタンス生成時の時刻の差を文字列にして返す
     *
     * @param integer $time
     * @return string
     */
    public function getElapsedTime(int $time) :string {
        $elapsedTime = $time - $this->generated_time;
        return date("i:s", $elapsedTime);
    }

    /**
     * 文字列に変換したgenerated_timeを返す
     *
     * @return string
     */
    public function __toString():string {
        return (string)$this->generated_time;
    }
}
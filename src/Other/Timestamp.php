<?php

class Timestamp {
    // インスタンス生成時の時刻を保持
    protected int $generated_time;

    public function __construct(){
        $this->generated_time = time();
    }
    
    // インスタンス生成時の時間を取得する
    public function getTime() : string{
        return date("Y/m/d H:i:s", $this->generated_time);
    }

    // 引数の時刻と、インスタンス生成時の時刻の差を文字列にして返す
    public function getElapsedTime(int $time) :string {
        $elapsedTime = $time - $this->generated_time;
        return date("i:s", $elapsedTime);
    }

    public function __toString() {
        return (string)$this->generated_time;
    }
}
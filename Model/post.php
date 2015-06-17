<?php

/**
 * Description of post
 *
 * @author Aki
 */

class post{
    protected $_values;
     // コンストラクタ
    public function __construct() {
        $this->setValues();
    }
    // パラメータ値設定
     protected function setValues()
    {
        foreach ($_POST as $key => $value) {
            $this->_values[$key] = $value;
        }		
    }	
    //GET    
     public function get($key = null) {
        $ret = null;
        if ($key == null) {
            $ret = $this->_values;
        } else {
            if ($this->has($key) == TRUE) {
                $ret = $this->_values[$key];
            }
        }
        return $ret;
    }
    // 指定のキーが存在するか確認
    public function has($key) {
        if (array_key_exists($key, $this->_values) == FALSE) {
            return false;
        }
        return true;
    }
}

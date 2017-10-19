<?php
class Layout {
    private static $initialized = false;

    public static function init() {
        global $_CONFIG;
        if (self::$initialized) {
            return;
        }
        self::$initialized = true;
    }

    public function start() {
        
    }
}


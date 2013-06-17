<?php
class UserHelper extends AppHelper {
    public function __construct(View $view, $settings = array()) {
        parent::__construct($view, $settings);
        debug($settings);
    }
}
?>
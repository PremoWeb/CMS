<?php

namespace PremoWeb\CMS;

class CMS {
    public function welcome() {
        phpinfo();
        return "Welcome to the PremoWeb CMS!";
    }
}

// Example usage
$cms = new CMS();
echo $cms->welcome();

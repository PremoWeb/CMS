<?php
namespace PremoWeb\CMS;

class CMS {
    use Traits\UserManagement, Traits\ContentManagement;

    public function welcome() {
        return "Welcome to the PremoWeb CMS!";
    }
}

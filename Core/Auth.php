<?php 

namespace Core;

class Auth {
    public function user()
    {
        return (object) Session::get('user');
        // return $this;
    }
    public function name()
    {
        return $this->user();
    }
}
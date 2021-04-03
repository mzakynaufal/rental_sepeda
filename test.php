<?php

class Page 
{
    public function index()
    {
        $this->sayHello();
        echo 'hello world';
    }

    public function sayHello ()
    {
        echo 'Selamat Pagi';
    }


}

$page = new Page();
$page->index();
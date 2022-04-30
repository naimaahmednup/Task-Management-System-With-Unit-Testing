<?php

class userTest extends \PHPUnit\Framework\TestCase{
    protected $admin;
    public function testAdminLogin(){
        $this->admin = new \App\user;

        $this->assertEquals($this->admin->login("admin","admin"),True);
}
}
?>
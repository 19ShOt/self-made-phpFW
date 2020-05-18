<?php

class MiniBlogApplication extends Application
{

    protected $login_action = array('account', 'signin');

    public function getRootDir()
    {
        return dirname(__FILE__);
    }

    protected function registerRoutes()
    {
        return array(
            '/account'
            => array('controller' => 'account', 'action' => 'index'),
            '/account/:action'
            => array('controller' => 'account'),
        );
    }

    protected function configure()
    {
        $this->db_manager->connect('master', array(
            'dsn'      => 'mysql:dbname=sample;host=db-host2;port=3306;charset=utf8mb4',
            'user'     => 'root',
            'password' => 'root',
        ));
    }
}

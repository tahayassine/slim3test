<?php
class User{

    private $user_id;
    private $user_name;
    private $user_email;
    private $user_passeword;
    private $user_active;
    private $user_admin;
    private $user_re;
    private $user_tags;
    private $user_imgs;
    private $user_bio;
    private $user_date;
    private $user_geo;
    private $db;

    public function __construct(array $kwarg)
    {
    }

    public function getUserBy($type, $val)
    {

    }
}
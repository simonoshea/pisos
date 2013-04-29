<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/core/etc/dbvar.php');

class UserDetails
{
    public $user_uname;
    public $user_id;
    public $user_email;
    public $user_fn;
    public $user_tel;
    public $user_fname;
    public $user_role;
    
    function __construct($un)
    {
        $connection = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);
        if (!$connection) {
            die('Could not connect: ' . mysql_error());
        } else {
            mysql_select_db("pisos_1", $connection);
            $query     = mysql_query("SELECT * FROM sos_users WHERE user_uname='$un'");
            $sqlobject = mysql_fetch_object($query);
        }
        $this->user_id    = $sqlobject->user_id;
        $this->user_uname = $sqlobject->user_uname;
        $this->user_email = $sqlobject->user_email;
        $this->user_fname = $sqlobject->user_fn;
        $this->user_sname = $sqlobject->user_sn;
    }
}


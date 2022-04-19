<?php
class User
{
    public $name = 'User. ';
    protected $email = 'user@mail.com';
    private $password = '123456';

    function set_email($email)
    {
        // Check if user logged in
        // if (logged) {
        //     $this->email = $email;
        // } else {
        //     return 'Error';
        // }
        $this->email = $email;
    }

    protected function get_email()
    {
        // Check if user logged in
        // if (logged) {
        //     return $this->email;
        // } else {
        //     return substr($this->email, 0, 3);
        // }
        return substr($this->email, 0, 3);
    }

    function get_email_1()
    {
        return $this->get_email();
    }

    function get_password()
    {
        return '*******';
    }
}

class friend extends User
{
    public $name = 'Friend. ';
    private $password = 'FriendPass';

    function get_user_email()
    {
        // Check if user logged in
        // if (logged && friend) {
        //     return $this->email;
        // } else {
        //     return ERORR;
        // }
        // return $this->get_email();
        return $this->email;
    }

    function get_password()
    {
        return $this->password;
    }
}


$user = new friend();
echo $user->name;
// echo $user->get_email();
// echo $user->get_email_1();
echo $user->get_user_email();
echo $user->get_password();


<?php
class User
{
    public $name;
    protected $email;
    private $password;

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
}

$mango = new User();
$mango->name = 'Mango'; // OK
// $mango->email = 'Yellow@user.com'; // ERROR
// $mango->password = '300'; // ERROR

$mango->set_email('Yellow@user.com');
// echo $mango->get_email(); // ERORR
echo $mango->get_email_1();

// echo $mango->name;

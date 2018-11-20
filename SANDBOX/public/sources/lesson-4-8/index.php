<?php
    class User {
        
        public $email;
        public $password;
        public $lt;
        
        public function __construct($email, $password) {
            $this->email = $email;
            $this->password = $password;
            $this->lt = time();
        }
        
        public function __sleep() {
            return ['email', 'lt'];
        }
        
        public function __wakeup() {
            $this->lt = time();
        }
    }
    
    $user = new User('abc@mail.ru', '123');
    print_r($user);
    //$str = serialize($user);
    //$fp = fopen($user->email, 'w');
    //fwrite($fp, $str);
    //fclose($fp);
    $str = file_get_contents($user->email);
    sleep(2);
    $u = unserialize($str);
    print_r($u);
?>
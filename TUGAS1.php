<?php
abstract class User {
    public $username;
    private $password;
    
    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    abstract public function getRole();

    public function login() {
        return $this->username . " berhasil login sebagai " . $this->getRole() . ".\n";
    }
}

class Admin extends User {
    public function getRole() {
        return "Admin";
    }
    
    public function manageUser() {
        return $this->username . " sedang mengelola data pengguna.\n";
    }
}

class Member extends User {
    public function getRole() {
        return "Member";
    }

    public function viewProfile() {
        return $this->username . " sedang melihat profil pribadinya.\n";
    }
}

$admin = new Admin();
$admin->username = "Admin";
$admin->setPassword("Admin123");

echo $admin->login();
echo $admin->manageUser();
echo "\n";

$member = new Member();
$member->username = "User";
$member->setPassword("User123");

echo $member->login();
echo $member->viewProfile();
?>
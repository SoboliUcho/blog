<?php
class User
{
    public $id;
    public $name;
    public $is_login = false;

    public function __construct()
    {
        if (isset($_SESSION['User_ID'])) {
            $this->id = $_SESSION['User_ID'];
            $this->getUser();
        }
    }
    private function getUser()
    {
        $sql = "SELECT * FROM users WHERE ID = $this->id";
        $result = Db::queryOne($sql);
        if ($result) {
            $this->is_login = true;
            $this->id = $_SESSION['User_ID'];
            $this->name = $result['Name'];
        }
        else{
            $this->is_login = false;
        }
    }
    public function login($name, $password)
    {
        $password = hash('sha256', $password);
        $name = Db::escape($name);
        $sql = "SELECT * FROM users WHERE Name = '$name'";
        $result = Db::queryOne($sql);
        if ($result) {
            if (password_verify($password, $result['Password'])) {
                $_SESSION['user_id'] = $result['ID'];
                $this->is_login = true;
                $this->id = $result['ID'];
                $this->name = $result['Name'];
                return true;
            }
            return false;
        }
        return false;
    }
    public function logout()
    {
        unset($_SESSION['user_id']);
        $this->id = null;
        $this->is_login = false;
    }
    public function get_name()
    {
        if ($this->is_login) {
            return $this->name;
        } else {
            return false;
        }
    }
    public function __toString()
    {
        if ($this->is_login) {
            return "<div id='username'>$this->name</div><div>odhlásit se</div>";
        } else {
            return "<div id='username'><a href='login.php'>Přihlášení</div>";
        }
    }
}
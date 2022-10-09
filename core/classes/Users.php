<?php
class Users
{
    protected $db;
    public function __construct()
    {
        $this->db = Database::instance();
    }
    public function get($table, $fields = array())
    {
        $columns = implode(',', array_keys($fields));

        //sql queries
        $sql = "SELECT * FROM `{$table}` WHERE `{$columns}`=:{$columns} ";
        //check if the sql query is set
        if ($stmt = $this->db->prepare($sql)) {
            foreach ($fields as $key => $value) {
                //bind colums
                $stmt->bindValue(":{$key}", $value);
            }
            //execute the query
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ);
        }
    }
    // Validation Email Exist
    public function emailExist($email)
    {
        $email = $this->get('users', array('email' => $email));
        return ((!empty($email))) ? $email : false;
    }
    public function usernameExist($username)
    {
        $username = $this->get('users', array('username' => $username));
        return ((!empty($username))) ? $username : false;
    }

    // Password to hash password
    public function hash($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    //redirection after login

    public function redirect($location)
    {
        header("Location: " . BASE_URL . $location);
    }
    //users getting data 
    public function userData($user_id = int)
    {
        return $this->get('users', array('user_id' => $user_id));
    }
    // logout function
    public function logout()
    {
        $_SESSION = array();
        session_destroy();
        $this->redirect('index.php');
    }

    public function isLoggedIn()
    {
        return ((isset($_SESSION['user_id']))) ? true : false;
    }

    //updating users
    public function update($table, $fields, $condition)
    {
        $columns = '';
        $where = " WHERE ";
        $i = 1;
        //create columns
        foreach ($fields as $name => $value) {
            $columns .= "`{$name}` = :{$name}";
            if ($i < count($fields)) {
                $columns .= ", ";
            }
            $i++;
        }
        //create sql query
        $sql = "UPDATE {$table} SET {$columns}";
        //adding conditions 
        foreach ($condition as $name => $value) {
            $sql .= "{$where} `{$name}`= :{$name}";
            $where = "AND";
        }
        if ($stmt = $this->db->prepare($sql)) {
            foreach ($fields as $key => $value) {
                $stmt->bindValue(":{$key}", $value);

                foreach ($condition as $key => $value) {
                    $stmt->bindValue(":{$key}", $value);
                }
            }
            $stmt->execute();
        }
    }
}
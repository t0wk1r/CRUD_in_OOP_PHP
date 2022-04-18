<?php



class User
{
    public function __construct()
    {
        $serverhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "joni";

        $this->sql = mysqli_connect($serverhost, $dbuser, $dbpass, $dbname);
    }

    public function userinfo($data)
    {
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];



        $query = "INSERT INTO student(username,email,pass) VALUES('$username','$email','$password')";

        $this->yes = mysqli_query($this->sql, $query);
        header('Location: view.php');
    }


    public function viewuser()
    {
        $viewsql =  "SELECT * FROM student";
        return mysqli_query($this->sql, $viewsql);
    }

    public function deleteuser($tt)
    {
        mysqli_query($this->sql, "DELETE FROM student WHERE ID = '$tt'");
        header('Location: view.php');
    }

    public function edituser($editid)
    {
        $upsql =  "SELECT * FROM student WHERE ID = '$editid' ";
        return mysqli_query($this->sql, $upsql);
    }

    public function updateuser($alldata)
    {

        $d = $alldata['ID'];
        $a = $alldata['username'];
        $b = $alldata['email'];
        $c = $alldata['password'];



        $upsql = "UPDATE student SET username='$a', email= '$b', pass='$c' WHERE ID ='$d'";

        mysqli_query($this->sql, $upsql);
        header('Location: view.php');
    }
}

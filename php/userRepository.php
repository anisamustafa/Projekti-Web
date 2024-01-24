<?php 
include_once ('DatabaseConnection.php');

class UserRepository{
    private $connection;

    public function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


    public function insertUser($user){
        $conn = $this->connection;

            if($conn === null){
                die("Error: Database is null");
            }
            
        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $repeatPassword = $user->getRepeatPassword();

        $sql = "INSERT INTO users (id,name,surname,email,username,password,repeatPassword) VALUES (?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$id,$name,$surname,$email,$username,$password,$repeatPassword]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

   function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM users";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }
    

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$name,$surname,$email,$username,$password,$repeatPassword){
         $conn = $this->connection;

         $sql = "UPDATE users SET name=?, surname=?, email=?, username=?, password=?, repeatPassword=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$name,$surname,$email,$username,$password,$repeatPassword,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM users WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}

//  $userRepo = new UserRepository;

//  $userRepo->updateUser('1111','SSS','SSS','SSS','SSS','SSS');

?>
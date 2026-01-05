<?php

require_once "../config/database.php";

class UserRepository
{

    private PDO $conn;


    public function __construct()
    {
        $this->conn = Database::getInstance()->getConnection();
    }


    public function findByEmail($email)
    {

        $query = "SELECT u.id,u.full_name,u.password_hash psswrd,u.email,u.status,r.name 'role'
        FROM users u,roles r 
        WHERE u.role_id = r.id AND u.email = :email";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":email" => $email
            ]);

            $obj = $stmt->fetch(PDO::FETCH_OBJ);

            $user = new User($obj->full_name, $obj->email, $obj->role, $obj->status);
            $user->setPassword($obj->psswrd);
            $user->setId($obj->id);

            return $user;
        } catch (\Throwable $th) {
            echo " user search error ";
        }
    }

    public function create(User $user)
    {

        $query = "INSERT INTO users(full_name,email,password_hash,status) VALUES(:full_name, :email, :password, :status)";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":full_name" => $user->getFullName(),
                ":email" => $user->getEmail(),
                ":password" => $user->getPassword(),
                ":status" => $user->getStatus()
            ]);

            (int) $id = $this->conn->lastInsertId();

            if ($id) {
                $user->setId($id);
                return $user;
            }
        } catch (\Throwable $th) {
            echo "user creation error";
        }
    }


    public function update(User $user)
    {

        $query = "UPDATE users 
        SET full_name=:fullname, email=:email, password_hash=:password, status=:status 
        WHERE id=:id";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":id" => $user->getId(),
                ":fullname" => $user->getFullName(),
                ":email" => $user->getEmail(),
                ":password" => $user->getPassword(),
                ":status" => $user->getStatus()
            ]);
        } catch (\Throwable $th) {
            echo "User update error";
        }
    }


    public function delete(User $user)
    {

        $query = "DELETE FROM users WHERE id=:id";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":id" => $user->getId(),

            ]);
        } catch (\Throwable $th) {
            echo " user delete error";
        }
    }
}

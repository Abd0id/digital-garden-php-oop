<?php

require_once __DIR__ . "/../../config/database.php";
require_once "../Entity/Theme.php";

class ThemeRepository
{

    private PDO $conn;


    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function findAll(User $user)
    {

        $query = "SELECT *
        FROM themes
        WHERE user_id=:id";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":id" => $user->getId()
            ]);

            $result = $stmt->fetchAll(PDO::FETCH_OBJ);

            $themes = [];
            foreach ($result as $obj) {

                $theme = new Theme($obj->title, $obj->color, $obj->limit);
                $theme->setId($obj->id);
                $theme->setCreatedAt($obj->created_at);
                array_push($themes, $theme);
            }

            return $themes;
        } catch (\Throwable $th) {
            echo " themes search error ";
        }
    }

    public function findById($id)
    {

        $query = "SELECT *
        FROM themes
        WHERE id=:id";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":id" => $id
            ]);

            $obj = $stmt->fetch(PDO::FETCH_OBJ);

            $theme = new Theme($obj->title, $obj->color, $obj->limit);
            $theme->setId($obj->id);

            return $theme;
        } catch (\Throwable $th) {
            echo " theme search error ";
        }
    }

    public function create(Theme $theme, User $user)
    {

        $query = "INSERT INTO themes(user_id,title,color,limit)
        VALUES(:userId, :title, :color, :limit)";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":userId" => $user->getId(),
                ":title" => $theme->getTitle(),
                ":color" => $theme->getColor(),
                ":limit" => $theme->getLimit()
            ]);

            (int) $id = $this->conn->lastInsertId();

            if ($id) {
                $theme->setId($id);
                return $theme;
            }
        } catch (\Throwable $th) {
            echo "theme creation error";
        }
    }


    public function update(Theme $theme)
    {

        $query = "UPDATE themes 
        SET title=:title, color=:color, limit=:limit
        WHERE id=:id";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":id" => $theme->getId(),
                ":title" => $theme->getTitle(),
                ":color" => $theme->getColor(),
                ":limit" => $theme->getLimit()
            ]);
            return $theme;
        } catch (\Throwable $th) {
            echo "Theme update error";
        }
    }


    public function delete($id)
    {

        $query = "DELETE FROM themes WHERE id=:id";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":id" => $id
            ]);
        } catch (\Throwable $th) {
            echo " theme delete error";
        }
    }
}

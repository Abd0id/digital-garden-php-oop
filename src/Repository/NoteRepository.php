<?php

require_once "../config/database.php";
require_once "../config/database.php";


class NoteRepository
{

    private PDO $conn;


    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function findAll(Theme $theme)
    {

        $query = "SELECT *
        FROM notes
        WHERE theme_id=:id";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":id" => $theme->getId()
            ]);

            $result = $stmt->fetchAll(PDO::FETCH_OBJ);

            $notes = [];
            foreach ($result as $obj) {

                $note = new Note($obj->title, $obj->importance, $obj->content);
                $note->setId($obj->id);
                $theme->setCreatedAt($obj->created_at);
                array_push($notes, $note);
            }

            return $notes;
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

            $note = new Note($obj->title, $obj->importance, $obj->content);
            $note->setId($obj->id);
            $note->setCreatedAt($obj->created_at);

            return $note;
        } catch (\Throwable $th) {
            echo " theme search error ";
        }
    }

    public function create(Note $note, Theme $theme)
    {
        $query = "INSERT INTO notes(theme_id,title,content,importance)
        VALUES(:themeId, :title, :content, :importance)";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":themeId" => $theme->getId(),
                ":title" => $note->getTitle(),
                ":content" => $note->getContent(),
                ":importance" => $note->getImportance()
            ]);

            (int) $id = $this->conn->lastInsertId();

            if ($id) {
                $note->setId($id);
                return $note;
            }
        } catch (\Throwable $th) {
            echo "note creation error";
        }
    }


    public function update(Note $note)
    {

        $query = "UPDATE notes 
        SET title=:title, content=:content, importance=:importance
        WHERE id=:id";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":id" => $note->getId(),
                ":title" => $note->getTitle(),
                ":content" => $note->getContent(),
                ":importance" => $note->getImportance()
            ]);
        } catch (\Throwable $th) {
            echo "Note update error";
        }
    }


    public function delete(Note $note)
    {

        $query = "DELETE FROM notes WHERE id=:id";

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":id" => $note->getId(),

            ]);
        } catch (\Throwable $th) {
            echo " Note delete error";
        }
    }
}

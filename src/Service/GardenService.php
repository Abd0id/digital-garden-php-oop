<?php

require_once __DIR__ . "/../Repository/UserRepository.php";
require_once __DIR__ . "/../Repository/ThemeRepository.php";
require_once __DIR__ . "/../Repository/NoteRepository.php";

class GardenService
{

    public static function getAllUserThemes($id)
    {
        $userRepository = new UserRepository();
        $themeRepository = new ThemeRepository();

        $user = $userRepository->findById($id);

        $themes = $themeRepository->findAll($user);

        return $themes;
    }

    public static function addTheme($title, $color, $limit, $userId)
    {
        $userRepository = new UserRepository();
        $themeRepository = new ThemeRepository();

        $user = $userRepository->findById($userId);

        $theme = new Theme($title, $color, $limit);
        $theme = $themeRepository->create($theme, $user);

        return $theme;
    }

    public static function modifyTheme($id, $title, $color, $limit)
    {
        $themeRepository = new ThemeRepository();

        $theme = $themeRepository->findById($id);
        $theme->setTitle($title);
        $theme->setColor($color);
        $theme->setLimit($limit);
        $theme = $themeRepository->update($theme);

        return $theme;
    }

    public static function deleteTheme($id)
    {
        $themeRepository = new ThemeRepository();

        $theme = $themeRepository->findById($id);
        $theme = $themeRepository->delete($theme);
    }

        public static function getAllThemenotes($id)
    {
        $themeRepository = new ThemeRepository();
        $noteRepository = new NoteRepository();

        $theme = $themeRepository->findById($id);

        $notes = $noteRepository->findAll($theme);

        return $notes;
    }

    public static function addnote($title, $importance, $content, $themeId)
    {
        $themeRepository = new ThemeRepository();
        $noteRepository = new noteRepository();

        $theme = $themeRepository->findById($themeId);

        $note = new Note($title, $importance, $content);
        $note = $noteRepository->create($note, $theme);

        return $note;
    }

    public static function modifynote($id, $title, $importance, $content)
    {
        $noteRepository = new noteRepository();

        $note = $noteRepository->findById($id);
        $note->setTitle($title);
        $note->setImportance($importance);
        $note->setContent($content);
        $note = $noteRepository->update($note);

        return $note;
    }

    public static function deletenote($id)
    {
        $noteRepository = new noteRepository();

        $note = $noteRepository->findById($id);
        $note = $noteRepository->delete($note);
    }
}

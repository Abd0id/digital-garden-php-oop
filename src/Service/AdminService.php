<?php
require_once __DIR__ . "/../Repository/UserRepository.php";
require_once __DIR__ . "/../Repository/ThemeRepository.php";
require_once __DIR__ . "/../Repository/NoteRepository.php";

class AdminService
{

    public static function modifyUserStatus($id,$status)
    {
        $userRepository = new UserRepository();

        $user = $userRepository->findById($id);

        $user->setStatus($status);

        $userRepository->update($user);
    }
    public static function findAllUsers()
    {
        $userRepository = new UserRepository();

        $users = $userRepository->findAll();

        return $users;
    }

    public static function getStatistics()
    {
        $userRepository = new UserRepository();
        $themeRepository = new ThemeRepository();
        $noteRepository = new NoteRepository();

        $users = $userRepository->findAll();
        $blocked = array_filter($users,function ($user) {return $user->getStatus() == 'blocked';});
        $active = array_filter($users,function ($user) {return $user->getStatus() == 'active';});
        $pending = array_filter($users,function ($user) {return $user->getStatus() == 'pending';});
        $themes = $themeRepository->findAllThemes();
        $notes = $noteRepository->findAllNotes();

        $statistics = [
            "totalUsers" => count($users),
            "blockedUsers" => count($blocked),
            "activeUsers" => count($active),
            "pendingUsers" => count($pending),
            "totalThemes" => count($themes),
            "totalNotes" => count($notes)
        ];

        return $statistics;
    }
    
}

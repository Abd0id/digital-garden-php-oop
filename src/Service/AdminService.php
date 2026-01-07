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
}

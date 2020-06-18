<?php

namespace src\controllers;

use \core\Controller;
use \src\models\User;

class UsersControllers extends Controller
{
    public function create()
    {
        $this->render('add');
    }

    public function createAction()
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if ($name && $email) {
            $data = User::select('users')->where('email', $email)->execute();
            if (count($data) === 0) {
                // Insere 
                User::insert([
                    [
                        "name" => $name,
                        "email" => $email
                    ]
                ], 'users')->execute();
                // Redirect
                echo "Inseriu";
                $this->redirect('/');
                exit;
            }
        }
        $this->redirect('/new');
        exit;
    }
    public function edit($args)
    {
        $user = User::select()->find($args['id']);
        $this->render('edit', [
            'user' => $user
        ]);
    }
    public function delete($args)
    {
        User::delete()->where('id', $args['id'])->execute();
        $this->redirect('/');
    }
    public function editAction($args)
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if ($name && $email) {
            User::update()
                ->set('name', $name)
                ->set('email', $email)
                ->where('id', $args['id'])
                ->execute();
            $this->redirect('/');
        }
        $this->redirect("/users/{$args['id']}/edit");
    }
}
<?php
require_once $baseDir . '\lib\model\UsersList.php';
class Controller
{
    public $oUsersList;

    public function __construct()
    {
        $this->oUsersList = new UsersList();
    }

    public function invoke()
    {
        global $baseDir;
        $oUsersList = $this->oUsersList;
        if (isset($_GET['key'])) {
            $oUsersList->setKey($_GET['key']);
            $oUser = $oUsersList->fetch();
            $this->addPosts($oUser);
            include $baseDir . '\lib\view\user.php';
        } elseif (isset($_GET['userlist'])) {
            $aUser = $oUsersList->fetch();
            foreach ($aUser as $User) {
                $this->addPosts($User);
            }
            include $baseDir . '\lib\view\userslist.php';
        } else {
            $aUser = $oUsersList->fetch();
            foreach ($aUser as $User) {
                $this->addPosts($User);
            }
            include $baseDir . '\lib\view\feed.php';
            
        }
    }

    private function addPosts($User)
    {
        $posts = [
            'Олександр' => [
                ['date' => '2025-01-01', 'text' => 'Новий рік!'],
                ['date' => '2024-08-24', 'text' => 'День Незалежності України!']
            ],
            'Юрій' => [
                ['date' => '2025-02-14', 'text' => 'День закоханих!']
            ],
            'Олексій' => [
                ['date' => '2025-03-08', 'text' => 'Міжнародний жіночий день!'],
                ['date' => '2025-02-16', 'text' => 'День Єдності!']
            ],
            'Марія' => [
                ['date' => '2025-01-22', 'text' => 'День Соборності України!']
            ],
            'Микола' => [
                ['date' => '2024-12-25', 'text' => 'Різдво!']
            ],
        ];
        if (isset($posts[$User ->getName()])) {
            foreach ($posts[$User ->getName()] as $post) {
                $User ->addPost($post['date'], $post['text']);
            }
        }
    }
}

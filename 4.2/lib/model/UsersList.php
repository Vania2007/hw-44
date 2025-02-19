<?php
require_once $baseDir . '\lib\model\User.php';
class UsersList
{
    private $oneKey;
    private function getUsersList()
    {
        return array(
            new User("Олександр", "2005", "alex@mail.com"),
            new User("Юрій", "2006", "yury@gmail.com"),
            new User("Олексій", "2005", "alexey@yahoo.com"),
            new User("Марія", "2007", "maria@outlook.com"),
            new User("Микола", "2007", "mykolai@gmail.com"),
        );
    }
    private function getIndexedList()
    {
        $list = array();
        foreach ($this->getUsersList() as $val) {
            $list[$val->getKey()] = $val;
        }
        return $list;
    }
    public function setKey($key)
    {
        $this->oneKey = $key;
    }
    public function fetch()
    {
        $aUser = $this->getIndexedList();
        return ($this->oneKey) ? $aUser[$this->oneKey] : $aUser;
    }
}

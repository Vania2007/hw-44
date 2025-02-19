<?php
class User
{
    private $key;
    private $name;
    private $yearOfBirth;
    private $email;
    private $posts = [];

    public function __construct($name, $yearOfBirth, $email)
    {
        $this->key = $name . $yearOfBirth . $email;
        $this->name = $name;
        $this->yearOfBirth = $yearOfBirth;
        $this->email = $email;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getYearOfBirth()
    {
        return $this->yearOfBirth;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function addPost($date, $post)
    {
        $this->posts[] = array('date' => $date, 'text' => $post);
    }

    public function getPosts()
    {
        return $this->posts;
    }

    public function setPosts($posts)
    {
        $this->posts = $posts;
    }
}

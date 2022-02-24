<?php

/**
 * Сервис для управления списком объявлений
 */
class PostService
{
    /** 
     * @var Post[] Список объявлений
     */
    private $posts = [];

    public function __construct()
    {
        // Список объявлений, который у нас жестко заложен в коде
        $this->createPost(
            'Продам слона',
            '+79990000001',
            'Продается пока еще небольшой дрессировнный африканский слон.'
        );

        $this->createPost(
            'Сдам 8-к квартиру около метро недорого',
            '+79990000002',
            'Сдается квартира, евроремонт, без хозяев, только серьезным людям.'
        );
        $this->createPost(
            'Сдам 7-к квартиру около метро недорого',
            '+79990000002',
            'Сдается квартира, евроремонт, без хозяев, только серьезным людям.'
        );
        // .. при желании можно добавить еще
    }

    public function createPost($title, $phoneNumber, $text)
    {
        $c = new Post;
        $c->title = $title;
        $c->phoneNumber = $phoneNumber;
        $c->text = $text;

        $this->posts[] = $c;
    }

    /**
     * Возвращает все имеющиеся объявления в виде масссива объектов Post
     * @return Post[]
     */
    public function getAllPosts()
    {
        return $this->posts;
    }

    /**
     * Удаляет одно объявление 
     */
    public function deletePost(Post $post)
    {
        $key = array_search($this->posts, $post, true);
        if ($key === null) {
            throw new \Exception("Post is not in list, cannot delete");
        }

        unset($this->posts[$key]);
    }

    /**
     * Добавляет новое объявление в список
     */
    public function addPost(Post $post)
    {
        // Проверим, что объявления еще нет в списке
        if (null !== array_search($this->posts, $post, true)) {
            throw new \Exception("Post already added");
        }

        // Для простоты мы не будем проверять, заполнены ли все нужные 
        // поля у объявления, хотя в реальном приложении такая проверка
        // необходима.
        $this->posts[] = $post;
    }
}
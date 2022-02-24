<?php 

if (isset($_POST['title'])) {

    $postService->createPost($_POST['title'],$_POST['phone-number'],$_POST['text']);
    $posts = $postService->getAllPosts();
} else {
    // Получаем список объявлений
    $posts = $postService->getAllPosts();
}




// Вызываем вид, чтобы отобразить их
require __DIR__ . '/../view/header.phtml';
require __DIR__ . '/../view/list.phtml';
require __DIR__ . '/../view/footer.phtml';
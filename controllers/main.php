<?php 

// Получаем список объявлений
$posts = $postService->getAllPosts();

// Вызываем вид, чтобы отобразить их
require __DIR__ . '/../view/header.phtml';
require __DIR__ . '/../view/main.phtml';
require __DIR__ . '/../view/footer.phtml';
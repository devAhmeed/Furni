<?php 
$request = $_SERVER['REQUEST_URI'];
$slug = explode('/', $request)[2];


switch ($slug) {
    case '':
    case 'home':
        require __DIR__ . '/views/home.php';
        break;
    case 'about':
    case 'about-us':
        require __DIR__ . '/views/about-us.php';
        break;
    case 'contact':
        require __DIR__ . '/views/contact.php';
        break;
      case 'services':
        require __DIR__ . '/views/services.php';
        break;
      case 'blog':
        require __DIR__ . '/views/blog.php';
        break;
      case 'shop':
        require __DIR__ . '/views/shop.php';
        break;
      case 'cart':
        require __DIR__ . '/views/cart.php';
        break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}





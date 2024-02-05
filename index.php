<?php
require 'vendor/autoload.php';

use Cursophp\Poo\modelos\ImagePost;
use Cursophp\Poo\modelos\Post;
use Cursophp\Poo\modelos\User;

/*$miObjeti =  new Post("este es mi primer post");

$postImagen = new ImagePost("foto de mis vacaciones","playa.jpg");

echo $miObjeti->getMensaje();

echo $postImagen->getMesajeImagePost();

// echo $miObjeti->id;
// echo $miObjeti->saludo();*/

$lina  = new User("Lina Quintero", "Lquinterop","nynapu@gmail.com","lina123");
$thiago  = new User("Thiago Quintero", "ThiagoQuintero","thaigomatitis@gmail.com","thiago123");
$juan  = new User("Juan Lopez", "JLopez","jlopez12@gmail.com","jjlopez123");
$sandra  = new User("Sandra Perez", "SPerez","sperez@gmail.com","sandrap123");

$linaPost = new ImagePost("De vacaciones en la playa","playa.jpg");
$thiagoPost = new ImagePost("con  mi amorcito en la playa","Video.mov");
$juanPost = new ImagePost("En junta con mi cliente","videoCliente.mov");
$sandraPost = new ImagePost("Jugando con Homero","HomeroJuego.jpg");

$lina->publish($linaPost);
$thiago->publish($thiagoPost);
$juan->publish($juanPost);
$sandra->publish($sandraPost);

$linaPost->addLike($thiago);
$linaPost->addLike($sandra);

$thiagoPost->addLike($sandra);
$thiagoPost->addLike($juan);
$thiagoPost->addLike($lina);
$thiagoPost->addLike($thiago);

$juanPost->addLike($thiago);
$juanPost->addLike($lina);

$sandraPost->addLike($juan);
$sandraPost->addLike($lina);
$sandraPost->addLike($thiago);

$lina->addFollower($thiago);
$lina->addFollower($lina);

$thiago->addFollower($sandra);

$juan->addFollower($lina);
$juan->addFollower($thiago);
$juan->addFollower($sandra);

print_r(USer::showProfile($lina));
print_r(USer::showProfile($thiago));
print_r(USer::showProfile($juan));
print_r(USer::showProfile($sandra));

print_r($linaPost->toString());
print_r($thiagoPost->toString());
print_r($juanPost->toString());
print_r($sandraPost->toString());
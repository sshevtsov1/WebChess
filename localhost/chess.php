<?php

include 'class/Storage.php';
include 'class/FileStorage.php';
include 'class/SessionStorage.php';
include 'class/Board.php';

//$storage = newSessionStorge('map');
$storage = new FileStorage('figures.txt');

$board = new Board($storage);

if (isset($_GET['newFigures'])) 
	echo $board->newFigures();

if (isset($_GET['getFigures']))
	echo $board->getFigures();

if (isset($_GET['moveFigure'])) 
	echo $board->moveFigure($_GET['frCoord'], $_GET['toCoord']);

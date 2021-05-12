<?php
include_once 'src/Point2D.php';
include_once 'src/Point3D.php';

$point2d = new Point2D(1,2);
$point3d = new Point3D(2,3,4);

echo '2d X: '.$point2d->toString($point2d->getX()).'<br>';
echo '2d Y: '.$point2d->toString($point2d->getY()).'<br>';
var_dump($point2d->getXY()).'<br>';
echo '3d X: '.$point3d->toString($point3d->getX()).'<br>'.'<hr>';
echo '3d Y: '.$point3d->toString($point3d->getY()).'<br>';
echo '3d Z: '.$point3d->toString($point3d->getZ()).'<br>';
$data = $point3d->getXYZ();
foreach ($data as $item => $value){
    echo $item." => ".$value.'<br>';
}


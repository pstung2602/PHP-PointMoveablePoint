<?php


class Point
{
    public $x;
    public $y;
    public function __construct($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY(){
        return $this->x.$this->y;
    }
    public function  toString(){
        return "x=".$this->x."y=".$this->y;
    }

}
class MoveablePoint extends Point {
    public $xSpeed;
    public $ySpeed;
    public function __construct($x,$y,$xSpeed,$ySpeed)
    {
        parent::__construct($x,$y);
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;

    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function setSpeed($xSpeed,$ySpeed){
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;

    }
    public function getSpeed(){
        return "xSpeed=".$this->xSpeed."ySpeed="/$this->ySpeed;
    }
    public function toString(){
        return parent::toString()."speed= $this->xSpeed,$this->ySpeed";
    }
    public function move(){
        $this->x+=$this->xSpeed;
        $this->y+=$this->ySpeed;
    }

}
$moveablePoint = new MoveablePoint(1,1,2,2);
$moveablePoint->move();
$moveablePoint->move();

echo $moveablePoint->getX();
echo $moveablePoint->getY();


<?php
class Rectangle {
    public $length;
    public $width;
    public $area;
    function setValues($length, $width) {
        $this->length=$length;
        $this->width=$width;
    }
    function CalcArea() {
        $this->area = $this->length * $this->width;
    }
    function getArea() {
        return $this->area;
    }
}
?>

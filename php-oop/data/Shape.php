<?php

namespace Data;

class Shape {
    public function getShape() {
        return 1;
    }
}

class Rectangle extends Shape {
    public function getShape() {
        return 4;
    }

    public function getParentShape() {
        return parent::getShape();
    }
}

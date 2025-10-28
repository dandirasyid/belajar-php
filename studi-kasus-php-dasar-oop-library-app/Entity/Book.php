<?php

namespace Entity;

class Book {
    private string $id;
    private string $title;
    private string $author;

    public function __construct(string $id, string $title, string $author) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }
}

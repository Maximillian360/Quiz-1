<?php

    abstract class Product {
        public $ProductName;
        public $ProductPrice;

        /**
         * @param $ProductName
         * @param $ProductPrice
         */
        public function __construct($ProductName, $ProductPrice) {
            $this->ProductName = $ProductName;
            $this->ProductPrice = $ProductPrice;
        }

        /**
         * @return mixed
         */
        public function getProductName() {
            return $this->ProductName;
        }

        /**
         * @return mixed
         */
        public function getProductPrice() {
            return $this->ProductPrice;
        }

        abstract function display();


    }

    class Movie extends Product{
        public $director;
        public $rating;

        /**
         * @param $director
         * @param $rating
         */
        public function __construct($ProductName, $ProductPrice, $director, $rating) {
            parent::__construct($ProductName, $ProductPrice);
            $this->director = $director;
            $this->rating = $rating;

        }

        /**
         * @return mixed
         */
        public function getDirector() {
            return $this->director;
        }

        /**
         * @return mixed
         */
        public function getRating() {
            return $this->rating;
        }

        public function display(){
            return "<br>Movie Name: " . $this->ProductName. "<br>Movie Price: " . $this->ProductPrice . "<br>Director: " . $this->director.  "<br>Rating: " . $this->rating;
        }


    }

    class Book extends Product{
        public $author;
        public $genre;

        /**
         * @param $author
         * @param $genre
         */
        public function __construct($ProductName, $ProductPrice, $author, $genre) {
            parent::__construct($ProductName, $ProductPrice);
            $this->author = $author;
            $this->genre = $genre;
        }

        /**
         * @return mixed
         */
        public function getAuthor() {
            return $this->author;
        }

        /**
         * @return mixed
         */
        public function getGenre() {
            return $this->genre;
        }

        public function display(){
            return "<br>Book Name: " . $this->ProductName. "<br>Book Price: " . $this->ProductPrice . "<br>Author: " . $this->author.  "<br>Genre: " . $this->genre;
        }
    }

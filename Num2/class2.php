<?php

    class Product {
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

        public function display(){

        }


    }

    class Movies extends Product{
        public $director;
        public $rating;

        /**
         * @param $director
         * @param $rating
         */
        public function __construct($director, $rating) {
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


    }

    class Book extends Product{
        public $author;
        public $genre;

        /**
         * @param $author
         * @param $genre
         */
        public function __construct($author, $genre) {
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


    }

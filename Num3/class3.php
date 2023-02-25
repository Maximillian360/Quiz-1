<?php

    abstract class Employee_Salary {
        abstract function Calc_13th();
        abstract function Calc_Hour();
    }

    class Employee extends Employee_Salary{
        public $name;
        public $salary;
        public $stay;

        /**
         * @param $name
         * @param $salary
         * @param $stay
         */
        public function __construct($name, $salary, $stay) {
            $this->name = $name;
            $this->salary = $salary;
            $this->stay = $stay;
        }

        /**
         * @return mixed
         */
        public function getName() {
            return $this->name;
        }

        /**
         * @return mixed
         */
        public function getSalary() {
            return $this->salary;
        }

        /**
         * @return mixed
         */
        public function getStay() {
            return $this->stay;
        }

        public function Calc_13th() {
            return round(($this->salary * $this->stay) / 12, 2);

        }

        public function Calc_Hour() {
            return round($this->salary / 24 / 8, 2);
        }
    }

    class Manager extends Employee_Salary{
        public $name;
        public $salary;
        public $stay;

        /**
         * @param $name
         * @param $salary
         * @param $stay
         */
        public function __construct($name, $salary, $stay) {
            $this->name = $name;
            $this->salary = $salary;
            $this->stay = $stay;
        }

        /**
         * @return mixed
         */
        public function getName() {
            return $this->name;
        }

        /**
         * @return mixed
         */
        public function getSalary() {
            return $this->salary;
        }

        /**
         * @return mixed
         */
        public function getStay() {
            return $this->stay;
        }

        public function Calc_13th() {
            return "No 13th month pay!";

        }

        public function Calc_Hour() {
            return round($this->salary / 24 / 8, 2);
        }

    }

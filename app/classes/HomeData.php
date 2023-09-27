<?php


namespace App\classes;


class HomeData
{

    public $services ; // access modifier

    public function __construct()
    {
        $this->services = [
            0 => [
                'Name'        => 'Web Design',
                'img'         => 'assets/images/s1.jpg',
                'des'         => 'Some quick example text to build on the card title and make up the bulk of the cards content.',
                'btn'         => 'Read more..'

            ]  ,
            1 => [
                'Name'        => 'UI/UX Design',
                'img'         => 'assets/images/s2.jpg',
                'des'         => 'Some quick example text to build on the card title and make up the bulk of the cards content.',
                'btn'         => 'Read more..'

            ]  ,

            2 => [
                'Name'        => 'Mobile Application',
                'img'         => 'assets/images/s3.jpg',
                'des'         => 'Some quick example text to build on the card title and make up the bulk of the cards content.',
                'btn'         => 'Read more..'

            ]  ,

            3 => [
                'Name'        => 'User Resarch',
                'img'         => 'assets/images/s4.png',
                'des'         => 'Some quick example text to build on the card title and make up the bulk of the cards content.',
                'btn'         => 'Read more..'

            ]  ,

            4 => [
                'Name'        => 'Animation',
                'img'         => 'assets/images/s5.jpg',
                'des'         => 'Some quick example text to build on the card title and make up the bulk of the cards content.',
                'btn'         => 'Read more..'

            ]  ,

            5 => [
                'Name'        => 'Game Development',
                'img'         => 'assets/images/s6.jpg',
                'des'         => 'Some quick example text to build on the card title and make up the bulk of the cards content.',
                'btn'         => 'Read more..'

            ]

        ];
    }


        public function getAllServices(){
            return $this->services;
        }

        public function Index(){
            return header("location: router.php?page=portpholio");
        }
}
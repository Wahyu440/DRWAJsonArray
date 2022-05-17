<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanJsonController extends Controller
{
    public function getData1(){
        $data1 = array(
            "name"=> "Wahyu Vivacious Nurallah",
            "url"=> "https://www.google.com",
            "rank"=> 1,
            "socialmedia"=> array(
                "facebook"=> "NurallahWahyu",
                "twitter"=> "ILude714",
                "instagram"=> "whyvivacious",
                "youtube"=> "",
                "github"=> ""
            )
        );
        $jsondata1 = json_encode($data1);
        dd($jsondata1);
    }
    public function getData2(){
        $data2 = array(
            "first_name" => "Wahyu",
            "last_name" => "Nurallah",
            "location" => "Yogyakarta",
            "online" => true,
            "followers" => 575
        );
        $jsondata2 = json_encode($data2);
        dd($jsondata2);
    }
    public function getData3(){
        $data3 = array(
            "first_name" => "Wahyu",
            "last_name" => "Nurallah",
            "location" => "Yogyakarta",
            "websites" => array(
                [
                "description" => "work",
                "URL" => "https://www.digitalocean.com/"
                ],
                [
                "desciption" => "tutorials",
                "URL" => "https://www.digitalocean.com/community/tutorials"
                ]
            ),
            "social_media" => array(
                [
                "description" => "twitter",
                "link" => "https://twitter.com/digitalocean"
                ],
                [
                "description" => "facebook",
                "link" => "https://www.facebook.com/DigitalOceanCloudHosting"
                ],
                [
                "description" => "github",
                "link" => "https://github.com/digitalocean"
                ]
            )
        );
        $jsondata3 = json_encode($data3);
        dd($jsondata3);
    }
    public function getData4(){
        $data4 = array(
            "employees" => array(
                [
                    "firstName" => "John", "lastName" => "Doe"
                ],
                [
                    "firstName" => "Anna", "lastName" => "Smith"
                ],
                [
                    "firstName" => "Peter","lastName" => "Jones"
                ]
            )
        );
        $jsondata4 = json_encode($data4);
        dd($jsondata4);
    }
    public function getData5(){
        $data5 = array(
            "matapelajaran" => array(
                "subject" => "Matematika",
                "kelas" => array(
                    [
                        "X" => "Argo",
                        "Jadwal" => "Senin"
                    ],
                    [
                        "XI" => "JJS",
                        "Jadwal" => "Selasa"
                    ],
                    [
                        "XII" => "Halim",
                        "Jadwal" => "Rabu"
                    ]
                )
            )
        );
        $jsondata5 = json_encode($data5);
        dd($jsondata5);
    }
}

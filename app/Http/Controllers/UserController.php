<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   // fonksiyon
 public function create(){

return view("users.create",["ad"=>"Ekrem","soyad"=>"Kılınç"]);
 }
 public function edit(){
return view("users.edit");
 }

 public function list(){


    $adlar=Array("ali","veli","ayşe","fatma");
    $soyadlar=Array("demir","yılmaz","kaya","çelik");

    return view("users.list",["page_title"=>"Kullanıcı Listesi","adlar"=>$adlar,"soyadlar"=>$soyadlar]);
 }


 public function test()
 {
        $yemekler=Array("iskender","Baklava","kebap","döner");
        return view("test.test2",["yemekler"=>$yemekler]);
 }



}

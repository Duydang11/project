<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Request;
class News extends Model
{
    use HasFactory;
    //lay cac ban ghi co phan trang
    public function modelRead(){
        $data = DB::table("news")->orderBy("id","desc")->paginate(4);
        return $data;
    }
    //lay 1 ban ghi
    public function modelGetRecord($id){
        $record = DB::table("news")->where("id","=",$id)->first();
        return $record;
    }
   //update
   public function modelUpdate($id){
    $name = request("name"); //<=> Request::get("name");
    $category_id = request("category_id");
    $description = request("description");
    $content = request("content");
    $hot = request("hot") != "" ? 1 : 0;
    //update ban ghi
    DB::table("news")->where("id","=",$id)->update(["name"=>$name,"category_id"=>$category_id,"description"=>$description,"content"=>$content,"hot"=>$hot]);
  }
}

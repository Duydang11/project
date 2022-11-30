<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//su dung mo hinh mvc
//load class Model de su dung o day
use App\Models\News;

//su dung mo hinh mvc: lay du lieu tu model

class NewsController extends Controller
{
   //tao bien $model (la mot bien trong class NewsController)
   public $model;
   //ham tao
   public function __construct(){
       //gan bien $model tro thanh bien object cua class News
       $this->model = new News();//khi do tu bien model co the truy cap duoc vao cac ham, bien cua class News tu day
   }
   //lay danh sach cac ban ghi
   public function read(){
       //lay du lieu tu ham modelRead0 cua class news
       $data = $this->model->modelRead();
       //goi view, truyen du lieu ra view
       return view("backend.NewsRead",["data"=>$data]);
   }
  //update
    public function update($id){
        //lay du lieu tu model
        $record = $this->model->modelGetRecord($id);
        return view("backend.NewsCreateUpdate",["record"=>$record]);
    }
    //update POST
    public function updatePost($id){
        $this->model->modelUpdate($id);
        return redirect(url('admin/news'));
    }
}

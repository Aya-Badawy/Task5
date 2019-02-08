<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use \App\assigenQuery;

class assigenMangerController extends Controller{

  public function assigen(){
    if(assigenQuery::assigenDB(request('id'),request('code'))){
      return view('messages',['msg'=>'assigen successfully']);
    }else{
     return view('messages',['msg'=>'Manger id or Inventory code/serial code is rong']);
         }
      }

   }

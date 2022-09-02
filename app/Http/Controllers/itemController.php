<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\items;
class itemController extends Controller
{
    public function addItem(Request $req){
     $this->validate($req,['additem'=>'required']);
     $item= new items();
     $item->slno=null;
     $item->item=$req->additem;
    echo $item;
     $item->save();
     return redirect('/');
    }
    public function showItem(){
        $items=items::all();
        return view('index',['items'=>$items]);
    }
    public function deleteItem($slno)
    {
        $item=items::find($slno);
        $item->delete();
        return redirect('/');
    }
    function editItem($sno){
        $items = Items::find($sno);
        return view('edit',['items'=>$items]);
    }

    function updateItem(Request $req){
        $this->validate($req,['item'=>'required']);
        $item = Items::find($req->slno);
        $item->item = $req->item;
        $item->save();
        return redirect('/');
    }

}

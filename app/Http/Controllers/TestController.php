<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\ItemName;
use App\ItemModel;
use App\color;
use App\ltype;
use App\transfer;
use App\OtherCharges;

class TestController extends Controller
{
    public function index(){


        $product = product::all();

        $itenName = ItemName::all();
        foreach($itenName as $iname){
            foreach($product as $p){
                if($p->item_name == $iname->id){
                    $data =  product::findOrFail($p->id);
                    $data->item_name = $iname->name;
                    $data->update();
                }
            }
        }

        $itenName = ItemModel::all();
        foreach($itenName as $imodel){
            foreach($product as $p){
                if($p->item_model == $imodel->id){
                    $data =  product::findOrFail($p->id);
                    $data->item_model = $imodel->name;
                    $data->update();
                }
            }
        }
        

        $other = OtherCharges::all();
        foreach($other as $oc){
            foreach($product as $p){
                if($oc->product_id == $p->id){
                    $data =  OtherCharges::findOrFail($oc->id);
                    $data->cycle_no = $p->cycle_no;
                    $data->frame_no = $p->fraim_no;
                    $data->update();
                }
            }
        }

        $transfer = transfer::all();
        foreach($product as $p){
            foreach($transfer as $t){
                if($p->id == $t->product_id){
                    $data =  transfer::findOrFail($t->id);
                    $data->cycle_no = $p->cycle_no;
                    $data->frame_no = $p->fraim_no;
                    $data->update();
                }
            }
        }

        

        $ltype = ltype::all();
        foreach($product as $p){
            foreach($ltype as $l){
                if($p->l_type == $l->id){
                    $product =  product::findOrFail($p->id);
                    $product->l_type = $l->name;
                    $product->update();
                }
            }
        }

       
        $color = color::all();
        foreach($product as $p){
            foreach($color as $c){
                if($p->color == $c->id){
                    $product =  product::findOrFail($p->id);
                    $product->color = $c->name;
                    $product->update();
                }
            }
        }

        foreach($product as $p){
            
                if($p->sold_out == '1'){
                    $product =  product::findOrFail($p->id);
                    $product->sold_out = 'sold out';
                    $product->update();
                }
            
        }
    }
}

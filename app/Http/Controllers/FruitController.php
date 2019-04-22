<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Fruit;

class FruitController extends Controller
{
	function index(){
		$fruits=Fruit::paginate(15);
		return view('fruit.index',['fruits'=>$fruits]);
	}
	function show($id){
		return view('fruit.show');
	}
    function create(){

    	return view('fruit.add');
    }
    function edit($id)
    {	
    	$fruit = Fruit::find($id);
    	return view('fruit.edit',compact('fruit','id'));
    }

    function store(Request $request){
    	$fruit = new Fruit;
    	$fruit->name = $request->input('name');
    	$fruit->short_name = $request->input('short_name');
        if ($request->hasFile('image')) {
            \File::delete($fruit['image']);
          $fruit->image=$this->imgUpload($request->image);
        }
	    $fruit->price = $request->input('price');
    	$fruit->save();
    	return redirect()->route('fruit.index')->with('success','success create');

    }
    
    private function imgUpload($img){
        $updir="images/";
        $imgname=time().'.'.$img->extension();
        $upload=$img->move(public_path('uploads/'.$updir),$imgname);
        return $imgname;


    }

    function update(Request $request,$id){

        $fruit = Fruit::find($id);
        $fruit->name = $request->name;
        $fruit->short_name = $request->short_name;
        if ($request->hasFile('image')){
        
          $fruit->image=$this->imgUpload($request->image);
        }
        $fruit->price = $request->price;
        $fruit->save();
        return redirect()->route('fruit.index')->with('success','success edited');


    }
    function destroy($id){
        $fruit = Fruit::find($id);
        $fruit->delete();
        return redirect()->route('fruit.index')->with('success','success deleted');
    }
}

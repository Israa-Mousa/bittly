<?php

namespace App\Http\Controllers;
use App\Models\url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    //
    public function index(){
        //return view('url.index');
        $allUrl=url::all();
        return view('url.index',compact('allUrl'));
    }
    public function create(Request $request){

        $request->validate([
            'url' => 'required|url'

        ]);
      $url=url::where('url',$request->url)->first();

//    die('tesg');
   if($url==null){
      $short=$this->createrandomUrl();

    //   dd($short);
    $url=$request->url;
      $yrl=url::create([
         'url'=>$request->url,
         'short_url'=>$short
      ]);
    //   dd($yrl);
      $url=url::where('url',$request->url)->first();
    //   dd($url);
    }
    $allUrl=url::all();
    return view('url.index',compact('url','allUrl'));
    // return redirect()->route('index', ['allUrl' => $allUrl]);
    }

    public function createrandomUrl(){
        $result=base_convert(rand(1,9999999999),10,35);
        $result=strtoupper($result);
        // var_dump($result);
        $data=url::where('short_url',$result)->first();
    //  dd($data);
        if($data!=null){
            $this->createrandomUrl();
        }
        return $result;
    }
    public function shortlink($link){
      $url=url::where('short_url',$link)->first();
      return redirect($url->url);
    }

    public function delete($id){
        $deleted = url::where('id', '=', $id)->delete();
        return redirect()->back();

    }

    public function edit($id){
        // $url = url::where('id', '=', $id)->get();
        $url = url::findOrFail($id);
    //  die($url);
        return view('url.update',compact('url'));

    }
    public function update(Request $request,$id){
        $url = url::findOrFail($id);

        if($request->short_url== $url->short_url){
            // return redirect()->back();
            return $this-> index();
        }
        else{
       $validator= $request->validate([
            'short_url' => 'required|string|unique:url|max:7',
        ]);
    // if($validator!=null){
    //     return redirect()->back()->withErrors($validator)->withInput();

    // }
    //     // $name = $request->input('short_url');
    //     // $input = $request->input();
    //  else{
        $newurl=$request->short_url;
         $url=$url->update($request->all());
        //  die($url);
         if($url){
            return $this-> index();
         }
        // var_dump($newurl);
    //    die('test');
    else{

        return redirect()->back()->withErrors($validator)->withInput();
    }

    //  }
        }
    }
}

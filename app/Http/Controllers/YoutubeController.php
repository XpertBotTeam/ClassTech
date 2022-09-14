<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class YoutubeController extends Controller
{
   public function index(){
     
     if(session('search_query')){
          $videoLists = $this->_videoLists(session('search_query'));
     }
     else{
          $videoLists = $this->_videoLists(session('laravel'));
     }
     return view('student.index',compact('videoLists'));

   } 


   public function result(Request $request){
     session(['search_query'=> $request->search_query]);
     $videoLists = $this->_videoLists($request->search_query);
        return view('student.result',compact('videoLists'));
   }

   public function watch($id){
          $singleVideo = $this->_singleVideo($id);
          if(session('search_query')){
               $videoLists = $this->_videoLists(session('search_query'));
          }else{
               $videoLists = $this->_videoLists('laravel');
          }
        return view('student.watch',compact('singleVideo', 'videoLists'));
     
     }
     // get search results
     protected function _videoLists($keywords){
          $part = 'snippet';
          $country = 'KW';
          $apiKey = config('services.youtube.api_key');
          $maxResults = 12;
          $youTubeEndPoint = config('services.youtube.search_endpoint');
          $type = 'video';

          $url = "$youTubeEndPoint?part=$part&max=$maxResults&regionCode=$country&type=$type&key=$apiKey&q=$keywords";
          $response = Http::get($url);
          $results = json_decode($response);

          //create json file to see response
          File::put(storage_path() . '/app/public/results.json', $response->body());
          return $results;
     }

     protected function _singleVideo($id){
          $apiKey = config('services.youtube.api_key');
          $part = 'snippet';
          $url = "https://www.googleapis.com/youtube/v3/videos?part=$part&id=$id&key=$apiKey";
          $response = Http::get($url);
          $results = json_decode($response);
          File::put(storage_path() . '/app/public/single.json',$response->body());
          return $results;
     }

}

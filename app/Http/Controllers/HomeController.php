<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Home;
use App\News;
use App\Testimonialimage;
use App\Testimonialyoutube;
use App\gallery;
use App\Folder;
use App\Youtube;
use App\DocumentNews;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home()
   {
    $news = News::latest()->skip(1)->take(4)->get();
    $new = News::latest()->take(1)->get();
    $data=Testimonialimage::latest()->take(3)->get();
    $youtube=Testimonialyoutube::latest()->take(3)->get();
    $galleryA2=gallery::where('folder','A2 Winners')->latest()->take(13)->get();
    $galleryB2=gallery::where('folder','B2 Winners')->latest()->take(13)->get();
    $galleryC2=gallery::where('folder','C2 Winners')->latest()->take(13)->get();
    
    $array=[
      'data'=>$news,
      'new'=>$new,
      'galleryA2'=>$galleryA2,
      'galleryB2'=>$galleryB2,
      'galleryC2'=>$galleryC2,

    ];
    $testimonial=[
    'testimonial'=>$data,
    'youtube'=>$youtube,
    ];
    return view('users.home',$array,$testimonial);
   }
   public function gallery()
   {
         $folder= Folder::all();
         return view('users.gallery',[ 'folder'=>$folder]);
   }
   public function album($id)
   {
      $folder= Folder::find($id);
      $folders=$folder->folder;
      $galleries=gallery::where(['folder'=>$folders])->latest()->get();  
      return view('users.album',['data'=>$galleries]);
   }
   public function youtube()
   {
        $youtube = Youtube::all();
        return view('users.youtube',['data'=>$youtube]);
   }
   public function download()
   {
     $filename =  DocumentNews::select('file')->latest()->take(1)->first();
     $files= $filename->file;
     $path=session()->get('path');
     $headers = ['content-Type: application/pdf'];
     $newname ='news-pdf-file-'.time().'.pdf';
   return Storage::download($path, $newname,$headers);
    
   }
}

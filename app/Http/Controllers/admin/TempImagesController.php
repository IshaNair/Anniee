<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TempImage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class TempImagesController extends Controller
{
  public function create(Request $request)
 {
   if(!empty($request->image)){
      $image = $request->image;
      $ext = $image->getClientOriginalExtension();
      $newFile = time().'.'.$ext;
      $TempImage = new TempImage();
      $TempImage->name = $newFile;
      $TempImage->save();
      $image->move(public_path().'/temp', $newFile);

    //Genetate Thumbnale//

          $sourPath = public_path().'/temp/'.$newFile;
          $destPath = public_path().'/temp/thumb/'.$newFile;
          $manager = new ImageManager(new Driver());
          $image = $manager->read($sourPath);
          $image->cover(300, 275);
          $image->save($destPath);

      return response()->json([
              'status' => true,
              'image_id' => $TempImage->id,
              'ImagePath' => asset('temp/thumb/'.$newFile),
              'message' => 'Image Upload successfully'
            ]);
         }

    }

    public function create_post_image(Request $request)
    {
    if(!empty($request->image)){
        $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $newFile = time().'.'.$ext;
        $TempImage = new TempImage();
        $TempImage->name = $newFile;
        $TempImage->save();
        $image->move(public_path().'/temp', $newFile);

        //Genetate Thumbnale//

            $sourPath = public_path().'/temp/'.$newFile;
            $destPath = public_path().'/temp/post/'.$newFile;
            $manager = new ImageManager(new Driver());
            $image = $manager->read($sourPath);
            $image->cover(500, 600);
            $image->save($destPath);

        return response()->json([
                'status' => true,
                'image' => $newFile,
                'image_id' => $TempImage->id,
                'ImagePath' => asset('temp/post/'.$newFile),
                'message' => 'Image Upload successfully'
                ]);
            }

    }
}

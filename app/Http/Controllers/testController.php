<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class testController extends Controller
{
    //
    public function test()
    {
        // dd($request);
        return view('test');
    }

    public function test2(Request $request)
    {
        //
        // dd($request->file('img')->getClientOriginalName());
        //01647664068
        // $path = $request->img->store('asd');
        // $path = Storage::putFile('asd', $request->file('avatar'), $request->img->hashName(), '');
        // $path = Storage::put('profile_pictures', $request->img);

        // $path = $request->file('img')->storeAs('profile_pictures', $request->file('img')->getClientOriginalName());
        // $path = $request->file('img')->storePubliclyAs(
        //     'profile_pictures',
        //     $request->file('img')->getClientOriginalName(),
        //     's3'
        // );
        // Storage::get('\public\FileNameHere');


        // $path = Storage::putFile('avatars', $request->file('avatar'));
        // $request->file->move(public_path('asd'), $request->img);


        // return $path;
    }

    public function dieDump(Request $request)
    {



        // dd($request->img);
        dd($request->img->getClientOriginalName());

        $name = $request->img->getClientOriginalName();
        $imageName = time().'.'. $request->img->extension();
        
        // $test = $request->img->move(public_path('car_pics'), $imageName);
        // dd('Done');
        // public_path('car_pics/phpD9D8.jpg');

        // $newImageName =

        
        // for ($i = 1; $i <= 3; $i++) {
        //     $item = 'item' . $i;
        //     $deadline = 'deadline' . $i;
        //     $deadlineSon = 'deadlineSon' . $i;
        //     $deadlineGrandSon = 'deadlineGrandSon' . $i;

        //     if ($request->$item != null || $request->$deadline != null || $request->$deadlineSon != null || $request->$deadlineGrandSon != null) {

        //         $this->validate($request, [
        //             $item => 'required',
        //             $deadline => 'required',
        //             $deadlineSon => 'required',
        //             $deadlineGrandSon => 'required'
        //         ]);
                
        //     } else {
        //         echo 'No item1 value entered!<br>';
        //     }
        // }
        
    }
}

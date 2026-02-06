<?php

use App\Models\Member;
use App\Models\Page;
use App\Models\MenuLocation;
use App\Models\Menu;
// use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


// function getSettings()
// {
//     return Setting::pluck('value', 'key')->toArray();
// }



// function getmemberbyloc()
// {
//     return Member::where('status', 1)->orderBy('order', 'ASC')->get();
// }

if (!function_exists('updatesettingmedia')) {
    function updatesettingmedia($request, $name, $filename)
    {
        $image = $request->file($name);
        if ($image) {
            $image_new_name = $filename . '-' . date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/setting/'), $image_new_name);

            $image = '/storage/setting/' . $image_new_name;
            return $image;
        } else {
            return null;
        }
    }
}

if (!function_exists('deletesettingmedia')) {
    function deletesettingmedia($image, $old_image, $image_name, $siteSetting, $siteSettings)
    {
        $removeFlag = request()->input($image_name . '_removed');

        if ($image) {
            removeFile($old_image);
            $siteSetting[$image_name] = $image;
        } elseif ($removeFlag) {
            removeFile($old_image);
            $siteSetting[$image_name] = null;
        } else {
            $siteSetting[$image_name] = $siteSettings[$image_name];
        }

        return $siteSetting[$image_name];
    }
}


if (!function_exists('make_slug')) {
    function make_slug($string)
    {
        return Str::slug($string);
    }
}

// if (!function_exists('fileUpload')) {
//     function fileUpload($request, $name, $foldername)
//     {
//         $image = '';
//         if ($image = $request->file($name)) {

//             $image = $request->$name;
//             $image_new_name = $name . '-' . date('YmdHis') . '.' . $image->getClientOriginalExtension();
//             $image->move(public_path('storage/' . $foldername . '/'), $image_new_name);

//             $image = '/storage/' . $foldername . '/' . $image_new_name;

//             return $image;
//         }
//     }
// }
if (!function_exists('fileUpload')) {
    function fileUpload($request, $name, $foldername)
    {
        if ($request->hasFile($name)) {
            return $request->file($name)->store($foldername, 'public');
        }

        return null;
    }
}
if (!function_exists('removeFile')) {
    function removeFile(?string $path, string $disk = 'public'): bool
    {
        return $path && Storage::disk($disk)->exists($path)
            ? Storage::disk($disk)->delete($path)
            : false;
    }
}

if (!function_exists('galleryfileUpload')) {
    function galleryfileUpload($request, $name, $foldername)
    {
        $image = '';
        if ($image = $request->file($name)) {

            $image = $request->$name;
            $image_new_name = $name . '-' . date('YmdHis') . '.' . $image->getClientOriginalName();
            $image->move(public_path('storage/' . $foldername . '/'), $image_new_name);

            $image = '/storage/' . $foldername . '/' . $image_new_name;

            return $image;
        }
    }
}

if (!function_exists('stripLetters')) {
    function stripLetters($text, $number, $last = "")
    {
        if (!empty($text)) {
            return substr(strip_tags(html_entity_decode($text)), 0, $number) . $last;
        }
    }
}

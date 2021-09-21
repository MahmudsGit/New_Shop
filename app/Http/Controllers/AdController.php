<?php

namespace App\Http\Controllers;

use App\ad;
use Illuminate\Http\Request;
use Image;
class AdController extends Controller
{
    public function AdImage(){
        $adImages = ad::all();
        return view('admin.ads.ad_image',[
            'adImages'=>$adImages
        ]);
    }
    protected function adImageValidation($request){
        $this->validate($request,[
           'main_ad' =>'required|regex:/^[\pL\s\-]+$/u|max:20|min:2',
           'off_percent' =>'required|numeric',
           'main_image' =>'required',
           'seceondary_ad' =>'required|regex:/^[\pL\s\-]+$/u|max:20|min:2',
           'secondary_image' =>'required',
           'third_ad' =>'required|regex:/^[\pL\s\-]+$/u|max:20|min:2',
           'third_image' =>'required',
           'fourth_ad' =>'required|regex:/^[\pL\s\-]+$/u|max:20|min:2',
           'fourth_image' =>'required'
        ]);
    }
    protected function mainImageUpload($request){
        $mainImage = $request->file('main_image');
        $mainImageNameExtention = $mainImage->getClientOriginalExtension();
        $mainImageName = 'main_Image'.'.'.$mainImageNameExtention;
        $directory = 'ad-image/';
        $mainImageUrl = $directory.$mainImageName;
        Image::make($mainImage)->resize(800,800)->save($mainImageUrl);
        return $mainImageUrl;
    }
    protected function secondaryImageUpload($request){
        $secondaryImage = $request->file('secondary_image');
        $secondaryImageNameExtention = $secondaryImage->getClientOriginalExtension();
        $secondaryImageName = 'secondary_image'.'.'.$secondaryImageNameExtention;
        $directory = 'ad-image/';
        $secondaryImageUrl = $directory.$secondaryImageName;
        Image::make($secondaryImage)->resize(800,500)->save($secondaryImageUrl);
        return $secondaryImageUrl;
    }
    protected function thirdImageUpload($request){
        $thirdImage = $request->file('third_image');
        $thirdImageNameExtention = $thirdImage->getClientOriginalExtension();
        $thirdImageName = 'third_image'.'.'.$thirdImageNameExtention;
        $directory = 'ad-image/';
        $thirdImageUrl = $directory.$thirdImageName;
        Image::make($thirdImage)->resize(800,500)->save($thirdImageUrl);
        return $thirdImageUrl;
    }
    protected function fourthImageUpload($request){
        $fourthImage = $request->file('fourth_image');
        $fourthImageNameExtention = $fourthImage->getClientOriginalExtension();
        $fourthImageName = 'fourth_image'.'.'.$fourthImageNameExtention;
        $directory = 'ad-image/';
        $fourthImageUrl = $directory.$fourthImageName;
        Image::make($fourthImage)->resize(800,500)->save($fourthImageUrl);
        return $fourthImageUrl;
    }

    protected function saveData($request,$mainImageUrl,$secondaryImageUrl,$thirdImageUrl,$fourthImageUrl){
        $ad = ad::find($request->id);
        $ad->main_ad = $request->main_ad;
        $ad->off_percent = $request->off_percent;
        $ad->main_image = $mainImageUrl;
        $ad->seceondary_ad = $request->seceondary_ad;
        $ad->secondary_image = $secondaryImageUrl;
        $ad->third_ad = $request->third_ad;
        $ad->third_image = $thirdImageUrl;
        $ad->fourth_ad = $request->fourth_ad;
        $ad->fourth_image = $fourthImageUrl;
        $ad->save();
    }

    public function SaveAdImage(Request $request){
        $this->adImageValidation($request);
        $mainImageUrl = $this->mainImageUpload($request);
        $secondaryImageUrl = $this->secondaryImageUpload($request);
        $thirdImageUrl = $this->thirdImageUpload($request);
        $fourthImageUrl = $this->fourthImageUpload($request);

        $this->saveData($request,$mainImageUrl,$secondaryImageUrl,$thirdImageUrl,$fourthImageUrl);

        return redirect('/image/ad')->with('messege','Image update success');
    }
}

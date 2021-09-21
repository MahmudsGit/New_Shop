<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller
{
    public function SliderImage(){
        $sliderImages = slider::all();
        return view('admin.slider.slider_image',[
            'sliderImages'=>$sliderImages
        ]);
    }
    protected function firstImageUpload ($request){
        $firstImage = $request->file('first_image');
        $firstImageExtension = $firstImage->getClientOriginalExtension();
        $firstImageName = 'first_image'.'.'.$firstImageExtension;
        $directory = 'slider-image/';
        $firstImageUrl = $directory.$firstImageName;
        Image::make($firstImage)->resize(1700,600)->save($firstImageUrl);
        return $firstImageUrl;
    }
    protected function secondImageUpload ($request){
        $secondImage = $request->file('second_image');
        $secondImageExtension = $secondImage->getClientOriginalExtension();
        $secondImageName = 'second_image'.'.'.$secondImageExtension;
        $directory = 'slider-image/';
        $secondImageUrl = $directory.$secondImageName;
        Image::make($secondImage)->resize(1700,600)->save($secondImageUrl);
        return $secondImageUrl;
    }
    protected function thirdImageUpload ($request){
        $thirdImage = $request->file('third_image');
        $thirdImageExtension = $thirdImage->getClientOriginalExtension();
        $thirdImageName = 'third_image'.'.'.$thirdImageExtension;
        $directory = 'slider-image/';
        $thirdImageUrl = $directory.$thirdImageName;
        Image::make($thirdImage)->resize(1700,600)->save($thirdImageUrl);
        return $thirdImageUrl;
    }
    protected function fourthImageUpload ($request){
        $fourthImage            = $request->file('fourth_image');
        $fourthImageExtension   = $fourthImage->getClientOriginalExtension();
        $fourthImageName        = 'fourth_image'.'.'.$fourthImageExtension;
        $directory              = 'slider-image/';
        $fourthImageUrl         = $directory.$fourthImageName;
        Image::make($fourthImage)->resize(1700,600)->save($fourthImageUrl);
        return $fourthImageUrl;
    }
    protected function SliderImageValidation($request){
        $this->validate($request,[
           'first_image'    =>'required',
           'second_image'   =>'required',
           'third_image'    =>'required',
           'fourth_image'   =>'required'
        ]);
    }
    protected function SaveSliderData($request,$firstImageUrl,$secondImageUrl,$thirdImageUrl,$fourthImageUrl){

        $slider = slider::find($request->id);
        $slider->first_image    = $firstImageUrl;
        $slider->second_image   = $secondImageUrl;
        $slider->third_image    = $thirdImageUrl;
        $slider->fourth_image   = $fourthImageUrl;
        $slider->save();
    }
    public function SaveSliderImage(Request $request){
        $this->SliderImageValidation($request);

        $firstImageUrl  = $this->firstImageUpload($request);
        $secondImageUrl = $this->secondImageUpload($request);
        $thirdImageUrl  = $this->thirdImageUpload($request);
        $fourthImageUrl = $this->fourthImageUpload($request);

        $this->SaveSliderData($request,$firstImageUrl,$secondImageUrl,$thirdImageUrl,$fourthImageUrl);

        return redirect('/image/slider')->with('messege','Slider Image update success');
    }
}

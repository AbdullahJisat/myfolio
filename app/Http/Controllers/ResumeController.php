<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Pricing;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use ZipArchive;

class ResumeController extends Controller
{
    public function index()
    {
        $user = User::first();
        $services = Service::all();
        $categories = Category::with('portfolios')->get();
        $portfolios = Portfolio::all();
        $skills = Skill::all();
        $experiences = Experience::all();
        $educations = Education::all();
        $testimonials = Testimonial::all();
        $pricings = Pricing::all();
        return view('frontend.partials.content', compact('user', 'services', 'categories', 'portfolios', 'skills', 'experiences', 'educations', 'testimonials', 'pricings'));
    }

    public function updateProfile(Request $request)
    {
        User::findOrFail(auth()->user()->id)->update($request->except('password', 'image', 'resume'));
        return back()->with('success', message('update'));
    }

    public function updateImage(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('profile'), $imageName);
            $image = 'profile/' . $imageName;
        } else {
            $image = $user->image;
        }
        $data = $request->only('image');
        $data['image'] = $image;
        $user->update($data);
        return back()->with('success', 'Image updated');
    }


    public function updateSetting(Request $request)
    {
        \File::put('settings/file.txt', $request->site_name);
        if ($request->has('logo')) {
            $imageName = 'logo.' . $request->logo->extension();
            $request->logo->move(public_path('settings'), $imageName);
        }
        if ($request->has('icon')) {
            $imageName = 'icon.' . $request->icon->extension();
            $request->icon->move(public_path('settings'), $imageName);
        }
        return back()->with('success', 'Updated');
    }

    public function destroy($id)
    {
        $array = json_decode(file_get_contents('settings/message.json'), true);
        $array[$id]['deleted'] = 1;
        file_put_contents('settings/message.json', json_encode($array));
        return back()->with('success', message('delete'));
    }
}

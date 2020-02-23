<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\AutoBody;
use App\Models\AutoBodyItem;
use App\Models\HomeSlider;
use App\Models\Partner;
use App\Models\Statistic;
use App\Models\Testimonial;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public $viewPath = 'front-end.pages.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = Session::get('locale');

        if($locale != null){
            App::setLocale($locale);
        }else{
            $locale = App::getLocale();
        }
        $data['sliders'] = HomeSlider::all();
        $data['statistics'] = Statistic::all();
        $data['about'] = AboutUs::first();
        $data['whyChoose_2'] = WhyChooseUs::all();
        $data['testimonials'] = Testimonial::take(2)->get();
        $data['auto_body'][0] = AutoBody::first();
        $ab_items = AutoBodyItem::all();
        $temp = (int)(count($ab_items)/2);
        $tempCollection1 = collect();
        $tempCollection2 = collect();
        for ($i = 0; $i < count($ab_items); $i ++) {
            if ($i > $temp-1) {
                $tempCollection2->push($ab_items[$i]);
            } else {
                $tempCollection1->push($ab_items[$i]);
            }
        }
        $data['auto_body'][1][0] = $tempCollection1;
        $data['auto_body'][1][1] = $tempCollection2;
        $data['partner'] = Partner::all();

        return view($this->viewPath.'home', compact('locale', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

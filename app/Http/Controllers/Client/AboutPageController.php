<?php

namespace App\Http\Controllers\Client;

use App\Models\About;
use App\Models\Topic;
use App\Models\Video;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Statute;
use App\Models\Direction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutPageController extends Controller
{
    public function index(){
        $abouts = About::select(
        'title',
        'subtitle',
        'text',
        'sorting',
        'active',
        'path_image',
        )->active()->sorting()->get();

        $topics = Topic::select(
            'id',
            'title',
            'description',
            'active',
            'color',
            'sorting',
            'path_image',
        )->sorting()->get();

        $video = Video::select(
            'link',
            'active',
        )
        ->active()->first();

        
        return view('client.blades.about', compact('abouts', 'topics', 'video'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function publication()
    {
        return view('publication.addpublication');
    }

    public function addPublication(Request $request)
    {
        $publication = $this->validate($request,[
            'url' => 'required',
            'directLink' => 'required',
            'twitterUsername' => 'required',
            'email' => 'required|email|max:255',
            'twitterFollower' => 'required',
            'alexaRanking' => 'required',
            'websiteCategories' => 'required',
            'regions' => 'required',
            'platforms' => 'required'
        ]); 

        $publication['user_id'] = auth()->id();

        Publication::create($publication);
        return redirect('/');
    }

    public function publicationDetails(Publication $publication)
    {

        return view('publication.publicationDetails',[
            'publication' => $publication->paginate(5)
        ]);
    }

    public function deletePublication(Publication $publication)
    {
        $publication->delete();
        return redirect('/');
    }
    
}

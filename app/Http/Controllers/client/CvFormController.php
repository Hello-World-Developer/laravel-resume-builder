<?php

namespace App\Http\Controllers\client;

use App\Models\Form;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CvFormStoreRequest;
use App\Repositories\Client\CvFormRepository;


class CvFormController extends Controller
{
    protected $cvFormRepository;

    public function __construct(CvFormRepository $cvFormRepository)
    {
        $this->cvFormRepository = $cvFormRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // $formInfo = Form::with('userDetail', 'skills', 'languages', 'education')
        //         ->where('id', 1)
        //         ->latest()
        //         ->first();

            // session()->put('cv-info', $formInfo);
        return view('pages.client.cv-form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CvFormStoreRequest $request)
    {
        if($request->query('new')) {
            session()->forget('cv-info');
        }
        return $this->cvFormRepository->store($request);
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

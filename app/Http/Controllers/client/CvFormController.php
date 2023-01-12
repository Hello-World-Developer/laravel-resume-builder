<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Form;
use App\Models\Language;
use App\Models\Skill;
use App\Models\User;
use App\Models\UserDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CvFormController extends Controller
{
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
        return view('pages.client.cv-form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $profile = $request->file('profile');
            $profile_name = uniqid() . '-' . $profile->getClientOriginalName();
            $profile->storeAs('public', $profile_name);

            $newForm = Form::create([
                'user_id' => 1,
                'name' => null,
            ]);

            UserDetail::create([
                'form_id' =>  $newForm->id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'image' => $profile_name,
                'head_line' => $request->head_line,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'post_code' => $request->post_code,
                'city' => $request->city,
            ]);

            Education::create([
                'form_id' => $newForm->id,
                'degree' => $request->degree,
                'school' => $request->school,
                'city' => $request->city,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'description' => $request->description
            ]);

            if ($request->skills) {
                foreach ($request->skills as $skill) {
                    Skill::create([
                        'form_id' => $newForm->id,
                        'name' => $skill['name'],
                        'range' => $skill['range'],
                    ]);
                }
            }

            if ($request->languages) {
                foreach ($request->languages as $language) {
                    Language::create([
                        'form_id' => $newForm->id,
                        'name' => $language['name'],
                        'level' => $language['level'],
                    ]);
                }
            }
            DB::commit();
            $formInfo = Form::with('userDetail', 'skills', 'languages', 'education')
                ->latest()
                ->first();

            session()->put('cv-info', $formInfo);

            return redirect()->back();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            abort(500);
        }
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

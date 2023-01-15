<?php
namespace App\Repositories\Client;

use App\Models\Form;
use App\Models\Skill;
use App\Models\Language;
use App\Models\Education;
use App\Models\UserDetail;
use App\Repositories\Repository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CvFormRepository  extends Repository
{
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $profile = $request->file('profile');
            $ext =$profile->getClientOriginalExtension();
            $base64encode = base64_encode(file_get_contents($profile->path()));
            $url = 'data:image/'.$ext.';base64,'.$base64encode;

            $newForm = Form::create([
                'user_id' => $request->user()->id,
                'name' => null,
            ]);

            UserDetail::create([
                'form_id' =>  $newForm->id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'image' => $url,
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
                'city' => $request->school_city,
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
                ->where('user_id', $request->user()->id)
                ->latest()
                ->first();

            return $formInfo;

        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            abort(500);
        }
    }
}

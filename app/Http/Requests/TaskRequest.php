<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rule_task_unique = Rule::unique('task','task');

        if ($this-> method() !== 'POST'){
            $rule_task_unique->ignore($this->route()->parameter('id')); //ignore rule jika update
        }
        return [
                'task' => ['required', $rule_task_unique],
        ];
    }

    public function messages()
    {
    return[
        'required' => 'isian :attribute harus diisi',
        // 'user.required' => 'nama pengguna harus diisi',
    ];
    }
}

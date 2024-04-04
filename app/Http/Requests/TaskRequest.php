<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

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
        // validate: so important in validate and in validate edit
        $rule_task_unique = Rule::unique('tasks','task');
        if ($this->method() !== 'POST') {
            $rule_task_unique->ignore($this->route()->parameter('id'));
        }

        return [
            // 'user' => ['required', 'unique:tasks'],
            'user' => ['required', $rule_task_unique],
            'task' => ['required'],
            'label' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'isian :attribute harus diisi',
            'user.required' => 'Nama Pengguna harus diisi',
        ];
    }
}

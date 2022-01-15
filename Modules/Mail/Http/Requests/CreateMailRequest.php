<?php

declare(strict_types=1);

namespace Modules\Mail\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMailRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'from' => ['required', 'max:255'],
            'to' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'content' => ['required', 'max:10000'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}

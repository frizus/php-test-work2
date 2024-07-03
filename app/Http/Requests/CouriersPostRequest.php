<?php

namespace App\Http\Requests;

use App\Models\Region;
use Illuminate\Foundation\Http\FormRequest;

class CouriersPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'data.courier_type' => 'required|in:foor,bike,car',
            'data.regions' => 'required|array|min:1',
            'data.regions.*' => 'exists:' . Region::class . ',id',
            'data.working_hours' => 'required|array|size:2',
            'data.working_hours.*' => 'required_with:data.working_hours,date_format:H:i:s',
            'data.working_hours.1' => 'required_with:data.working_hours,after:data.working_hours.0',
        ];
    }
}

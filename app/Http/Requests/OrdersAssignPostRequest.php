<?php

namespace App\Http\Requests;

use App\Models\Courier;
use App\Models\Order;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OrdersAssignPostRequest extends FormRequest
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
            'courier_id' => 'required|exists:' . Courier::class . ',id',
            'order_id' => [
                'required',
                'exists:' . Order::class . ',id',
                Rule::exists((new Order)->getTable())->where(function (Builder $query) {
                    $query->whereNull('courier_id');
                })
            ]
        ];
    }
}

<?php

namespace App\Http\Requests\API;

use App\Models\Voucher_upload_receipt;
use InfyOm\Generator\Request\APIRequest;

class CreateVoucher_upload_receiptAPIRequest extends APIRequest
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
        return Voucher_upload_receipt::$rules;
    }
}

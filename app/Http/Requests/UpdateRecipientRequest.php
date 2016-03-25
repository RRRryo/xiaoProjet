<?php

namespace App\Http\Requests;


use App\Recipient;
use Illuminate\Support\Facades\Auth;

class UpdateRecipientRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $recipientId = $this->route('recipient');

        return Recipient::where('id', $recipientId)
            ->where('user_id', Auth::id())->exists();

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'       => 'required|max:50',
            'company'      => 'required|max:50',
            'address' => 'required|max:255',
            'postal_code' => 'required',
            'city' => 'required|max:50',
            'country' => 'required|max:50',
            'telephone' => 'required|max:50',
        ];
    }
}

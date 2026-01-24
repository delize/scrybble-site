<?php

namespace App\Http\Requests;

use App\Models\Sync;
use Illuminate\Foundation\Http\FormRequest;

class RemarkableDocumentShareRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'feedback' => ['nullable', 'string'],
            'sync_id' => ['required', 'exists:sync,id'],
            'developer_access_consent_granted' => ['boolean'],
            'open_access_consent_granted' => ['boolean'],
        ];
    }

    public function authorize(): bool
    {
        $user = $this->user();
        if (!$user) {
            return false;
        }

        $sync = Sync::find($this->input('sync_id'));
        if (!$sync) {
            return false;
        }

        // Admin can share any sync
        if ($user->id === 1) {
            return true;
        }

        // Users can only share their own syncs
        return $sync->user_id === $user->id;
    }
}

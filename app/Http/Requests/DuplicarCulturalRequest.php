<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DuplicarCulturalRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $nume_ficha = str_pad($this->n_ficha_nuevo,7,'0',STR_PAD_LEFT);
        $id = $this->id_ficha_cotitular;
        return [
            'unicat_cultural_nuevo' => 'required|exists:tf_uni_cat,id_uni_cat',
            'n_ficha_nuevo_cultural' => ['required','max:7',
                    Rule::unique('tf_fichas_cotitularidades', 'nume_ficha')->ignore($id, 'id_ficha')],
            'ficha_lote_cultural' => 'required|max:3',
            'ficha_lote2_cultural' => 'required|max:3'
        ];
    }
}

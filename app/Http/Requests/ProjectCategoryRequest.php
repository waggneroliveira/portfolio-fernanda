<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ProjectCategoryRequest extends FormRequest
{
     public function authorize(): bool
    {
        if(!Auth::user()->hasRole('Super') && 
        !Auth::user()->can('usuario.tornar usuario master') && 
        !Auth::user()->can('categorias do noticias.criar')){
            return false;
        }
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'active' => $this->input('active') === 'on' ? 1 : 0,
        ]);
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'active' => 'boolean',
            'sorting' => ['nullable', 'integer'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O campo Título é obrigatório.',
        ];
    }
}

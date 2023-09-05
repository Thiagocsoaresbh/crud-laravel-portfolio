<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // Exibir perfil do usuário
    public function show()
    {
        return view('profile.show', ['user' => Auth::user()]);
    }

    // Exibir o formulário de edição do perfil
    public function edit()
    {
        return view('profile.edit', ['user' => Auth::user()]);
    }

    public function store(Request $request)
    {
        return redirect()->route('profile.edit');
    }

    // Atualizar informações do perfil
    public function update(Request $request)
    {
        $userId = Auth::id(); // Pega o ID do usuário autenticado

        // Validação (como exemplo)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $userId,
            'password' => 'sometimes|nullable|string|min:8|confirmed',
        ]);

        // Busca a instância do usuário
        $user = \App\Models\User::find($userId);

        // Se o usuário não for encontrado, redireciona de volta com uma mensagem de erro
        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'Usuário não encontrado.']);
        }

        // Atualiza os campos necessários
        $user->name = $request->name;
        $user->email = $request->email;
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }

        // Salva as alterações
        $user->save();

        // Redirecionar com uma mensagem de sucesso
        return redirect()->route('profile.edit')->with('status', 'Perfil atualizado com sucesso!');
    }

    // Exibir página de configurações do perfil
    public function settings()
    {
        return view('profile.settings', ['user' => Auth::user()]);
    }
}

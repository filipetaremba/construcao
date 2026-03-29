<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contacto extends BaseController
{
    public function enviar()
    {
        $redirectBack = $this->request->getPost('redirect_back') ?: '/contacto';

        // --- Validação ---
        $rules = [
            'nome'     => 'required|min_length[2]|max_length[100]',
            'email'    => 'required|valid_email',
            'tipo'     => 'required|in_list[residencial,comercial,industrial,remodelacao,consultoria,outro]',
            'mensagem' => 'required|min_length[10]|max_length[2000]',
        ];

        $messages = [
            'nome'     => ['required' => 'O nome é obrigatório.', 'min_length' => 'Nome demasiado curto.'],
            'email'    => ['required' => 'O email é obrigatório.', 'valid_email' => 'Email inválido.'],
            'tipo'     => ['required' => 'Seleccione o tipo de projecto.'],
            'mensagem' => ['required' => 'A mensagem é obrigatória.', 'min_length' => 'Mensagem demasiado curta.'],
        ];

        if (! $this->validate($rules, $messages)) {
            return redirect()->to($redirectBack)
                ->withInput()
                ->with('validation', $this->validator);
        }

        // --- Dados do formulário ---
        $nome       = $this->request->getPost('nome');
        $empresa    = $this->request->getPost('empresa') ?: '—';
        $email      = $this->request->getPost('email');
        $telefone   = $this->request->getPost('telefone') ?: '—';
        $tipo       = $this->request->getPost('tipo');
        $localizacao = $this->request->getPost('localizacao') ?: '—';
        $mensagem   = $this->request->getPost('mensagem');

        $tiposLabel = [
            'residencial' => 'Construção Residencial',
            'comercial'   => 'Construção Comercial',
            'industrial'  => 'Construção Industrial',
            'remodelacao' => 'Remodelação',
            'consultoria' => 'Projecto & Consultoria',
            'outro'       => 'Outro',
        ];
        $tipoLabel = $tiposLabel[$tipo] ?? $tipo;

        // --- Envio de email via SMTP ---
       $emailService = \Config\Services::email();

            $emailService->setTo('empresa@exemplo.com'); // teu email real
            $emailService->setFrom(env('email.fromEmail'), env('email.fromName'));
            $emailService->setReplyTo($email, $nome);

            $emailService->setSubject('Novo Pedido de Orçamento — ' . $tipoLabel);

            $corpo  = "<h2>Novo pedido de orçamento</h2>";
            $corpo .= "<p><strong>Nome:</strong> {$nome}</p>";
            $corpo .= "<p><strong>Empresa:</strong> {$empresa}</p>";
            $corpo .= "<p><strong>Email:</strong> {$email}</p>";
            $corpo .= "<p><strong>Telefone:</strong> {$telefone}</p>";
            $corpo .= "<p><strong>Tipo de Projecto:</strong> {$tipoLabel}</p>";
            $corpo .= "<p><strong>Localização:</strong> {$localizacao}</p>";
            $corpo .= "<hr><p><strong>Mensagem:</strong><br>" . nl2br(esc($mensagem)) . "</p>";

            $emailService->setMessage($corpo);

        if (! $emailService->send()) {
            log_message('error', 'Falha ao enviar email de contacto: ' . $emailService->printDebugger(['headers']));

            return redirect()->to($redirectBack)
                ->withInput()
                ->with('form_error', 'Ocorreu um erro ao enviar a mensagem. Tente novamente.');
        }

        return redirect()->to($redirectBack)
            ->with('form_success', true);
    }
}
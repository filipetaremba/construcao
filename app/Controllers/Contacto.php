<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contacto extends BaseController
{
    public function enviar(){
        $redirectBack = $this->request->getPost('redirect_back') ?: '/contacto';

        // Detecta qual form está a ser submetido
        $isHomeForm = $this->request->getPost('tipo') !== null;

        if ($isHomeForm) {
            $rules = [
                'nome'     => 'required|min_length[2]|max_length[100]',
                'email'    => 'required|valid_email',
                'tipo'     => 'required|in_list[residencial,comercial,industrial,remodelacao,consultoria,outro]',
                'mensagem' => 'required|min_length[10]|max_length[2000]',
            ];
        } else {
            $rules = [
                'nome'     => 'required|min_length[2]|max_length[100]',
                'email'    => 'required|valid_email',
                'assunto'  => 'required|in_list[orcamento,informacao,parceria,reclamacao,emprego,outro]',
                'mensagem' => 'required|min_length[10]|max_length[2000]',
            ];
        }

        $messages = [
            'nome'     => ['required' => 'O nome é obrigatório.', 'min_length' => 'Nome demasiado curto.'],
            'email'    => ['required' => 'O email é obrigatório.', 'valid_email' => 'Email inválido.'],
            'mensagem' => ['required' => 'A mensagem é obrigatória.', 'min_length' => 'Mensagem demasiado curta.'],
        ];

        if (! $this->validate($rules, $messages)) {
            return redirect()->to($redirectBack)
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $nome     = $this->request->getPost('nome');
        $empresa  = $this->request->getPost('empresa') ?: '—';
        $email    = $this->request->getPost('email');
        $telefone = $this->request->getPost('telefone') ?: '—';
        $mensagem = $this->request->getPost('mensagem');

        // Resolve o label do assunto/tipo
        if ($isHomeForm) {
            $tipo = $this->request->getPost('tipo');
            $localizacao = $this->request->getPost('localizacao') ?: '—';
            $labels = [
                'residencial' => 'Construção Residencial',
                'comercial'   => 'Construção Comercial',
                'industrial'  => 'Construção Industrial',
                'remodelacao' => 'Remodelação',
                'consultoria' => 'Projecto & Consultoria',
                'outro'       => 'Outro',
            ];
            $assuntoLabel = $labels[$tipo] ?? $tipo;
        } else {
            $assunto = $this->request->getPost('assunto');
            $localizacao = '—';
            $labels = [
                'orcamento'  => 'Pedido de Orçamento',
                'informacao' => 'Informação Geral',
                'parceria'   => 'Parceria / Fornecedores',
                'reclamacao' => 'Reclamação / Garantia',
                'emprego'    => 'Candidatura de Emprego',
                'outro'      => 'Outro',
            ];
            $assuntoLabel = $labels[$assunto] ?? $assunto;
        }

        // Email (igual ao que já tens)
        $emailService = \Config\Services::email();
        $emailService->setTo('filipetaremba0@gmail.com');
        $emailService->setFrom(env('email.fromEmail'), env('email.fromName'));
        $emailService->setReplyTo($email, $nome);
        $emailService->setSubject('Novo Contacto — ' . $assuntoLabel);

        $corpo  = "<h2 style='font-family:sans-serif;color:#1a2a4a'>Novo contacto via site</h2>";
        $corpo .= "<table style='font-family:sans-serif;font-size:14px;border-collapse:collapse;width:100%'>";
        $corpo .= "<tr><td style='padding:6px 12px;color:#666;width:140px'>Nome</td><td style='padding:6px 12px;font-weight:bold'>" . esc($nome) . "</td></tr>";
        $corpo .= "<tr style='background:#f9f9f9'><td style='padding:6px 12px;color:#666'>Empresa</td><td style='padding:6px 12px'>" . esc($empresa) . "</td></tr>";
        $corpo .= "<tr><td style='padding:6px 12px;color:#666'>Email</td><td style='padding:6px 12px'><a href='mailto:" . esc($email) . "'>" . esc($email) . "</a></td></tr>";
        $corpo .= "<tr style='background:#f9f9f9'><td style='padding:6px 12px;color:#666'>Telefone</td><td style='padding:6px 12px'>" . esc($telefone) . "</td></tr>";
        $corpo .= "<tr><td style='padding:6px 12px;color:#666'>Assunto</td><td style='padding:6px 12px'>" . esc($assuntoLabel) . "</td></tr>";
        $corpo .= "<tr style='background:#f9f9f9'><td style='padding:6px 12px;color:#666'>Localização</td><td style='padding:6px 12px'>" . esc($localizacao) . "</td></tr>";
        $corpo .= "</table>";
        $corpo .= "<hr style='margin:20px 0;border:none;border-top:1px solid #eee'>";
        $corpo .= "<p style='font-family:sans-serif;font-size:14px;color:#333;line-height:1.6'>" . nl2br(esc($mensagem)) . "</p>";

        $emailService->setMessage($corpo);

        if (! $emailService->send()) {
            log_message('error', 'Falha ao enviar email: ' . $emailService->printDebugger(['headers']));
            return redirect()->to($redirectBack)
                ->withInput()
                ->with('form_error', 'Ocorreu um erro ao enviar a mensagem. Tente novamente.');
        }

        return redirect()->to($redirectBack)->with('form_success', true);
    }
}
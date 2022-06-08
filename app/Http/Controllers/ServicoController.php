<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Models\UserServico;
use DateTime;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function create(Request $request)
    {
        $servico = new Servico();

        $servico->title = "RELATÓRIOS";
        $servico->title_modal = "RELATÓRIOS ANALÍTICOS E LAUDOS PERICIAIS";
        $servico->icon_path = "imagens/Servicos/Servico4.png";
        //$servico->description = '<p><i class="fas fa-long-arrow-alt-right"></i> Relatórios gerencias analíticos extraídos do uso dos sistemas, bem como sobre incidentes de segurança. <br><br> <i class="fas fa-long-arrow-alt-right"></i> Relatórios devem conter informações úteis, mas muitas vezes são complexos e poluídos. <br><br> <i class="fas fa-long-arrow-alt-right"></i> A aplicação de filtros e classificação de dados permite traduzir dados em informação e conhecimento que trazem significado para os gestores. <br><br> <i class="fas fa-long-arrow-alt-right"></i> Laudos periciais assinados por profissionais legalmente habilitados para fornecer documento com força jurídica.</p>';
        
        //$servico->save();
    }

    public function getAllServices()
    {
        $servicos = Servico::all();

        return $servicos;
    }

}

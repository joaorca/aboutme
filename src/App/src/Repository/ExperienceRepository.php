<?php


namespace App\Repository;


class ExperienceRepository implements RepositoryInterface
{

    public function getData()
    {
        return [
            [
                'where'       => 'UNISUAM',
                'year'        => '2012 - Hoje',
                'profession'  => 'Analista',
                'description' => 'Coordenação de equipe nos atendimentos a chamados
                  de manutenção ao sistema; Responsável pelo levantamento das
                  necessidades junto às áreas usuárias, pela criação dos protótipos
                  para aprovação e também pela documentação técnica dos requerimentos
                  para a equipe de programadores; Apresentação dos projetos concluídos
                  para às áreas solicitantes e treinamento dos usuários; Criação e
                  análise de relatórios acadêmicos e financeiros e documentações
                  técnicas de bancos de dados. Restruturação e controle de usuários
                  e perfis de acesso à sistemas terceirizados: TOTVS (RM) e MXM.'
            ],
            [
                'where'       => 'UNISUAM',
                'year'        => '2007 - 2012',
                'profession'  => 'Programador',
                'description' => 'Geração de relatórios gerenciais; Participação
                  na análise e coordenação de programadores no desenvolvimento do
                  módulo da biblioteca; Participação no desenvolvimento do hotsite
                  “Agendão”: desenvolvido para atender a necessidade de comunicação
                  da instituição com os alunos, para informar eventos em geral;
                  Coordenação dos programadores nos atendimentos de chamados de
                  suporte ao sistema; Participação na reestruturação do sistema
                  financeiro da instituição: reestruturação do controle de boletos,
                  débitos dos alunos, negociações de boletos vencidos, controle de
                  créditos, dentre outras funcionalidades; Coordenação dos programadores
                  na reestruturação do layout nos ambientes de aluno e professor;
                  Participação na análise e desenvolvimento da migração de módulos
                  de PHP para Grails; Responsável pela refatoração de alguns processos
                  críticos. Participação no desenvolvimento do SAGA (Sistema
                  Automatizado de Gestão Acadêmica): sistema desenvolvido em PHP,
                  com orientação a objetos, em banco de dados POSTGRESQL, com
                  utilização de telas em AJAX, biblioteca ADODB, RPDF e SMARTY,
                  criação de relatórios em PDF, XLS, TXT e CSV, com a finalidade
                  de administrar todas as áreas da instituição (Financeiro, Graduação,
                  Extensão, Pós-Graduação, Mestrado, Biblioteca, Academia, entre outras);
                  O sistema apresenta ambiente interno, disponibilizado na intranet
                  da instituição e ambiente online, para professores e alunos terem
                  acesso ao sistema; Participação no desenvolvimento da ferramenta
                  de avaliações da instituição; Análise e desenvolvimento da
                  reestruturação do controle de bolsas/desconto; Participação no
                  desenvolvimento da ferramenta de newsletter; Participação no
                  desenvolvimento do hotsite da ONG Realizar; Participação no
                  desenvolvimento do portal da instituição (versão PHPNuke).'
            ],
            [
                'where'       => 'TDesign',
                'year'        => '2006 - 2007',
                'profession'  => 'Programador Web',
                'description' => 'Desenvolvimento de soluções dinâmicas para diversos
                  sites em PHP/MYSQL; Montagem e manutenção da rede cabeada e wireless;
                  Manutenção de micros; Suporte a usuários.'
            ],
            [
                'where'       => 'Comunidade Mãe do Redentor',
                'year'        => '2001 - 2006',
                'profession'  => 'Programador Web',
                'description' => 'Criação e manutenção do site (layout e programação);
                  Montagem e manutenção da rede cabeada; Desenvolvimento de aplicativos
                  para controle de diversas áreas da empresa; Controle de pagamentos e
                  emissão de boletos com o OFFICE BANKING BRADESCO; Gravação e edição
                  do programa “Resgate”, que ia ao ar na Rádio Catedral; Suporte a usuários.'
            ],
            [
                'where'       => 'Colégio Imaculada Conceição',
                'year'        => '2003',
                'profession'  => 'Técnico em Informática',
                'description' => 'Manutenção de micros e rede; Suporte a usuários.'
            ],
            [
                'where'       => 'UniverCidade',
                'year'        => '2001',
                'profession'  => 'Estagiário de HelpDesk',
                'description' => 'Manutenção de micros e rede; Suporte a usuários.'
            ],
        ];
    }
}

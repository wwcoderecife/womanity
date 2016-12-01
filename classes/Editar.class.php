<?php

include_once 'Conexao.class.php';

class Editar extends Conexao {

	    //******Organizacaoes*******//
    private $cnpj;
    private $localizacao;
    private $nome;
    private $sigla;
    private $telefone;
    private $email;
    private $tipo;
    private $inicio_atv;
    private $qtde_pessoas;
    private $recursos_finaceiros;
    private $descricao;
    private $publico_atendido;
    private $politicas_publicas;
    private $monitoramento_atividades;
    private $estrategia_comunicacao;
    private $premiacao_certificacao;
    private $organizacao_pai;
    private $natureza;
    private $usuario_id;

    //******Contatos*******//
    private $nome_1;
    private $cargo_1;
    private $email_1;
    private $telefone_1;
    private $celular_1;

    private $nome_2;
    private $cargo_2;
    private $email_2;
    private $telefone_2;
    private $celular_2;

    //******orçamentos*******//
    private $orcamento_2014;
    private $orcamento_2015;
    private $orcamento_2016;

    //Recursos Financeiros lista
    private $recursos_finaceiros_lista;

    //Politicas publicas
    private $politicas_publicas_lista;

    //Funções
    private $funcoes;
    private $numero_beneficiarios;

    //Empoderamento
    private $empoderamento_nome_1;
    private $empoderamento_desc_1;
    private $empoderamento_nome_2;
    private $empoderamento_desc_2;
    private $empoderamento_nome_3;
    private $empoderamento_desc_3;

    //Ação direta
    private $estados;

    //Relaciona
    private $relaciona_1;
    private $relaciona_2;
    private $relaciona_3;

    //Temas
    private $temas;

    //Subtemas
    private $subtemas;

    //Endereço
    private $regiao;
    private $estado;
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;
    private $complemento;
    private $cep;

    //Redes Sociais
    private $site;
    private $facebook;
    private $instagram;
    private $twitter;
    private $linkedin;
    private $outros;

    //Indicações
    private $indica_nome_1;
    private $indica_email_1;
    private $indica_telefone_1;
    private $indica_nome_2;
    private $indica_email_2;
    private $indica_telefone_2;
    private $indica_nome_3;
    private $indica_email_3;
    private $indica_telefone_3;


    //organizacoes Sets
    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }
    public function setLocalizacao($localizacao){
        $this->localizacao = $localizacao;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setSigla($sigla){
        $this->sigla = $sigla;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function setInicioAtv($inicio_atv){
        $this->inicio_atv = $inicio_atv;
    }
    public function setQtdePessoas($qtde_pessoas){
        $this->qtde_pessoas = $qtde_pessoas;
    }
    public function setRecursosFinaceiros($recursos_finaceiros){
        $this->recursos_finaceiros = $recursos_finaceiros;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function setPublicoAtendido($publico_atendido){
        $this->publico_atendido = $publico_atendido;
    }
    public function setPoliticasPublicas($politicas_publicas){
        $this->politicas_publicas = $politicas_publicas;
    }
    public function setMonitoramentoAtividades($monitoramento_atividades){
        $this->monitoramento_atividades = $monitoramento_atividades;
    }
    public function setEstrategiaComunicacao($estrategia_comunicacao){
        $this->estrategia_comunicacao = $estrategia_comunicacao;
    }
    public function setPremiacaoCertificacao($premiacao_certificacao){
        $this->premiacao_certificacao = $premiacao_certificacao;
    }
    public function setOrganizacaoPai($organizacao_pai){
        $this->organizacao_pai = $organizacao_pai;
    }
    public function setNatureza($natureza){
        $this->natureza = $natureza;
    }
    public function setUsuarioId($usuario_id){
        $this->usuario_id = $usuario_id;
    }

    //organizacoes Gets
    public function getCnpj(){
       return $this->cnpj;
    }
    public function getLocalizacao(){
       return $this->localizacao;
    }
    public function getNome(){
       return $this->nome;
    }
    public function getSigla(){
       return $this->sigla;
    }
    public function getTelefone(){
       return $this->telefone;
    }
    public function getEmail(){
       return $this->email;
    }
    public function getTipo(){
       return $this->tipo;
    }
    public function getInicioAtv(){
       return $this->inicio_atv;
    }
    public function getQtdePessoas(){
       return $this->qtde_pessoas;
    }
    public function getRecursosFinaceiros(){
       return $this->recursos_finaceiros;
    }
    public function getDescricao(){
       return $this->descricao;
    }
    public function getPublicoAtendido(){
       return $this->publico_atendido;
    }
    public function getPoliticasPublicas(){
       return $this->politicas_publicas;
    }
    public function getMonitoramentoAtividades(){
       return $this->monitoramento_atividades;
    }
    public function getEstrategiaComunicacao(){
       return $this->estrategia_comunicacao;
    }
    public function getPremiacaoCertificacao(){
       return $this->premiacao_certificacao;
    }
    public function getOrganizacaoPai(){
       return $this->organizacao_pai;
    }
    public function getNatureza(){
       return $this->natureza;
    }
    public function getUsuarioId(){
       return $this->usuario_id;
    }



    //contatos Sets
    public function setNome_1($nome_1){
        $this->nome_1 = $nome_1;
    }
    public function setCargo_1($cargo_1){
        $this->cargo_1 = $cargo_1;
    }
    public function setEmail_1($email_1){
        $this->email_1 = $email_1;
    }

    public function setTelefone_1($telefone_1){
        $this->telefone_1 = $telefone_1;
    }
    public function setCelular_1($celular_1){
        $this->celular_1 = $celular_1;
    }

    public function setNome_2($nome_2){
        $this->nome_2 = $nome_2;
    }

    public function setCargo_2($cargo_2){
        $this->cargo_2 = $cargo_2;
    }
    public function setEmail_2($email_2){
        $this->email_2 = $email_2;
    }

    public function setTelefone_2($telefone_2){
        $this->telefone_2 = $telefone_2;
    }
    public function setCelular_2($celular_2){
        $this->celular_2 = $celular_2;
    }

    //Contatos Gets
    public function getNome_1(){
        return $this->nome_1;
    }
    public function getCargo_1(){
        return $this->cargo_1;
    }
    public function getEmail_1(){
        return $this->email_1;
    }
    public function getTelefone_1(){
        return $this->telefone_1;
    }
    public function getCelular_1(){
        return $this->celular_1;
    }

    public function getNome_2(){
        return $this->nome_2;
    }
    public function getCargo_2(){
        return $this->cargo_2;
    }
    public function getEmail_2(){
        return $this->email_2;
    }
    public function getTelefone_2(){
        return $this->telefone_2;
    }
    public function getCelular_2(){
        return $this->celular_2;
    }


    //Orçamentos Sets
    public function setOrcamento_2014($orcamento_2014){
        $this->orcamento_2014 = $orcamento_2014;
    }
    public function setOrcamento_2015($orcamento_2015){
        $this->orcamento_2015 = $orcamento_2015;
    }
    public function setOrcamento_2016($orcamento_2016){
        $this->orcamento_2016 = $orcamento_2016;
    }

    //Orçamentos Gets
    public function getOrcamento_2014(){
        return $this->orcamento_2014;
    }
    public function getOrcamento_2015(){
        return $this->orcamento_2015;
    }
    public function getOrcamento_2016(){
        return $this->orcamento_2016;
    }

    //recursos_finaceiros_lista Gets
    public function setRecursosFinaceirosLista($recursos_finaceiros_lista){
        $this->recursos_finaceiros_lista = $recursos_finaceiros_lista;
    }

    //recursos_finaceiros_lista Gets
    public function getRecursosFinaceirosLista(){
        return $this->recursos_finaceiros_lista;
    }

    //Politicas Publicas lista Gets
    public function setPoliticasPublicasList($politicas_publicas_lista){
        $this->politicas_publicas_lista = $politicas_publicas_lista;
    }

    //Politicas Publicas lista Gets
    public function getPoliticasPublicasList(){
        return $this->politicas_publicas_lista;
    }

    //Funções Gets
    public function setFuncoes($funcoes){
        $this->funcoes = $funcoes;
    }
    public function setNumeroBeneficiarios($numero_beneficiarios){
        $this->numero_beneficiarios = $numero_beneficiarios;
    }

    //Funções Gets
    public function getFuncoes(){
        return $this->funcoes;
    }
    public function getNumeroBeneficiarios(){
        return $this->numero_beneficiarios;
    }

    //Empoderamento Sets
    public function setEmpoderamentoNome_1($empoderamento_nome_1){
        $this->empoderamento_nome_1 = $empoderamento_nome_1;
    }
    public function setEmpoderamentoDesc_1($empoderamento_desc_1){
        $this->empoderamento_desc_1 = $empoderamento_desc_1;
    }
    public function setEmpoderamentoNome_2($empoderamento_nome_2){
        $this->empoderamento_nome_2 = $empoderamento_nome_2;
    }
    public function setEmpoderamentoDesc_2($empoderamento_desc_2){
        $this->empoderamento_desc_2 = $empoderamento_desc_2;
    }
    public function setEmpoderamentoNome_3($empoderamento_nome_3){
        $this->empoderamento_nome_3 = $empoderamento_nome_3;
    }
    public function setEmpoderamentoDesc_3($empoderamento_desc_3){
        $this->empoderamento_desc_3 = $empoderamento_desc_3;
    }


    //Empoderamento Gets
    public function getEmpoderamentoNome_1(){
        return $this->empoderamento_nome_1;
    }
    public function getEmpoderamentoDesc_1(){
        return $this->empoderamento_desc_1;
    }
    public function getEmpoderamentoNome_2(){
        return $this->empoderamento_nome_2;
    }
    public function getEmpoderamentoDesc_2(){
        return $this->empoderamento_desc_2;
    }
    public function getEmpoderamentoNome_3(){
        return $this->empoderamento_nome_3;
    }
    public function getEmpoderamentoDesc_3(){
        return $this->empoderamento_desc_3;
    }


    //atuação direta Gets
    public function setEstados($estados){
        $this->estados = $estados;
    }

    //atuação direta Gets
    public function getEstados(){
        return $this->estados;
    }


    //Realaciona Sets
    public function setRelaciona_1($relaciona_1){
        $this->relaciona_1 = $relaciona_1;
    }
    public function setRelaciona_2($relaciona_2){
        $this->relaciona_2 = $relaciona_2;
    }
    public function setRelaciona_3($relaciona_3){
        $this->relaciona_3 = $relaciona_3;
    }


    //atuação Relaciona Gets
    public function getRelaciona_1(){
        return $this->relaciona_1;
    }
    public function getRelaciona_2(){
        return $this->relaciona_2;
    }
    public function getRelaciona_3(){
        return $this->relaciona_3;
    }

    //Temas Sets
    public function setTemas($temas){
        $this->temas = $temas;
    }

    //Temas Gets
    public function getTemas(){
        return $this->temas;
    }

    //Subtemas Sets
    public function setSubtemas($subtemas){
        $this->subtemas = $subtemas;
    }

    //Subtemas Gets
    public function getSubtemas(){
        return $this->subtemas;
    }


    //Endereço Sets
    public function setRegiao($regiao){
        $this->regiao = $regiao;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function setRua($rua){
        $this->rua = $rua;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setComplemento($complemento){
        $this->complemento = $complemento;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }


    //Endereço Relaciona Gets
    public function getRegiao(){
        return $this->regiao;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getRua(){
        return $this->rua;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getComplemento(){
        return $this->complemento;
    }
    public function getCep(){
        return $this->cep;
    }


    //Redes Sociais Sets
    public function setSite($site){
        $this->site = $site;
    }
    public function setFacebook($facebook){
        $this->facebook = $facebook;
    }
    public function setTwitter($twitter){
        $this->twitter = $twitter;
    }
    public function setInstagram($instagram){
        $this->instagram = $instagram;
    }
    public function setLinkedin($linkedin){
        $this->linkedin = $linkedin;
    }
    public function setOutros($outros){
        $this->outros = $outros;
    }

    //Redes Sociais Gets
    public function getSite(){
        return $this->site;
    }
    public function getFacebook(){
        return $this->facebook;
    }
    public function getTwitter(){
        return $this->twitter;
    }
    public function getInstagram(){
        return $this->instagram;
    }
    public function getLinkedin(){
        return $this->linkedin;
    }
    public function getOutros(){
        return $this->outros;
    }


    //Indicações Sets
    public function setIndicaNome_1($indica_nome_1){
        $this->indica_nome_1 = $indica_nome_1;
    }
    public function setIndicaEmail_1($indica_email_1){
        $this->indica_email_1 = $indica_email_1;
    }
    public function setIndicaTelefone_1($indica_telefone_1){
        $this->indica_telefone_1 = $indica_telefone_1;
    }
    public function setIndicaNome_2($indica_nome_2){
        $this->indica_nome_2 = $indica_nome_2;
    }
    public function setIndicaEmail_2($indica_email_2){
        $this->indica_email_2 = $indica_email_2;
    }
    public function setIndicaTelefone_2($indica_telefone_2){
        $this->indica_telefone_2 = $indica_telefone_2;
    }
    public function setIndicaNome_3($indica_nome_3){
        $this->indica_nome_3 = $indica_nome_3;
    }
    public function setIndicaEmail_3($indica_email_3){
        $this->indica_email_3 = $indica_email_3;
    }
    public function setIndicaTelefone_3($indica_telefone_3){
        $this->indica_telefone_3 = $indica_telefone_3;
    }

    //Indicações Gets
    public function getIndicaNome_1(){
        return $this->indica_nome_1;
    }
    public function getIndicaEmail_1(){
        return $this->indica_email_1;
    }
    public function getIndicaTelefone_1(){
        return $this->indica_telefone_1;
    }
    public function getIndicaNome_2(){
        return $this->indica_nome_2;
    }
    public function getIndicaEmail_2(){
        return $this->indica_email_2;
    }
    public function getIndicaTelefone_2(){
        return $this->indica_telefone_2;
    }
    public function getIndicaNome_3(){
        return $this->indica_nome_3;
    }
    public function getIndicaEmail_3(){
        return $this->indica_email_3;
    }
    public function getIndicaTelefone_3(){
        return $this->indica_telefone_3;
    }

	public function busca(){

		$pdo = parent::getDB();

		$consulta = $pdo->prepare("select 
				distinct 
				contato_1.nome as nome_1, contato_1.cargo as cargo_1, contato_1.email as email_1,
			    contato_1.telefone as telefone_1, contato_1.celular as celular_1,
			    contato_2.nome as nome_2, contato_2.cargo as cargo_2, contato_2.email as email_2,
			    contato_2.telefone as telefone_2, contato_2.celular as celular_2,
			    ong.cnpj, ong.localizacao, ong.nome, ong.sigla, ong.email, ong.tipo, ong.inicio_atv, 
			    ong.qtde_pessoas, ong.recursos_financeiros, ong.descricao,  ong.publico_atendido, 
			    ong.politicas_publicas, ong.monitoramento_atividades, ong.estrategia_comunicacao,
				ong.premiacao_certificacao, ong.organizacao_pai, ong.natureza
			from organizacoes ong
			left join contatos contato_1 on contato_1.organizacao_id = ong.id and contato_1.tipo = 1
			left join contatos contato_2 on contato_2.organizacao_id = ong.id and contato_2.tipo = 2
			left join atuacao_direta on atuacao_direta.organizacao_id = ong.id
			left join empoderamento on empoderamento.organizacao_id = ong.id
			left join enderecos endereco on endereco.organizacao_id = ong.id
			left join funcoes funcao on funcao.organizacao_id = ong.id
			left join indicacoes indicacao on indicacao.organizacao_id = ong.id
			left join orcamentos orcamento on orcamento.organizacao_id = ong.id
			left join origem_recursos origem_recurso on origem_recurso.organizacao_id = ong.id
			left join politicas_publicas politica_publica on politica_publica.organizacao_id = ong.id
			left join redes_sociais rede_social on rede_social.organizacao_id = ong.id
			left join relacionadas relacionada on relacionada.organizacao_id = ong.id
			left join temas tema on tema.organizacao_id = ong.id
			left join subtemas subtema on subtema.organizacao_id = ong.id
			where ong.id = ?");
		$consulta->bindValue(1, 1091);
        $consulta->execute();

        //passando os valores encontrados para um array
        $result =  $consulta->fetch(PDO::FETCH_BOTH);

        //Setando os valores nas variaveis
        $this->setNome_1($result['nome_1']);
        $this->setCargo_1($result['cargo_1']);
        $this->setEmail_1($result['email_1']);
        $this->setTelefone_1($result['telefone_1']);
        $this->setCelular_1($result['celular_1']);

        $this->setNome_2($result['nome_2']);
        $this->setCargo_2($result['cargo_2']);
        $this->setEmail_2($result['email_2']);
        $this->setTelefone_2($result['telefone_2']);
        $this->setCelular_2($result['celular_2']);
	
	}

}
	
?>
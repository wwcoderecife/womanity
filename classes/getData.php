<?php 

include_once 'Conexao.class.php';
class GetDataReport extends Conexao{


	public function subtemas_mais_trabalhados(){

		$pdo = parent::getDB();

		$lista = $pdo->prepare("
			select * from(
				select count(subtema) as qtd, subtema from subtemas group by subtema 
				union all
				select 0 as qtd, subtema from (
				select 'Aborto' as subtema
				union all 
				select 'Advocacy' as subtema
				union all
				select 'Água e saneamento básico'  as subtema
				union all 
				select 'Artes plásticas' as subtema
				union all
				select 'Economia Solidária' as subtema
				union all
				select 'Cadeia produtiva responsável' as subtema
				union all
				select 'Cinema' as subtema
				union all
				select 'Conselhos e outras instâncias' as subtema
				union all
				select 'Consumo' as subtema
				union all
				select 'Cooperativismo' as subtema
				union all
				select 'Dança' as subtema
				union all
				select 'Desenvolvimento e Programação' as subtema
				union all
				select 'Ecofeminismo' as subtema
				union all
				select 'Economia criativa' as subtema
				union all
				select 'Educomunicação' as subtema
				union all
				select 'Envelhecimento' as subtema
				union all
				select 'Estudo e pesquisa' as subtema
				union all
				select 'Finanças sociais' as subtema
				union all
				select 'Fotografia' as subtema
				union all
				select 'Incentivo à leitura' as subtema
				union all
				select 'Inclusão digital' as subtema
				union all
				select 'Inserção de mulheres na política' as subtema
				union all
				select 'Liderança' as subtema
				union all
				select 'Marketing' as subtema
				union all
				select 'Microcrédito' as subtema
				union all
				select 'Mobilização' as subtema
				union all
				select 'Mudanças climáticas' as subtema
				union all
				select 'Mulheres nas ciências e tecnologia' as subtema
				union all
				select 'Obesidade infantil' as subtema
				union all
				select 'Parto Humanizado' as subtema
				union all
				select 'Paternidade' as subtema
				union all
				select 'Pessoa com deficiência' as subtema
				union all
				select 'Povos tradicionais' as subtema
				union all
				select 'Preconceito e discriminação' as subtema
				union all
				select 'Promoção à cargos de liderança' as subtema
				union all
				select 'Questão presidiária' as subtema
				union all
				select 'Reciclagem e logística reversa' as subtema
				union all
				select 'Redes sociais' as subtema
				union all
				select 'Refugiados' as subtema
				union all
				select 'Reparação-reconstrução' as subtema
				union all
				select 'Religiāo' as subtema
				union all
				select 'Saúde sexual e reprodutiva' as subtema
				union all
				select 'Sustentabilidade' as subtema
				union all
				select 'Teatro' as subtema
				union all
				select 'Tecnologia social e/ou alternativa' as subtema
				union all
				select 'Tecnologia' as subtema
				union all
				select 'Trabalho digno' as subtema
				union all
				select 'Tráfico de pessoas' as subtema
				union all
				select 'Outros'  as subtema
				from dual) lista
				where lista.subtema not in (select subtema from subtemas)
				)lista_completa order by lista_completa.qtd
			");

		$lista->execute();
		if ($lista->rowCount() >= 1){
			$dados = $lista->fetchAll(PDO::FETCH_ASSOC);
			$max = sizeof($dados);
			echo "[['Subtemas', 'Subtemas'],";
			for($i=0; $i<$max; $i++){
				echo "['" . $dados[$i]['subtema'] . "'," . $dados[$i]["qtd"] . "],";
			}
			echo "]";
		}	
	}

}

?>
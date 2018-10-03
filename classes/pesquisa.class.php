<?php
/**
* 
*/
class Pesquisa
{
	private $pdo;
	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function buscaresposta(){
		$sql = $this->pdo->prepare("SELECT * FROM resposta_pesquisa ORDER BY id");
		$sql ->execute();
		return $sql ->fetchAll();
	}

	public function inserirResposta($sexo, $secretaria, $cargo, $escolaridade, $motivo, $tempo, $idade, $preocupacao,$estado_fisico,$estado_mental,$estado_emocional,$moradia,$transporte,$padrao_vida,$financeira,$patrimonio,$alimentacao,$educacao,$rel_conjuge,$rel_filho,$atencao,$nivel_social,$convivio_social,$nivel_cultural,$ultima_ferias,$proxima_ferias,$lib_trabalho,$proc_atividade,$rot_trabalho,$dec_instituicao,$cumpre_funcao,$suc_empresa,$melhor_resultado,$comp_atividade,$sat_cargo,$real_profissional,$trab_objetivo,$contrib_vida,$mot_familia,$trab_instituicao,$realizado_profissional,$vol_trabalho,$qual_quantidade,$melhor_trabalho,$des_trabalho,$ped_ajuda,$direcao,$ouve_retorno,$critica,$orientacao,$meio_comunicacao,$salario_cargo,$remuneracao, $ben_oferecido, $op_crescimento,$apto_responsabilidade,$outro_departamento,$outro_qual,$treinamento,$melhor_processo,$coisa_nova,$perp_carreira,$gestor_respeita,$resp_gestor,$apoio_gestor,$resolve_gestor,$desem_gestor,$sug_gestor,$sup_gestor,$delega_tarefa,$sup_auxilia,$coop_secretaria,$coop_servidores,$rel_colaborador,$ajud_colega,$conf_colega,$rel_servidor,$aux_integrante,$comp_conhecimento,$apto_diferenca,$ap_potencial,$avalia_desempenho,$norma_servidor,$exec_cargo,$inv_treinamento,$sug_treinamento,$amb_temperatura,$amb_espaco,$amb_mobiliario,$amb_higiene,$amb_instalacao,$cons_instituicao,$ind_amigo,$etica_servidor,$exemp_gestor,$ass_debatido,$est_equipe,$secre_objetivo,$secre_imagem,$secre_reclamacao,$secre_comunica,$secre_adequadamente,$secre_bem,$meta_secretaria,$mud_secretaria,$cont_servidor,$tre_produtividade,$pot_tecnico,$pot_humano,$falta_conhecimento,$falta_seguranca,$imp_profissional,$falta_autonomia,$amb_ruim,$trab_realizo,$rel_chefe,$falta_treinamento,$sobrecarga,$instalacao,$salario,$outro_fator,$qual_fator,$salario_satisfacao,
$beneficio,$estabilidade,$relacao_chefe,$trabalho,$falta_opcao,$amb_trabalho,$pre_empresa,$aut_trabalho,$pos_treinamento,$reconhecimento,$prog_profissional,$outro_satisfacao, $qual_satisfacao, $sug_instituicao){
        $sql = $this->pdo->prepare("INSERT INTO resposta_pesquisa (sexo, secretaria, cargo, escolaridade, motivo, tempo, idade, preocupacao, estado_fisico, estado_mental, estado_emocional, moradia, transporte, padrao_vida, financeira, patrimonio, alimentacao, educacao, rel_conjuge, rel_filho, atencao, nivel_social, convivio_social, nivel_cultural, ultima_ferias, proxima_ferias, lib_trabalho, proc_atividade, rot_trabalho, dec_instituicao, cumpre_funcao, suc_empresa, melhor_resultado, comp_atividade, sat_cargo, real_profissional, trab_objetivo, contrib_vida, mot_familia, trab_instituicao, realizado_profissional, vol_trabalho, qual_quantidade, melhor_trabalho, des_trabalho, ped_ajuda, direcao, ouve_retorno, critica, orientacao, meio_comunicacao, salario_cargo, remuneracao, ben_oferecido, op_crescimento, apto_responsabilidade, outro_departamento, outro_qual, treinamento, melhor_processo, coisa_nova, perp_carreira, gestor_respeita, resp_gestor, apoio_gestor, resolve_gestor, desem_gestor, sug_gestor, sup_gestor, delega_tarefa, sup_auxilia, coop_secretaria, coop_servidores, rel_colaborador, ajud_colega, conf_colega, rel_servidor, aux_integrante, comp_conhecimento, apto_diferenca, ap_potencial, avalia_desempenho, norma_servidor, exec_cargo, inv_treinamento, sug_treinamento, amb_temperatura, amb_espaco, amb_mobiliario, amb_higiene, amb_instalacao, cons_instituicao, ind_amigo, etica_servidor, exemp_gestor, ass_debatido, est_equipe, secre_objetivo, secre_imagem, secre_reclamacao, secre_comunica, secre_adequadamente, secre_bem, meta_secretaria, mud_secretaria, cont_servidor, tre_produtividade, pot_tecnico, pot_humano, falta_conhecimento, falta_seguranca, imp_profissional, falta_autonomia, amb_ruim, trab_realizo, rel_chefe, falta_treinamento, sobrecarga, instalacao, salario, outro_fator, qual_fator, salario_satisfacao,
 beneficio, estabilidade, relacao_chefe, trabalho, falta_opcao, amb_trabalho, pre_empresa, aut_trabalho, pos_treinamento, reconhecimento, prog_profissional, outro_satisfacao, qual_satisfacao, sug_instituicao) 
        	VALUES (:sexo, :secretaria, :cargo, :escolaridade, :motivo, :tempo, :idade, :preocupacao, :estado_fisico, :estado_mental, :estado_emocional, :moradia, :transporte, :padrao_vida, :financeira, :patrimonio, :alimentacao, :educacao, :rel_conjuge, :rel_filho, :atencao, :nivel_social, :convivio_social, :nivel_cultural, :ultima_ferias, :proxima_ferias, :lib_trabalho, :proc_atividade, :rot_trabalho, :dec_instituicao, :cumpre_funcao, :suc_empresa, :melhor_resultado, :comp_atividade, :sat_cargo, :real_profissional, :trab_objetivo, :contrib_vida, :mot_familia, :trab_instituicao, :realizado_profissional, :vol_trabalho, :qual_quantidade, :melhor_trabalho, :des_trabalho, :ped_ajuda, :direcao, :ouve_retorno, :critica, :orientacao, :meio_comunicacao, :salario_cargo, :remuneracao, :ben_oferecido, :op_crescimento, :apto_responsabilidade, :outro_departamento, :outro_qual, :treinamento, :melhor_processo, :coisa_nova, :perp_carreira, :gestor_respeita, :resp_gestor, :apoio_gestor, :resolve_gestor, :desem_gestor, :sug_gestor, :sup_gestor, :delega_tarefa, :sup_auxilia, :coop_secretaria, :coop_servidores, :rel_colaborador, :ajud_colega, :conf_colega, :rel_servidor, :aux_integrante, :comp_conhecimento, :apto_diferenca, :ap_potencial, :avalia_desempenho, :norma_servidor, :exec_cargo, :inv_treinamento, :sug_treinamento, :amb_temperatura, :amb_espaco, :amb_mobiliario, :amb_higiene, :amb_instalacao, :cons_instituicao, :ind_amigo, :etica_servidor, :exemp_gestor, :ass_debatido, :est_equipe, :secre_objetivo, :secre_imagem, :secre_reclamacao, :secre_comunica, :secre_adequadamente, :secre_bem, :meta_secretaria, :mud_secretaria, :cont_servidor, :tre_produtividade, :pot_tecnico, :pot_humano, :falta_conhecimento, :falta_seguranca, :imp_profissional, :falta_autonomia, :amb_ruim, :trab_realizo, :rel_chefe, :falta_treinamento, :sobrecarga, :instalacao, :salario, :outro_fator, :qual_fator, :salario_satisfacao,
 :beneficio, :estabilidade, :relacao_chefe, :trabalho, :falta_opcao, :amb_trabalho, :pre_empresa, :aut_trabalho, :pos_treinamento, :reconhecimento, :prog_profissional, :outro_satisfacao, :qual_satisfacao,:sug_instituicao)");
        $sql->bindValue(":sexo", $sexo); 
        $sql->bindValue(":secretaria", $secretaria); 
        $sql->bindValue(":cargo", $cargo); 
        $sql->bindValue(":escolaridade", $escolaridade); 
        $sql->bindValue(":motivo", $motivo); 
        $sql->bindValue(":tempo", $tempo);
        $sql->bindValue(":idade", $idade); 
        $sql->bindValue(":preocupacao", $preocupacao);
        $sql->bindValue(":estado_fisico", $estado_fisico); 
        $sql->bindValue(":estado_mental", $estado_mental); 
        $sql->bindValue(":estado_emocional", $estado_emocional); 
        $sql->bindValue(":moradia", $moradia); 
        $sql->bindValue(":transporte", $transporte); 
        $sql->bindValue(":padrao_vida", $padrao_vida); 
        $sql->bindValue(":financeira", $financeira); 
        $sql->bindValue(":patrimonio", $patrimonio); 
        $sql->bindValue(":alimentacao", $alimentacao); 
        $sql->bindValue(":educacao", $educacao); 
        $sql->bindValue(":rel_conjuge", $rel_conjuge); 
        $sql->bindValue(":rel_filho", $rel_filho); 
        $sql->bindValue(":atencao", $atencao); 
        $sql->bindValue(":nivel_social", $nivel_social); 
        $sql->bindValue(":convivio_social", $convivio_social); 
        $sql->bindValue(":nivel_cultural", $nivel_cultural); 
        $sql->bindValue(":ultima_ferias", $ultima_ferias); 
        $sql->bindValue(":proxima_ferias", $proxima_ferias); 
        $sql->bindValue(":lib_trabalho", $lib_trabalho); 
        $sql->bindValue(":proc_atividade", $proc_atividade); 
        $sql->bindValue(":rot_trabalho", $rot_trabalho); 
        $sql->bindValue(":dec_instituicao", $dec_instituicao); 
        $sql->bindValue(":cumpre_funcao", $cumpre_funcao); 
        $sql->bindValue(":suc_empresa", $suc_empresa); 
        $sql->bindValue(":melhor_resultado", $melhor_resultado); 
        $sql->bindValue(":comp_atividade", $comp_atividade); 
        $sql->bindValue(":sat_cargo", $sat_cargo); 
        $sql->bindValue(":real_profissional", $real_profissional); 
        $sql->bindValue(":trab_objetivo", $trab_objetivo); 
        $sql->bindValue(":contrib_vida", $contrib_vida); 
        $sql->bindValue(":mot_familia", $mot_familia); 
        $sql->bindValue(":trab_instituicao", $trab_instituicao); 
        $sql->bindValue(":realizado_profissional", $realizado_profissional); 
        $sql->bindValue(":vol_trabalho", $vol_trabalho); 
        $sql->bindValue(":qual_quantidade", $qual_quantidade); 
        $sql->bindValue(":melhor_trabalho", $melhor_trabalho); 
        $sql->bindValue(":des_trabalho", $des_trabalho); 
        $sql->bindValue(":ped_ajuda", $ped_ajuda); 
        $sql->bindValue(":direcao", $direcao); 
        $sql->bindValue(":ouve_retorno", $ouve_retorno); 
        $sql->bindValue(":critica", $critica); 
        $sql->bindValue(":orientacao", $orientacao); 
        $sql->bindValue(":meio_comunicacao", $meio_comunicacao); 
        $sql->bindValue(":salario_cargo", $salario_cargo); 
        $sql->bindValue(":remuneracao", $remuneracao);
        $sql->bindValue(":ben_oferecido", $ben_oferecido);
        $sql->bindValue(":op_crescimento", $op_crescimento); 
        $sql->bindValue(":apto_responsabilidade", $apto_responsabilidade); 
        $sql->bindValue(":outro_departamento", $outro_departamento); 
        $sql->bindValue(":outro_qual", $outro_qual); 
        $sql->bindValue(":treinamento", $treinamento); 
        $sql->bindValue(":melhor_processo", $melhor_processo); 
        $sql->bindValue(":coisa_nova", $coisa_nova); 
        $sql->bindValue(":perp_carreira", $perp_carreira); 
        $sql->bindValue(":gestor_respeita", $gestor_respeita); 
        $sql->bindValue(":resp_gestor", $resp_gestor); 
        $sql->bindValue(":apoio_gestor", $apoio_gestor); 
        $sql->bindValue(":resolve_gestor", $resolve_gestor); 
        $sql->bindValue(":desem_gestor", $desem_gestor); 
        $sql->bindValue(":sug_gestor", $sug_gestor); 
        $sql->bindValue(":sup_gestor", $sup_gestor); 
        $sql->bindValue(":delega_tarefa", $delega_tarefa); 
        $sql->bindValue(":sup_auxilia", $sup_auxilia); 
        $sql->bindValue(":coop_secretaria", $coop_secretaria); 
        $sql->bindValue(":coop_servidores", $coop_servidores); 
        $sql->bindValue(":rel_colaborador", $rel_colaborador); 
        $sql->bindValue(":ajud_colega", $ajud_colega); 
        $sql->bindValue(":conf_colega", $conf_colega); 
        $sql->bindValue(":rel_servidor", $rel_servidor); 
        $sql->bindValue(":aux_integrante", $aux_integrante); 
        $sql->bindValue(":comp_conhecimento", $comp_conhecimento); 
        $sql->bindValue(":apto_diferenca", $apto_diferenca); 
        $sql->bindValue(":ap_potencial", $ap_potencial); 
        $sql->bindValue(":avalia_desempenho", $avalia_desempenho); 
        $sql->bindValue(":norma_servidor", $norma_servidor); 
        $sql->bindValue(":exec_cargo", $exec_cargo); 
        $sql->bindValue(":inv_treinamento", $inv_treinamento); 
        $sql->bindValue(":sug_treinamento", $sug_treinamento); 
        $sql->bindValue(":amb_temperatura", $amb_temperatura); 
        $sql->bindValue(":amb_espaco", $amb_espaco); 
        $sql->bindValue(":amb_mobiliario", $amb_mobiliario); 
        $sql->bindValue(":amb_higiene", $amb_higiene); 
        $sql->bindValue(":amb_instalacao", $amb_instalacao); 
        $sql->bindValue(":cons_instituicao", $cons_instituicao); 
        $sql->bindValue(":ind_amigo", $ind_amigo); 
        $sql->bindValue(":etica_servidor", $etica_servidor); 
        $sql->bindValue(":exemp_gestor", $exemp_gestor); 
        $sql->bindValue(":ass_debatido", $ass_debatido); 
        $sql->bindValue(":est_equipe", $est_equipe); 
        $sql->bindValue(":secre_objetivo", $secre_objetivo); 
        $sql->bindValue(":secre_imagem", $secre_imagem); 
        $sql->bindValue(":secre_reclamacao", $secre_reclamacao); 
        $sql->bindValue(":secre_comunica", $secre_comunica); 
        $sql->bindValue(":secre_adequadamente", $secre_adequadamente); 
        $sql->bindValue(":secre_bem", $secre_bem); 
        $sql->bindValue(":meta_secretaria", $meta_secretaria); 
        $sql->bindValue(":mud_secretaria", $mud_secretaria); 
        $sql->bindValue(":cont_servidor", $cont_servidor); 
        $sql->bindValue(":tre_produtividade", $tre_produtividade); 
        $sql->bindValue(":pot_tecnico", $pot_tecnico); 
        $sql->bindValue(":pot_humano", $pot_humano); 
        $sql->bindValue(":falta_conhecimento", $falta_conhecimento); 
        $sql->bindValue(":falta_seguranca", $falta_seguranca); 
        $sql->bindValue(":imp_profissional", $imp_profissional); 
        $sql->bindValue(":falta_autonomia", $falta_autonomia); 
        $sql->bindValue(":amb_ruim", $amb_ruim); 
        $sql->bindValue(":trab_realizo", $trab_realizo); 
        $sql->bindValue(":rel_chefe", $rel_chefe); 
        $sql->bindValue(":falta_treinamento", $falta_treinamento); 
        $sql->bindValue(":sobrecarga", $sobrecarga); 
        $sql->bindValue(":instalacao", $instalacao); 
        $sql->bindValue(":salario", $salario); 
        $sql->bindValue(":outro_fator", $outro_fator); 
        $sql->bindValue(":qual_fator", $qual_fator); 
        $sql->bindValue(":salario_satisfacao", $salario_satisfacao);
        $sql->bindValue(":beneficio", $beneficio); 
        $sql->bindValue(":estabilidade", $estabilidade); 
        $sql->bindValue(":relacao_chefe", $relacao_chefe); 
        $sql->bindValue(":trabalho", $trabalho); 
        $sql->bindValue(":falta_opcao", $falta_opcao); 
        $sql->bindValue(":amb_trabalho", $amb_trabalho); 
        $sql->bindValue(":pre_empresa", $pre_empresa); 
        $sql->bindValue(":aut_trabalho", $aut_trabalho); 
        $sql->bindValue(":pos_treinamento", $pos_treinamento); 
        $sql->bindValue(":reconhecimento", $reconhecimento); 
        $sql->bindValue(":prog_profissional", $prog_profissional); 
        $sql->bindValue(":outro_satisfacao", $outro_satisfacao);
        $sql->bindValue(":qual_satisfacao", $qual_satisfacao); 
        $sql->bindValue(":sug_instituicao", $sug_instituicao);
        $sql->execute(); 
        return true;
	}
}
?>
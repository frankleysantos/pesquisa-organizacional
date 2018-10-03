<?php
 require "inc/cabecalho.php";
 require "classes/pesquisa.class.php";
 require "inc/config.php";
    header("Content-type: application/vnd.ms-excel");
    header("Content-type: application/force-download");
    header("Content-Disposition: attachment; filename=Respostas Pesquisas.xls");
    header("Pragma: no-cache");
  ?>
  <meta charset="utf-8">
  
<div>
	<h1>Respostas</h1>
<table class="table table-striped table-bordered">
	<tr>
<th>sexo</th>
<th>secretaria</th>
<th>cargo</th>
<th>escolaridade</th>
<th>motivo</th>
<th>tempo</th>
<th>idade</th>
<th>preocupacao</th>
<th>estado_fisico</th>
<th>estado_mental</th>
<th>estado_emocional</th>
<th>moradia</th>
<th>transporte</th>
<th>padrao_vida</th>
<th>financeira</th>
<th>patrimonio</th>
<th>alimentacao</th>
<th>educacao</th>
<th>rel_conjuge</th>
<th>rel_filho</th>
<th>atencao</th>
<th>nivel_social</th>
<th>convivio_social</th>
<th>nivel_cultural</th>
<th>ultima_ferias</th>
<th>proxima_ferias</th>
<th>lib_trabalho</th>
<th>proc_atividade</th>
<th>rot_trabalho</th>
<th>dec_instituicao</th>
<th>cumpre_funcao</th>
<th>suc_empresa</th>
<th>melhor_resultado</th>
<th>comp_atividade</th>
<th>sat_cargo</th>
<th>real_profissional</th>
<th>trab_objetivo</th>
<th>contrib_vida</th>
<th>mot_familia</th>
<th>trab_instituicao</th>
<th>realizado_profissional</th>
<th>vol_trabalho</th>
<th>qual_quantidade</th>
<th>melhor_trabalho</th>
<th>des_trabalho</th>
<th>ped_ajuda</th>
<th>direcao</th>
<th>ouve_retorno</th>
<th>critica</th>
<th>orientacao</th>
<th>meio_comunicacao</th>
<th>salario_cargo</th>
<th>remuneracao</th>
<th>ben_oferecido</th>
<th>op_crescimento</th>
<th>apto_responsabilidade</th>
<th>outro_departamento</th>
<th>outro_qual</th>
<th>treinamento</th>
<th>melhor_processo</th>
<th>coisa_nova</th>
<th>perp_carreira</th>
<th>gestor_respeita</th>
<th>resp_gestor</th>
<th>apoio_gestor</th>
<th>resolve_gestor</th>
<th>desem_gestor</th>
<th>sug_gestor</th>
<th>sup_gestor</th>
<th>delega_tarefa</th>
<th>sup_auxilia</th>
<th>coop_secretaria</th>
<th>coop_servidores</th>
<th>rel_colaborador</th>
<th>ajud_colega</th>
<th>conf_colega</th>
<th>rel_servidor</th>
<th>aux_integrante</th>
<th>comp_conhecimento</th>
<th>apto_diferenca</th>
<th>ap_potencial</th>
<th>avalia_desempenho</th>
<th>norma_servidor</th>
<th>exec_cargo</th>
<th>inv_treinamento</th>
<th>sug_treinamento</th>
<th>amb_temperatura</th>
<th>amb_espaco</th>
<th>amb_mobiliario</th>
<th>amb_higiene</th>
<th>amb_instalacao</th>
<th>cons_instituicao</th>
<th>ind_amigo</th>
<th>etica_servidor</th>
<th>exemp_gestor</th>
<th>ass_debatido</th>
<th>est_equipe</th>
<th>secre_objetivo</th>
<th>secre_imagem</th>
<th>secre_reclamacao</th>
<th>secre_comunica</th>
<th>secre_adequadamente</th>
<th>secre_bem</th>
<th>meta_secretaria</th>
<th>mud_secretaria</th>
<th>cont_servidor</th>
<th>tre_produtividade</th>
<th>pot_tecnico</th>
<th>pot_humano</th>
<th>falta_conhecimento</th>
<th>falta_seguranca</th>
<th>imp_profissional</th>
<th>falta_autonomia</th>
<th>amb_ruim</th>
<th>trab_realizo</th>
<th>rel_chefe</th>
<th>falta_treinamento</th>
<th>sobrecarga</th>
<th>instalacao</th>
<th>salario</th>
<th>outro_fator</th>
<th>qual_fator</th>
<th>salario_satisfacao</th>
<th>beneficio</th>
<th>estabilidade</th>
<th>relacao_chefe</th>
<th>trabalho</th>
<th>falta_opcao</th>
<th>amb_trabalho</th>
<th>pre_empresa</th>
<th>aut_trabalho</th>
<th>pos_treinamento</th>
<th>reconhecimento</th>
<th>prog_profissional</th>
<th>outro_satisfacao</th>
<th>qual_satisfacao</th>
<th>sug_instituicao</th>        
	</tr>
	<?php
	    $pesquisa = new Pesquisa($pdo);

	    $resposta = $pesquisa->buscaresposta();
		foreach($resposta as $resp) :
	?>
	<tr>
	<td><?=$resp['sexo']?></td>
<td><?=$resp['secretaria']?></td>
<td><?=$resp['cargo']?></td>
<td><?=$resp['escolaridade']?></td>
<td><?=$resp['motivo']?></td>
<td><?=$resp['tempo']?></td>
<td><?=$resp['idade']?></td>
<td><?=$resp['preocupacao']?></td>
<td><?=$resp['estado_fisico']?></td>
<td><?=$resp['estado_mental']?></td>
<td><?=$resp['estado_emocional']?></td>
<td><?=$resp['moradia']?></td>
<td><?=$resp['transporte']?></td>
<td><?=$resp['padrao_vida']?></td>
<td><?=$resp['financeira']?></td>
<td><?=$resp['patrimonio']?></td>
<td><?=$resp['alimentacao']?></td>
<td><?=$resp['educacao']?></td>
<td><?=$resp['rel_conjuge']?></td>
<td><?=$resp['rel_filho']?></td>
<td><?=$resp['atencao']?></td>
<td><?=$resp['nivel_social']?></td>
<td><?=$resp['convivio_social']?></td>
<td><?=$resp['nivel_cultural']?></td>
<td><?=$resp['ultima_ferias']?></td>
<td><?=$resp['proxima_ferias']?></td>
<td><?=$resp['lib_trabalho']?></td>
<td><?=$resp['proc_atividade']?></td>
<td><?=$resp['rot_trabalho']?></td>
<td><?=$resp['dec_instituicao']?></td>
<td><?=$resp['cumpre_funcao']?></td>
<td><?=$resp['suc_empresa']?></td>
<td><?=$resp['melhor_resultado']?></td>
<td><?=$resp['comp_atividade']?></td>
<td><?=$resp['sat_cargo']?></td>
<td><?=$resp['real_profissional']?></td>
<td><?=$resp['trab_objetivo']?></td>
<td><?=$resp['contrib_vida']?></td>
<td><?=$resp['mot_familia']?></td>
<td><?=$resp['trab_instituicao']?></td>
<td><?=$resp['realizado_profissional']?></td>
<td><?=$resp['vol_trabalho']?></td>
<td><?=$resp['qual_quantidade']?></td>
<td><?=$resp['melhor_trabalho']?></td>
<td><?=$resp['des_trabalho']?></td>
<td><?=$resp['ped_ajuda']?></td>
<td><?=$resp['direcao']?></td>
<td><?=$resp['ouve_retorno']?></td>
<td><?=$resp['critica']?></td>
<td><?=$resp['orientacao']?></td>
<td><?=$resp['meio_comunicacao']?></td>
<td><?=$resp['salario_cargo']?></td>
<td><?=$resp['remuneracao']?></td>
<td><?=$resp['ben_oferecido']?></td>
<td><?=$resp['op_crescimento']?></td>
<td><?=$resp['apto_responsabilidade']?></td>
<td><?=$resp['outro_departamento']?></td>
<td><?=$resp['outro_qual']?></td>
<td><?=$resp['treinamento']?></td>
<td><?=$resp['melhor_processo']?></td>
<td><?=$resp['coisa_nova']?></td>
<td><?=$resp['perp_carreira']?></td>
<td><?=$resp['gestor_respeita']?></td>
<td><?=$resp['resp_gestor']?></td>
<td><?=$resp['apoio_gestor']?></td>
<td><?=$resp['resolve_gestor']?></td>
<td><?=$resp['desem_gestor']?></td>
<td><?=$resp['sug_gestor']?></td>
<td><?=$resp['sup_gestor']?></td>
<td><?=$resp['delega_tarefa']?></td>
<td><?=$resp['sup_auxilia']?></td>
<td><?=$resp['coop_secretaria']?></td>
<td><?=$resp['coop_servidores']?></td>
<td><?=$resp['rel_colaborador']?></td>
<td><?=$resp['ajud_colega']?></td>
<td><?=$resp['conf_colega']?></td>
<td><?=$resp['rel_servidor']?></td>
<td><?=$resp['aux_integrante']?></td>
<td><?=$resp['comp_conhecimento']?></td>
<td><?=$resp['apto_diferenca']?></td>
<td><?=$resp['ap_potencial']?></td>
<td><?=$resp['avalia_desempenho']?></td>
<td><?=$resp['norma_servidor']?></td>
<td><?=$resp['exec_cargo']?></td>
<td><?=$resp['inv_treinamento']?></td>
<td><?=$resp['sug_treinamento']?></td>
<td><?=$resp['amb_temperatura']?></td>
<td><?=$resp['amb_espaco']?></td>
<td><?=$resp['amb_mobiliario']?></td>
<td><?=$resp['amb_higiene']?></td>
<td><?=$resp['amb_instalacao']?></td>
<td><?=$resp['cons_instituicao']?></td>
<td><?=$resp['ind_amigo']?></td>
<td><?=$resp['etica_servidor']?></td>
<td><?=$resp['exemp_gestor']?></td>
<td><?=$resp['ass_debatido']?></td>
<td><?=$resp['est_equipe']?></td>
<td><?=$resp['secre_objetivo']?></td>
<td><?=$resp['secre_imagem']?></td>
<td><?=$resp['secre_reclamacao']?></td>
<td><?=$resp['secre_comunica']?></td>
<td><?=$resp['secre_adequadamente']?></td>
<td><?=$resp['secre_bem']?></td>
<td><?=$resp['meta_secretaria']?></td>
<td><?=$resp['mud_secretaria']?></td>
<td><?=$resp['cont_servidor']?></td>
<td><?=$resp['tre_produtividade']?></td>
<td><?=$resp['pot_tecnico']?></td>
<td><?=$resp['pot_humano']?></td>
<td><?=$resp['falta_conhecimento']?></td>
<td><?=$resp['falta_seguranca']?></td>
<td><?=$resp['imp_profissional']?></td>
<td><?=$resp['falta_autonomia']?></td>
<td><?=$resp['amb_ruim']?></td>
<td><?=$resp['trab_realizo']?></td>
<td><?=$resp['rel_chefe']?></td>
<td><?=$resp['falta_treinamento']?></td>
<td><?=$resp['sobrecarga']?></td>
<td><?=$resp['instalacao']?></td>
<td><?=$resp['salario']?></td>
<td><?=$resp['outro_fator']?></td>
<td><?=$resp['qual_fator']?></td>
<td><?=$resp['salario_satisfacao']?></td>
<td><?=$resp['beneficio']?></td>
<td><?=$resp['estabilidade']?></td>
<td><?=$resp['relacao_chefe']?></td>
<td><?=$resp['trabalho']?></td>
<td><?=$resp['falta_opcao']?></td>
<td><?=$resp['amb_trabalho']?></td>
<td><?=$resp['pre_empresa']?></td>
<td><?=$resp['aut_trabalho']?></td>
<td><?=$resp['pos_treinamento']?></td>
<td><?=$resp['reconhecimento']?></td>
<td><?=$resp['prog_profissional']?></td>
<td><?=$resp['outro_satisfacao']?></td>
<td><?=$resp['qual_satisfacao']?></td>
<td><?=$resp['sug_instituicao']?></td>	
	</tr>
	<?php
		endforeach
	?>	
</table>		
</div>		
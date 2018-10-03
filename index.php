<?php 
if (isset($_GET['user']) && !empty($_GET['user'])) {


require "inc/cabecalho.php";
require "inc/menu.php";
require "inc/config.php";
require "classes/pesquisa.class.php";
require "inc/config.intranet.php";
require "classes/user.class.php";


$pesquisa = new Pesquisa($pdo);
$cadastro = new User($pdo);


$user = base64_decode($_GET['user']);

$sql = $intra->prepare("SELECT user_login FROM wp_users WHERE user_login = :user");
$sql ->bindValue(":user", $user);
$sql ->execute();

$cad = $cadastro->verificaCadastro($user);

if (count($cad) > 0) {
  header("Location: cadastrado.php");
}

if (isset($_POST['sexo']) && !empty($_POST['sexo'])) {
	$sexo                  = $_POST['sexo']; 
    $secretaria            = $_POST['secretaria']; 
    $cargo                 = $_POST['cargo']; 
    $escolaridade          = $_POST['escolaridade']; 
    $motivo                = $_POST['motivo']; 
    $tempo                 = $_POST['tempo'];
    $idade                 = $_POST['idade'];
    $preocupacao           = $_POST['preocupacao'];
    $estado_fisico         = $_POST['estado_fisico']; 
    $estado_mental         = $_POST['estado_mental']; 
    $estado_emocional      = $_POST['estado_emocional']; 
    $moradia               = $_POST['moradia']; 
    $transporte            = $_POST['transporte']; 
    $padrao_vida           = $_POST['padrao_vida']; 
    $financeira            = $_POST['financeira']; 
    $patrimonio            = $_POST['patrimonio']; 
    $alimentacao           = $_POST['alimentacao']; 
    $educacao              = $_POST['educacao']; 
    $rel_conjuge           = $_POST['rel_conjuge']; 
    $rel_filho             = $_POST['rel_filho']; 
    $atencao               = $_POST['atencao']; 
    $nivel_social          = $_POST['nivel_social']; 
    $convivio_social       = $_POST['convivio_social']; 
    $nivel_cultural        = $_POST['nivel_cultural']; 
    $ultima_ferias         = $_POST['ultima_ferias']; 
    $proxima_ferias        = $_POST['proxima_ferias']; 
    $lib_trabalho          = $_POST['lib_trabalho']; 
    $proc_atividade        = $_POST['proc_atividade']; 
    $rot_trabalho          = $_POST['rot_trabalho']; 
    $dec_instituicao       = $_POST['dec_instituicao']; 
    $cumpre_funcao         = $_POST['cumpre_funcao']; 
    $suc_empresa           = $_POST['suc_empresa']; 
    $melhor_resultado      = $_POST['melhor_resultado']; 
    $comp_atividade        = $_POST['comp_atividade']; 
    $sat_cargo             = $_POST['sat_cargo']; 
    $real_profissional     = $_POST['real_profissional']; 
    $trab_objetivo         = $_POST['trab_objetivo']; 
    $contrib_vida          = $_POST['contrib_vida']; 
    $mot_familia           = $_POST['mot_familia']; 
    $trab_instituicao      = $_POST['trab_instituicao']; 
    $realizado_profissional = $_POST['realizado_profissional']; 
    $vol_trabalho          = $_POST['vol_trabalho']; 
    $qual_quantidade       = $_POST['qual_quantidade']; 
    $melhor_trabalho       = $_POST['melhor_trabalho']; 
    $des_trabalho          = $_POST['des_trabalho']; 
    $ped_ajuda             = $_POST['ped_ajuda']; 
    $direcao               = $_POST['direcao']; 
    $ouve_retorno          = $_POST['ouve_retorno']; 
    $critica               = $_POST['critica']; 
    $orientacao            = $_POST['orientacao']; 
    $meio_comunicacao      = $_POST['meio_comunicacao']; 
    $salario_cargo         = $_POST['salario_cargo']; 
    $remuneracao           = $_POST['remuneracao']; 
    $ben_oferecido         = $_POST['ben_oferecido'];
    $op_crescimento        = $_POST['op_crescimento']; 
    $apto_responsabilidade = $_POST['apto_responsabilidade']; 
    $outro_departamento    = $_POST['outro_departamento']; 
    $outro_qual            = $_POST['outro_qual']; 
    $treinamento           = $_POST['treinamento']; 
    $melhor_processo       = $_POST['melhor_processo']; 
    $coisa_nova            = $_POST['coisa_nova']; 
    $perp_carreira         = $_POST['perp_carreira']; 
    $gestor_respeita       = $_POST['gestor_respeita']; 
    $resp_gestor           = $_POST['resp_gestor']; 
    $apoio_gestor          = $_POST['apoio_gestor']; 
    $resolve_gestor        = $_POST['resolve_gestor']; 
    $desem_gestor          = $_POST['desem_gestor']; 
    $sug_gestor            = $_POST['sug_gestor']; 
    $sup_gestor            = $_POST['sup_gestor']; 
    $delega_tarefa         = $_POST['delega_tarefa']; 
    $sup_auxilia           = $_POST['sup_auxilia']; 
    $coop_secretaria       = $_POST['coop_secretaria']; 
    $coop_servidores       = $_POST['coop_servidores']; 
    $rel_colaborador       = $_POST['rel_colaborador']; 
    $ajud_colega           = $_POST['ajud_colega']; 
    $conf_colega           = $_POST['conf_colega']; 
    $rel_servidor          = $_POST['rel_servidor']; 
    $aux_integrante        = $_POST['aux_integrante']; 
    $comp_conhecimento     = $_POST['comp_conhecimento']; 
    $apto_diferenca        = $_POST['apto_diferenca']; 
    $ap_potencial          = $_POST['ap_potencial']; 
    $avalia_desempenho     = $_POST['avalia_desempenho']; 
    $norma_servidor        = $_POST['norma_servidor']; 
    $exec_cargo            = $_POST['exec_cargo']; 
    $inv_treinamento       = $_POST['inv_treinamento']; 
    $sug_treinamento       = $_POST['sug_treinamento']; 
    $amb_temperatura       = $_POST['amb_temperatura']; 
    $amb_espaco            = $_POST['amb_espaco']; 
    $amb_mobiliario        = $_POST['amb_mobiliario']; 
    $amb_higiene           = $_POST['amb_higiene']; 
    $amb_instalacao        = $_POST['amb_instalacao']; 
    $cons_instituicao      = $_POST['cons_instituicao']; 
    $ind_amigo             = $_POST['ind_amigo']; 
    $etica_servidor        = $_POST['etica_servidor']; 
    $exemp_gestor          = $_POST['exemp_gestor']; 
    $ass_debatido          = $_POST['ass_debatido']; 
    $est_equipe            = $_POST['est_equipe']; 
    $secre_objetivo        = $_POST['secre_objetivo']; 
    $secre_imagem        = $_POST['secre_imagem']; 
    $secre_reclamacao      = $_POST['secre_reclamacao']; 
    $secre_comunica        = $_POST['secre_comunica']; 
    $secre_adequadamente   = $_POST['secre_adequadamente']; 
    $secre_bem             = $_POST['secre_bem']; 
    $meta_secretaria       = $_POST['meta_secretaria']; 
    $mud_secretaria        = $_POST['mud_secretaria']; 
    $cont_servidor         = $_POST['cont_servidor']; 
    $tre_produtividade     = $_POST['tre_produtividade']; 
    $pot_tecnico           = $_POST['pot_tecnico']; 
    $pot_humano            = $_POST['pot_humano']; 
    $falta_conhecimento    = $_POST['falta_conhecimento']; 
    $falta_seguranca       = $_POST['falta_seguranca']; 
    $imp_profissional      = $_POST['imp_profissional']; 
    $falta_autonomia       = $_POST['falta_autonomia']; 
    $amb_ruim              = $_POST['amb_ruim']; 
    $trab_realizo          = $_POST['trab_realizo']; 
    $rel_chefe             = $_POST['rel_chefe']; 
    $falta_treinamento     = $_POST['falta_treinamento']; 
    $sobrecarga            = $_POST['sobrecarga']; 
    $instalacao            = $_POST['instalacao']; 
    $salario               = $_POST['salario']; 
    $outro_fator           = $_POST['outro_fator']; 
    $qual_fator            = $_POST['qual_fator']; 
    $salario_satisfacao    = $_POST['salario_satisfacao'];
    $beneficio             = $_POST['beneficio']; 
    $estabilidade          = $_POST['estabilidade']; 
    $relacao_chefe         = $_POST['relacao_chefe']; 
    $trabalho              = $_POST['trabalho']; 
    $falta_opcao           = $_POST['falta_opcao']; 
    $amb_trabalho          = $_POST['amb_trabalho']; 
    $pre_empresa           = $_POST['pre_empresa']; 
    $aut_trabalho          = $_POST['aut_trabalho']; 
    $pos_treinamento       = $_POST['pos_treinamento']; 
    $reconhecimento        = $_POST['reconhecimento']; 
    $prog_profissional     = $_POST['prog_profissional']; 
    $outro_satisfacao      = $_POST['outro_satisfacao'];
    $qual_satisfacao       = $_POST['qual_satisfacao']; 
    $sug_instituicao       = $_POST['sug_instituicao'];
    $pesquisa->inserirResposta($sexo, $secretaria, $cargo, $escolaridade, $motivo, $tempo, $idade, $preocupacao,$estado_fisico,$estado_mental,$estado_emocional,$moradia,$transporte,$padrao_vida,$financeira,$patrimonio,$alimentacao,$educacao,$rel_conjuge,$rel_filho,$atencao,$nivel_social,$convivio_social,$nivel_cultural,$ultima_ferias,$proxima_ferias,$lib_trabalho,$proc_atividade,$rot_trabalho,$dec_instituicao,$cumpre_funcao,$suc_empresa,$melhor_resultado,$comp_atividade,$sat_cargo,$real_profissional,$trab_objetivo,$contrib_vida,$mot_familia,$trab_instituicao,$realizado_profissional,$vol_trabalho,$qual_quantidade,$melhor_trabalho,$des_trabalho,$ped_ajuda,$direcao,$ouve_retorno,$critica,$orientacao,$meio_comunicacao,$salario_cargo,$remuneracao, $ben_oferecido, $op_crescimento,$apto_responsabilidade,$outro_departamento,$outro_qual,$treinamento,$melhor_processo,$coisa_nova,$perp_carreira,$gestor_respeita,$resp_gestor,$apoio_gestor,$resolve_gestor,$desem_gestor,$sug_gestor,$sup_gestor,$delega_tarefa,$sup_auxilia,$coop_secretaria,$coop_servidores,$rel_colaborador,$ajud_colega,$conf_colega,$rel_servidor,$aux_integrante,$comp_conhecimento,$apto_diferenca,$ap_potencial,$avalia_desempenho,$norma_servidor,$exec_cargo,$inv_treinamento,$sug_treinamento,$amb_temperatura,$amb_espaco,$amb_mobiliario,$amb_higiene,$amb_instalacao,$cons_instituicao,$ind_amigo,$etica_servidor,$exemp_gestor,$ass_debatido,$est_equipe,$secre_objetivo,$secre_imagem,$secre_reclamacao,$secre_comunica,$secre_adequadamente,$secre_bem,$meta_secretaria,$mud_secretaria,$cont_servidor,$tre_produtividade,$pot_tecnico,$pot_humano,$falta_conhecimento,$falta_seguranca,$imp_profissional,$falta_autonomia,$amb_ruim,$trab_realizo,$rel_chefe,$falta_treinamento,$sobrecarga,$instalacao,$salario,$outro_fator,$qual_fator,$salario_satisfacao,
$beneficio,$estabilidade,$relacao_chefe,$trabalho,$falta_opcao,$amb_trabalho,$pre_empresa,$aut_trabalho,$pos_treinamento,$reconhecimento,$prog_profissional,$outro_satisfacao, $qual_satisfacao, $sug_instituicao);

    $cadastro->inserirCadastro($user);
    header("Location: cadastrado.php");
}

if ($sql->rowCount() > 0) {
    $sql = $sql ->fetchAll();
    include "formulario.php";
}else{

    ?>
<div class="jumbotron">
  <h4>Pesquisa de Clima Organizacional - Prefeitura Municipal de Teófilo Otoni</h4>
  <hr class="my-4">
  <label>Informações não conferem!</label>
</div>
    <?php
}

require "inc/rodape.php";

}else{
    header("Location: cadastrado.php");
}
?>		
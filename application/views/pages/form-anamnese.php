	<main class="main_conteudo">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Nova Anamnese</h1>
		</div>	
		<div class="col-md-12">
			<form action="<?= base_url() ?>anamnese/store" method="post">
				<div style="display: flex; flex-direction: row; flex-wrap: nowrap;">
					<div style="display: flex;width: 32%;flex-direction: column; margin-right: 2%;">
						<div style="padding: 0 1%">
							<div class="form-group" style="display: none;">
								<label class="lb_sty" for="cli_id">ID</label>
								<input class="ipt_sty" type="text" class="form-control" name="cli_id" id="cli_id" required value="<?= isset($cliente) ? $cliente['cli_id'] : ""?>">
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group" style="display: none;">
								<label class="lb_sty" for="nome">Nome</label>
								<input class="ipt_sty" type="text" class="form-control" name="nome" id="nome" required value="<?= isset($cliente) ? $cliente['nome'] : ""?>">
							</div>
						</div>
	
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="alergia">Alergia a alguma substância?</label>
								<input class="ipt_sty" type="radio" id="sim" name="alergia" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="alergia" value="nao">Não
							</div>
						</div>
						
						
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="sensibilidade">Tem sensibilidade ao Sol?</label>
								<input class="ipt_sty" type="radio" id="sim" name="sensibilidade" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="sensibilidade" value="nao">Não
							</div>
						</div>
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="tratamento_acido">Fez ou está fazendo tratamentos estéticos com ácidos ou pilling?</label>
								<input class="ipt_sty" type="radio" id="sim" name="tratamento_acido" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="tratamento_acido" value="nao">Não
							</div>
						</div>
						
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="medicamento_uso">Faz uso de algum medicamento?</label>
								<input class="ipt_sty" type="radio" id="sim" name="medicamento_uso" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="medicamento_uso" value="nao">Não
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="pro_cardiaco">Problemas cardícacos?</label>
								<input class="ipt_sty" type="radio" id="sim" name="pro_cardiaco" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="pro_cardiaco" value="nao">Não
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="pro_coluna">Problemas de coluna?</label>
								<input class="ipt_sty" type="radio" id="sim" name="pro_coluna" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="pro_coluna" value="nao">Não
							</div>
						</div>

					</div>
					<div style="display: flex;width: 32%;flex-direction: column; margin-right: 2%;">

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="dor_cabeca_enx">Enxaquecas/Dores de cabeça?</label>
								<input class="ipt_sty" type="radio" id="sim" name="dor_cabeca_enx" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="dor_cabeca_enx" value="nao">Não
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="grav_pos_parto">Esta Grávida, pós-parto ou cirúrgico?</label>
								<input class="ipt_sty" type="radio" id="sim" name="grav_pos_parto" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="grav_pos_parto" value="nao">Não
							</div>
						</div>
					
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="menstuacao">Está menstruada?</label>
								<input class="ipt_sty" type="radio" id="sim" name="menstuacao" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="menstuacao" value="nao">Não
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="desmaio_epilepsia">Sofre desmaios, epílepsia?</label>
								<input class="ipt_sty" type="radio" id="sim" name="desmaio_epilepsia" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="desmaio_epilepsia" value="nao">Não
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="diabete_labirintite">Sofre diabetes, labirintite?</label>
								<input class="ipt_sty" type="radio" id="sim" name="diabete_labirintite" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="diabete_labirintite" value="nao">Não
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="fuma">Fuma?</label>
								<input class="ipt_sty" type="radio" id="sim" name="fuma" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="fuma" value="nao">Não
							</div>
						</div>
					
					</div>
					<div style="display: flex;width: 32%;flex-direction: column;">

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="asma_lupulos_rim">Tem asma, lúpulos ou problema nos rins?</label>
								<input class="ipt_sty" type="radio" id="sim" name="asma_lupulos_rim" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="asma_lupulos_rim" value="nao">Não
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="alcool">Fez uso de bebida alcóolica?</label>
								<input class="ipt_sty" type="radio" id="sim" name="alcool" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="alcool" value="nao">Não
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="agua">Ingestão de água</label>
								<input class="ipt_sty" type="radio" id="abundante" name="agua" value="abundante">Abundante
								<input class="ipt_sty" type="radio" id="moderada" name="agua" value="moderada">Moderada
								<input class="ipt_sty" type="radio" id="bebe_pouco" name="agua" value="bebe_pouco">Bebe Pouco
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="autoriza_foto">Autorizo a divulgação de minhas fotos sem mostrar o rosto, como forma de divulgar o trabalho da profissional?</label>
								<input class="ipt_sty" type="radio" id="sim" name="autoriza_foto" value="sim">Sim
								<input class="ipt_sty" type="radio" id="nao" name="autoriza_foto" value="nao">Não
							</div>
						</div>
					</div>
				</div>		
				<div style="padding: 0 1%; margin-top: 2%;">
					<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
					<a href="<?= base_url() ?>anamnese" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancelar</a>
				</div>
			</form>
		</div>
    </main>
  </div>
</div>
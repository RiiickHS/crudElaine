    <main class="main_conteudo">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Anamnese de <?= $anamnese['nome'] ?></h1>
		</div>	
		<div class="col-md-12">
			<form>
				<div style="display: flex; flex-direction: row; flex-wrap: nowrap;">
					<div style="display: flex;width: 32%;flex-direction: column; margin-right: 2%">
						<div style="padding: 0 1%">
							<div class="form-group" style="display: none;">
								<label class="lb_sty" for="cli_id">ID</label>
								<input type="text" class="form-control" name="cli_id" id="cli_id" required value="<?= isset($anamnese) ? $anamnese['cli_id'] : ""?>">
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group" style="display: none;">
								<label class="lb_sty" for="nome">Nome</label>
								<input type="text" value="<?= $anamnese['alergia'] ?>" readonly>
							</div>
						</div>
	
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="alergia">Alergia a alguma substância?</label>
								<input type="text" value="<?= $anamnese['alergia'] ?>" readonly>
							</div>
						</div>
						
						
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="sensibilidade">Tem sensibilidade ao Sol?</label>
								<input type="text" value="<?= $anamnese['sensibilidade'] ?>" readonly>
							</div>
						</div>
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="tratamento_acido">Fez ou está fazendo tratamentos estéticos com ácidos ou pilling?</label>
								<input type="text" value="<?= $anamnese['tratamento_acido'] ?>" readonly>
							</div>
						</div>
						
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="medicamento_uso">Faz uso de algum medicamento?</label>
								<input type="text" value="<?= $anamnese['medicamento_uso'] ?>" readonly>
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="pro_cardiaco">Problemas cardícacos?</label>
								<input type="text" value="<?= $anamnese['pro_cardiaco'] ?>" readonly>
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="pro_coluna">Problemas de coluna?</label>
								<input type="text" value="<?= $anamnese['pro_coluna'] ?>" readonly>
							</div>
						</div>
                        
                    </div>
                    <div style="display: flex;width: 32%;flex-direction: column; margin-right: 2%;">
                        
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="dor_cabeca_enx">Enxaquecas/Dores de cabeça?</label>
								<input type="text" value="<?= $anamnese['dor_cabeca_enx'] ?>" readonly>
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="grav_pos_parto">Esta Grávida, pós-parto ou cirúrgico?</label>
								<input type="text" value="<?= $anamnese['grav_pos_parto'] ?>" readonly>
							</div>
						</div>
					
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="menstuacao">Está menstruada?</label>
								<input type="text" value="<?= $anamnese['menstuacao'] ?>" readonly>
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="desmaio_epilepsia">Sofre desmaios, epílepsia?</label>
								<input type="text" value="<?= $anamnese['desmaio_epilepsia'] ?>" readonly>
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="diabete_labirintite">Sofre diabetes, labirintite?</label>
								<input type="text" value="<?= $anamnese['diabete_labirintite'] ?>" readonly>                    
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="fuma">Fuma?</label>
								<input type="text" value="<?= $anamnese['fuma'] ?>" readonly>
							</div>
						</div>
                    </div>
                    <div style="display: flex;width: 32%;flex-direction: column;">
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="asma_lupulos_rim">Tem asma, lúpulos ou problema nos rins?</label>
								<input type="text" value="<?= $anamnese['asma_lupulos_rim'] ?>" readonly>
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="alcool">Fez uso de bebida alcóolica?</label>
								<input type="text" value="<?= $anamnese['alcool'] ?>" readonly>
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="agua">Ingestão de água</label>
								<input type="text" value="<?= $anamnese['agua'] ?>" readonly>
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="autoriza_foto">Autorizo a divulgação de minhas fotos sem mostrar o rosto, como forma de divulgar o trabalho da profissional?</label>
								<input type="text" value="<?= $anamnese['autoriza_foto'] ?>" readonly>
							</div>
						</div>
					</div>
				</div>		
				<div style="padding: 0 1%; margin-top: 2%;">
					<a href="<?= base_url() ?>anamnese" class="btn btn-danger btn-xs"><i class='bx bx-arrow-back' ></i> Voltar</a>
				</div>
			</form>
		</div>
    </main>
  </div>
</div>
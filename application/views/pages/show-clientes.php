    <main class="main_conteudo">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Registros de <?= $cliente['nome'] ?></h1>
		</div>	
		<div class="col-md-12">
			<form>
				<div style="display: flex; flex-direction: row; flex-wrap: nowrap;">
					<div style="display: flex;width: 48%;flex-direction: column; margin-right: 1%">
						<div style="padding: 0 1%">
							<div class="form-group" style="display: none;">
								<label class="lb_sty" for="cli_id">ID</label>
								<input style="width:50%;" type="text" class="form-control" name="cli_id" id="cli_id" required value="<?= isset($cliente) ? $cliente['cli_id'] : ""?>">
							</div>
						</div>
	
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="nome">Nome</label>
								<input style="width:50%;" type="text" value="<?= $cliente['nome'] ?>" readonly>
							</div>
						</div>
						
						
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="cpf">CPF</label>
								<input style="width:50%;" type="text" value="<?= $cliente['cpf'] ?>" readonly>
							</div>
						</div>
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="rg">RG</label>
								<input style="width:50%;" type="text" value="<?= $cliente['rg'] ?>" readonly>
							</div>
						</div>
						
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="logradouro">logradouro</label>
								<input style="width:50%;" type="text" value="<?= $cliente['logradouro'] ?>" readonly>
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="bairro">Bairro</label>
								<input style="width:50%;" type="text" value="<?= $cliente['bairro'] ?>" readonly>
							</div>
						</div>

                        
                    </div>
                    <div style="display: flex;width: 48%;flex-direction: column; margin-leftt: 1%;">
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="cidade">Cidade</label>
								<input style="width:50%;" type="text" value="<?= $cliente['cidade'] ?>" readonly>
							</div>
						</div>
                        
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="telefone">Telefone</label>
								<input style="width:50%;" type="text" value="<?= $cliente['telefone'] ?>" readonly>
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="celular">Celular</label>
								<input style="width:50%;" type="text" value="<?= $cliente['celular'] ?>" readonly>
							</div>
						</div>
					
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="data_nascimento">Data Nascimento</label>
								<input style="width:50%;" type="text" value="<?= $cliente['data_nascimento'] ?>" readonly>
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="telefone_emergencia">Telefone Emergência</label>
								<input style="width:50%;" type="text" value="<?= $cliente['telefone_emergencia'] ?>" readonly>
							</div>
						</div>
					</div>
				</div>		
				<div style="padding: 0 1%; margin-top: 2%;">
					<a href="<?= base_url() ?>clientes" class="btn btn-danger btn-xs"><i class='bx bx-arrow-back' ></i> Voltar</a>
				</div>
			</form>
		</div>
    </main>
  </div>
</div>
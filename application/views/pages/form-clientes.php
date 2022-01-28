<main class="main_conteudo">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>

			<div class="col-md-12">
				<?php if(isset($cliente)) : ?>
					<form action="<?= base_url() ?>clientes/update/<?= $cliente['cli_id']?>" method="post">
				<?php else : ?>
					<form action="<?= base_url() ?>clientes/store" method="post">
				<?php endif; ?>
				<div style="display: flex; flex-direction: row; flex-wrap: nowrap;">
					<div style="display: flex;width: 32%;flex-direction: column; margin-right: 2%">
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="nome">Nome</label>
								<input type="text" class="form-control" name="nome" id="nome" required value="<?= isset($cliente) ? $cliente['nome'] : ""?>">
							</div>
						</div>


						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="cpf">CPF</label>
								<input type="text" class="form-control" name="cpf" id="cpf" required value="<?= isset($cliente) ? $cliente['cpf'] : ""?>">
							</div>
						</div>
						
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="rg">RG</label>
								<input type="text" class="form-control" name="rg" id="rg" required value="<?= isset($cliente) ? $cliente['rg'] : ""?>">
							</div>
						</div>
						
						
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="logradouro">Logradouro</label>
								<input type="text" class="form-control" name="logradouro" id="logradouro" required value="<?= isset($cliente) ? $cliente['logradouro'] : ""?>"> 
							</div>
						</div>
					</div>
					<div style="display: flex;width: 32%;flex-direction: column; margin-right: 2%">
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="bairro">Bairro</label>
								<input type="text" class="form-control" name="bairro" id="bairro" required value="<?= isset($cliente) ? $cliente['bairro'] : ""?>"> 
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="cidade">Cidade</label>
								<input type="text" class="form-control" name="cidade" id="cidade" required value="<?= isset($cliente) ? $cliente['cidade'] : ""?>"> 
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="estado">Estado</label>
								<input type="text" class="form-control" name="estado" id="estado" required value="<?= isset($cliente) ? $cliente['estado'] : ""?>"> 
							</div>
						</div>
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="telefone">Telefone</label>
								<input type="text" class="form-control" name="telefone" id="telefone" required value="<?= isset($cliente) ? $cliente['telefone'] : ""?>"> 
							</div>
						</div>
					</div>
					<div style="display: flex;width: 32%;flex-direction: column;">
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="celular">Celular</label>
								<input type="text" class="form-control" name="celular" id="celular" required value="<?= isset($cliente) ? $cliente['celular'] : ""?>"> 
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="data_nascimento">Data Nascimento</label>
								<input type="date" class="form-control" name="data_nascimento" id="data_nascimento" required value="<?= isset($cliente) ? $cliente['data_nascimento'] : ""?>"> 
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="telefone_emergencia">Telefone Emergência</label>
								<input type="text" class="form-control" name="telefone_emergencia" id="telefone_emergencia" required value="<?= isset($cliente) ? $cliente['telefone_emergencia'] : ""?>"> 
							</div>
						</div>
					</div>
				</div>		
				<div style="padding: 0 1%">
						<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
						<a href="<?= base_url() ?>clientes" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancelar</a>
					</div>
				</div>
			</form>
			</div>

    </main>
  </div>
</div>

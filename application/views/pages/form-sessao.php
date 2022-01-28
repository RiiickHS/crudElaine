<main class="main_conteudo">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Nova Sessão</h1>
      </div>

			<div class="col-md-12">
            <form action="<?= base_url() ?>sessao/novasessao/<?= $cliente['cli_id']?>" method="post">
				<div style="display: flex; flex-direction: row; flex-wrap: nowrap;">
					<div style="display: flex;width: 33.3%;flex-direction: column;">
					<div style="padding: 0 1%">
							<div class="form-group" style="display: none;">
								<label class="lb_sty" for="cli_id">ID</label>
								<input type="text" class="form-control" name="cli_id" id="cli_id" required value="<?= isset($cliente) ? $cliente['cli_id'] : ""?>">
							</div>
						</div>

						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="nome">Nome</label>
								<input type="text" class="form-control" name="nome" id="nome" required value="<?= isset($cliente) ? $cliente['nome'] : ""?>">
							</div>
						</div>
						
						<div style="padding: 0 1%">
							<div class="form-group" style="display: flex; flex-direction: column;">
								<label class="lb_sty" for="tipo_sessao">Tipo Sessão</label>
								<select name="tipo_sessao" id="tipo_sessao" style="height: 40px; font-weight: 500; text-transform: uppercase;">
									<option value="bronze_tradicional">Bronze Tradicional</option>
									<option value="bronze_power">Bronze Power</option>
									<option value="bronze_neon">Bronze Neon</option>
									<option value="bronze_golden">Bronze Golden</option>
									<option value="bronze_click_10">Bronze Click 10</option>
									<option value="bronze_click_zero">Bronze Click Zero</option>
									<option value="bronze_potencia_maxima">Bronze Potência Máxima</option>
									<option value="bronze_gelado">Bronze Gelado</option>
									<option value="bronze_duplo">Bronze Duplo</option>
									<option value="banho_de_lua">Banho de Lua</option>
								</select>
							</div>
						</div>
						
						
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="valor_sessao">Valor</label>
								<input type="number" class="form-control" name="valor_sessao" id="valor_sessao" required value=""> 
							</div>
						</div>
						<div style="padding: 0 1%">
							<div class="form-group">
								<label class="lb_sty" for="data_sessao">Data Sessão</label>
								<input type="date" class="form-control" name="data_sessao" id="data_sessao" required value=""> 
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
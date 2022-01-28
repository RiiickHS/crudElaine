<main class="main_conteudo">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Clientes</h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url() ?>clientes/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Cliente</a>
		</div>
	</div>

	<div class="table-responsive text-nowrap">
		<table id="table_cli" class="table table-bordered" style="width: 100%; border-radius: 5px;">	
			<thead>
				<tr>
					<th>Nome</th>
					<th>CPF</th>
                    <th>Celular</th>
					<th>Telefone Emergência</th>
					<th>Ações</th>
				</tr>
			</thead>
		</table>
	</div>
</main>
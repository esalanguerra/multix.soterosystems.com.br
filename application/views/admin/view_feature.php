<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Lista de Características</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/feature/add" class="btn btn-primary btn-sm">Adicionar Nova</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">

			<?php
	        if($this->session->flashdata('error')) {
	            ?>
				<div class="callout callout-danger">
					<p><?php echo $this->session->flashdata('error'); ?></p>
				</div>
	            <?php
	        }
	        if($this->session->flashdata('success')) {
	            ?>
				<div class="callout callout-success">
					<p><?php echo $this->session->flashdata('success'); ?></p>
				</div>
	            <?php
	        }
	        ?>
	        
			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>N°</th>
								<th>Nome</th>
								<th>Conteúdo</th>
								<th>Ícone</th>
								<th width="140">Ações</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;							
							foreach ($feature as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['content']; ?></td>
									<td><i class="<?php echo $row['icon']; ?>" style="font-size:30px;"></i></td>
									<td>
										<a href="<?php echo base_url(); ?>admin/feature/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Editar</a>
										<a href="<?php echo base_url(); ?>admin/feature/delete/<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Deletar</a> 
									</td>
								</tr>
								<?php
							}
							?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
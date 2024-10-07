<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Adicionar - Tabela de Preço</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/pricing_table" class="btn btn-primary btn-sm">Visualizar Todos</a>
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

			<?php echo form_open(base_url().'admin/pricing_table/add',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">		
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Ícone *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="icon">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Título *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="title">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Preço *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="price">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Subtitulo *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="subtitle">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Texto *</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="text"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Botão Texto *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="button_text">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Botão URL *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="button_url">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Enviar</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</section>
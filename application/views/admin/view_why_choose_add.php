<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Adicionar - Porque nos Escolher?!</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/why_choose" class="btn btn-primary btn-sm">Visualizar Todos</a>
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

			<?php echo form_open_multipart(base_url().'admin/why_choose/add',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Nome *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Conteúdo *</label>
							<div class="col-sm-8">
								<textarea class="form-control" name="content" style="height:120px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Ícone *</label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="icon" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Foto *</label>
							<div class="col-sm-9" style="padding-top:5px">
								<input type="file" name="photo">(jpg, jpeg, gif e png)
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
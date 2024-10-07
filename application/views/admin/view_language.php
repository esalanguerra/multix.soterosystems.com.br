<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Editar Dados de Linguagem</h1>
	</div>
</section>

<?php
$i=0;
$arr1 = array();
$arr2 = array();
$arr3 = array();				
foreach ($language as $row) {
	$arr1[$i] = $row['id'];
	$arr2[$i] = $row['name'];
	$arr3[$i] = $row['value'];
	$i++;
}
?>

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

	        <?php echo form_open(base_url().'admin/language',array('class' => 'form-horizontal')); ?>

	        <div class="box box-info">

	            <div class="box-body">

	            	<p style="color:red;">
						Nota: Nesta seção, você poderá alterar o texto no seu idioma que não é possível alterar de outras seções.
					</p>

					<?php for($i=0;$i<count($arr1);$i++): ?>
	                <div class="form-group">
	                    <label for="" class="col-sm-4 control-label"><?php echo $arr2[$i]; ?></label>
	                    <div class="col-sm-7">
	                        <input type="text" class="form-control" name="new_arr[]" value="<?php echo $arr3[$i]; ?>">
	                    </div>
	                </div>
	                <input type="hidden" name="new_arr1[]" value="<?php echo $arr1[$i]; ?>">
	            	<?php endfor; ?>


	                <div class="form-group">
	                	<label for="" class="col-sm-4 control-label"></label>
	                    <div class="col-sm-7">
	                      <button type="submit" class="btn btn-success pull-left" name="form1">Atualizar</button>
	                    </div>
	                </div>

	            </div>

	        </div>

	        <?php echo form_close(); ?>

	    </div>
  	</div>

</section>
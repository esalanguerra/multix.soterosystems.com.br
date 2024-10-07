<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
  <h1>Dashboard</h1>
</section>

<section class="content">

  <div class="row">

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Total de Novas Categorias</span>
          <span class="info-box-number"><?php echo $total_category; ?></span>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Total Notícias</span>
          <span class="info-box-number"><?php echo $total_news; ?></span>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total de Eventos</span>
          <span class="info-box-number"><?php echo $total_event; ?></span>
        </div>
      </div>
    </div>
    
    
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total de Membros no Time</span>
          <span class="info-box-number"><?php echo $total_team_member; ?></span>
        </div>
      </div>
    </div>

   <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total de Clientes</span>
          <span class="info-box-number"><?php echo $total_client; ?></span>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total de Serviços</span>
          <span class="info-box-number"><?php echo $total_service; ?></span>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total de Depoimentos</span>
          <span class="info-box-number"><?php echo $total_testimonial; ?></span>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total de Fotos (Galeria)</span>
          <span class="info-box-number"><?php echo $total_photo; ?></span>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total de Preços na Tabela</span>
          <span class="info-box-number"><?php echo $total_pricing_table; ?></span>
        </div>
      </div>
    </div>

    

  </div>


</section>
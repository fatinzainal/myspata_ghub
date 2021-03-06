     <div class="widget-body" style="padding-bottom:10px">
                  <ul class="breadcrumb-beauty">
                    <li>
                      <a href="<?php echo site_url('main')?>">
                        Fungsi
                      </a> 
                    </li>
                    <li>
                      <a href="#">
                        Perangcangan
                      </a>  
                    </li>
                    <li>
                      <a href="#">
                        Pelan
                      </a> 
                    </li>
                    <li>
                      <a href="#">
                        PSPA(O)
                      </a>   
                    </li>
                  </ul>
    </div>
    <!--END breadcrumb-->



<div class="row-fluid">
            <div class="span12">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe022;"></span>Senarai Notifikasi PSPA(O) Akhir mengikut Peranan Pengguna
                  </div>
                </div>
                
              
                
              <div class="widget-body">
              	<ul>
                	<li><a href="<?php echo site_url('pspao/arahan_sedia_pspao_akhir') ?>">1. Arahan Sedia PSPA(O) Akhir (PTF) </a></li>
                	<li><a href="<?php echo site_url('pspao/senarai_template_pspao_awal') ?>">2. Senarai Template PSPA(O) Awal (PPO) </a></li>
                	<li><a href="<?php echo site_url('pspao/senarai_pspao_akhir_pp') ?>">3. Senarai PSPA(O) Akhir (PP) </a></li>
                	<li><a href="<?php echo site_url('pspao/senarai_pspao_akhir_ptf') ?>">4. Senarai PSPA(O) Akhir (PTF) </a></li>
                	<li><a href="<?php echo site_url('pspao/senarai_pspao_akhir_ketuajab') ?>">5. Senarai PSPA(O) Akhir (Ketua Jabatan) </a></li>
                </ul>
                          
              </div>
            </div>

          </div>
          
         

        </div>

                    <?php 
                    $attributes = array(
                        'class' => 'form-horizontal no-margin', 
                         'name' => 'default',
                           'id' => 'default',
                        );
                    echo form_open('pspao/default',$attributes); ?>
                    
                    
                 <!--start div panel PSPAO -->
                  <div class="row-fluid">
                    <div class="span12">
                    <div class="widget">
                      <div class="widget-header">
                      <div class="title">
                      <span class="fs1" aria-hidden="true" data-icon="&#xe022;"></span> Pelan Strategi Pengurusan Aset (PSPAO) Akhir
                      </div>
                      </div> 
                      <form class="form-horizontal no-margin">
                      <div class="widget-body">
                        <div class="control-group">
                        <label class="control-label">Tahun Awal</label>
                         <div class="controls controls-row">
                         <?php echo form_error('tahun1'); ?> 
                         <?php echo form_dropdown('tahun1', $year_list, 'id="tempoh_mula"');?>
                         </div>
                        </div>
                        <div class="control-group">
                        <label class="control-label">Tahun Akhir</label>
                         <div class="controls controls-row">
                         <?php echo form_error('tahun2'); ?> 
                         <?php echo form_dropdown('tahun2', $year_list, 'id="tempoh_akhir"');?>
                         </div>
                        </div>

                   
                        <div class="control-group">
                        <label class="control-label">Jabatan/Agensi</label>
                        <div class="controls">
                            <?php echo form_error('jabatan'); ?> 
                          <?php echo form_dropdown('jabatan', $jabatan, 'id="jabatan"');?>                    
                        </div>
                        </div>
                    
                    
                        <div class="control-group">
                          <label class="control-label">Status</label>
                        <div class="controls">
                          <?php echo form_error('status'); ?> 
                          <?php echo form_dropdown('status', $status, 'id="status_id"');?>
                        </div>
                        </div>
                    
                      <div class="control-group">
                        <label class="control-label">Kata Carian</label>
                      <div class="controls">
                          <?php echo form_error('katacarian'); ?> 
                         <?php
                          
                          $data = array(
                            'name'        => 'katacarian',
                            'id'          => 'katacarian',
                            'value'       => '',
                            'maxlength'   => '100',
                            'size'        => '50',
                            'class'       => 'input-large',
                            'placeholder' =>  '',
                          );

                          echo form_input($data);
                          
                          ?>
                      </div>
                      </div>
                 
                      <div class="control-group ">
                          <?php
        $seterusnya = array(
            'name'    => '',
            'id'      => '',
            'class'   => 'rounded pull-right ',
            'value'   => '',
            'content' => ' Carian',
            'type'    => 'submit',
            'data-icon' => '&#xe07f;'
        );

        echo form_button($seterusnya);
        
        ?>
                       
                      </div>
</div>
 <?php  echo form_close();?>
                    <!--end panel PSPAO -->
                    
                    
                    
                    </div></div></div>

              <!--start panel Senarai -->
                <div class="row-fluid">
                <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Senarai PSPA(O)
                  </div>
                  </div>
                <div class="widget-body">
                        <div class="widget-body">
                           
                      <ul class="icomoon-icons-container">
                      	<a href="<?php echo site_url('pspao/pspao_akhir_baru') ?>"><li>
                      	  <span class="fs1" aria-hidden="true" data-icon="&#xe102;"></span>
                      	</li></a>
                      </ul><label class="tambah">Tambah PSPA(O) Baru</label>                      

                      <div id="dt_example" class="example_alt_pagination">

                      <?php echo $this->table->generate($dataku); ?>
                       <div id="data-table_info" class="dataTables_info">Memaparkan <?php echo $this->uri->segment(3)+5; ?> dari <?php echo count($this->pspao_akhir_model->get_data_dummy()) ?> senarai
                       </div><?php echo $this->pagination->create_links(); ?>
 </div>
                  
                <!--end panel Senarai --> 
                 <div class="clearfix"></div>
                </div>
                </div>
                </div> 
                    
              <!--end widget-body -->



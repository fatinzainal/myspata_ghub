<!--breadcrumb-->
    <div class="widget-body">
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
                    <li>
                      <a href="#">
                        PNPA
                      </a>   
                    </li>
                  </ul>
    </div>
    <!--END breadcrumb-->
     <br />
      <div class="widget-body">
                  <ul class="nav nav-tabs no-margin myTabBeauty">
                     <li class=""><a href="#profile" data-original-title="">PSPA(O)</a></li>
                    <li class=""><a href="<?php echo site_url('ptra/senarai_ppd_ptra')?>" data-original-title="">PTRA</a></li>
                    <li class=""><a href="<?php echo site_url('popa/senarai_ppd_popa')?>">POPA</a></li>
                    <li class="active"><a href="<?php echo site_url('pnpa/senarai_ppd_pnpa')?>">PNPA</a></li>
                    <li class=""><a href="<?php echo site_url('ppun/senarai_ppun')?>">PPUN</a></li>
                    <li class=""><a href="<?php echo site_url('pla/senarai_ppd_pla')?>">PLA</a></li>
                  </ul>
    <!--breadcrumb-->
         <!--start div tab -->        
         <div class="tab-content" id="myTabContent">
         <div id="home" class="tab-pane fade active in">
         <p>
          <form class="form-horizontal no-margin">

           <!--start div panel skop --> 
           <div class="row-fluid">
				    <div class="span12">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Skop dan Aktiviti PNPA
                  </div>
                </div>
                <div class="widget-body">
                  <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                    <thead>
                      <tr>
                        <th width="3%" style="width:3%">Bil</th>
                        <th width="20%" class="hidden-phone" style="width:20%">Skop</th>
                        <th width="15%" class="hidden-phone" style="width:15%">Aktiviti</th>
                        <th width="15%" class="hidden-phone" style="width:15%">Butiran Aktiviti</th>
                        <th width="15%" class="hidden-phone" style="width:15%">Bajet Aktiviti (RM)</th>
                        <th width="10%" class="hidden-phone" style="width:10%">Status</th>
                        <th width="10%" class="hidden-phone" style="width:10%">Tindakan</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span class="name">1.</span></td>
                        <td class="hidden-phone">Penilaian Keadaan Fizikal Aset</td>
                        <td class="hidden-phone">Aktiviti 1</td>
                        <td class="hidden-phone">Butiran Aktiviti 1</td>
                        <td class="hidden-phone">50000.00</td>
                        <td class="hidden-phone"><span class="badge badge-success">Lengkap</span>
                        <td class="hidden-phone"><a href="<?php echo site_url('pnpa/skop_aktiviti2_pnpa_edit') ?>">
                                <ul class="icomoon-icons-container"><li class="rounded">
                      		<span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span> </li></ul></a></td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td class="hidden-phone">Penilaian Nilai Aset</td>
                        <td class="hidden-phone">Aktiviti 2</td>
                        <td class="hidden-phone">Butiran Aktiviti 2</td>
                        <td class="hidden-phone">150000.00</td>
                        <td class="hidden-phone"><span class="badge badge-inverse">Pembetulan</span></td>
                        <td class="hidden-phone"><a href="<?php echo site_url('pnpa/skop_aktiviti2_pnpa_edit') ?>">
                                <ul class="icomoon-icons-container"><li class="rounded">
                      		<span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span> </li></ul></a></td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td class="hidden-phone">Penilaian Prestasi aset</td>
                        <td class="hidden-phone">Aktiviti 3</td>
                        <td class="hidden-phone">Butiran Aktiviti 3</td>
                        <td class="hidden-phone">609000.00</td>
                        <td class="hidden-phone"><span class="badge badge-inverse">Pembetulan</span></td>
                        <td class="hidden-phone"><a href="<?php echo site_url('pnpa/skop_aktiviti2_pnpa_edit') ?>">
                                <ul class="icomoon-icons-container"><li class="rounded">
                      		<span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span> </li></ul></a></td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td class="hidden-phone">P.O.E</td>
                        <td class="hidden-phone">Aktiviti 4</td>
                        <td class="hidden-phone">Butiran Aktiviti 4</td>
                        <td class="hidden-phone">540000.00     </td>
                        <td class="hidden-phone"><span class="badge badge-success">Lengkap</span></td>
                        <td class="hidden-phone"><a href="<?php echo site_url('pnpa/skop_aktiviti2_pnpa_edit') ?>">
                                <ul class="icomoon-icons-container"><li class="rounded">
                      		<span class="fs1" aria-hidden="true" data-icon="&#xe005;"></span> </li></ul></a></td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <p></p>
                  <p>Memaparkan 4 dari 20 senarai</p>

                  <!--start div paging --> 
                  <div class="pagination no-margin" align="right">
                    <ul>
                      <li>
                        <a href="#" data-original-title="">
                          Pertama
                        </a>
                      </li>
                      <li >
                        <a href="#" data-original-title="">
                          Sebelum
                        </a>
                      </li>
                      <li class="active">
                        <a href="#" data-original-title="">
                          1
                        </a>
                      </li>
                      <li>
                        <a href="#" data-original-title="">
                          2
                        </a>
                      </li>
                      <li>
                        <a href="#" data-original-title="">
                          3
                        </a>
                      </li>
                      <li>
                        <a href="#" data-original-title="">
                          4
                        </a>
                      </li>
                     
                      <li class="hidden-phone">
                        <a href="#" data-original-title="">
                          Akhir
                        </a>
                      </li>
                    </ul>
                  </div><br> <!--end div paging--> 
                 <label>&nbsp;&nbsp;&nbsp; 
                   Jumlah Bajet Aktiviti (RM)
<input class="input-large" disabled placeholder="800008000080" /></label>
          <!--end panel skop --> 
          </div>
          </div>
          </div>
          </div>
          
          <!--start div button --> 
          <div align="right">
            		<a href="<?php echo site_url('pnpa/summary_ptf_pnpa_edit') ?>"><button class="btn btn-danger input-top-margin" type="button">
                        Batal
                  </button></a>
                     <a href="<?php echo site_url('pnpa/treeview_pnpa_edit') ?>"><button class="btn btn-primary input-top-margin" type="button">
                        Sebelum
                      </button></a>
                      <a href="<?php echo site_url('pnpa/summary_ptf_pnpa_edit') ?>"><button class="btn btn-warning2 input-top-margin" type="button">
                        Simpan
                      </button></a> </form>
        			</div><!--end div button--> 
         <!--end div tab -->
                </div>  
                </div>

              <!--end widget-body -->
                </div>

<?php

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
		
     function __construct()
	{
		parent::__construct();
		#load library dan helper yang dibutuhkan
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('ppun_model','',TRUE);
                $this->load->helper('function_helper');
                $this->load->model('pspao_model');
                $this->output->enable_profiler(TRUE); //display query statement
              
	}
    
    
	function index()
	{
        //$config['base_url'] = base_url() . 'DefaultPage/index';
		$data['main_content'] = 'main';
        $this->load->view('template/default', $data);
		//$this->load->view('default');
	}
	
    /*
    *   Author : Anuar
    *   Title  : PSPAO AWAL & PPUN
    */

     /*
	 
      START PSPAO AWAL
     */
     function arahan_sedia_pspao()
	{
	//author : Anuar
	//desc : arahan sedia pspao
        //date create: 08/07/2013
       
        
        $data['main_content'] = 'pspao/arahan_sedia_pspao';
        $this->load->view('template/default_pelan', $data);
	}
        
        function senarai_notifikasi_pspao()
	{
		//author : Anuar
		//desc : senarai notifikasi pspao
                //date create: 08/07/2013
            
                 $rules = array(
                            array(
                                  'field'   => 'tarikh_mula',
                                  'label'   => 'Tarikh Mula',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'tarikh_akhir',
                                  'label'   => 'Tarikh Akhir',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'katacarian',
                                  'label'   => 'Kata Carian',
                                  'rules'   => 'required'
                               )   
                           
                 );

            
                $this->form_validation->set_rules($rules);
               
                
                 if ($this->form_validation->run() == FALSE)
                {
                      $data['main_content'] = 'pspao/senarai_notifikasi_pspao';
                      $this->load->view('template/default_pelan', $data);
                }
                else
                {
                      // $data['main_content'] = 'pspao/arahan_sedia_pspao';
                       //$this->load->view('template/default_pelan', $data);
                      
                }
            
		
	}
        
        function pspao_baru()
	{
		//author : Anuar
		//desc : pspao baru  
                //date create: 08/07/2013
            
                
            
                $data['year_list'] =year_dropdown(); //get year list 
                
                $rules = array(
                            array(
                                  'field'   => 'tempoh_mula',
                                  'label'   => 'Tempoh Mula',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'tempoh_akhir',
                                  'label'   => 'Tempoh Akhir',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'pendahuluan',
                                  'label'   => 'Pendahuluan',
                                  'rules'   => 'required'
                               ),   
                            array(
                                  'field'   => 'visi',
                                  'label'   => 'Visi Pengurusan Aset Tak Alih',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'misi',
                                  'label'   => 'Misi Pengurusan Aset Tak Alih',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'objektif',
                                  'label'   => 'Objektif Pengurusan Aset Tak Alih',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'kementerian',
                                  'label'   => 'Kementerian',
                                  'rules'   => 'required'
                                 )
                    
                 );

                 $this->form_validation->set_rules($rules); //validate form
                 

                if ($this->form_validation->run() == FALSE)
                {
                       $data['main_content'] = 'pspao/pspao_baru';
                       $this->load->view('template/default_pelan', $data);
                }
                else
                {
                       //$data['main_content'] = 'pspao/arahan_sedia_pspao';
                       //$this->load->view('template/default_pelan', $data);
                      
                }
                
                
             
	}
        
       
       
        function ulasan_pp_lulus_pspao()
	{
		//author : Anuar
		//desc : pspao ulasan peng. pgawal lulus
                //date create: 08/07/2013
            
               
            
                $data['year_list'] =year_dropdown(); //get year list 
                
                 $rules = array(
                            array(
                                  'field'   => 'tempoh_mula',
                                  'label'   => 'Tempoh Mula',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'tempoh_akhir',
                                  'label'   => 'Tempoh Akhir',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'pendahuluan',
                                  'label'   => 'Pendahuluan',
                                  'rules'   => 'required'
                               ),   
                            array(
                                  'field'   => 'visi',
                                  'label'   => 'Visi Pengurusan Aset Tak Alih',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'misi',
                                  'label'   => 'Misi Pengurusan Aset Tak Alih',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'objektif',
                                  'label'   => 'Objektif Pengurusan Aset Tak Alih',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'kementerian',
                                  'label'   => 'Kementerian',
                                  'rules'   => 'required'
                                 )
                    
                 );

                 $this->form_validation->set_rules($rules); //validate form
                 
                  if ($this->form_validation->run() == FALSE)
                {
                         $data['main_content'] = 'pspao/ulasan_pp_lulus_pspao';
                           $this->load->view('template/default_pelan', $data);
	
                }
                else
                {
                       //$data['main_content'] = 'pspao/arahan_sedia_pspao';
                       //$this->load->view('template/default_pelan', $data);
                      
                }
                          
	     
        }
        
        
        function ulasan_pp_sah_pspao()
	{
		//author : Anuar
		//desc : pspao ulasan peng. pgawal sah
                //date create: 08/07/
             
               
           
                $data['year_list'] =year_dropdown(); //get year list 
                
                 $rules = array(
                            array(
                                  'field'   => 'tempoh_mula',
                                  'label'   => 'Tempoh Mula',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'tempoh_akhir',
                                  'label'   => 'Tempoh Akhir',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'pendahuluan',
                                  'label'   => 'Pendahuluan',
                                  'rules'   => 'required'
                               ),   
                            array(
                                  'field'   => 'visi',
                                  'label'   => 'Visi Pengurusan Aset Tak Alih',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'misi',
                                  'label'   => 'Misi Pengurusan Aset Tak Alih',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'objektif',
                                  'label'   => 'Objektif Pengurusan Aset Tak Alih',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'kementerian',
                                  'label'   => 'Kementerian',
                                  'rules'   => 'required'
                                 )
                    
                 );

                  $this->form_validation->set_rules($rules); //validate form
                
                  if ($this->form_validation->run() == FALSE)
                {
                         $data['main_content'] = 'pspao/ulasan_pp_sah_pspao';
                         $this->load->view('template/default_pelan', $data);
	
                }
                else
                {
                       //$data['main_content'] = 'pspao/arahan_sedia_pspao';
                       //$this->load->view('template/default_pelan', $data);
                      
                }
             
	        
	}
        
        
        function senarai_pp_pspao()
	{
		//author : Anuar
		//desc : senarai pspao peng. pgawal
                //date create: 08/07/2013
            
           
            
             $data['year_list'] =year_dropdown();  //get year list 
             
              $rules = array(
                            array(
                                  'field'   => 'tarikh_mula',
                                  'label'   => 'Tarikh Mula',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'tarikh_akhir',
                                  'label'   => 'Tarikh Akhir',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'kementerian',
                                  'label'   => 'Kementerian',
                                  'rules'   => 'required'
                               ), 
                            array(
                                  'field'   => 'status',
                                  'label'   => 'Status',
                                  'rules'   => 'required'
                               ) 
                           
                 );

            
                $this->form_validation->set_rules($rules);
                
                  if ($this->form_validation->run() == FALSE)
                {
                       
                    $data['main_content'] = 'pspao/senarai_pp_pspao';
                    $this->load->view('template/default_pelan', $data);

                }
                else
                {
                       //$data['main_content'] = 'pspao/arahan_sedia_pspao';
                       //$this->load->view('template/default_pelan', $data);
                      
                }
               
          
        }
        
         function senarai_ptf_pspao()
	{
		//author : Anuar
		//desc : senarai pspao ptf
                //date create: 08/07/2013
             
             
             
              $data['year_list'] =year_dropdown();  //get year list 
              
               $rules = array(
                            array(
                                  'field'   => 'tarikh_mula',
                                  'label'   => 'Tarikh Mula',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'tarikh_akhir',
                                  'label'   => 'Tarikh Akhir',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'kementerian',
                                  'label'   => 'Kementerian',
                                  'rules'   => 'required'
                               ), 
                            array(
                                  'field'   => 'status',
                                  'label'   => 'Status',
                                  'rules'   => 'required'
                               ) 
                           
                 );

            
                $this->form_validation->set_rules($rules);
                
                  if ($this->form_validation->run() == FALSE)
                {
                       
                    $data['main_content'] = 'pspao/senarai_ptf_pspao';
                     $this->load->view('template/default_pelan', $data);

                }
                else
                {
                       //$data['main_content'] = 'pspao/arahan_sedia_pspao';
                       //$this->load->view('template/default_pelan', $data);
                      
                }
                
                
           
	     
        }
        
           function senarai_ppd_pspao()
        {
           $data['year_list'] =year_dropdown();  //get year list 
               
            $data['main_content'] = 'pspao/senarai_ppd_pspao';
            $this->load->view('template/default',$data);
        }
        

    
     /*
     * END PSPAO AWAL
     */
	 
        
        /*  Author : Khairul
         *  Title  : Deshboard
         *  Date   : 11/7/2013
         */
        
        ////////// -Dashboard- Start //////////
        
        function dashboard()
        {
            $data['main_content'] = 'dashboard/default';
            $this->load->view('template/default',$data);
        }
        
        ////////// -Dashboard- End  ///////////


        ////////// -Fungsi- Start ///////////

        function fungsi()
        {
            $data['main_content'] = 'fungsi/default';
            $this->load->view('template/default_pelan',$data);
        }

        ////////// -Fungsi-  End  ///////////

        
        ////////// -PSPAO Akhir- Start //////////
        
        function pspao_akhir()
        {
            $data['main_content'] = 'pspao_akhir/default';
            $this->load->view('template/default_pelan',$data);            
        }

        function arahan_sedia_pspao_akhir()
        {
            $data['main_content'] = 'pspao_akhir/arahan_sedia_pspao_akhir';
            $this->load->view('template/default_pelan',$data);         
        }
        
        function senarai_template_pspao_awal()
        {
            $data['main_content'] = 'pspao_akhir/senarai_template_pspao_awal';
            $this->load->view('template/default_pelan',$data);            
        }
        
        function senarai_notifikasi_pspao_akhir()
        {
            $data['main_content'] = 'pspao_akhir/senarai_notifikasi_pspao_akhir';
            $this->load->view('template/default_pelan',$data);            
        }
        
        function pspao_akhir_baru()
        {
            $data['main_content'] = 'pspao_akhir/pspao_akhir_baru';
            $this->load->view('template/default_pelan',$data);            
        }
        
        ////////// -PSPAO Akhir-  End  //////////
	 
	 
	 
     /* START PPUN */

     function dokumen_rujukan_ppun()
	{
		//author : Anuar
		//desc : dokumen rujukan ppun
                //date create: 08/07/2013
         
		$data['main_content'] = 'ppun/dokumen_rujukan_ppun';
                $this->load->view('template/default_pelan', $data);
        }
        
        function kawalan_rekod_terima_ppun()
	{
		//author : Anuar
		//desc : kawalan rekod terima ppun
                //date create: 08/07/2013
            
		$data['main_content'] = 'ppun/kawalan_rekod_terima_ppun';
                $this->load->view('template/default_pelan', $data);
        }
        
        
        function  kemaskini_tskopaktiviti_ppun()
	{
		//author : Anuar
		//desc : kemaskini tskopaktiviti ppun
                //date create: 08/07/2013
            
		$data['main_content'] = 'ppun/kemaskini_tskopaktiviti_ppun';
                $this->load->view('template/default_pelan', $data);
        }
        
         function  model_struktur_ppun()
	{
		//author : Anuar
		//desc : model struktur ppun
                //date create: 08/07/2013
		$data['main_content'] = 'ppun/model_struktur_ppun';
        $this->load->view('template/default_pelan', $data);
        }
        
        function  penyediaan_kandungan_ppun()
	{
		//author : Anuar
		//desc : penyediaan kandungan ppun
                //date create: 08/07/2013
            
                //$this->output->enable_profiler(TRUE); //display query statement
            
                $data['year_list'] =year_dropdown();  //get year list 
                $data['kementerian'] = $this->ppun_model->get_kementerian(); //dapatkan senarai kementerian dr db
                $data['jabatan'] = $this->ppun_model->get_jabatan(); //dapatkan senarai jabatan dr db
                $data['premis'] = $this->ppun_model->get_premis(); //dapatkan senarai premis dr db
                
                
                $rules = array(
                            array(
                                  'field'   => 'tempoh_mula',
                                  'label'   => 'Tempoh Mula',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'jabatan',
                                  'label'   => 'Jabatan',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'premis',
                                  'label'   => 'Premis',
                                  'rules'   => 'required'
                               ),   
                            array(
                                  'field'   => 'no_dpa',
                                  'label'   => 'No Dpa',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'pendahuluan',
                                  'label'   => 'Pendahuluan',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'objektif',
                                  'label'   => 'Objektif Pengurusan Aset Tak Alih',
                                  'rules'   => 'required'
                               ),
                           array(
                                  'field'   => 'carta_pelan',
                                  'label'   => 'Carta Organisasi dan Pelan Komunikasi',
                                  'rules'   => 'required'
                               ),
                          array(
                                  'field'   => 'skop',
                                  'label'   => 'Skop dan Aktiviti Penerimaan Aset',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'sumber',
                                  'label'   => 'Penyediaan Keperluan Sumber Aktiviti Penerimaan Aset',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'kawalan',
                                  'label'   => 'Kawalan Rekod Penerimaan Aset',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'rujukan',
                                  'label'   => 'Rujukan',
                                  'rules'   => 'required'
                               ),
                            array(
                                  'field'   => 'kementerian',
                                  'label'   => 'Kementerian',
                                  'rules'   => 'required'
                                 )
                    
                 );

                  $this->form_validation->set_rules($rules); //validate form
                
                  if ($this->form_validation->run() == FALSE)
                {
                          $data['main_content'] = 'ppun/penyediaan_kandungan_ppun';
                          $this->load->view('template/default_pelan', $data);
	
                }
                else
                {
                       //$data['main_content'] = 'pspao/arahan_sedia_pspao';
                       //$this->load->view('template/default_pelan', $data);
                      
                }
             
             
	       
        }
        
         function  treeviewskop_ppun()
	{
		//author : Anuar
		//desc : treeviewskop ppun
                //date create: 08/07/2013
             
		$data['main_content'] = 'ppun/treeviewskop_ppun';
                $this->load->view('template/default_pelan', $data);
        }
        
         function  tskopaktiviti_ppun()
	{
		//author : Anuar
		//desc : tskopaktiviti ppun
                //date create: 08/07/2013
             
		$data['main_content'] = 'ppun/tskopaktiviti_ppun';
                $this->load->view('template/default_pelan', $data);
        }
        
         function  summary_ptf_ppun()
	{
		//author : Anuar
		//desc : summary ptf ppun
                //date create: 08/07/2013
             
                $data['year_list'] =year_dropdown();  //get year list 
		$data['main_content'] = 'ppun/summary_ptf_ppun';
                $this->load->view('template/default_pelan', $data);
        }
        
         function  summary_pp_ppun()
	{
		//author : Anuar
		//desc : summary pp ppun
                //date create: 08/07/2013
             
                $data['year_list'] =year_dropdown();  //get year list 
             
		$data['main_content'] = 'ppun/summary_pp_ppun';
                $this->load->view('template/default_pelan', $data);
        }
       
         function  summary_ppun()
	{
		//author : Anuar
		//desc : summary ppun
                //date create: 08/07/2013
             
                $data['year_list'] =year_dropdown();  //get year list 
             
		$data['main_content'] = 'ppun/summary_ppun';
                $this->load->view('template/default_pelan', $data);
        }
        
         function  senarai_ptf_ppun()
	{
		//author : Anuar
		//desc : senarai ptf ppun
                //date create: 09/07/2013
             
                //$this->output->enable_profiler(TRUE); //display query statement
             
                $data['year_list'] =year_dropdown();  //get year list 
                $data['jabatan'] = $this->ppun_model->get_jabatan(); //dapatkan senarai jabatan dr db
                
		$data['main_content'] = 'ppun/senarai_ptf_ppun';
                $this->load->view('template/default_pelan', $data);
        }
        
        function  senarai_pp_ppun()
	{
		//author : Anuar
		//desc : senarai pp ppun
                //date create: 09/07/2013
            
                $data['year_list'] =year_dropdown();  //get year list 
                $data['jabatan'] = $this->ppun_model->get_jabatan(); //dapatkan senarai jabatan dr db
           
		$data['main_content'] = 'ppun/senarai_pp_ppun';
                $this->load->view('template/default_pelan', $data);
        }


      /*
     * END PPUN
     */
	
	//** PTRA **//
	function senarai_pp_ptra()
	{
		//Nama : Fatin
                //Date : 8/7/13
                //Desc : senarai pegawai pengawal
		$data['main_content'] = 'ptra/senarai_pp_ptra';
                $this->load->view('template/default_pelan', $data);
	}
        
        function senarai_ptf_ptra()
	{
		//Nama : Fatin
                //Date : 8/7/13
                //Desc : senarai pegawai teknikal fasiliti
		$data['main_content'] = 'ptra/senarai_ptf_ptra';
                $this->load->view('template/default_pelan', $data);
	}
        
        function kandungan_ptra()
	{
		//Nama : Fatin
                //Date : 8/7/13
                //Desc : penyediaan kandungan ptra
		$data['main_content'] = 'ptra/kandungan_ptra';
                $this->load->view('template/default_pelan', $data);
	}
        
        function model_struktur_ptra()
	{
		//Nama : Fatin
                //Date : 8/7/13
                //Desc : model stuktur ptra
		$data['main_content'] = 'ptra/model_struktur_ptra';
                $this->load->view('template/default_pelan', $data);
	}
        
        function treeview_ptra()
	{
		//Nama : Fatin
                //Date : 8/7/13
                //Desc : treeview skop aktiviti ptra 1b 1c
		$data['main_content'] = 'ptra/treeview_ptra';
                $this->load->view('template/default_pelan', $data);
	}
        
        function skop_aktiviti_ptra()
	{
		//Nama : Fatin
                //Date : 8/7/13
                //Desc : table skop aktiviti 1b 1c
		$data['main_content'] = 'ptra/skop_aktiviti_ptra';
                $this->load->view('template/default_pelan', $data);
	}
        
        function skop_aktiviti2_ptra()
	{
		//Nama : Fatin
                //Date : 8/7/13
                //Desc : keperluan sumber skop aktiviti 1b 1c
		$data['main_content'] = 'ptra/skop_aktiviti2_ptra';
                $this->load->view('template/default_pelan', $data);
	}
        
        function kawalan_rekod_ptra()
	{
		//Nama : Fatin
                //Date : 8/7/13
                //Desc : kawalan rekod ptra 1d
		$data['main_content'] = 'ptra/kawalan_rekod_ptra';
                $this->load->view('template/default_pelan', $data);
	}
        
        function dokumen_rujukan_ptra()
	{
		//Nama : Fatin
                //Date : 8/7/13
                //Desc : dokumen rujukan 1e
		$data['main_content'] = 'ptra/dokumen_rujukan_ptra';
                $this->load->view('template/default_pelan', $data);
	}
        
        function summary_ptra()
	{
		//Nama : Fatin
                //Date : 8/7/13
                //Desc : summary penyediaan ptra baru
		$data['main_content'] = 'ptra/summary_ptra';
                $this->load->view('template/default_pelan', $data);
	}
        
        function summary_pp_ptra()
	{
		//Nama : Fatin
                //Date : 8/7/13
                //Desc : summary pegawai pengawal
		$data['main_content'] = 'ptra/summary_pp_ptra';
                $this->load->view('template/default_pelan', $data);
	}
        
        function summary_ptf_ptra()
	{
		//Nama : Fatin
                //Date : 8/7/13
                //Desc : summary pegawai teknikal fasiliti
		$data['main_content'] = 'ptra/summary_ptf_ptra';
                $this->load->view('template/default_pelan', $data);
	}
	//** END PTRA **//

	//** Start PNPA **//

	   function senarai_pp_pnpa()
	{
		//nama:yann
                //date:8/7/13
                //desc:page senarai pegawai pengawal
		$data['main_content'] = 'pnpa/senarai_pp_pnpa';
                $this->load->view('template/default_pelan', $data);
	}
        
        function senarai_ptf_pnpa()
	{
		//nama:yann
                //date:8/7/13
                //desc:page senarai pegawai teknikal fasiliti
		$data['main_content'] = 'pnpa/senarai_ptf_pnpa';
                $this->load->view('template/default_pelan', $data);
	}

	function kandungan_pnpa()
	{
		//nama:yann
                //date:8/7/13
                //desc:page penyediaan kandungan pnpa
		$data['main_content'] = 'pnpa/kandungan_pnpa';
                $this->load->view('template/default_pelan', $data);
	}

	
	function model_struktur_pnpa ()
	{
                //nama:yann
                //date:8/7/13
                //desc:page model struktur pnpa
		$data['main_content'] = 'pnpa/model_struktur_pnpa';
                $this->load->view('template/default_pelan', $data);
	}

	function treeview_pnpa ()
	{
                //nama:yann
                //date:8/7/13
                //desc:page treeview untuk skop n aktiviti
		$data['main_content'] = 'pnpa/treeview_pnpa';
                $this->load->view('template/default_pelan', $data);
	}

	function skop_aktiviti_pnpa ()
	{

                //nama:yann
                //date:8/7/13
                //desc:page table skop n aktiviti	
                $data['main_content'] = 'pnpa/skop_aktiviti_pnpa';
                $this->load->view('template/default_pelan', $data);
	}
        
        function skop_aktiviti2_pnpa ()
	{
                //nama:yann
                //date:8/7/13
                //desc:table untuk keperluan sumber
		$data['main_content'] = 'pnpa/skop_aktiviti2_pnpa';
                $this->load->view('template/default_pelan', $data);
	}
        
        function kawalan_rekod_pnpa ()
	{
                //nama:yann
                //date:8/7/13
                //desc:page untuk kawalan rekod
		$data['main_content'] = 'pnpa/kawalan_rekod_pnpa';
                 $this->load->view('template/default_pelan', $data);
	}
        
        function dokumen_rujukan_pnpa ()
	{
                //nama:yann
                //date:8/7/13
                //desc:page untuk dokumen rujukan
		$data['main_content'] = 'pnpa/dokumen_rujukan_pnpa';
                $this->load->view('template/default_pelan', $data);
	}
        
         function summary_pnpa ()
	{

		//nama:yann
                //date:8/7/13
                //desc:summary page untuk penyediaan pnpa
                $data['main_content'] = 'pnpa/summary_pnpa';
                $this->load->view('template/default_pelan', $data);
	}
        
        function summary_pp_pnpa ()
	{

		//nama:yann
                //date:8/7/13
                //desc:summary page untuk pengawai pengawal
                $data['main_content'] = 'pnpa/summary_pp_pnpa';
                $this->load->view('template/default_pelan', $data);
	}
        
        function summary_ptf_pnpa ()
	{

		//nama:yann
                //date:8/7/13
                //desc:summary page untuk pegawai teknikal fasiliti
                $data['main_content'] = 'pnpa/summary_ptf_pnpa';
                $this->load->view('template/default_pelan', $data);
	}

	//** END PNPA **//
	
	
	
	//**START POPA**//
	
	function senarai_pp_popa()
	{
		//name: Seri Idayu
		//date: 08072013
		//desc: senarai pp popa
		$data['main_content'] = 'popa/senarai_pp_popa';
        $this->load->view('template/default_pelan', $data);
	}
	
	 function senarai_ptf_popa()
	{
		//name: Seri Idayu
		//date: 08072013
		//desc: senarai ptf popa
		$data['main_content'] = 'popa/senarai_ptf_popa';
        $this->load->view('template/default_pelan', $data);
	}
	
	 function kandungan_popa()
	{
		//name: Seri Idayu
		//date: 08072013
		//desc: penyediaan kandungan popa
		$data['main_content'] = 'popa/kandungan_popa';
        $this->load->view('template/default_pelan', $data);
	}
	
	 function model_struktur_popa()
	{
		//name: Seri Idayu
		//date: 08072013
		//desc: model struktur popa
		$data['main_content'] = 'popa/model_struktur_popa';
        $this->load->view('template/default_pelan', $data);
	}
	
	 function treeview_popa()
	{
		//name: Seri Idayu
		//date: 08072013
		//desc: treeview popa
		$data['main_content'] = 'popa/treeviewskop_popa';
        $this->load->view('template/default_pelan', $data);
	}
	
	 function skop_aktiviti_popa()
	{
		//name: Seri Idayu
		//date: 08072013
		//desc: skop dan aktiviti popa
		$data['main_content'] = 'popa/skop_aktiviti_popa';
        $this->load->view('template/default_pelan', $data);
	}
	
	function skop_aktiviti2_popa()
	{
		//name: Seri Idayu
		//date: 08072013
		//desc: skop dan aktiviti 2 popa
		$data['main_content'] = 'popa/skop_aktiviti2_popa';
        $this->load->view('template/default_pelan', $data);
	}
	
	 function kawalan_rekod_popa()
	{
		//name: Seri Idayu
		//date: 08072013
		//desc: kawalan rekod popa
		$data['main_content'] = 'popa/kawalan_rekod_popa';
        $this->load->view('template/default_pelan', $data);
	}
	
	function dokumen_rujukan_popa()
	{
		//name: Seri Idayu
		//date: 08072013
		//desc: dokumen rujukan popa
		$data['main_content'] = 'popa/dokumen_rujukan_popa';
        $this->load->view('template/default_pelan', $data);
	}
	
	function summary_popa()
	{
		//name: Seri Idayu
		//date: 08072013
		//desc: summary popa
		$data['main_content'] = 'popa/summary_popa';
        $this->load->view('template/default_pelan', $data);
	}
	
	function summary_pp_popa()
	{
		//name: Seri Idayu
		//date: 08072013
		//desc: summary pp popa
		$data['main_content'] = 'popa/summary_pp_popa';
        $this->load->view('template/default_pelan', $data);
	}
	
	function summary_ptf_popa()
	{
		//name: Seri Idayu
		//date: 08072013
		//desc: summary ptf popa
		$data['main_content'] = 'popa/summary_ptf_popa';
        $this->load->view('template/default_pelan', $data);
	}
	
	//**END POPA **//
	
	//**START PLA**//
	
	function senarai_pp_pla()
	{
		//nama:Azura
                //date:8/7/13
                //desc:page senarai pegawai pengawal
		$data['main_content'] = 'pla/senarai_pp_pla';
                $this->load->view('template/default', $data);
	}
        
        function senarai_ptf_pla()
	{
		//nama:Azura
                //date:8/7/13
                //desc:page senarai pegawai teknikal fasiliti
		$data['main_content'] = 'pla/senarai_ptf_pla';
                $this->load->view('template/default', $data);
	}
        
        function kandungan_pla()
	{
		//nama:Azura
                //date:8/7/13
                //desc:page kandungan pla
		$data['main_content'] = 'pla/kandungan_pla';
                $this->load->view('template/default', $data);
	}
        
        function model_struktur_pla()
	{
		//nama:Azura
                //date:8/7/13
                //desc:page model struktur pla
		$data['main_content'] = 'pla/model_struktur_pla';
                $this->load->view('template/default', $data);
	}
        
        function treeview_pla()
	{
		//nama:Azura
                //date:8/7/13
                //desc:page treeview
		$data['main_content'] = 'pla/treeview_pla';
                $this->load->view('template/default', $data);
	}
        
        function skop_aktiviti_pla()
	{
		//nama:Azura
                //date:8/7/13
                //desc:page skop aktiviti pla
		$data['main_content'] = 'pla/skop_aktiviti_pla';
                $this->load->view('template/default', $data);
	}
        
        function skop_aktiviti2_pla()
	{
		//nama:Azura
                //date:8/7/13
                //desc:page skop aktiviti2 pla
		$data['main_content'] = 'pla/skop_aktiviti2_pla';
                $this->load->view('template/default', $data);
	}
        
        function kawalan_rekod_pla()
	{
		//nama:Azura
                //date:8/7/13
                //desc:page senarai kawalan rekod pelupusan
		$data['main_content'] = 'pla/kawalan_rekod_pla';
                $this->load->view('template/default', $data);
	}
        
        function dokumen_rujukan_pla()
	{
		//nama:Azura
                //date:8/7/13
                //desc:page senarai dokumen untuk rujukan bagi pelupusan aset
		$data['main_content'] = 'pla/dokumen_rujukan_pla';
                $this->load->view('template/default', $data);
	}
        
        function summary_pla()
	{
		//nama:Azura
                //date:8/7/13
                //desc:page senarai ringkasan pla
		$data['main_content'] = 'pla/summary_pla';
                $this->load->view('template/default', $data);
	}
        
        function summary_pp_pla()
	{
		//nama:Azura
                //date:8/7/13
                //desc:page senarai ringkasan pla untuk pegawai pengawal
		$data['main_content'] = 'pla/summary_pp_pla';
                $this->load->view('template/default', $data);
	}
        
        function summary_ptf_pla()
	{
		//nama:Azura
                //date:8/7/13
                //desc:page senarai ringkasan pla untuk pegawai teknikal fasiliti
		$data['main_content'] = 'pla/summary_ptf_pla';
                $this->load->view('template/default', $data);
	}
	
	//** END PLA **//

}

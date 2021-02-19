<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SPP extends CI_Controller {

	public function DataSiswa()
	{
        $this->load->model('M_DataSiswa');
        $this->m_DataSiswa->keamanan();

		$data['DataSiswa']= $this->m_DataSiswa->tampil_data()->
			result();

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('DataSiswa', $data);
		$this->load->view('templates/footer');

	}

	public function form_TS()
	{
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('form_TS');
		$this->load->view('templates/footer');

	}

    public function form_TSeragam()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_TSeragam');
        $this->load->view('templates/footer');

    }

    public function form_TUAS()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_TUAS');
        $this->load->view('templates/footer');

    }

    public function form_TBuku()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('form_TBuku');
        $this->load->view('templates/footer');

    }

	public function form_tahun()
	{
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('form_tahun');
		$this->load->view('templates/footer');

	}

	public function TS()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

         $data = [
            'nis'     => $this->input->post('nis'),
            'name'    => $this->input->post('name'),
            'class'   => $this->input->post('class'),
            
        ];

        $this->m_DataSiswa->input_data($data, 'students');
        redirect('SPP/DataSiswa');
    }

    public function TSeragam()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

         $data = [
            'id'     => $this->input->post('id'),
            'jenis'    => $this->input->post('jenis'),
            'claim'   => $this->input->post('claim'),
            'school'   => $this->input->post('school'),
            
        ];

        $this->m_DataSiswa->input_data_seragam($data, 'academic_uniform');
        redirect('SPP/DetailSeragam');
    }

    public function TUAS()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

         $data = [
            'id_academic'   => $this->input->post('id_academic'),
            'jenis'         => $this->input->post('jenis'),
            'school'        => $this->input->post('school'),
            'year'          => $this->input->post('year'),
            'claim'         => $this->input->post('claim'),
            'school'        => $this->input->post('school'),
            'end'           => $this->input->post('end'),
            
        ];

        $this->m_DataSiswa->input_data_uas($data, 'academic_uas');
        redirect('SPP/DetailUAS');
    }

    public function TBook()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

         $data = [
            'id'            => $this->input->post('id'),
            'jenis'         => $this->input->post('jenis'),
            'claim'         => $this->input->post('claim'),
            'school'        => $this->input->post('school'),
            'year'          => $this->input->post('year'),
            
            
        ];

        $this->m_DataSiswa->input_data_book($data, 'academic_book');
        redirect('SPP/DetailBuku');
    }

    public function TH()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

         $data = [
            'school'     => $this->input->post('school'),
            'year'     => $this->input->post('year'),
            'claim'    => $this->input->post('claim'),
            
        ];

        $this->m_DataSiswa->input_datath($data, 'academic_year');
        redirect('SPP/Tahun');
    }

    public function edit($nis)
    {

    	$where = array ('nis' => $nis);
    	$data['DataSiswa'] = $this->m_DataSiswa->edit_data($where, 'students')->result();
    	$this->load->view('templates/header');
		$this->load->view('templates/menu2');
		$this->load->view('form_edit', $data);
		$this->load->view('templates/footer');
    }

    public function edit_uniform($id)
    {

        $where = array ('id' => $id);
        $data['th'] = $this->m_DataSiswa->edit_data($where, 'academic_uniform')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/menu2');
        $this->load->view('form_edit_seragam', $data);
        $this->load->view('templates/footer');
    }

    public function edit_book($id)
    {

        $where = array ('id' => $id);
        $data['th'] = $this->m_DataSiswa->edit_data($where, 'academic_book')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/menu2');
        $this->load->view('form_edit_book', $data);
        $this->load->view('templates/footer');
    }

    public function edit_uas($id_academic)
    {

        $where = array ('id_academic' => $id_academic);
        $data['th'] = $this->m_DataSiswa->edit_data($where, 'academic_uas')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/menu2');
        $this->load->view('form_edit_uas', $data);
        $this->load->view('templates/footer');
    }

    public function edit_th($id_academic)
    {
    	$where = array ('id_academic' => $id_academic);
    	$data['Tahun'] = $this->m_DataSiswa->edit_th($where, 'academic_year')->result();
    	$this->load->view('templates/header');
		$this->load->view('templates/menu2');
		$this->load->view('form_editth', $data);
		$this->load->view('templates/footer');
    }

    public function update()
    {
    	$nis = $this->input->post('nis');
    	$nama = $this->input->post('name');
    	$class = $this->input->post('class');
    	
    	$data = array(

            'nis' => $nis,
    		'name' => $nama,
    		'class' => $class
    		
    	);

    	$where = array(
    		'nis' => $nis
    	);

    	$this->m_DataSiswa->update_data($where, $data, 'students');
    	redirect('SPP/DataSiswa');
    }

    public function update_uniform()
    {
        $id = $this->input->post('id');
        $jenis = $this->input->post('jenis');
        $claim = $this->input->post('claim');
        
        $data = array(
           
            'jenis' => $jenis,
            'claim' => $claim
            
        );

        $where = array(
            'id' => $id
        );

        $this->m_DataSiswa->update_data($where, $data, 'academic_uniform');
        redirect('SPP/DetailSeragam');
    }

    public function update_book()
    {
        $id = $this->input->post('id');
        $jenis = $this->input->post('jenis');
        $claim = $this->input->post('claim');
        $school = $this->input->post('school');
        $year = $this->input->post('year');

        $data = array(
           
            'jenis' => $jenis,
            'claim' => $claim,
            'school' => $school,
            'year' => $year
            
        );

        $where = array(
            'id' => $id
        );

        $this->m_DataSiswa->update_data($where, $data, 'academic_book');
        redirect('SPP/DetailBuku');
    }

    public function update_uas()
    {
        $id_academic = $this->input->post('id_academic');
        $jenis = $this->input->post('jenis');
        $school = $this->input->post('school');
        $year = $this->input->post('year');
        $claim = $this->input->post('claim');
        $end = $this->input->post('end');
        
        $data = array(
           
            
            'jenis' => $jenis,
            'school' => $school,
            'year' => $year,
            'claim' => $claim,
            'end' => $end
            
        );

        $where = array(
            'id_academic' => $id_academic
        );

        $this->m_DataSiswa->update_data($where, $data, 'academic_uas');
        redirect('SPP/DetailUAS');
    }

    public function updatepass()
    {
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
           
            'username' => $username,
            'password' => $password

        );

        $this->m_DataSiswa->update_data_pass($data, 'admin');
        redirect('SPP/Tahun');
    }

    public function updateth()
    {
        $id_academic = $this->input->post('id_academic');
        $year = $this->input->post('year');
        $claim = $this->input->post('claim');
       
        $data = array(
            'id_academic' => $id_academic,
            'year' => $year,
            'claim' => $claim
        );

        $where = array(
            'id_academic' => $id_academic
        );

        $this->m_DataSiswa->update_data($where, $data, 'academic_year');
        redirect('SPP/Tahun');
    }

    public function hapus($nis)
    {
    	$where = array ('nis' => $nis);
    	$this->m_DataSiswa->hapus_data($where ,'students');
    	redirect('SPP/DataSiswa');
    }

    public function hapus2($id)
    {
        $where = array ('id' => $id);
        $this->m_DataSiswa->hapus_data($where ,'academic_uniform');
        redirect('SPP/DetailSeragam');
    }

    public function hapusuas($id_academic)
    {
        $where = array ('id_academic' => $id_academic);
        $this->m_DataSiswa->hapus_data($where ,'academic_uas');
        redirect('SPP/DetailUAS');
    }

    public function hapusbook($id)
    {
        $where = array ('id' => $id);
        $this->m_DataSiswa->hapus_data($where ,'academic_book');
        redirect('SPP/DetailBuku');
    }

    public function hapusth($id_academic)
    {
    	$where = array ('id_academic' => $id_academic);
    	$this->m_DataSiswa->hapus_datath($where ,'academic_year');
    	redirect('SPP/Tahun');
    }

    public function Pembayaran_SPP()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $data['DataSiswa']= $this->m_DataSiswa->tampil_data()->
            result();
        $data2['year']= $this->m_DataSiswa->tampil_data_academic();

        $this->load->view('templates/header');
        $this->load->view('templates/menu', $data2);
        $this->load->view('Bayar_SPP', $data);
        $this->load->view('templates/footer');

    }

    public function Pembayaran_Seragam()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $data['DataSiswa']= $this->m_DataSiswa->tampil_data()->
            result();
        $data2['year']= $this->m_DataSiswa->tampil_data_academic();

        $this->load->view('templates/header');
        $this->load->view('templates/menu', $data2);
        $this->load->view('Bayar_Seragam', $data);
        $this->load->view('templates/footer');

    }

    public function Pembayaran_UAS_Ganjil()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $data['DataSiswa']= $this->m_DataSiswa->tampil_data()->
            result();
        $data2['year']= $this->m_DataSiswa->tampil_data_academic();

        $this->load->view('templates/header');
        $this->load->view('templates/menu', $data2);
        $this->load->view('Bayar_UAS1', $data);
        $this->load->view('templates/footer');

    }

    public function Pembayaran_Buku()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $data['DataSiswa']= $this->m_DataSiswa->tampil_data()->
            result();
        $data2['year']= $this->m_DataSiswa->tampil_data_academic();

        $this->load->view('templates/header');
        $this->load->view('templates/menu', $data2);
        $this->load->view('Bayar_Book', $data);
        $this->load->view('templates/footer');

    }

    public function Pembayaran()
	{
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

		$data['DataSiswa']= $this->m_DataSiswa->tampil_data()->
			result();
        $data2['year']= $this->m_DataSiswa->tampil_data_academic();

		$this->load->view('templates/header');
		$this->load->view('templates/menu', $data2);
		$this->load->view('Pembayaran', $data);
		$this->load->view('templates/footer');

	}

	
	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['DataSiswa']=$this->m_DataSiswa->get_keyword('$keyword');
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('pembayaran', $data);
		$this->load->view('templates/footer');
	}

	

	public function bayar()
    {

         $data = [
         	'id_payment'     => $this->input->post('id_payment'),
            'nis'    		 => $this->input->post('nis'),
            'month_name'     => $this->input->post('month_name'),
            'claim'   		 => $this->input->post('claim'),
            'status'         => $this->input->post('status'),
            'date'   		 => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
           
           
        ];

        $data1 = [  

            "status" => "1"

        ];

        $where = array(
            'nis' => $this->input->post("nis")
        );

        $this->m_DataSiswa->input_bayar($data, 'payment');
        // redirect('SPP/Pembayaran');
        $this->m_DataSiswa->update_status($data1, $where);
        redirect('SPP/detail/'.$this->input->post("nis"));
    }

    public function bayar_buku()
    {

         $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'jenis'          => $this->input->post('jenis'),
            'claim'          => $this->input->post('claim'),
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
           
           
        ];

        $this->m_DataSiswa->input_bayar_buku($data, 'payment_book');
        // redirect('SPP/Pembayaran');
       
        redirect('SPP/detailbook/'.$this->input->post("nis"));
    }

    public function bayar_seragam()
    {

         $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'jenis'          => $this->input->post('jenis'),
            'claim'          => $this->input->post('claim'),
            'status'         => $this->input->post('status'),
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
           
           
        ];

        $this->m_DataSiswa->input_bayar_uniform($data, 'payment_uniform');
        // redirect('SPP/Pembayaran');
       
        redirect('SPP/detail2/'.$this->input->post("nis"));
    }

    public function bayar_ujian()
    {

         $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'jenis'          => $this->input->post('jenis'),
            'claim'          => $this->input->post('claim'),
           
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
           
           
        ];

        $this->m_DataSiswa->input_bayar_uas($data, 'payment_uas');
        // redirect('SPP/Pembayaran');
       
        redirect('SPP/detail3/'.$this->input->post("nis"));
    }

    public function bayaruniform()
    {

         $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'jenis'          => $this->input->post('jenis'),
            'claim'          => $this->input->post('claim'),
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
           
           
        ];

        $this->m_DataSiswa->input_bayar_uniform($data, 'academic_uniform');
        // redirect('SPP/Pembayaran');
        redirect('SPP/detail2/'.$this->input->post("nis"));
    }

    public function bayar2()
    {

        $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'month_name'     => $this->input->post('month_name'),
            'claim'          => $this->input->post('claim'),
            'status'         => $this->input->post('status'),
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
           
           
        ];

        $data2 = [  

            "status" => "2"

        ];

        $where = array(
            'nis' => $this->input->post("nis")
        );

        $this->m_DataSiswa->input_bayar($data, 'payment');
        // redirect('SPP/Pembayaran');
        $this->m_DataSiswa->update_status2($data2, $where);
        redirect('SPP/detail/'.$this->input->post("nis"));
    }

    public function bayar3()
    {

        $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'month_name'     => $this->input->post('month_name'),
            'claim'          => $this->input->post('claim'),
            'status'         => $this->input->post('status'),
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
         
           
        ];

        $data3 = [  

            "status" => "3"

        ];

        $where = array(
            'nis' => $this->input->post("nis")
        );

        $this->m_DataSiswa->input_bayar($data, 'payment');
        // redirect('SPP/Pembayaran');
        $this->m_DataSiswa->update_status3($data3, $where);
        redirect('SPP/detail/'.$this->input->post("nis"));
    }

    public function bayar4()
    {

        $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'month_name'     => $this->input->post('month_name'),
            'claim'          => $this->input->post('claim'),
            'status'         => $this->input->post('status'),
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
          
        ];

        $data4 = [  

            "status" => "4"

        ];

        $where = array(
            'nis' => $this->input->post("nis")
        );

        $this->m_DataSiswa->input_bayar($data, 'payment');
        // redirect('SPP/Pembayaran');
        $this->m_DataSiswa->update_status4($data4, $where);
        redirect('SPP/detail/'.$this->input->post("nis"));
    }

    public function bayar5()
    {

        $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'month_name'     => $this->input->post('month_name'),
            'claim'          => $this->input->post('claim'),
            'status'         => $this->input->post('status'),
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
           
        ];

        $data5 = [  

            "status" => "5"

        ];

        $where = array(
            'nis' => $this->input->post("nis")
        );

        $this->m_DataSiswa->input_bayar($data, 'payment');
        // redirect('SPP/Pembayaran');
        $this->m_DataSiswa->update_status5($data5, $where);
        redirect('SPP/detail/'.$this->input->post("nis"));
    }

    public function bayar6()
    {

        $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'month_name'     => $this->input->post('month_name'),
            'claim'          => $this->input->post('claim'),
            'status'         => $this->input->post('status'),
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
        
        ];

        $data6 = [  

            "status" => "6"

        ];

        $where = array(
            'nis' => $this->input->post("nis")
        );

        $this->m_DataSiswa->input_bayar($data, 'payment');
        // redirect('SPP/Pembayaran');
        $this->m_DataSiswa->update_status6($data6, $where);
        redirect('SPP/detail/'.$this->input->post("nis"));
    }

    public function bayar7()
    {

        $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'month_name'     => $this->input->post('month_name'),
            'claim'          => $this->input->post('claim'),
            'status'         => $this->input->post('status'),
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
         
        ];

        $data7 = [  

            "status" => "7"

        ];

        $where = array(
            'nis' => $this->input->post("nis")
        );

        $this->m_DataSiswa->input_bayar($data, 'payment');
        // redirect('SPP/Pembayaran');
        $this->m_DataSiswa->update_status7($data7, $where);
        redirect('SPP/detail/'.$this->input->post("nis"));
    }

    public function bayar8()
    {

        $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'month_name'     => $this->input->post('month_name'),
            'claim'          => $this->input->post('claim'),
            'status'         => $this->input->post('status'),
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
       
        ];

        $data8 = [  

            "status" => "8"

        ];

        $where = array(
            'nis' => $this->input->post("nis")
        );

        $this->m_DataSiswa->input_bayar($data, 'payment');
        // redirect('SPP/Pembayaran');
        $this->m_DataSiswa->update_status8($data8, $where);
        redirect('SPP/detail/'.$this->input->post("nis"));
    }

    public function bayar9()
    {

        $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'month_name'     => $this->input->post('month_name'),
            'claim'          => $this->input->post('claim'),
            'status'         => $this->input->post('status'),
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
        
        ];

        $data9 = [  

            "status" => "9"

        ];

        $where = array(
            'nis' => $this->input->post("nis")
        );

        $this->m_DataSiswa->input_bayar($data, 'payment');
        // redirect('SPP/Pembayaran');
        $this->m_DataSiswa->update_status9($data9, $where);
        redirect('SPP/detail/'.$this->input->post("nis"));
    }

    public function bayar10()
    {

        $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'month_name'     => $this->input->post('month_name'),
            'claim'          => $this->input->post('claim'),
            'status'         => $this->input->post('status'),
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
        
        ];

        $data10 = [  

            "status" => "10"

        ];

        $where = array(
            'nis' => $this->input->post("nis")
        );

        $this->m_DataSiswa->input_bayar($data, 'payment');
        // redirect('SPP/Pembayaran');
        $this->m_DataSiswa->update_status10($data10, $where);
        redirect('SPP/detail/'.$this->input->post("nis"));
    }

    public function bayar11()
    {

        $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'month_name'     => $this->input->post('month_name'),
            'claim'          => $this->input->post('claim'),
            'status'         => $this->input->post('status'),
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
        
        ];

        $data11 = [  

            "status" => "11"

        ];

        $where = array(
            'nis' => $this->input->post("nis")
        );

        $this->m_DataSiswa->input_bayar($data, 'payment');
        // redirect('SPP/Pembayaran');
        $this->m_DataSiswa->update_status11($data11, $where);
        redirect('SPP/detail/'.$this->input->post("nis"));
    }

    public function bayar12()
    {

        $data = [
            'id_payment'     => $this->input->post('id_payment'),
            'nis'            => $this->input->post('nis'),
            'month_name'     => $this->input->post('month_name'),
            'claim'          => $this->input->post('claim'),
            'status'         => $this->input->post('status'),
            'date'           => $this->input->post('date'),
            'class'          => $this->input->post('class'),
            'name'           => $this->input->post('name'),
         
        ];

        $data12 = [  

            "status" => "12"

        ];

        $where = array(
            'nis' => $this->input->post("nis")
        );

        $this->m_DataSiswa->input_bayar($data, 'payment');
        // redirect('SPP/Pembayaran');
        $this->m_DataSiswa->update_status12($data12, $where);
        redirect('SPP/detail/'.$this->input->post("nis"));
    }

    public function edit2($nis)
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

    	$where = array ('nis' => $nis);
    	$data['DP'] = $this->m_DataSiswa->edit_data($where, 'payment')->result();
    	$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('form_edit', $data);
		$this->load->view('templates/footer');
    }

    public function cetak($id_payment)
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();
        
        $data['pb']= $this->m_DataSiswa->detail_cetak($id_payment);
        $data2['year']= $this->m_DataSiswa->detail_cetak2($id_payment);
        $this->load->view('cetak', $data, $data2 );
      
    }

    public function cetakbuku($id_payment)
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();
        
        $data['pb']= $this->m_DataSiswa->detail_cetak_book($id_payment);
        $data2['year']= $this->m_DataSiswa->detail_cetak2_book($id_payment);
        $this->load->view('cetakbuku', $data, $data2 );
      
    }

    public function cetakujian($id_payment)
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();
        
        $data['pb']= $this->m_DataSiswa->detail_cetak_ujian($id_payment);
        $data2['year']= $this->m_DataSiswa->detail_cetak2_ujian($id_payment);
        $this->load->view('cetakujian', $data, $data2 );
      
    }

    public function cetakseragam($id_payment)
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();
        
        $data['pb']= $this->m_DataSiswa->detail_cetak_seragam($id_payment);
        $data2['year']= $this->m_DataSiswa->detail_cetak2_seragam($id_payment);
        $this->load->view('cetakseragam', $data, $data2 );
      
    }

    public function detail($nis)
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();
        
        $datacetak['year']= $this->m_DataSiswa->tampil_cetak2();

        $data['detail'] = $this->m_DataSiswa->detail_data($nis);

        $this->load->view('templates/header');
        $this->load->view('templates/menu2', $data);
        $this->load->view('form_pembayaran', $datacetak );
        $this->load->view('templates/footer');
    }

    public function detail2($nis)
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();
        
        $datacetak['uniform']= $this->m_DataSiswa->tampil_cetak3()->
        result();
        $datacetak['year']= $this->m_DataSiswa->tampil_cetak4();
        $data['detail'] = $this->m_DataSiswa->detail_data($nis);

        $this->load->view('templates/header');
        $this->load->view('templates/menu2', $data);
        $this->load->view('form_pembayaran_seragam', $datacetak );
        $this->load->view('templates/footer');
    }

    public function detail3($nis)
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();
        
        $datacetak['ujian']= $this->m_DataSiswa->tampil_cetak5()->
        result();
        $datacetak['td']= $this->m_DataSiswa->tampil_cetak6();
        $data['detail'] = $this->m_DataSiswa->detail_data($nis);

        $this->load->view('templates/header');
        $this->load->view('templates/menu2', $data);
        $this->load->view('form_pembayaran_ujian', $datacetak );
        $this->load->view('templates/footer');
    }

    public function detailbook($nis)
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();
        
        $datacetak['ujian']= $this->m_DataSiswa->tampil_cetak8()->
        result();
        $datacetak['td']= $this->m_DataSiswa->tampil_cetak7();
        $data['detail'] = $this->m_DataSiswa->detail_data($nis);

        $this->load->view('templates/header');
        $this->load->view('templates/menu2', $data);
        $this->load->view('form_pembayaran_buku', $datacetak );
        $this->load->view('templates/footer');
    }

    public function Tahun()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $data['Tahun']= $this->m_DataSiswa->tampil_tahun();
        $data2['tahun']= $this->m_DataSiswa->tampil_tahun2()->
        result();

        $this->load->view('templates/header');
        $this->load->view('templates/menu', $data2);
        $this->load->view('Tahun', $data);
        $this->load->view('templates/footer');
    }

    public function DetailSPP()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $data['Tahun']= $this->m_DataSiswa->tampil_tahun();
        $data2['tahun']= $this->m_DataSiswa->tampil_tahun2()->
        result();

        $this->load->view('templates/header');
        $this->load->view('templates/menu', $data2);
        $this->load->view('periode', $data);
        $this->load->view('templates/footer');
    }

    public function DetailSeragam()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $data['Tahun']= $this->m_DataSiswa->tampil_tahun();
        $data2['data']= $this->m_DataSiswa->tampil_seragam()->
        result();

        $this->load->view('templates/header');
        $this->load->view('templates/menu', $data2);
        $this->load->view('seragam', $data);
        $this->load->view('templates/footer');
    }

    public function DetailUAS()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $data['Tahun']= $this->m_DataSiswa->tampil_tahun();
        $data2['data']= $this->m_DataSiswa->tampil_uas()->
        result();

        $this->load->view('templates/header');
        $this->load->view('templates/menu', $data2);
        $this->load->view('UAS', $data);
        $this->load->view('templates/footer');
    }

    public function DetailBuku()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $data['Tahun']= $this->m_DataSiswa->tampil_tahun();
        $data2['book']= $this->m_DataSiswa->tampil_book()->
        result();

        $this->load->view('templates/header');
        $this->load->view('templates/menu', $data2);
        $this->load->view('buku', $data);
        $this->load->view('templates/footer');
    }
    
    public function history()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $datacetak['DS']= $this->m_DataSiswa->tampil_cetak()->
            result();
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('history', $datacetak);
        $this->load->view('templates/footer');
    }

    public function HistoryBuku()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $datacetak['DS']= $this->m_DataSiswa->tampil_cetak_buku()->
            result();
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('HistoryBuku', $datacetak);
        $this->load->view('templates/footer');
    }

    public function HistoryUjian()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $datacetak['DS']= $this->m_DataSiswa->tampil_cetak_ujian()->
            result();
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('HistoryUjian', $datacetak);
        $this->load->view('templates/footer');
    }

    public function HistorySeragam()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $datacetak['DS']= $this->m_DataSiswa->tampil_cetak_seragam()->
            result();
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('HistorySeragam', $datacetak);
        $this->load->view('templates/footer');
    }

    public function Rekap()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('Rekap');
        $this->load->view('templates/footer');
    }

    public function excel()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $datacetak['DS']= $this->m_DataSiswa->tampil_cetak()->
            result();

        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
        $object = new PHPExcel();
        $object->getProperties()->setCreator('CI');
        $object->getProperties()->setLastModifiedBy('Sistem Pembayaran');
        $object->getProperties()->setTitle('Data Rekap');
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No.');
        $object->getActiveSheet()->setCellValue('B1', 'Tanggal Membayar');
        $object->getActiveSheet()->setCellValue('C1', 'Membayar Untuk Bulan');
        $object->getActiveSheet()->setCellValue('D1', 'Nis.');
        $object->getActiveSheet()->setCellValue('E1', 'Nama Siswa');
        $object->getActiveSheet()->setCellValue('F1', 'Kelas');
        $object->getActiveSheet()->setCellValue('G1', 'Nomina');

        $baris = 2;
        $no = 1;

        foreach ($datacetak['DS'] AS $DS) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $DS->date);
            $object->getActiveSheet()->setCellValue('C'.$baris, $DS->month_name);
            $object->getActiveSheet()->setCellValue('D'.$baris, $DS->nis);
            $object->getActiveSheet()->setCellValue('E'.$baris, $DS->name);
            $object->getActiveSheet()->setCellValue('F'.$baris, $DS->class);
            $object->getActiveSheet()->setCellValue('G'.$baris, $DS->claim);
            $baris++;
        }
        $filename="Data_Siswa".'.xlsx';
        $object->getActiveSheet()->setTitle("Data Pembayaran SPP Siswa");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename. '"');
        header('Cache-Control: max-age=0');
        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');
        exit;
        
    }

    public function excelsiswa()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $datacetak['DS']= $this->m_DataSiswa->tampil_data()->
            result();

        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
        $object = new PHPExcel();
        $object->getProperties()->setCreator('CI');
        $object->getProperties()->setLastModifiedBy('Sistem Pembayaran');
        $object->getProperties()->setTitle('Rekap Data Siswa');
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No.');
        $object->getActiveSheet()->setCellValue('B1', 'Nis');
        $object->getActiveSheet()->setCellValue('C1', 'Nama Siswa');
        $object->getActiveSheet()->setCellValue('D1', 'Kelas');

        $baris = 2;
        $no = 1;

        foreach ($datacetak['DS'] AS $DS) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $DS->nis);
            $object->getActiveSheet()->setCellValue('C'.$baris, $DS->name);
            $object->getActiveSheet()->setCellValue('D'.$baris, $DS->class);
            $baris++;
        }
        $filename="Data_Siswa".'.xlsx';
        $object->getActiveSheet()->setTitle("Data Siswa");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename. '"');
        header('Cache-Control: max-age=0');
        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');
        exit;
        
    }

    public function excelbook()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $datacetak['DS']= $this->m_DataSiswa->tampil_cetak_buku()->
            result();

        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
        $object = new PHPExcel();
        $object->getProperties()->setCreator('CI');
        $object->getProperties()->setLastModifiedBy('Sistem Pembayaran');
        $object->getProperties()->setTitle('Data Rekap');
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No.');
        $object->getActiveSheet()->setCellValue('B1', 'No Reff');
        $object->getActiveSheet()->setCellValue('C1', 'Nis');
        $object->getActiveSheet()->setCellValue('D1', 'Nama Siswa');
        $object->getActiveSheet()->setCellValue('E1', 'Nama Buku');
        $object->getActiveSheet()->setCellValue('F1', 'Tarif');
        $object->getActiveSheet()->setCellValue('G1', 'Tgl. Membayar');
        $object->getActiveSheet()->setCellValue('H1', 'Kelas');


        $baris = 2;
        $no = 1;

        foreach ($datacetak['DS'] AS $DS) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $DS->id_payment);
            $object->getActiveSheet()->setCellValue('C'.$baris, $DS->nis);
            $object->getActiveSheet()->setCellValue('D'.$baris, $DS->name);
            $object->getActiveSheet()->setCellValue('E'.$baris, $DS->jenis);
            $object->getActiveSheet()->setCellValue('F'.$baris, $DS->claim);
            $object->getActiveSheet()->setCellValue('G'.$baris, $DS->date);
            $object->getActiveSheet()->setCellValue('H'.$baris, $DS->class);
            $baris++;
        }
        $filename="Data_Buku_Siswa".'.xlsx';
        $object->getActiveSheet()->setTitle("Data Pembayaran Buku Siswa");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename. '"');
        header('Cache-Control: max-age=0');
        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');
        exit;
        
    }

    public function excelujian()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $datacetak['DS']= $this->m_DataSiswa->tampil_cetak_ujian()->
            result();

        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
        $object = new PHPExcel();
        $object->getProperties()->setCreator('CI');
        $object->getProperties()->setLastModifiedBy('Sistem Pembayaran');
        $object->getProperties()->setTitle('Data Rekap');
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No.');
        $object->getActiveSheet()->setCellValue('B1', 'No Reff');
        $object->getActiveSheet()->setCellValue('C1', 'Nis');
        $object->getActiveSheet()->setCellValue('D1', 'Nama Siswa');
        $object->getActiveSheet()->setCellValue('E1', 'Kelas');
        $object->getActiveSheet()->setCellValue('F1', 'Pembayaran');
        $object->getActiveSheet()->setCellValue('G1', 'Tarif');
        $object->getActiveSheet()->setCellValue('H1', 'Tgl. Membayar');
        


        $baris = 2;
        $no = 1;

        foreach ($datacetak['DS'] AS $DS) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $DS->id_payment);
            $object->getActiveSheet()->setCellValue('C'.$baris, $DS->nis);
            $object->getActiveSheet()->setCellValue('D'.$baris, $DS->name);
            $object->getActiveSheet()->setCellValue('E'.$baris, $DS->class);
            $object->getActiveSheet()->setCellValue('F'.$baris, $DS->jenis);
            $object->getActiveSheet()->setCellValue('G'.$baris, $DS->claim);
            $object->getActiveSheet()->setCellValue('H'.$baris, $DS->date);
            $baris++;
        }
        $filename="Data_Ujian_Siswa".'.xlsx';
        $object->getActiveSheet()->setTitle("Data Pembayaran Ujian Siswa");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename. '"');
        header('Cache-Control: max-age=0');
        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');
        exit;
        
    }
    
    public function excelseragam()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $datacetak['DS']= $this->m_DataSiswa->tampil_cetak_seragam()->
            result();

        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
        $object = new PHPExcel();
        $object->getProperties()->setCreator('CI');
        $object->getProperties()->setLastModifiedBy('Sistem Pembayaran');
        $object->getProperties()->setTitle('Data Rekap');
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No.');
        $object->getActiveSheet()->setCellValue('B1', 'No Reff');
        $object->getActiveSheet()->setCellValue('C1', 'Nis');
        $object->getActiveSheet()->setCellValue('D1', 'Nama Siswa');
        $object->getActiveSheet()->setCellValue('E1', 'Kelas');
        $object->getActiveSheet()->setCellValue('F1', 'Pembayaran');
        $object->getActiveSheet()->setCellValue('G1', 'Tarif');
        $object->getActiveSheet()->setCellValue('H1', 'Tgl. Membayar');
        


        $baris = 2;
        $no = 1;

        foreach ($datacetak['DS'] AS $DS) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $DS->id_payment);
            $object->getActiveSheet()->setCellValue('C'.$baris, $DS->nis);
            $object->getActiveSheet()->setCellValue('D'.$baris, $DS->name);
            $object->getActiveSheet()->setCellValue('E'.$baris, $DS->class);
            $object->getActiveSheet()->setCellValue('F'.$baris, $DS->jenis);
            $object->getActiveSheet()->setCellValue('G'.$baris, $DS->claim);
            $object->getActiveSheet()->setCellValue('H'.$baris, $DS->date);
            $baris++;
        }
        $filename="Data_Seragam_Siswa".'.xlsx';
        $object->getActiveSheet()->setTitle("Data Pembayaran Seragam Siswa");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename. '"');
        header('Cache-Control: max-age=0');
        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');
        exit;
        
    }

    public function updateend()
    {
        $id_academic = $this->input->post('id_academic');
        $end = $this->input->post('end');
       
        $data = array(
            'id_academic' => $id_academic,
            'end' => $end,
           
        );

        $where = array(
            'id_academic' => $id_academic
        );

        // update to tb student


        $status = $this->input->post('status');
        $dataup = array(
            
            'status' => $status
        );

        $this->m_DataSiswa->update_dataup($dataup, 'students');
       
        $this->m_DataSiswa->updateend($where, $data, 'academic_year');
        redirect('SPP/Tahun');
    }

    public function insert_periode()
    {
         $data = [
            'year'    => $this->input->post('year'),
            'claim'   => $this->input->post('claim'),
            'school'    => $this->input->post('school'),
        ];

        $where = array ('end' => "1");
        $this->m_DataSiswa->hapus_data_periode($where ,'academic_year');
        
        $this->m_DataSiswa->input_data_periode($data, 'academic_year');
        redirect('SPP/Tahun');
    }
   
   
    public function index()
 {
  $this->load->view('v_login');
 }

 public function ceklogin(){
  $username = $this->input->post('username');
  $password = $this->input->post('password');
  $this->load->model('m_DataSiswa');
  $this->m_DataSiswa->ambillogin($username,$password);

 }

 public function logout(){
  $this->session->set_userdata('username', FALSE);
  $this->session->sess_destroy();
  redirect('SPP/index');
  }

  public function update_pass()
    {
        $this->load->model('m_DataSiswa');
        $this->m_DataSiswa->keamanan();

        $data['admin'] = $this->m_DataSiswa->edit_data_pass('admin')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('update_pass', $data);
        $this->load->view('templates/footer');
    }

}

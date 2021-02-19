<?php 
	class M_DataSiswa extends CI_Model {

        public function ambillogin($username,$password)
 {
  $this->db->where('username', $username);
  $this->db->where('password', $password);
  $query = $this->db->get('admin');
  if ($query->num_rows()>0){
   foreach ($query->result() as $row) {
    $sess = array ('username' => $row->username,
        'password' => $row->password
      );
   }
  $this->session->set_userdata($sess);
  redirect('SPP/Pembayaran');
  }
  else{
   $this->session->set_flashdata('info','MAAF Username dan Password Anda salah!, Mohon diperiksa kembali');
   redirect('SPP/index');
  }
 }


 public function keamanan(){
  $username = $this->session->userdata('username');
  if(empty($username)){
   $this->session->sess_destroy();
   redirect('SPP/index');
  }
 }


		public function tampil_data(){
			return $this->db->get('students');
		}
        
        public function tampil_data_academic(){
            return $this->db->get('academic_year');
        }

        public function tampil_rekap(){
            $query = $this->db->get('payment')->row();
            return $query;
        }

        public function tampil_cetak(){
            return $this->db->get('payment');
        }

        public function tampil_cetak_buku(){
            return $this->db->get('payment_book');
        }

        public function tampil_cetak_ujian(){
            return $this->db->get('payment_uas');
        }

        public function tampil_cetak_seragam(){
            return $this->db->get('payment_uniform');
        }

        public function tampil_cetak2(){
            $query = $this->db->query("SELECT * FROM academic_year WHERE id_academic = '1' ")->row();
            return $query;
        }

        public function tampil_cetak3(){
            return $this->db->get('academic_uniform');
            
        }

        public function tampil_cetak4(){
            $query = $this->db->query("SELECT * FROM academic_uniform")->row();
            return $query;
        }

        public function tampil_cetak5(){
            return $this->db->get('academic_uas');
            
        }

        public function tampil_cetak6(){
            $query = $this->db->query("SELECT * FROM academic_uas")->row();
            return $query;
        }

        public function tampil_cetak7(){
            $query = $this->db->query("SELECT * FROM academic_book")->row();
            return $query;
        }

        public function tampil_cetak8(){
            return $this->db->get('academic_book');
            
        }

        public function tampil_tahun(){
            $query = $this->db->get('academic_year')->row();
            return $query;
        }

        public function tampil_tahun2(){
            return $this->db->get('academic_year');
        }

        public function tampil_seragam(){
            return $this->db->get('academic_uniform');
        }

        public function tampil_uas(){
            return $this->db->get('academic_uas');
        }

        public function tampil_book(){
            return $this->db->get('academic_book');
        }

		public function input_data($data){
        	$this->db->insert('students', $data);
    	}

        public function input_data_seragam($data){
            $this->db->insert('academic_uniform', $data);
        }

        public function input_data_uas($data){
            $this->db->insert('academic_uas', $data);
        }

        public function input_data_book($data){
            $this->db->insert('academic_book', $data);
        }

        public function input_data_periode($data){
            $this->db->insert('academic_year', $data);
        }

        public function input_datath($data){
            $this->db->insert('academic_year', $data);
        }
        
        public function hapus_data($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function hapus_data_periode($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function hapus_datath($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }
        
        public function edit_data($where, $table){
            return $this->db->get_where($table,$where);
        }
        
          public function edit_data_pass($table){
            return $this->db->get_where($table);
        }

        public function edit_th($where, $table){
            return $this->db->get_where($table,$where);
        }

        public function update_data_pass($data, $table){
            
            $this->db->update($table, $data);
        }

        public function update_data($data, $where, $table){
           
            $this->db->update($table, $where, $data);
        }

        public function update_dataup($data, $table){
           
            $this->db->update($table, $data);
        }

        public function updateend($where, $data, $table){
            $this->db->where($where);
            $this->db->update($table, $data);
        }

        public function update_status($data1, $where){
            
            $this->db->update("students", $data1, $where);
        }

        public function update_status2($data2, $where){
            $this->db->where($where);
            $this->db->update("students", $data2, $where);
        }

        public function update_status3($data3, $where){
            
            $this->db->update("students", $data3, $where);
        }

        public function update_status4($data4, $where){
            
            $this->db->update("students", $data4, $where);
        }

        public function update_status5($data5, $where){
            
            $this->db->update("students", $data5, $where);
        }

        public function update_status6($data6, $where){
            
            $this->db->update("students", $data6, $where);
        }

        public function update_status7($data7, $where){
            
            $this->db->update("students", $data7, $where);
        }

        public function update_status8($data8, $where){
            
            $this->db->update("students", $data8, $where);
        }

        public function update_status9($data9, $where){
            
            $this->db->update("students", $data9, $where);
        }

        public function update_status10($data10, $where){
            
            $this->db->update("students", $data10, $where);
        }

        public function update_status11($data11, $where){
            
            $this->db->update("students", $data11, $where);
        }

        public function update_status12($data12, $where){
            
            $this->db->update("students", $data12, $where);
        }

        public function detail_data($nis = null)
        {
            $query = $this->db->get_where('students', array('nis' => $nis))->row();
            return $query;
        }

        public function detail_cetak($id_payment)
        {
            $this->db->where("id_payment", $id_payment);
            // $this->db->where("month_name", $bulan);
            return $this->db->get("payment")->row();
        }

        public function detail_cetak_book($id_payment)
        {
            $this->db->where("id_payment", $id_payment);
            // $this->db->where("month_name", $bulan);
            return $this->db->get("payment_book")->row();
        }

        public function detail_cetak_ujian($id_payment)
        {
            $this->db->where("id_payment", $id_payment);
            // $this->db->where("month_name", $bulan);
            return $this->db->get("payment_uas")->row();
        }

        public function detail_cetak_seragam($id_payment)
        {
            $this->db->where("id_payment", $id_payment);
            // $this->db->where("month_name", $bulan);
            return $this->db->get("payment_uniform")->row();
        }

        public function detail_cetak2()
        {
            return $this->db->get("payment")->row();
        }

        public function detail_cetak2_book()
        {
            return $this->db->get("payment_book")->row();
        }

        public function detail_cetak2_ujian()
        {
            return $this->db->get("payment_uas")->row();
        }

        public function detail_cetak2_seragam()
        {
            return $this->db->get("payment_uniform")->row();
        }

        public function input_bayar($data,$table){
            $this->db->insert($table, $data);
        }

        public function input_bayar_uniform($data,$table){
            $this->db->insert($table, $data);
        }

        public function input_bayar_buku($data,$table){
            $this->db->insert($table, $data);
        }

        public function input_bayar_uas($data,$table){
            $this->db->insert($table, $data);
        }

        public function tampil_data2($nis = null){
            $query = $this->db->get_where('payment', array('nis' => $nis))->row();
            return $query;
        }

        public function tampil_data3(){
            return $this->db->get('academic_year');
        }


	}

	
?>
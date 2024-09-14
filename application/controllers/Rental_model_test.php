<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental_model_test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();
        $this->CI->load->model('rental_model');
        $this->model = $this->CI->rental_model;
        $this->load->library('unit_test'); // Load library pengujian
    }

    public function test_get_data()
    {
        // Pengujian untuk fungsi get_data()
        $table = 'mobil';
        $result = $this->rental_model->get_data($table);
        $expected_result = 4; // Ganti dengan jumlah data yang seharusnya ada di tabel 'mobil'
        $test_name = 'Testing get_data() untuk mengambil data pada tabel mobil dan memastikan jumlah data pada tabel mobil';
        echo $this->unit->run($result->num_rows(), $expected_result, $test_name);
    }

    public function test_get_where()
    {
        // Pengujian untuk fungsi get_where()
        $table = 'mobil';
        $where = array('id_mobil' => 10); // Ganti dengan data ID mobil yang ada di tabel 'mobil'
        $result = $this->rental_model->get_where($where, $table);
        $expected_result = 1; // Ganti dengan jumlah data yang seharusnya ada di tabel 'mobil' berdasarkan where di atas
        $test_name = 'Testing get_where() untuk mendapatkan data yang ada ditabel mobil tersebut berdasarkan idnya';
        echo $this->unit->run($result->num_rows(), $expected_result, $test_name);
    }
    public function test_insert_data()
    {
        $data = array(
            'nama' => 'New Customer',
            'username' => 'newuser',
            'password' => 'password',
            'alamat' => 'New Address',
            'gender' => 'Laki-Laki',
            'no_telepon' => '123456789',
            'no_ktp' => '987654321',
            'role_id' => 2
        );
        $table = 'customer';
        $this->model->insert_data($data, $table);

        // Cek apakah data berhasil ditambahkan
        $where = array('username' => 'newuser');
        $result = $this->model->get_where($where, $table)->row();
        $this->unit->run($result->nama, 'New Customer', 'Unit test_insert_dataMemastikan data pada tabel customer berhasil ditambahkan dengan benar');
         
    }
    
    public function test_delete_data()
    {
        $where = array('id_customer' => 15);
        $table = 'customer';
        // Lakukan penghapusan data
        $this->model->delete_data($where, $table);
    
        // Cek apakah data berhasil dihapus
        $result_after_delete = $this->model->get_where($where, $table)->result();
        $this->unit->run(count($result_after_delete), 0, 'Unit test_delete_data Memastikan data customer berhasil dihapus');
    
         
    }

    public function test_update_data()
    {
        $where = array('id_customer' => 14);
        $data = array('nama' => 'Updated Customer');
        $table = 'customer';
        $this->model->update_data($table, $data, $where);
    
        // Cek apakah data berhasil diupdate
        $updated_result = $this->model->get_where($where, $table)->result();
        if (!empty($updated_result)) {
            $this->unit->run($updated_result[0]->nama, 'Updated Customer', 'Unit test_update_data Memastikan data berhasil diupdate dengan benar');
        } else {
            $this->unit->run(FALSE, TRUE, 'Unit test_update_data Data dengan id_customer 12 tidak ditemukan');
        }
         
    }
    

    public function test_ambil_id_mobil()
    {
        $id = 10;
        $result = $this->model->ambil_id_mobil($id);
        $this->unit->run($result !== false, true, 'Unit test_id_mobil Memastikan data id mobil tersedia atau ada');
         
    }

    public function test_cek_login()
    {
        $username = 'admin';
        $expected_role_id = 1;
    
        $where = array('username' => $username);
        $table = 'customer';
        $result = $this->model->get_where($where, $table)->row();
    
        $test_name = 'Unit test_cek_login Memastikan customer dengan username "admin" memiliki role_id 1';
        echo $this->unit->run($result->role_id, $expected_role_id, $test_name);
    }
    
    
    public function test_update_password()
    {
        $where = array('id_customer' => 14);
        $data = array('password' => md5('newpassword'));
        $table = 'customer';
        $this->model->update_password($where, $data, $table);

        // Cek apakah password berhasil diupdate
        $result = $this->model->get_where($where, $table)->row();
        $this->unit->run($result->password, md5('newpassword'), 'Unit test_update_password Memastikan password berhasil diupdate dengan benar');
         
    }

    public function test_downloadPembayaran()
    {
        $id = 20;
        $result = $this->model->downloadPembayaran($id);
        $this->unit->run($result !== null, true, 'Unit test_downloadPembayaran Memastikan data pembayaran tersedia dan dapat didownload');
         
    }


    public function run_tests()
    {
        // Jalankan semua fungsi pengujian di sini
        $this->test_get_data(); 
        $this->test_get_where();
        $this->test_insert_data();
        $this->test_delete_data();
        $this->test_update_data();
        $this->test_update_password();
        $this->test_cek_login();
        $this->test_downloadPembayaran();

        // Panggil fungsi-fungsi pengujian lainnya di sini
        echo $this->unit->report(); // Menampilkan laporan hasil pengujian
    }
}

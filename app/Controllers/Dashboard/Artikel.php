<?php namespace App\Controllers\Dashboard;

use CodeIgniter\Controller;

class Artikel extends Controller
{
    public function index()
    {
        //CHECK LOGIN
        helper('auth');
        $login = check_login();
        if($login == 0){
            return redirect()->to(base_url().'/login');
        }
        
        //FUNGSI UMUM
        //
        //Fungsi ambil post/get/dll , JANGAN LUPA!
        $request = \Config\Services::request();
        
        //Ambil model
        //Catatan : ini bisa ngambil di public function (disini) jika dibuat
        //Tapi itu harus enable auto routing . . 
        $model = new \App\Models\Artikel_model;
        
        if(isset($_POST['key']) && $_POST['key'] == 'read'){
            //jng pake $this . . . (CI 3)
            //Kirim ke model postnya
            $data = $model->read_artikel($request->getPost());
            
            //Untuk ajax, pengambilan data harus hanya me return hasilnya saja, tidak seluruh page
            //Itulah kita bisa memanggil return, dari pada echo
            //kalau echo dia bakalan panggil lagi pagenya (inikan ajax, jadi gk perlu)
            //contoh lain bisa di ambil di login controller
            return $data;
        }
        
        if(isset($_POST['key']) && $_POST['key'] == 'update'){
            //Untuk debug errornya, untuk sekarang, 
            //coba fungsi di modelnya dipindahin ke controller dan jalanin . ..
            $data = $model->update_artikel($request->getPost());
            return $data;
        }
        
        if(isset($_POST['key']) && $_POST['key'] == 'delete'){
            $data = $model->delete_artikel($request->getPost());
            return $data;
        }
        
        if(isset($_POST['key']) && $_POST['key'] == 'ver'){
            $data = $model->verifikasi_artikel($request->getPost());
            return $data;
        }
        
        $pagination = new \App\Models\Pagination_model;
        $data = $pagination->getPagination("artikel");
        
        echo view('dashboard/nav_op');
        echo view('dashboard/artikel', $data);
    }
}

<?php namespace App\Models;
use CodeIgniter\Model;

class Fasilitas_model extends Model {
    
    public function read_fasilitas($post){
        $limit = $post['limit'];
        if (isset($data['page'])){ 
            $page  = $post['page']; 
        } 
        else{ 
            $page=1; 
        }  

        $start_from = ($page-1) * $limit;  
        
        $db      = \Config\Database::connect();
        $builder = $db->table('fasilitas');
        $query   = $builder->get($limit, $start_from);
        $row = $query->getResultArray();
        //ini dah benar, tapi gambarnya response 200

        //agar data persatu-satu bisa diedit, gunakan for loop (jng foreach)
        $data = array();
        for($i=0;$i<count($row);$i++)
        {
            $data[$i]['id'] = $row[$i]['id'];
            $data[$i]['judul'] = $row[$i]['judul'];
            $data[$i]['deskripsi'] = $row[$i]['deskripsi'];
            $data[$i]['gambar'] = base64_encode($row[$i]['gambar']);
        }

        return json_encode($data);
    }
}
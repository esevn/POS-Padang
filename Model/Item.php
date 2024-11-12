<?php

require_once __DIR__ . '/Model.php';
// define('TABLE_OWNER', 'owners' );

class Item extends Model {
    protected $table = 'items';
     public function create($datas)
    {
        $nama_file = $datas["files"]["attachment"]["name"];
        $tmp_name = $datas["files"]["attachment"]["tmp_name"];
        $ekstensi_file =  pathinfo($nama_file, PATHINFO_EXTENSION);
        $ekstensi_allowed = ['jpg', 'png', 'gif', 'jpeg', ' heic'];
        if(!in_array($ekstensi_file, $ekstensi_allowed)){
            return "Ekstensi file tidak sesuai";
        }
        if ($datas["files"]["attachment"]["size"] > 500000) {
            return "Size melebihi dari 5Mb";
        }
        $nama_file =  random_int(1000, 9999) . "." . $ekstensi_file;
        move_uploaded_file($tmp_name, "../public/img/items/" . $nama_file);
        $datas = [
            "name" => $datas["post"]["name"],
            "attachment" => $nama_file,
            "price" => $datas["post"]["price"],
            "category_id" => $datas["post"]["category_id"],
        ];
        return parent::create_data($datas, $this->table);
    }

    public function all(){
        return parent::all_data($this->table);
    }

    public function find($id)
    {
        parent::find_data($id, $this->table);
    }

    public function update($id, $datas)
    {
        parent::update_data($id, $datas, $this->table);
    }

    public function delete($id)
    {
        parent::delete_data($id, $this->table);
    }

    public function search($keyword)
    {
        $keyword = "WHERE category_name LIKE '%$keyword%'";
        return parent::search_data($keyword, $this->table);
    }

    public function paginate($start, $limit)
    {
       return parent::paginate_data($start, $limit, $this->table);
    }

    public function all2($start, $limit){
        $query = "SELECT * FROM items JOIN categories ON items.category_id = categories.id_category LIMIT $start, $limit;";
        $result = mysqli_query($this->db, $query);
        return $this->convert_data($result);
    }

}
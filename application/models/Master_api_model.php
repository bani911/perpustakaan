<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Master_api_model extends CI_Model
{
    private $_table = "api_web_service";

    public $id;
    public $name;
    public $active;
    public $parameter;
    public $api_key;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'parameter',
            'label' => 'Parameter',
            'rules' => 'required'],

            ['field' => 'api_key',
            'label' => 'API KEY',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function getByParameter($parameter)
    {
        return $this->db->get_where($this->_table, ["parameter" => $parameter])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $data = array(
            'name'        => $post["name"],
            'active'      => (!empty($post["active"]) ? TRUE : FALSE),
            'parameter'   => $post["parameter"],
            'api_key'     => $post["api_key"]
        );
    
        $this->db->insert('api_web_service', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->name = $post["name"];
        $this->active = $post["active"];
        $this->parameter = $post["parameter"];
        $this->api_key = $post["api_key"];

        // if (!empty($_FILES["image"]["name"])) {
        //     $this->image = $this->_uploadImage();
        // } else {
        //     $this->image = $post["old_image"];
        // }
        
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }


}
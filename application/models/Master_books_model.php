<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Master_books_model extends CI_Model
{
    private $_table = "books";

    public function rules()
    {
        return [
            ['field' => 'title',
            'label' => 'Title',
            'rules' => 'required'],

            ['field' => 'author',
            'label' => 'Author',
            'rules' => 'required'],

            ['field' => 'publication_year',
            'label' => 'Publication Year',
            'rules' => 'required'],

            ['field' => 'isbn',
            'label' => 'International Standard Book Number',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getAllexcept()
    {
        return $this->db->get_where($this->_table, ["role" => "user"])->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    // CRUD
    public function save()
    {
        $post = $this->input->post();
        $data = array(
            'title'             => $post["title"],
            'author'            => $post["author"],
            'publication_year'  => $post["publication_year"],
            'isbn'              => $post["isbn"],
            'available'         => TRUE
        );
    
        $this->db->insert('books', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->title = $post["title"];
        $this->author = $post["author"];
        $this->publication_year = $post["publication_year"];
        $this->isbn = $post["isbn"];
        // $this->available = $post["available"];

        $this->available = isset($post["available"]) ? (bool)$post["available"] : false;

        // print_r("xxxx".$post["available"]);
        // die;
        
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }


}
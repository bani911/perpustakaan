<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Master_loans_model extends CI_Model
{
    private $_table = "loans";

    public function rules()
    {
        return [
            ['field' => 'book_id',
            'label' => 'book_id',
            'rules' => 'required'],

            ['field' => 'member_id',
            'label' => 'member_id',
            'rules' => 'required'],

            ['field' => 'due_date',
            'label' => 'due_date',
            'rules' => 'required']
        ];
    }

    public function rules_extend()
    {
        return [
            ['field' => 'due_date',
            'label' => 'due_date',
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

    // Method untuk mendapatkan daftar buku
    public function get_books() {
        return $this->db->get('books')->result_array();
    }

    // Method untuk mendapatkan daftar anggota
    public function get_members() {
        return $this->db->get('members')->result_array();
    }

    public function get_loan_list() {
        // Select data from loans table with left join returns table
        // $this->db->select('loans.*, returns.return_date');
        // $this->db->from('loans');
        // $this->db->join('returns', 'loans.id = returns.loan_id', 'left');

        $this->db
        ->select('loans.id AS loan_id, books.title AS book_title, books.author AS book_author, members.name AS member_name, loans.loan_date, loans.due_date, loans.returned, returns.return_date')
        ->from('loans')
        ->join('books', 'loans.book_id = books.id')
        ->join('members', 'loans.member_id = members.id')
        ->join('returns', 'loans.id = returns.loan_id', 'left');

        $query = $this->db->get();

        // echo '<pre>';
        // print_r($query->result_array());
        // echo '</pre>';
        // die;

        return $query->result_array();
    }

    // CRUD
    public function save()
    {
        $post = $this->input->post();
        $data = array(
            'book_id'          => $post["book_id"],
            'member_id'        => $post["member_id"],
            'due_date'         => $post["due_date"]
        );
    
        $this->db->insert('loans', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = array(
            'book_id'          => $post["book_id"],
            'member_id'        => $post["member_id"],
            'due_date'         => $post["due_date"]
        );
        
        return $this->db->update($this->_table, $data, array('id' => $post['id']));
    }

    public function update_extend_loan() 
    {
        $post = $this->input->post();
        $this->due_date = $post["due_date"];
        
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function update_loan_return_flag($id) 
    {
        $this->returned = TRUE;
        
        return $this->db->update($this->_table, $this, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }


}
<?php

class History_model
{
    private $table = 'history';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Create a new user
    public function createHistory($data)
    {
        $query = 'INSERT INTO ' . $this->table . ' (itemName, itemQuantity, unit, category, dates) VALUES (?, ?, ?, ?, ?)';
        $this->db->query($query);
        $this->db->bind(1, $data['itemName'], 's');
        $this->db->bind(2, $data['itemQuantity'], 'i');
        $this->db->bind(3, $data['unit'], 's');
        $this->db->bind(4, $data['category'], 's');
        $this->db->bind(5, $data['dates'], 's');
        $this->db->prepareParams();
        return $this->db->execute();
    }

    // Get all users
    public function getAllItemHistory()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    // public function resetAutoIncrement()
    // {
    //     // Get all records from the table
    //     $this->db->query("SELECT * FROM " . $this->table);
    //     $records = $this->db->resultSet();
        
    //     $number = 1;
    //     foreach ($records as $row) {
    //         $id = $row['historyID']; // Get the current ID
    //         // Update the ID to be sequential
    //         $this->db->query("UPDATE " . $this->table . " SET historyID  = ? WHERE historyID= ?");
    //         $this->db->bind(1, $number, 'i');
    //         $this->db->bind(2, $id, 'i');
    //         $this->db->prepareParams();
    //         $this->db->execute();
    //         $number++;
    //     }

    //     // Reset the auto-increment value
    //     $this->db->query("ALTER TABLE " . $this->table . " AUTO_INCREMENT = 1");
    //     $this->db->prepareParams();
    //     return $this->db->execute();

    // }

    // Get a single user by ID
    public function getItemById($id)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE itemId = ?';
        $this->db->query($query);
        $this->db->bind('i', $id);
        return $this->db->single();
    }

    // Update user information
    public function updateItem($data)
    {
        $query = 'UPDATE ' . $this->table . ' SET itemName = ?, itemQuantity = ?, category = ?, dates =? WHERE itemId = ?';
        $this->db->query($query);
        $this->db->bind(1, $data['itemName'], 's');
        $this->db->bind(2, $data['itemQuantity'], 'i');
        $this->db->bind(3, $data['itemCategory'], 's');
        $this->db->bind(4, $data['requestDate'], 's');
        $this->db->bind(5, $data['itemId'], 'i');
        $this->db->prepareParams();
        return $this->db->execute();
    }

    // Delete a user
    public function deleteItem($id)
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE itemId = ?';
        $this->db->query($query);
        $this->db->bind(1,$id, 'i');
        $this->db->prepareParams();
        return $this->db->execute();
    }

}
<?php

class Item_model
{
    private $table = 'requestitem';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Create a new user
    public function createItem($data)
    {
        $query = 'INSERT INTO ' . $this->table . ' (itemName, itemQuantity, unit, category, dates) VALUES (?, ?, ?, ?, ?)';
        $this->db->query($query);
        $this->db->bind(1, $data['itemName'], 's');
        $this->db->bind(2, $data['quantity'], 'i');
        $this->db->bind(3, $data['itemUnit'], 's');
        $this->db->bind(4, $data['itemCategory'], 's');
        $this->db->bind(5, $data['requestDate'], 's');
        $this->db->prepareParams();
        return $this->db->execute();
    }

    // Get all users
    public function getAllItem()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

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
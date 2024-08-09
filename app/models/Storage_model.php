<?php

class Storage_model
{
    private $table = 'inventory';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Create a new user
    public function createInventory($data)
    {
        $query = 'INSERT INTO ' . $this->table . ' (itemNames, quantity, unit, category) VALUES (?, ?, ?, ?)';
        $this->db->query($query);
        $this->db->bind(1, $data['itemName'], 's');
        $this->db->bind(2, $data['quantity'], 'i');
        $this->db->bind(3, $data['itemUnit'], 's');
        $this->db->bind(4, $data['itemCategory'], 's');
        $this->db->prepareParams();
        return $this->db->execute();
    }

    // Get all users
    public function getAllInventory()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    // Get a single user by ID
    public function getInventoryId($id)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE inventoryId = ?';
        $this->db->query($query);
        $this->db->bind('i', $id);
        return $this->db->single();
    }

    // Update user information
    public function updateInventory($data)
    {
        $query = 'UPDATE ' . $this->table . ' SET itemNames = ?, quantity = ?, category = ? WHERE inventoryId = ?';
        $this->db->query($query);
        $this->db->bind(1, $data['itemName'], 's');
        $this->db->bind(2, $data['itemQuantity'], 'i');
        $this->db->bind(3, $data['itemCategory'], 's');
        $this->db->bind(4, $data['inventoryId'], 'i');
        $this->db->prepareParams();
        return $this->db->execute();
    }

    // Delete a user
    public function deleteInventory($id)
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE inventoryId = ?';
        $this->db->query($query);
        $this->db->bind(1,$id, 'i');
        $this->db->prepareParams();
        return $this->db->execute();
    }

}
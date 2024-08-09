<?php

class User_model
{
    private $table = 'registration';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Create a new user
    public function createUser($data)
    {
        $query = 'INSERT INTO ' . $this->table . ' (username, password, email, category) VALUES (?, ?, ?, ?)';
        $this->db->query($query);
        $this->db->bind(1, $data['username'], 's');
        $this->db->bind(2, $data['password'], 's');
        $this->db->bind(3, $data['email'], 's');
        $this->db->bind(4, $data['category'], 's');
        $this->db->prepareParams();
        return $this->db->execute();
    }

    // Get all users
    public function getAllUsers()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    // Get a single user by ID
    public function getUserById($id)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id = ?';
        $this->db->query($query);
        $this->db->bind('i', $id);
        return $this->db->single();
    }

    // Delete a user
    public function deleteUser($id)
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = ?';
        $this->db->query($query);
        $this->db->bind('i', $id);
        return $this->db->execute();
    }

    // Get a user by email and password for login
    public function getUserByEmailAndPassword($data)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE email = ? AND password = ?';
        $this->db->query($query);
        $this->db->bind(1, $data['email'], 's');
        $this->db->bind(2, $data['password'], 's');
        return $this->db->single();
    }

    // Get all users
    public function getAllNullStatusUsers()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE status = ?');
        $this->db->bind(1, '', 's');
        $this->db->prepareParams(); 
        return $this->db->resultSet();
    }

    public function updateUserStatus($id)
    {
        $query = 'UPDATE ' . $this->table . ' SET status = ? WHERE id = ?';
        $this->db->query($query);
        $this->db->bind(1, 'verify', 's');
        $this->db->bind(2, $id, 'i');
        $this->db->prepareParams(); 
        return $this->db->execute();
    }
}

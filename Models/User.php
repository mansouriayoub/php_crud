<?php
  require_once 'Database.php';

  class User
  {
      private $connection;

      // Constructor
      public function __construct()
      {
          $database = new Database();
          $db = $database->connectionToDatabase();
          $this->connection = $db;
      }

      public function login($firstName, $password) {
        
      }

      // get all users from database
      public function getUsers()
      {
        $stmt = $this->connection->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }

      // get one user from database
      public function getUser($id)
      {
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
      }

      // Insert function
      public function insert($firstName, $lastName, $age)
      {
          try {
              $stmt = $this->connection->prepare('INSERT INTO users (firstName, lastName, age) VALUES(:firstName, :lastName, :age)');
              $stmt->execute([':firstName' => $firstName,':lastName' => $lastName,':age' => $age]);
              return true;
          } catch (PDOException $e) {
            return false;
          }
      }

      // Update function
      public function update($id, $firstName, $lastName, $age)
      {
          try {
              $sql = 'UPDATE users SET firstName = :firstName, lastName = :lastName, age = :age WHERE id = :id';
              $stmt = $this->connection->prepare($sql);
              $stmt->execute([':firstName' => $firstName,':lastName' => $lastName,':age' =>$age,':id' => $id]);
              return true;
          } catch (PDOException $e) {
            return false;
          }
      }

      // Delete function
      public function delete($id)
      {
          try {
              $stmt = $this->connection->prepare('DELETE FROM users WHERE id = :id');
              $stmt->execute([':id' => $id]);
              return true;
          } catch (PDOException $e) {
            return false;
          }
      }

      // Redirect URL method
      // public function redirect($url)
      // {
      //     header("Location: {$url}");
      // }
  }

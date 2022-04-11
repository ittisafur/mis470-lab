<?php

/**
* Students Controller
*/
class Students
{
    // CRUD
    // ---------

    // Create
    public function create($name, $nsuid, $email, $department)
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO students (name, nsuid, email, department) VALUES (:name, :nsuid, :email, :department)");
        $stmt->execute([
            ':name' => $name,
            ':nsuid' => $nsuid,
            ':email' => $email,
            ':department' => $department
        ]);
        return $pdo->lastInsertId();
    }

    // Read
    public function getStudents($fetchStyle = PDO::FETCH_ASSOC)
    {
        global $pdo;
        $stmt = $pdo->query("select * from students ORDER BY id DESC");
        return $stmt->fetch($fetchStyle);
    }

    public function getStudentsAll($fetchStyle = PDO::FETCH_ASSOC)
    {
        global $pdo;
        $stmt = $pdo->query("select * from students ORDER BY id DESC");

        return $stmt->fetchAll($fetchStyle);
    }

    public function getStudentById($id, $fetchStyle = PDO::FETCH_ASSOC)
    {
        global $pdo;
        $stmt = $pdo->prepare("select * from students WHERE id = ?");
        $stmt->execute([ $id ]);

        return $stmt->fetch($fetchStyle);
    }

    // Update
    public function update($id, $name, $nsuid, $email, $department)
    {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE students SET name = ?, nsuid = ?, email = ?, department = ? WHERE id = ?");
        $stmt->execute([
            $name,
            $nsuid,
            $email,
            $department,
            $id
        ]);
    }

    // Delete
    public function delete($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
        $stmt->execute([ $id ]);
    }
}

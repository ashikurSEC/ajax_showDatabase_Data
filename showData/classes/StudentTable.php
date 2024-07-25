<?php

class StudentTable
{
    private $db;

    public function __construct( $db ) {
        $this->db = $db;
    }

    public function render() {
        $students = $this->db->query("SELECT * FROM students");
        
        if (!$students) {
            return "<p>No students found.</p>";
        }

        $html = "<table class='table table-bordered table-striped'>
                    <thead class='table-dark'>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                        </tr>
                    </thead>
                    <tbody>";

        foreach ($students as $student) {
            $html .= "<tr>
                        <td class='text-center'>" . htmlspecialchars($student['id']) . "</td>
                        <td>" . htmlspecialchars($student['first_name']) . "</td>
                        <td>" . htmlspecialchars($student['last_name']) . "</td>
                      </tr>";
        }

        $html .= "</tbody></table>";

        return $html;
    }
}
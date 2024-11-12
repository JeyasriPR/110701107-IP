// Add a student
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_name = trim($_POST['student_name']);
    if (!empty($student_name)) {
        $_SESSION['students'][] = $student_name;
    }
}

// Delete a student
if (isset($_GET['delete'])) {
    $student_id = intval($_GET['delete']);
    unset($_SESSION['students'][$student_id]);
    $_SESSION['students'] = array_values($_SESSION['students']); // Reindex array
}
?>
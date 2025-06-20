<?php
include 'submit.php';

// Your code for handling form submission here
?>
<?php
// File to store student data
$file = 'students.json';
$students = [];

// Handle form submission and save new student
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newStudent = [
        'firstName' => $_POST['firstName'] ?? '',
        'lastName' => $_POST['lastName'] ?? '',
        'dob' => $_POST['dob'] ?? '',
        'gender' => $_POST['gender'] ?? '',
        'email' => $_POST['email'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'address' => $_POST['address'] ?? '',
        'idcard' => $_POST['idcard'] ?? '',
        'grade' => $_POST['grade'] ?? '',
        'startDate' => $_POST['startDate'] ?? '',
        'nationality' => $_POST['nationality'] ?? '',
    ];

    // Load existing students from file if it exists
    if (file_exists($file)) {
        $students = json_decode(file_get_contents($file), true);
        if (!is_array($students)) $students = [];
    }

    // Add new student to array
    $students[] = $newStudent;

    // Save back to JSON file
    file_put_contents($file, json_encode($students, JSON_PRETTY_PRINT));

    // Redirect to avoid form resubmission on refresh
    header("Location: admin.php");
    exit;
}

// Load students to display
if (file_exists($file)) {
    $students = json_decode(file_get_contents($file), true);
    if (!is_array($students)) $students = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title>MagiQ School - Students</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    
    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="css.css" />
</head>
<body class="bg-light">

<!-- NAV -->
<nav class="navbar navbar-expand-lg navbar-dark p-4 anas-nv" style="background-color:black">
  <div class="container px-5 d-flex">
    <a class="navbar-brand fs-4" style="width: 70%;" href="index.html">MagiQ School</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="index.html" style="width: max-content;">Add Student</a></li>
        <li class="nav-item"><a class="nav-link active" href="admin.php" style="width: max-content;">Student List</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">Contact Developer</a>
          <ul class="dropdown-menu" style="background-color: rgba(0, 0, 0, 0.411);" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item vd" target="_blank" href="mailto:anaselmessoual@gmail.com">Kontakt per E-Mail</a></li>
            <li><a class="dropdown-item" href="tel:+212637421688">Kontakt per Telefon</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" target="_blank" href="https://www.instagram.com/_anaselmesse/#">Instagram</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- NAV END -->
<div class="px-5 container" >
<div class="alert alert-dark container mt-4 shadow-sm " role="alert">
  <h5 class="alert-heading">📌 How This System Works</h5>
  <p>
    This is a student management system designed for schools. Administrators can register new students using the form,
    view the full student list, and access individual student details.
  </p>
  <ul class="mb-0">
    <li><strong>Add Student:</strong> Add new students via the registration form.</li>
    <li><strong>Student List:</strong> View the list of all registered students.</li>
    <li><strong>Student Profile:</strong> Click a name to view full student information.</li>
  </ul>
  <hr />
  <p class="mb-0">
    If you want to customize or extend the system, please contact the developer via the footer section below.
  </p>
</div>
</div>


<div class="container py-5 mt-4 px-4">
  <div class="px-4" style="border-radius: 10px;">
    <ul class="list-group-item border-dark list-group-item-action active p-4" style="font-size: x-large; background-color: black;">
      <strong class="text-light">Student List</strong>
    </ul>

    <?php if (count($students) === 0): ?>
      <div class="alert alert-info mt-3 ">No students registered yet.</div>
    <?php else: ?>
      <?php foreach ($students as $index => $student): ?>
        <a href="info.php?id=<?= $index ?>" class="list-group-item vv py-3 px-4 list-group-item-action">
          <?= htmlspecialchars($student['firstName'] . ' ' . $student['lastName']) ?>
        </a>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>



<footer class="text-light   mt-5 border-top" style="background-color: black; " >
  <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center pt-5 px-5">

    <!-- Logo and message -->
    <div class="mb-3 mb-md-0" >
      <span class="ms-2"style="color: white ; font-weight: bolder;">MagiQ School</span>
    </div>

    <!-- Contact and Links -->
    <div class="text-center text-md-start ">
      <p class="mb-1" style="color: white;">
        If you want to request a new feature or change something in this system, feel free to contact the developer:
      </p>
      <ul class="list-inline mb-1">
        <li class="list-inline-item  " >
          <a href="mailto:anaselmessoual@gmail.com" class="gap-1 d-flex text-light text-decoration-none">
            <i class="bi bi-envelope me-1 " style="color: gray;"></i> <p style="font-style: italic; " class="text-light">Email</p>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="tel:+212637421688" class="  d-flex text-light text-decoration-none">
            <i class="bi bi-telephone me-1" style="color: gray;"></i><p style="font-style: italic; " class="text-light">+212 637 421 688</p>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="https://github.com/anaselmesse1" class="d-flex text-light text-decoration-none" target="_blank">
            <i class="bi bi-github me-1" style="color: gray;"></i><p style="font-style: italic; " class="text-light">GitHub</p>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="https://www.linkedin.com/in/anas-elmessoual-b477ab368" class=" d-flex text-light text-decoration-none" target="_blank">
            <i class="bi bi-linkedin me-1" style="color: gray;"></i><p style="font-style: italic; " class="text-light">LinkedIn</p>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Copyright -->
  <div class="text-center mt-3 pb-3 " style="font-size: 0.9rem; color: gray;">
    &copy; 2025 MagiQ School. All rights reserved.
  </div>
</footer>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

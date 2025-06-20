<?php
$students = [];
$student = null;

if (file_exists('students.json')) {
    $students = json_decode(file_get_contents('students.json'), true);
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    if (isset($students[$id])) {
        $student = $students[$id];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title>MagiQ School - Student Details</title>
    
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

<div class="list-group container py-5 px-4 mt-4 ">
  <div class="px-4 " style="border-radius: 10px;">

  <ul href="#"  class="list-group-item  list-group-item-action active p-4  border-dark " style="font-size: x-large; background-color: black;">
  <strong class="text-light">About <?= htmlspecialchars($student['firstName'] . ' ' . $student['lastName']) ?></strong> 
  </ul>
    <?php if ($student): ?>
       <li  class="list-group-item vv py-3 d-flex px-4 gap-2 list-group-item-action ha">Full Name: <p class="pp"> <?= htmlspecialchars($student['firstName'] . ' ' . $student['lastName']) ?></p></li>
    <li   class="list-group-item vv py-3 d-flex px-4 gap-2 list-group-item-action ha">Date of Birth: <p class="pp"> <?= htmlspecialchars($student['dob']) ?></p></li>
    <li   class="list-group-item vv py-3 d-flex px-4 gap-2 list-group-item-action ha">Gender: <p class="pp"> <?= htmlspecialchars($student['gender']) ?></p></li>
    <li   class="list-group-item vv py-3 d-flex px-4 gap-2 list-group-item-action ha">Email: <p class="pp"> <?= htmlspecialchars($student['email']) ?></p></li>
    <li   class="list-group-item vv py-3 d-flex px-4 gap-2 list-group-item-action ha">Phone: <p class="pp"> <?= htmlspecialchars($student['phone']) ?></p></li>
     <li  class="list-group-item vv py-3 d-flex px-4 gap-2 list-group-item-action ha">Address: <p class="pp"> <?= htmlspecialchars($student['address']) ?></p></li>
    <li   class="list-group-item vv py-3 d-flex px-4 gap-2 list-group-item-action ha">ID Card: <p class="pp"> <?= htmlspecialchars($student['idcard']) ?></p></li>
     <li  class="list-group-item vv py-3 d-flex px-4 gap-2 list-group-item-action ha">Grade: <p class="pp"> <?= htmlspecialchars($student['grade']) ?></p></li>
    <li   class="list-group-item vv py-3 d-flex px-4 gap-2 list-group-item-action ha">Start Date: <p class="pp"> <?= htmlspecialchars($student['startDate']) ?></p></li>
    <li   class="list-group-item vv py-3 d-flex px-4 gap-2 list-group-item-action ha">Nationality: <p class="pp"> <?= htmlspecialchars($student['nationality']) ?></p></li>
    <?php else: ?>
      <li class="list-group-item text-danger">❌ Student not found.</li>
    <?php endif; ?>
  </ul>
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

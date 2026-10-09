<?php
if (!isset($pageTitle)) {
    $pageTitle = 'UX & Usability Heuristics Testbed';
}
if (!isset($basePath)) {
    $basePath = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?> | UxScanner Benchmark Testbed</title>
  <meta name="description" content="Dedicated benchmark testbed application for validating the UX & Usability Heuristics Scanner rules across form usability, navigation, user freedom, and ethical design.">
  
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= $basePath ?>assets/css/custom.css">
</head>
<body>

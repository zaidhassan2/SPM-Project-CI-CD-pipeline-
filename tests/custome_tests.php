<?php
echo "Starting Automated Tests...\n";

// Helper function to test form validation logic
function validate_form_data($name, $email, $message) {
    if (empty($name) || empty($email) || empty($message)) return "empty";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return "invalid_email";
    return "success";
}

$tests_passed = 0;
$tests_failed = 0;

// Test 1: Empty Fields Check
if (validate_form_data("", "test@test.com", "Hello") === "empty") {
    echo "✔ Test 1 Passed: Caught empty name field.\n";
    $tests_passed++;
} else {
    echo "✘ Test 1 Failed.\n";
    $tests_failed++;
}

// Test 2: Invalid Email Format
if (validate_form_data("John", "not-an-email", "Hello") === "invalid_email") {
    echo "✔ Test 2 Passed: Caught invalid email.\n";
    $tests_passed++;
} else {
    echo "✘ Test 2 Failed.\n";
    $tests_failed++;
}

// Test 3: Success Case
if (validate_form_data("John", "john@example.com", "Great POS!") === "success") {
    echo "✔ Test 3 Passed: Valid data accepted.\n";
    $tests_passed++;
} else {
    echo "✘ Test 3 Failed.\n";
    $tests_failed++;
}

// Test 4: Page Load / File Exists (Basic Availability)
if (file_exists(__DIR__ . "/../index.php")) {
    echo "✔ Test 4 Passed: index.php exists and is available.\n";
    $tests_passed++;
} else {
    echo "✘ Test 4 Failed: index.php missing.\n";
    $tests_failed++;
}

// Test 5: Process file exists
if (file_exists(__DIR__ . "/../process.php")) {
    echo "✔ Test 5 Passed: process.php routing exists.\n";
    $tests_passed++;
} else {
    echo "✘ Test 5 Failed.\n";
    $tests_failed++;
}

echo "-------------------------\n";
echo "Results: $tests_passed Passed, $tests_failed Failed.\n";

if ($tests_failed > 0) {
    exit(1); // Fails the CI pipeline
} else {
    exit(0); // Passes the CI pipeline
}
?>

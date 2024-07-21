$stmt = $conn->prepare("INSERT INTO registrations (name, phone, age, status, appointment) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssiss", $name, $phone, $age, $status, $appointment);
$stmt->execute();
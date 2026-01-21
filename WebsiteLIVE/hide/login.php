<?php
session_start();

// --- CONFIGURATION ---
// CHANGE THIS PASSWORD BEFORE UPLOADING
$valid_password = "Powerauto2025!"; 
// ---------------------

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'] ?? '';
    
    // Check if the submitted password matches the valid password
    if ($password === $valid_password) {
        // Success: Set the session variable
        $_SESSION['site_unlocked'] = true;
        
        // Redirect to the actual homepage
        header("Location: index.php");
        exit;
    } else {
        $error = "Incorrect password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Login - Powerauto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm border-t-4 border-red-600">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Staff Access</h2>
        
        <?php if($error): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4 text-sm text-center">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form method="post">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-red-600 transition duration-200" required autofocus placeholder="Enter access code">
            </div>
            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300 transform active:scale-95">
                Unlock Website
            </button>
        </form>
        <div class="mt-6 text-center">
            <a href="index.html" class="text-sm text-gray-400 hover:text-gray-800 transition-colors">Return to Home</a>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-gray-800 text-white p-4">
        <h1 class="text-center">Admin Panel</h1>
    </header>
    <main class="container my-4">
        <h2 class="text-center">Upload Image</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="image" class="form-label">Choose Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </main>
    <footer class="bg-gray-800 text-white p-4 text-center">
        <p>&copy; 2024 Your Company</p>
    </footer>
</body>
</html>

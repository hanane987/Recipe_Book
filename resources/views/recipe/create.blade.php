<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Recipe Form</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin: auto;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <form action="{{ route('recipe.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <h2 class="mb-4 text-center">Add Recipe</h2>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image_path" class="form-control">
            </div>

            <!-- <div class="mb-3">
                <label for="picture" class="form-label">Upload Picture</label>
                <input type="file" class="form-control" id="picture" name="picture" accept="image/*" required>
            </div> -->

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>

    <!-- Include Bootstrap JS (optional, only if you need JavaScript features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

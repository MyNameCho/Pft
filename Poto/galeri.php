<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery with Project </title>
    <style>
        .header {
    width: 100%;
    background-color: #007bff;
    padding: 20px 0;
    text-align: center;

}

.header h1 {
    color: white;
    font-size: 2.5rem;
    margin: 0;
}

nav {
    margin-top: 10px;
}

nav a {
    color: white;
    text-decoration: none;
    font-size: 1.2rem;
    margin: 0 15px;
}

nav a:hover {
    text-decoration: underline;
}
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right,rgb(255, 255, 255),rgb(0, 88, 251));
            color: #333;
        }

        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }

        .gallery-item {
            position: relative;
            width: 200px;
            height: 150px;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.1);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .form-container {
            max-width: 400px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transform: translateY(50px);
            opacity: 0;
            transition: all 0.5s ease;
        }

        .form-container.show {
            opacity: 1;
            transform: translateY(0);
        }

        .form-container h2 {
            margin-top: 0;
            text-align: center;
        }

        .form-container input[type="text"],
        .form-container textarea,
        .form-container button {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container button {
            background: #4facfe;
            color: white;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .form-container button:hover {
            background: #3a8cdb;
        }
    </style>
</head>
<body>
<div class="header">
        <h1>My Gallery</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="digital marketing.html">DGM</a>
            <a href="https://wa.me/6281946730549">Contact</a>
            <a href="login.php">Logout</a>
        </nav>
    </div>

    <h1 style="text-align: center; margin-top: 20px;">Photo Gallery with Project</h1>
    <h3 style="text-align: center; margin-top: 20px;">Gallery 1</h3>
    <div class="gallery-container">
        <div class="gallery-item" onclick="selectImage('Image 1')">
            <img src="Images/about.jpg" alt="Image 1">
        </div>
        <div class="gallery-item" onclick="selectImage('Image 2')">
            <img src="Images/im.JPG" alt="Image 2">
        </div>
        <div class="gallery-item" onclick="selectImage('Image 3')">
            <img src="Images/diri.jpg" alt="Image 3">
        </div>
        <div class="gallery-item" onclick="selectImage('Image 4')">
            <img src="Images/saya.jpg" alt="Image 4">
        </div>
    </div>
```<h3 style="text-align: center; margin-top: 20px;">Gallery 2</h3>
    <div class="gallery-container">
        <div class="gallery-item" onclick="selectImage('Image 5')">
            <img src="Images/about.jpg" alt="Image 5">
        </div>
        <div class="gallery-item" onclick="selectImage('Image 6')">
            <img src="Images/im.JPG" alt="Image 6">
        </div>
        <div class="gallery-item" onclick="selectImage('Image 7')">
            <img src="Images/diri.jpg" alt="Image 7">
        </div>
        <div class="gallery-item" onclick="selectImage('Image 8')">
            <img src="Images/saya.jpg" alt="Image 8">
        </div>
    </div>
    <h3 style="text-align: center; margin-top: 20px;">Gallery 3</h3>
    <div class="gallery-container">
        <div class="gallery-item" onclick="selectImage('Image 9')">
            <img src="Images/about.jpg" alt="Image 9">
        </div>
        <div class="gallery-item" onclick="selectImage('Image 10')">
            <img src="Images/im.JPG" alt="Image 10">
        </div>
        <div class="gallery-item" onclick="selectImage('Image 11')">
            <img src="Images/diri.jpg" alt="Image 11">
        </div>
        <div class="gallery-item" onclick="selectImage('Image 12')">
            <img src="Images/saya.jpg" alt="Image 12">
        </div>
    </div>
    <h3 style="text-align: center; margin-top: 20px;">Gallery 4</h3>
    <div class="gallery-container">
        <div class="gallery-item" onclick="selectImage('Image 13')">
            <img src="Images/about.jpg" alt="Image 13">
        </div>
        <div class="gallery-item" onclick="selectImage('Image 14')">
            <img src="Images/im.JPG" alt="Image 14">
        </div>
        <div class="gallery-item" onclick="selectImage('Image 15')">
            <img src="Images/diri.jpg" alt="Image 15">
        </div>
        <div class="gallery-item" onclick="selectImage('Image 16')">
            <img src="Images/saya.jpg" alt="Image 16">
        </div>
    </div>

    <div class="form-container" id="formContainer">
        <h2>Detail Gambar</h2>
        <input type="text" id="imageName" placeholder="Selected Image" readonly>
        <textarea placeholder="Enter your comments"></textarea>
        <button>Submit</button>
    </div>
    <script>
        function selectImage(imageName) {
            const formContainer = document.getElementById('formContainer');
            const imageNameInput = document.getElementById('imageName');
            imageNameInput.value = imageName;
            formContainer.classList.add('show');
        }
    </script>
</body>
</html>

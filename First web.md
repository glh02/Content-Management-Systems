<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> APEX </title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }
            nav {
                background-color: #333;
                color: white;
                padding: 10px;
                text-align: center;
            }
            nav a {
                color: blue;
                margin: 15px 15px;
                text-decoration: none;
            }
            nav a:hover {
                text-decoration: underline;
            }
            .page {
                padding: 20px;
                display: none;
            }
            .page.active {
                display: block;
            }
            .image-container {
                margin: 20px 0;
                text-align: center;
            }
            .image-container img {
                max-width: 100%;
                height: auto;
            }
            .image-container p {
                margin-top: 10px;
                text-align: center;
                font-size: 14px;
            }
        </style>
        <script>
            function showPage(pageId) {
                const pages = document.querySelectorAll('.page');
                pages.forEach(page => page.classList.remove('active'));
                document.getElementById(pageId).classList.add('active');
            }
        </script>
    </head>
    <body>
        <nav>
            <a href="#" onclick="showPage('page1')">Page 1</a>
            <a href="#" onclick="showPage('page2')">Page 2</a>
            <a href="#" onclick="showPage('page3')">Page 3</a>
        </nav>
        <div id="page1" class="page active">
            <h1>Page 1</h1>
            <div class="image-container">
            <p>VK</p> 
            <img src="VK.png" alt="Description">
            </div>
        </div>
      <div id="page2" class="page">
        <h1>Page 2</h1>
        <div class="image-container">
            <p>RE-45</p> 
            <img src="RE-45.png" alt="Description">
        </div>
    </div>

  <div id="page3" class="page">
        <h1>Page 3</h1>
        <div class="image-container">
            <p>R99</p> 
            <img src="R99.png" alt="Description">
        </div>
    </div>
</body>
</html>

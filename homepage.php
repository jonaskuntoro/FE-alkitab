<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Belajar belajar belajar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- import bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
    
    /* HOMEPAGE */

    .h-navigation {
      display: flex;
      margin-right: 8%;
      margin-left: 8%;
      justify-content: space-between;
    }

    .h-navigation-arrow {
      text-decoration: none;
      background-color: #e9e9e9;
      color: black;
      border-radius: 360px;
      padding: 5px 10px;
    }

    .h-navigation-arrow:hover, .h-navigation-arrow:active {
      background-color: #2196f3;
      color: white;
    }

    /* HOMEPAGE END */
    </style>
</head>
<body>
    <div class="topnav">
        <a class="active"href="homepage.php">Alkitab</a>
        <a  href="penulis.php">Penulis</a>
        <div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Cari.." name="search">
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
      
      <!-- <div style="padding-left:50px">
        <h2>Responsive Search Bar</h2>
        <p>Navigation bar with a search box and a submit button inside of it.</p>
        <p>Resize the browser window to see the responsive effect.</p>
      </div> -->

      <main>
        <div class="dropdown">
            <label for="membership" >Jelajahi Alkitab :</label>
                <select name="membership" id="membership">
                    <option value="free">Free</option>
                    <option value="bronze">Bronze</option>
                    <option value="silver" selected>Silver</option>
                    <option value="Gold">Gold</option>
                </select>
                <select name="membership" id="membership">
                    <option value="free">Free</option>
                    <option value="bronze">Bronze</option>
                    <option value="silver" selected>Silver</option>
                    <option value="Gold">Gold</option>
                </select>
                <select name="membership" id="membership">
                    <option value="free">Free</option>
                    <option value="bronze">Bronze</option>
                    <option value="silver" selected>Silver</option>
                    <option value="Gold">Gold</option>
                </select>
        </div>
        <div class="h-navigation">
          <div class="h-navigation-item">
            <a class="h-navigation-arrow" href=""><i class="bi bi-arrow-left-circle-fill"></i> Prev</a>
          </div>
          <div class="h-navigation-item">
            <a class="h-navigation-arrow" href="">Next <i class="bi bi-arrow-right-circle-fill"></i></a>
          </div>
        </div>
      </main>
</body>
</html>
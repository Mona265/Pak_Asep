<!DOCTYPE html>
<!-- Template by quackit.com -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>About us</title>
    <style type="text/css">

        /* Layout */
        body {
            min-width: 630px;
        }

        #container {
            padding-left: 200px;
            padding-right: 190px;
        }
        
        #container .column {
            position: relative;
            float: left;
        }
        
        #center {
            padding: 10px 20px;
            width: 100%;
        }
        
        #left {
            width: 180px;
            padding: 0 10px;
            right: 240px;
            margin-left: -100%;
        }
        
        #right {
            width: 130px;
            padding: 0 10px;
            margin-right: -100%;
        }
        
        #footer {
            clear: both;
        }
        
        /* IE hack */
        * html #left {
            left: 150px;
        }

        /* Make the columns the same height as each other */
        #container {
            overflow: hidden;
        }

        #container .column {
            padding-bottom: 1001em;
            margin-bottom: -1000em;
        }

        /* Fix for the footer */
        * html body {
            overflow: hidden;
        }
        
        * html #footer-wrapper {
            float: left;
            position: relative;
            width: 100%;
            padding-bottom: 10010px;
            margin-bottom: -10000px;
            background: #fff;
        }

        /* Aesthetics */
        body {
            margin: 0;
            padding: 0;
            font-family:Sans-serif;
            line-height: 1.5em;
        }
        
        p {
            color: #555;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        
        nav ul a {
            color: darkgreen;
            text-decoration: none;
        }

        #header, #footer {
            font-size: large;
            padding: 0.3em;
            background: #BCCE98;
        }

        #left {
            background: #DAE9BC;
        }
        
        #right {
            background: #F7FDEB;
        }

        #center {
            background: #fff;
        }

        #container .column {
            padding-top: 1em;
        }
        
    </style>
    
    </head>

<body>

    <header id="header"><p>Header...</p></header>

    <div id="container">

        <main id="center" class="column">
            <article>
            
                <h1>Heading</h1>
                <p><script>generateText(50)</script></p>
            
            </article>                              
        </main>

        <nav id="left" class="column">
            <h3>Left heading</h3>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
                <li><a href="#">Link 5</a></li>
            </ul>
            <h3>Left heading</h3>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
                <li><a href="#">Link 5</a></li>
            </ul>

        </nav>

        <div id="right" class="column">
            <h3>Right heading</h3>
            <p><script>generateText(1)</script></p>
        </div>

    </div>

    <div id="footer-wrapper">
        <footer id="footer"><p>Footer...</p></footer>
    </div>

</body>

</html>


<!-- 
<?php
// Data 1
$about [] = array(
    
    // 'nim'    => 4617010059,
    // 'nama'   => 'Nadia Ela Sakina ',
    // 'kelas' => 'TI 5A',
    // 'Matkul' => 'WEB 2',
    // 'jurusan' => 'TIK'
);

// Data 2
$about [] = array(

    // 'nim'    => 4617010011,
    // 'nama'   => 'Nur Aminah',
    // 'kelas' => 'TI 5A',
    // 'Matkul' => 'WEB 2',
    // 'jurusan' => 'TIK'
  
);

// Data 3
$about [] = array(
  
    // 'nim'    => 4617010021,
    // 'nama'   => 'Ramona Matovani',
    // 'kelas' => 'TI 5A',
    // 'Matkul' => 'WEB 2',
    // 'jurusan' => 'TIK'
);

// Mengencode mswh menjadi json
// $jsonfile = json_encode($about, JSON_PRETTY_PRINT);

// Menyimpan msh ke dalam anggota.json
// file_put_contents('anggota.json', $jsonfile); 
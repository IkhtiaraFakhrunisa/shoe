<?php $products = [
    // multidimensional assosiative
    [
        "img" => "puma.png",
        "color" => "cpuma",
        "brand" => "PUMA",
        "name" => "R698 MID - SAKURA",
        "desc" => "Ronnie Fleg partners with Puma to redesign the R698. Inspired by Japanese sakura.",
        "price" => 5309791,
    ],
    [
        "img" => "nike.png",
        "color" => "cnike",
        "brand" => "NIKE",
        "name" => "AIR MAX 90 INFRARED",
        "desc" => "The \"Infrared\" collorway is without any doubt one of the most iconic in the Nike Air Max history.",
        "price" => 2389000,
    ],
    [
        "img" => "fila.png",
        "color" => "cfila",
        "brand" => "FILA",
        "name" => "RAY TRACER RETRO",
        "desc" => "FILA Ray Tracer, A combination of retro design with the most popular chunky sneaker style at this time.",
        "price" => 1469000,
    ],
    [
        "img" => "nb.png",
        "color" => "cnb",
        "brand" => "NEW BALANCE",
        "name" => "NEW BALANCE 2002",
        "desc" => "This nostalgic silhouette is made from premium suede and mesh for a look that will set you apart.",
        "price" => 2499000,
    ],
    [
        "img" => "reebok.png",
        "color" => "creebok",
        "brand" => "REEBOK",
        "name" => "FOREVER FLOATRIDE GROW",
        "desc" => "Lace up these women's Reebok Forever Floatride Grow Shoes, which are made of bio-based materials.",
        "price" => 3159842,
    ],
    [
        "img" => "adidas.png",
        "color" => "cadidas",
        "brand" => "ADIDAS",
        "name" => "YEEZY BOOSTS 350 V2",
        "desc" => "The YEEZY BOOST 350 V2 features an upper composed of re-engineered Primeknit. So fashion-able!",
        "price" => 4345838,
    ]
];

function intToIdr($num)
{
    return "Rp " . number_format($num, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap" rel="stylesheet">

    <style>
        /* * buat manggil semua tag, normalisasi page*/
        * { 
            margin: 0; 
            padding: 0;
            font-family: "Antonio", sans-serif;
        }
        /* lebar 100% menyesuaikan layar, display flex = salah satu layouting flexbox, default flexbox as baris
        justify-content = sumbu x, align-item = sumbu y, atribut bg membuat warna gradasi  */
        body {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to left, #38adae, #cd295a);
        }
        /* manggil tag html yg punya class bg. flex-direction utk mngubah mnjd kolom.*/
        .bg {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
        }
        /* manggil smua tag h1 di dlm tag nav. pke satuan px krna lbih mudah mnyesuaikn tmpilan prgkt */
        nav h1 {
            font-size: 50px;
            margin-bottom: 20px;
            color: #fff;
        }
        /* space-around = jarak */
        nav {
            width: 100%;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        nav p {
            color: #fff;
            font-size: 25px;
        }

        nav button {
            border: none;
            width: 200px;
            height: 35px;
            font-weight: 500;
            border-radius: 200px;
            color: #111;
            background: #eee;
        }

        nav button:hover {
            background: #ccc;
        }

        .border {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        /* flex-wrap utk responsif */
        .content-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
        }

        .left-side {
            display: flex;
            align-items: center;
        }

        .left-side img {
            width: 690px;
        }
        /* position mngtur sumbu z supya di dpn */
        .content {
            width: 207px;
            height: 315px;
            background: white;
            border-radius: 2px;
            position: relative;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .content img {
            width: 210px;
            position: absolute;
            top: -40px;
            left: -1px;
        }

        .desc {
            margin-top: 145px;
            text-align: center;
            padding: 0 20px;
        }

        .desc h4 {
            font-weight: 100;
            color: #999;
        }

        .desc h5 {
            font-size: .7rem;
            font-weight: 300;
            padding: 15px 0 20px 0;
        }

        .desc h2 {
            font-size: 1.1rem;
            font-weight: 800;
        }

        .desc button {
            padding: 5px 50px;
            border: none;
            border-radius: 50px;
            color: #fff;
        }

        .cpuma {
            background: #903053;
        }

        .cnike {
            background: #D23348;
        }

        .cfila {
            background: #11313A;
        }

        .cnb {
            background: #393D46;
        }

        .cadidas {
            background: #848481;
        }

        .creebok {
            background: #6E4D34;
        }
    </style>
</head>

<body>
    <div class="bg">
        <nav>
            <h1 align="left">"WORLD OF SHOES"</h1>
            <p id="profileName"></p>
            <button id="button"></button>
        </nav>
        <div class="border">
            <div class="left-side">
                <img src="img/leftside.png">
            </div>
            <div class="content-wrapper">
                <!-- conditional -->
                <?php foreach ($products as $product): ?>
                    <div class="content">
                        <img src="img/<?= $product["img"] ?>">
                        <div class="desc">
                            <h4><?= $product["brand"] ?></h4>
                            <h2><?= $product["name"] ?></h2>
                            <h5><?= $product["desc"] ?></h5>
                            <button class="<?= $product["color"] ?>"><?= intToIdr($product["price"]) ?></button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- guest name -->
    <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo "<script>
            document.querySelector('#profileName').innerHTML = 'Welcome, $name!'
            document.querySelector('#button').innerHTML = 'Logout'
            </script>";
    } else {
        $name = 'Guest';
        echo "<script>
            document.querySelector('#profileName').innerHTML = '$name'
                document.querySelector('#button').innerHTML = 'Sign Up'
            </script>";
    }
    ?>
    <script>
        const button = document.getElementById('button')
        button.addEventListener('click', function () {
            if (button.innerHTML == 'Logout') {
                setTimeout(() => {
                    alert('Logout Success')
                    window.location.href = 'index.php';
                }, 500);
            } else {
                window.location.href = 'signup.php'
            }
        })
    </script>
</body>

</html>
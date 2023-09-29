<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        /* تخصيص حجم ولون النص في شريط التنقل */
        .navbar.navbar-expand-lg.navbar-dark {
            background-color: black;
        }

        .navbar-brand {
            font-size: 20x; /* حجم النص */
            color: white; /* لون النص */
            text-decoration: none; /* إزالة التأثيرات النصية */
        }

        .navbar-toggler-icon {
            background-color: white; /* لون أيقونة القائمة الجانبية */
        }

        .navbar-nav .nav-link {
            font-size: 20x; /* حجم النص */
            color: white !important; /* لون النص وإلغاء أي لون موروث */
            text-decoration: none; /* إزالة التأثيرات النصية */
        }

        /* تخصيص الروابط عند التحويل إلى حالة مختارة (active) */
        .navbar-nav .nav-item.active .nav-link {
            font-weight: bold; /* تغيير وزن النص عند التحويل إلى حالة مختارة */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">
            <img class="rounded-circle" alt="Cinque Terre" src="images/CFPA.jpg" style="width: 15%; margin-right: 10px;">
              <!-- يمكنك استبداله بالاسم الذي تريده -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">الرئيسية <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./page/a.php">عروض التكوين</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./page/apropos.php">من نحن</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./page/contacter.php">اتصل بنا</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
<?php
include_once('./connection.php');

if(array_key_exists('submit', $_POST)) {

    $userFullName = $_POST['fullname'];
    $userPhoneNo = $_POST['phone'];
    $userBirthdate  = $_POST['birthdate'];
    $userCity = $_POST['city'];
    $userEmail = $_POST['email'];
    $userReport  = $_POST['myfile'];
    $userNatNo = $_POST['national-number'];
    $userDisType = $_POST['dis-type'];
    $userNationality = $_POST['nationality'];
    $user_photo = $_POST['photo'];

    $disType = $_POST['dis-type'];
    
    $sql = "INSERT INTO user_card(userFullName, userPhoneNo, userBirthdate, userCity, userEmail, userReport, userNatNo, userDisType, userNationality, user_photo)
         Values('$userFullName', '$userPhoneNo', '$userBirthdate', '$userCity', '$userEmail','$userReport', '$userNatNo', '$userDisType','$userNationality', '$user_photo')";

    $sql1 = "INSERT INTO disability_type(disability_type)
         Values('$disType')";

    if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {
        echo "<script>alert('شكرا لتقديم الطلب')</script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>وزارةالتنمية الاجتماعية</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">الصفحة الرئيسية</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            عن الوزارة
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="About.html">نشأة الوزارة وتطورها</a>
                            <a class="dropdown-item" href="Structure.html">الهيكل التنظيمي</a>
                            <a class="dropdown-item" href="ManagementSystem.html">نظام التنظيم الإداري</a>
                            <a class="dropdown-item" href="Booklet.html">الكتيب التنظيمي للوزارة</a>
                            <a class="dropdown-item" href="#">وزراء التنمية الاجتماعية</a>
                            <a class="dropdown-item" href="#">الأمناء العاملون للوزارة</a>
                            <a class="dropdown-item" href="Reports.html">التقارير السنوية</a>
                            <a class="dropdown-item" href="Budget.html">الموازنة</a>
                            <a class="dropdown-item" href="Rules.html">تشريعات خاصة بالوزارة</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            الخدمات
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="EleServices.html">خدمات إلكترونية</a>
                            <a class="dropdown-item" href="GovServices.html">خدمات حكومية</a>
                            <a class="dropdown-item" href="EmpServices.html">خدمات الموظفين</a>
                            <a class="dropdown-item" href="DirectoryServices.html">دليل الخدمات</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            المبادرات
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="Initiatives.html">مبادرات الوزارة</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            المركز الإعلامي
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">صور ومرئيات</a>
                            <a class="dropdown-item" href="#">الأخبار</a>
                            <a class="dropdown-item" href="#">معلومات عامة</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            اتصل بنا
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="3SerComplaints.html">الشكاوى والاقتراحات</a>
                            <a class="dropdown-item" href="#">روابط هامة</a>
                            <a class="dropdown-item" href="4FAQ.html">أسئلة شائعة</a>
                            <a class="dropdown-item" href="Contact.html">الموقع / هواتف الوزارة</a>
                        </div>
                    </li>
                    <li class="nav-item" id="logo_name">
                        <a class="nav-link" href="index.html">
                            <h5>المملكة الأردنية الهاشمية</h5>
                            <h5>وزارة التنمية الاجتماعية</h5>
                        </a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="index.html"><img src="img/logo.png"></a>
        </div>
    </nav>

    <div class="container">
        <div class="liftSide">
            <div class="header">
                <h3>تقديم طلب إصدار بطاقة ذوي الإعاقة</h3>
            </div>
            <div class="form">
              <form method="POST" action="?">
                <div class="row">
                    <div class="form-element">
                        <label>الجنسية</label>
                        <select name="nationality" required>
                            <option selected>أردني</option>
                            <option selected>غير ذلك</option>
                        </select>
                    </div>
                    <div class="form-element">
                        <label>الرقم الوطني</label>
                        <input type="text" required id="natNum2" name="national-number" required/>
                    </div>
                    <div class="form-element">
                        <label>تاريخ الميلاد</label>
                        <input type="date" name="birthdate" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-element">
                        <label>المحافظة</label>
                        <select name="city" required>
                            <option selected>--اختر--</option>
                            <option>عمان</option>
                            <option>الزرقاء</option>
                            <option>إربد</option>
                            <option>العقبة</option>
                            <option>عجلون</option>
                            <option>جرش</option>
                            <option>المفرق</option>
                            <option>الكرك</option>
                            <option>البلقاء</option>
                            <option>مأدبا</option>
                            <option>الطفيلة</option>
                            <option>معان</option>
                            <option>البلقاء</option>
                        </select>
                    </div>
                    <div class="form-element">
                        <label>الاسم الرباعي</label>
                        <input type="text" style="width: 210px;" name="fullname" placeholder="الاسم الأب الجد العائلة" required/>
                    </div>
                    <div class="form-element">
                        <label>يرجى إرفاق الصورة الشخصية</label>
                        <input type="file" id="myfile" name="photo" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-element">
                        <label>البريد الالكتروني</label>
                        <input type="email" style="width: 250px;" id="email" name="email" placeholder="name@gmail.com" required/>
                    </div>

                    <div class="form-element">
                        <label>رقم الهاتف</label>
                        <input type="tel" id="phone" name="phone"placeholder="000-000-0000"pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-element" required>
                        <label>نوع الإعاقة</label>
                        <select name="dis-type" required>
                            <option selected>--اختر--</option>
                            <option>ذهنية</option>
                            <option>سمعية</option>
                            <option>بصرية</option>
                            <option>العقبة</option>
                            <option>جسدية</option>
                            <option>التوحد</option>
                            <option>النفسية</option>
                            <option>التواصل</option>
                            <option> قصور الانتباه والنشاط الزائد</option>
                            <option>متعددة</option>
                        </select>
                    </div>
                    <div class="form-element">
                        <label>يرجى إرفاق التقرير الطبي</label>
                        <input type="file" id="myfile" name="myfile" required/>
                    </div>
                </div>
                <div class="row" id="txt">
                    <small>يرجى التحقق من أن جميع المعلومات تم إدخالها بشكل صحيح, سوف يتم إعلامكم بالمراحل القادمة.</small>
                </div>
                <div class="row" id="apply">
                    <button class="button" type="submit" name="submit">تقديم الطلب</button>
                </div>
    </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <hr class="light">
                    <h5>اتصل بنا</h5>
                    <hr class="light">
                    <p>هاتف: 9327 6567 962+</p>
                    <p>إيميل: contact@mosd.gov.jo</p>
                    <p>فاكس: 9961 6567 962+</p>
                    <p>ص.ب: 6720-1118</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>ساعات العمل</h5>
                    <hr class="light">
                    <p>من الأحد إلى الخميس</p>
                    <p>8:30am - 3:30pm</p>
                    <p><a href="3SerComplaints.html">الشكاوى والاقتراحات</a></p>
                    <p><a href="#">روابط هامة</a></p>
                    <p><a href="4FAQ.html">أسئلة شائعة</a></p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>موقعنا</h5>
                    <hr class="light">
                    <p>عمان - دوار الداخلية - خلف وكالة الأنباء بترا</p>
                    <!--Google map-->
                    <div id="map-container-google-1" class="z-depth-1-half map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27074.5398526817!2d35.891612257673735!3d31.97940798507938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1df495e2a2ca1136!2sMinistry%20of%20Social%20Development!5e0!3m2!1sen!2sjo!4v1600249323568!5m2!1sen!2sjo"
                            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
                <div class="col-12">
                    <hr class="light-100">
                    <h5>المملكة الأردنية الهاشمية - وزارة التنمية الاجتماعية - جميع الحقوق محفوظة &copy; 2020</h5>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
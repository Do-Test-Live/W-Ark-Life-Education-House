<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title>方舟生命教育館 | Ark Life Education House</title>
    <link rel="shortcut icon" href="assets/images/logo/favicon.ico" type="image/vnd.microsoft.icon"/>

    <!-- CSS Start -->
    <link href="assets/vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/vendor/FontAwesome/css/all.min.css" rel="stylesheet"/>
    <link href="assets/vendor/Bootstrap/font/bootstrap-icons.min.css" rel="stylesheet"/>
    <link href="assets/vendor/uikit/css/uikit.min.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet"/>

    <?php
    $organization = $name = $telephone = $email = $fax = $event_date  = $restrictedAreaPaper = $eventtime  =
    $kinderGardenChild = $numofSubKin = $primarySchoolStudent =  $numofSubPrimary = $middleSchoolStudent =
    $numofSubMiddle =  $collegeStudents =  $collegeStudentSub = $adult = $adultSub = $elderly = $disabledPerson =
    $disabledPersonSub = $numOfStaff = $activitySelection = $needMeals =  $language = $mealOptions = $ticketsMawan =
    $numOfMeals = $numOfTickets = $object = '';

    if (isset($_POST['dataSubmit'])) {
        $organization = $_POST['organization'];
        $name = $_POST['name'];
        $telephone = $_POST['telephone'];
        $fax = $_POST['fax'];
        $email = $_POST['email'];
        $event_date = $_POST['event_date'];
        $object = implode(", ", $_POST['object']);
        $restrictedAreaPaper = $_POST['restrictedAreaPaper'];
        $eventtime = $_POST['eventtime'];
        $kinderGardenChild = $_POST['kinderGardenChild'];
        $numofSubKin = $_POST['numofSubKin'];
        $primarySchoolStudent = $_POST['primarySchoolStudent'];
        $numofSubPrimary = $_POST['numofSubPrimary'];
        $middleSchoolStudent = $_POST['middleSchoolStudent'];
        $numofSubMiddle = $_POST['numofSubMiddle'];
        $collegeStudents = $_POST['collegeStudents'];
        $collegeStudentSub = $_POST['collegeStudentSub'];
        $adult = $_POST['adult'];
        $adultSub = $_POST['adultSub'];
        $elderly = $_POST['elderly'];
        $elderSub = $_POST['elderSub'];
        $disabledPerson = $_POST['disabledPerson'];
        $disabledPersonSub = $_POST['disabledPersonSub'];
        $numOfStaff = $_POST['numOfStaff'];
        $activitySelection = $_POST['activitySelection'];
        $needMeals = $_POST['needMeals'];
        $language = $_POST['language'];
        $mealOptions = $_POST['mealOptions'];
        $ticketsMawan = $_POST['ticketsMawan'];
        $numOfMeals = $_POST['numOfMeals'];
        $numOfTickets = $_POST['numOfTickets'];
    }
    ?>
</head>
<body>
<section id="submit-pdf">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="assets/images/logo/logo.png" class="img-fluid ark-data-logo" alt=""/>
            </div>
            <div class="col-10 text-center d-flex justify-content-center align-items-center">
                <h4 class="fw-bolder">
                    聖雅各福群會 方舟生命教育館<br/>
                    <span class="text-decoration-underline">報價單</span>
                </h4>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6 col-6">
                <p>
                    致︰ <?php echo $organization; ?><br/>
                    聯絡人︰ <?php echo $name; ?><br/>
                    電話︰ <?php echo $telephone; ?><br/>
                    傳真︰ <?php echo $fax; ?><br/>
                    電郵︰ <?php echo $email; ?><br/>
                    <br/>
                    活動日期︰ <?php echo date('d/m/Y',strtotime($event_date)); ?><br/>
                    對象︰<?php echo $object; ?>
                </p>
            </div>
            <div class="col-lg-6 col-6 d-flex justify-content-end align-items-end">
                <p>
                    報價單編號︰ <?php echo rand(1000, 9999); ?><br/>
                    報價單日期︰ <?php echo date('d/m/Y'); ?><br/>
                    製單員︰ Kasey So<br/>
                    電話︰ 34118666<br/>
                    電郵︰ cy.so@sjs.org.hk<br/>
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">內容</th>
                            <th scope="col">總額</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $activitySelection; ?></td>
                            <td><?php echo $mealOptions; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12">
                <p class="mt-2">
                    備註:<br/>
                    1. 報價有效期至 <?php
                    echo date('d/m/Y', strtotime('+7 days'));
                    ?>
                    <br/>
                    2. 如確認參觀活動,請在下方簽署或蓋印,連同活動申請表傳真或電郵至本館跟進<br/>
                    3. 每15位參加者豁免1位工作人員,額外工作人員收費每位$190
                </p>
                <p class="mt-5">
                    付款方法︰<br/>
                    支票/銀行或櫃員機轉賬/網上轉賬<br/>
                    銀行︰匯豐銀行HSBC<br/>
                    銀行戶口︰聖雅各福群會St. James' Settlement<br/>
                    戶口號碼︰111 287769 292<br/>
                    支票郵寄地址︰新界馬灣珀欣路33號香港挪亞方舟一樓方舟生命教育館
                </p>
            </div>
            <div class="col-12">
                <br/><br/>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center mt-4">
                <div>
                    <p>團體簽名或印章</p>
                    <img src="assets/images/seal.png" alt="" class="img-fluid"/>
                    <p>___________________________</p>
                    <p>日期︰ <?php echo date('d/m/Y'); ?></p>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center mt-4">
                <div>
                    <p>團體簽名或印章</p>
                    <img src="assets/images/blank.png" alt="" class="img-fluid"/>
                    <p>___________________________</p>
                    <p class="text-start">日期︰</p>
                </div>
            </div>
            <div class="col-12">
                <br/><br/><br/><br/>
            </div>
            <div class="col-6 mt-5 small">
                方舟生命教育館<br/>
                電話︰3411 8881<br/>
                電郵︰aleh@noahsark.com.hk<br/>
                地址︰新界馬灣珀欣路33號香港挪亞方舟一樓方舟生命教育館
            </div>
            <div class="col-6 d-flex align-items-end mt-5 small">
                傳真︰3411 8882<br/>
                網址︰www.aleh.org.hk
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4 mt-5">
                <button type="button" class="btn btn-dark ps-5 pe-5" onclick="getPDF()">Download PDF</button>
            </div>
        </div>
    </div>
</section>
<!-- JS Start -->
<script src="assets/vendor/Bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jQuery/jquery-3.6.4.min.js"></script>
<script src="assets/vendor/OwlCarousel/js/owl.carousel.min.js"></script>
<script src="assets/vendor/uikit/js/uikit.min.js"></script>
<script src="assets/vendor/uikit/js/uikit-icons.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"
        integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    function getPDF() {
        let currentDateTime = new Date();
        let customName = "<?php echo $name; ?>-ARK-Data-";

        let year = currentDateTime.getFullYear();
        let month = currentDateTime.getMonth() + 1;
        let day = currentDateTime.getDate();

        let hours = currentDateTime.getHours();
        let minutes = currentDateTime.getMinutes();
        let seconds = currentDateTime.getSeconds();

        let formattedDate = year + '' + (month < 10 ? '0' : '') + month + '' + (day < 10 ? '0' : '') + day;
        let formattedTime = (hours < 10 ? '0' : '') + hours + '' + (minutes < 10 ? '0' : '') + minutes + '' + (seconds < 10 ? '0' : '') + seconds;

        let formattedDateTime = customName + formattedDate + formattedTime;


        let element = document.getElementById('submit-pdf');

        let opt = {
            margin: 0.25,
            filename: formattedDateTime + '.pdf',
            image: {type: 'png', quality: 1},
            html2canvas: {scale: 1},
            jsPDF: {unit: 'in', format: [8.5, 15.25], orientation: 'portrait'}
        };

        html2pdf().set(opt).from(element).save();
    }
</script>
</body>
</html>
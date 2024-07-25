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
    error_reporting(0);
    $optionsArray = ["情緒小管家", "情理兼備", "快樂人生", "畫出平靜(和諧粉彩)", "畫出平靜(禪繞)", "畫出平靜(圓圈繪畫)", "新興運動", "劃出未來", "創出你想人生", "認識自我", "多元智能 : 反轉生命教育館", "我們這一家", "孝親工作坊", "&quot;觸&quot;得到的愛 – 親子按摩", "親子旅行日", "尋找友情的足跡", "桌遊一聚", "生命領袖", "快樂團隊", "欣賞與尊重", "選擇與為自己負責任", "接納與關懷", "守法小先鋒", "正向品德", "義工培訓", "方舟遊蹤－為你的遊歷增添樂趣", "馬灣名偵探 (包含戶外)", "吾生吾死 生死探索之旅", "離別中體驗愛", "重遊人生路", "對外培訓及支援服務主題講座", "對外培訓及支援服務工作坊", "企業培訓 及 度身訂造培訓"];

    $prices1 = ['', '', '', '$300 /位 / 2小時', '$300 /位 / 2小時', '$280 /位 / 2小時', '$300 /位 / 2小時', '', '', '', '', '$200 /位 / 2小時', '$170 /位 / 2小時', '', '$280 /位 / 2小時', '$300/位', '', '$170 / 位 / 2小時', '', '', '', '', '', '', '', '', '', '', '$280 /位 / 2小時', '', '', '', '', ''];

    $prices2 = ['$170 /位 / 2小時', '', '', '$300 /位 / 2小時', '$300 /位 / 2小時', '$280 /位 / 2小時', '$300 /位 / 2小時', '$170 /位 / 2小時', '', '', '', '$200 /位 / 2小時', '$170 /位 / 2小時', '$170 /位 / 2小時', '$280 /位 / 2小時', '', '$170 /位 / 2小時', '$170 /位 / 2小時', '', '$170 /位 / 2小時', '$170 /位 / 2小時', '$170 /位 / 2小時', '$170 /位 / 2小時', '$170 /位 / 2小時', '$170 /位 / 2小時', '$170 /位 / 2小時', '$170 /位 / 2小時', '', '$280 /位 / 2小時', '', '', '', '$170 /位 / 2小時', ''];

    $prices3 = ['', '$190 /位 / 2小時', '', '$300 /位 / 2小時', '$300 /位 / 2小時', '$280 /位 / 2小時', '$300 /位 / 2小時', '', '$190 /位 / 2小時', '$190 /位 / 2小時', '', '', '', '', '', '', '$190 /位 / 2小時', '$190 / 位 / 2小時', '', '$190 /位 / 2小時', '$190 /位 / 2小時', '$190 /位 / 2小時', '$190 /位 / 2小時', '$190 /位 / 2小時', '', '', '$190 /位 / 2小時', '', '', '$190 / 位 / 2小時', '', '$400 / 位 / 7小時', '$190 / 位 / 2小時', ''];

    $prices4 = ['', '', '', '$300 /位 / 2小時', '$300 /位 / 2小時', '$280 /位 / 2小時', '$300 /位 / 2小時', '', '', '$190 /位 / 2小時', '', '', '', '', '', '', '$190 /位 / 2小時', '$190 / 位 / 2小時', '', '$190 /位 / 2小時', '$190 /位 / 2小時', '$190 /位 / 2小時', '$190 /位 / 2小時', '$190 /位 / 2小時', '', '', '$190 /位 / 2小時', '', '', '$190 / 位 / 2小時', '', '$400 / 位 / 7小時', '$190 / 位 / 2小時', ''];

    $prices5 = ['', '', '$190 /位 / 2小時', '', '', '', '', '', '', '', '', '', '$230 /位 / 2小時', '', '$300 /位 / 2小時', '$350 /位', '', '$190 /位 / 2小時', '', '', '', '', '', '$190 /位 / 2小時', '', '$300 /位 / 2小時', '', '', '', '', '$190 /位 / 2小時'];

    $prices6 = ['', '', '$170 /位 / 2小時', '$300 /位 / 2小時', '$300 /位 / 2小時', '$280 /位 / 2小時', '$300 /位 / 2小時', '', '', '', '', '', '', '', '', '', '', '$170 /位 / 2小時', '', '', '$170 /位 / 2小時', '', '', '', '', '', '$170 /位 / 2小時', '', '', '', '', '', '', '$170 /位 / 2小時'];

    $prices7 = ['', '', '$170 /位 / 2小時', '$300 /位 / 2小時', '$300 /位 / 2小時', '$280 /位 / 2小時', '$300 /位 / 2小時', '', '', '', '', '', '', '', '', '', '', '$170 /位 / 2小時', '', '', '$170 /位 / 2小時', '', '', '', '', '', '$170 /位 / 2小時', '', '', '', '', '', '', '$170 /位 / 2小時'];


    $program_cost = 0;
    $food_cost = 0;
    $worker_cost = 0;
    $ticket_cost = 0;

    $organization = $name = $telephone = $email = $fax = $event_date = $restrictedAreaPaper = $eventtime =
    $kinderGardenChild = $numofSubKin = $primarySchoolStudent = $numofSubPrimary = $middleSchoolStudent =
    $numofSubMiddle = $collegeStudents = $collegeStudentSub = $adult = $adultSub = $elderly = $disabledPerson =
    $disabledPersonSub = $numOfStaff = $activitySelection = $needMeals = $language = $mealOptions = $ticketsMawan =
    $numOfMeals = $numOfTickets = $object = $price = '';

    if (isset($_POST['dataSubmit'])) {
        $organization = $_POST['organization'];
        $name = $_POST['name'];
        $telephone = $_POST['telephone'];
        $fax = $_POST['fax'];
        $email = $_POST['email'];
        $event_date = $_POST['event_date'];
        $activitySelection = $_POST['activitySelection'];
        $object = implode(", ", $_POST['object']);
        $newobject = explode(", ", $object);


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

        $needMeals = $_POST['needMeals'];

        $mealOptions = $_POST['mealOptions'];
        $ticketsMawan = $_POST['ticketsMawan'];
        $numOfMeals = $_POST['numOfMeals'];
        $numOfTickets = $_POST['numOfTickets'];


        $key = array_search($activitySelection, $optionsArray);

        $languageCost = $_POST['language'];

        for ($i = 0; $i < count($newobject); $i++) {

            if ($newobject[$i] == '幼稚園/親子') {
                $price .= $prices1[$key] . '<br/>';
                preg_match('/\$(\d+) \/位/', $prices1[$key], $matches);
                if (isset($matches[1])) {
                    $program_cost += $matches[1] * $numofSubKin * $languageCost;
                }
            } else if ($newobject[$i] == '小學生') {
                $price .= $prices2[$key] . '<br/>';
                preg_match('/\$(\d+) \/位/', $prices2[$key], $matches);
                if (isset($matches[1])) {
                    $program_cost += $matches[1] * $numofSubPrimary * $languageCost;
                }
            } else if ($newobject[$i] == '中學生') {
                $price .= $prices3[$key] . '<br/>';
                preg_match('/\$(\d+) \/位/', $prices3[$key], $matches);
                if (isset($matches[1])) {
                    $program_cost += $matches[1] * $numofSubMiddle * $languageCost;
                }
            } else if ($newobject[$i] == '大專生/大學生') {
                $price .= $prices4[$key] . '<br/>';
                preg_match('/\$(\d+) \/位/', $prices4[$key], $matches);
                if (isset($matches[1])) {
                    $program_cost += $matches[1] * $collegeStudentSub * $languageCost;
                }
            } else if ($newobject[$i] == '成人(64歲或以下)') {
                $price .= $prices5[$key] . '<br/>';
                preg_match('/\$(\d+) \/位/', $prices5[$key], $matches);
                if (isset($matches[1])) {
                    $program_cost += $matches[1] * $adultSub * $languageCost;
                }
            } else if ($newobject[$i] == '長者(65歲或以上)') {
                $price .= $prices6[$key] . '<br/>';
                preg_match('/\$(\d+) \/位/', $prices6[$key], $matches);
                if (isset($matches[1])) {
                    $program_cost += $matches[1] * $elderSub * $languageCost;
                }
            } else if ($newobject[$i] == '殘疾人士') {
                $price .= $prices7[$key] . '<br/>';
                preg_match('/\$(\d+) \/位/', $prices7[$key], $matches);
                if (isset($matches[1])) {
                    $program_cost += $matches[1] * $disabledPersonSub * $languageCost;
                }
            }
        }

        $worker_cost = 190 * $numOfStaff;

        if ($worker_cost < 0) {
            $worker_cost = 0;
        }

        $food_cost = $mealOptions * $numOfMeals;

        $ticket_cost = 125 * $numOfTickets;

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
                    活動日期︰ <?php echo date('d/m/Y', strtotime($event_date)); ?><br/>
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
                            <td><?php
                                if($program_cost<=0){
                                    ?>
                                    此活動內容不適合閣下之選取對象，如需了解更多，請致電至3411 8881或<br/>
                                    電郵至aleh@noahsark.com.hk查詢<br/>
                                    This program is not recommended for your selected participants, kindly contact<br/>
                                    us at 34118881 or via email aleh@noahsark.com.hk for any further support
                                    <?php
                                }
                                else{
                                    echo $activitySelection;
                                }
                                ?></td>
                            <td>
                                <?php
                                if($program_cost<=0){
                                ?>
                                    N/A
                                    <?php
                                }
                                else{
                                   ?>
                                    $<?php echo $program_cost + $worker_cost + $food_cost + $ticket_cost; ?>
                                <?php
                                }
                                ?>
                            </td>
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
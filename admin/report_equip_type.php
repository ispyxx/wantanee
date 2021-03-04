<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<style>
    body {
        font-family: "Chakra Petch", sans-serif;
        color: #111111;
    }

    #head-color {
        border-style: groove;
    }

    h4 {
        text-align: center;
    }

    #groove {
        border-style: groove;
    }

    #betweentop1 {
        margin-bottom: 40px;
    }

    #betweentop2 {
        margin-bottom: 30px;
    }

    #between3 {
        margin-bottom: 15px;
    }

    #betweentop3 {
        margin-top: 50px;
    }

    #betweentop4 {
        margin-bottom: 100px;
    }

    #year-center {
        text-align: center;
    }

    #font-center {
        text-align: center;
    }

    #button-center {
        margin-top: 10px;
        text-align: center;
    }

    /* ปริ้น ซ่อน*/
    @media print {
        #hid {
            display: none;
            /* ซ่อน  */
        }
    }
</style>

<body>

    <!-- <div id="head-color"> -->
    <div id="betweentop1"></div>
    <form id="search" name="search" method="post">

        <div class="container">
            <h4>รายงานสถิติการเช่าอุปกรณ์จำแนกตามประเภท<h4>
                    <div id="betweentop2"></div>
<!-- 
                    <div class="container col-3">
                        <select class="form-select" aria-label="Default select example" name="type" id="type">
                            <option selected Disabled>--กรุณาประเภทอุปกรณ์--</option>
                            <option value="1">เต็นท์</option>
                            <option value="2">โต๊ะ</option>
                            <option value="3">เก้าอี้</option>
                        </select>
                    </div> -->

                    <div class="container col-2" >
                        <select class="form-select" aria-label="Default select example" name="type" id="type">
                        <option selected Disabled >--กรุณาเลือกประเภท--</option>
                        <option value="1">เต๊นท์</option>
                        <option value="2">โต๊ะ</option>
                        <option value="3">เก้าอี้</option>
                        </select>
                        </div>
                    
                    <div id="between3"></div>

                    <div class="container col-3">
                        <select class="form-select" aria-label="Default select example" name="year" id="year">
                            <option selected Disabled>--กรุณาเลือกปี--</option>
                            <option value="2019">2562</option>
                            <option value="2020">2563</option>
                            <option value="2021">2564</option>
                            <option value="2022">2565</option>
                            <option value="2023">2566</option>
                            <option value="2024">2567</option>
                        </select>
                    </div>

                    <div id="between3"></div>

                    <div class="container col-3">
                        <select class="form-select" aria-label="Default select example" name="month" id="month">
                            <option selected Disabled>--กรุณาเลือกเดือน--</option>
                            <option value="01">มกราคม</option>
                            <option value="02">กุมภาพันธ์</option>
                            <option value="03">มีนาคม</option>
                            <option value="04">เมษายน</option>
                            <option value="05">พฤษภาคม</option>
                            <option value="06">มิถุนายน</option>
                            <option value="07">กรกฎาคม</option>
                            <option value="08">สิงหาคม</option>
                            <option value="09">กันยายน</option>
                            <option value="10">ตุลาคม</option>
                            <option value="11">พฤศจิกายน</option>
                            <option value="12">ธันวาคม</option>

                        </select>
                    </div>

        </div>
        <div id="between3"></div>
        <div id="button-center">
            <button type="submit" class="btn btn-dark col-1">เลือก</button>
        </div>
    </form>
    <!-- </div> -->
    <!-- </div> // ตัวเลือกปี เดือน ด้านบนของเว็บ -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "search_report_equip_type_ajax.php",
                    data: formData,
                    dataType: 'html',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {

                        $('#search_show').html(data);
                    },
                    error: function(data) {
                        alert("no");
                        $('#search_show').html("ไม่พบข้อมูล");
                    }
                });
            });
        });
    </script>

    <div id="betweentop1"></div>
    <div class="container col-9 " id="search_show">


    </div>

</body>
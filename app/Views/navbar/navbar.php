<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/dataTables.bootstrap5.min.css" />
    <title>BPB dan Reservation</title>

</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg bg-custom-blue fixed-top ">
        <div class="container-fluid"><a
                class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold text-light">logo</a>
            <div class="collapse navbar-collapse" id="topNavBar">
                <ul class="navbar-nav d-flex ms-auto my-3 my-lg-0">
                    <li class="nav-item dropdown"><a class="nav-link ms-2 text-light" aria-expanded="false"><i
                                class="bi bi-person-fill me-1"></i>MONALISA </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- < !-- top navigation bar -->
    <!-- < !-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-custom-blue" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li><a href="/" class="nav-link px-3 active"><span class="me-2"><i
                                    class="bi bi-house-door-fill"></i></span><span>Dashboard</span></a></li>
                    <li><a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#BPB"><span
                                class="me-2"><i class="bi bi-journal-text"></i></span><span>BPB</span><span
                                class="ms-auto"><span class="right-icon"><i
                                        class="bi bi-caret-down-fill"></i></span></span></a>
                        <div class="collapse" id="BPB">
                            <ul class="navbar-nav ps-3">
                                <li><a href="<?= base_url('/BPB/monbpb'); ?>" class="nav-link px-3"><span
                                            class="me-2 "><i class="bi bi-circle-fill"></i></span><span>Monitoring
                                            BPB</span></a></li>
                                <li><a href="#" class="nav-link px-3"><span class="me-2"><i
                                                class="bi bi-circle-fill"></i></span><span>Report
                                            BPB</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#Reservation"><span
                                class="me-2"><i class="bi bi-building"></i></span><span>Reservation</span><span
                                class="ms-auto"><span class="right-icon"><i
                                        class="bi bi-caret-down-fill"></i></span></span></a>
                        <div class="collapse" id="Reservation">
                            <ul class="navbar-nav ps-3">
                                <li><a href="<?= base_url('/Reservation/monrev'); ?>" class="nav-link px-3"><span
                                            class="me-2"><i class="bi bi-circle-fill"></i></span><span>Monitoring
                                            Reservation</span></a></li>
                                <li><a href="<?= base_url('/Reservation/report'); ?>" class="nav-link px-3"><span
                                            class="me-2"><i class="bi bi-circle-fill"></i></span><span>Report
                                            Reservation</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#Management"><span
                                class="me-2"><i class="bi bi-list-check"></i></span><span>Management
                                User</span><span class="ms-auto"><span class="right-icon"><i
                                        class="bi bi-caret-down-fill"></i></span></span></a></li>
                </ul>
            </nav>
        </div>
    </div><?= $this->renderSection('content');
            ?>
    <!-- < !-- js -->
    <script src="<?= base_url(); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="<?= base_url(); ?>/js/jquery-3.5.1.js"></script>
    <script src="<?= base_url(); ?>/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url(); ?>/js/script.js"></script>

    <script>
    $("#myTable").DataTable({
        order: [
            [0, 'desc']
        ],
        "language": {
            "lengthMenu": "Show_MENU_",
        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'1>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +

            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectLOKASI = document.getElementById('LOKASI');
        const ADR1Input = document.getElementById("ADR1");
        const ADR2Input = document.getElementById("ADR2");
        const ADR3Input = document.getElementById("ADR3");
        const CPN1Input = document.getElementById("CPN1");
        const TPN1Input = document.getElementById("TPN1");
        const CPN2Input = document.getElementById("CPN2");
        const TPN2Input = document.getElementById("TPN2");

        selectLOKASI.addEventListener('change', function() {
            const selectedOption = selectLOKASI.options[selectLOKASI.selectedIndex];
            ADR1Input.value = selectedOption.getAttribute("data-ADR1");
            ADR2Input.value = selectedOption.getAttribute("data-ADR2");
            ADR3Input.value = selectedOption.getAttribute("data-ADR3");
            CPN1Input.value = selectedOption.getAttribute("data-CPN1");
            TPN1Input.value = selectedOption.getAttribute("data-TPN1");
            CPN2Input.value = selectedOption.getAttribute("data-CPN2");
            TPN2Input.value = selectedOption.getAttribute("data-TPN2");
        });
    });
    </script>

    <script>
    var vendorInputTable = document.querySelectorAll('[data-form-input="VENDOR_FORM"]');
    var vendorFormInput = document.getElementById("VENDOR_FORM");

    vendorInputTable.forEach(function(input) {
        input.addEventListener("input", function() {
            vendorFormInput.value = this.value;
        });
    });
    </script>

</body>

</html>
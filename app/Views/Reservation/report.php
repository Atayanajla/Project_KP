<?= $this->extend('/navbar/navbar');  ?>

<?= $this->section('content');  ?>

<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>Create Reservation</h3>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <a href="<?= base_url('/Reservation/monrev'); ?>">
                <button class="btn btn-primary ml-auto btn-sm" type="submit">Back</button>
            </a>
        </div>

        <form action="<?= base_url('/product/store') ?>" method="post">
            <table class="table table-borderless">
                <colgroup>
                    <col style="width: 125px;">
                    <col style="width: 100px;">
                    <col style="width: 700px;">
                </colgroup>
                <tbody>
                    <tr>
                        <td>Base Date</td>
                        <td> <input type="datetime-local" name="RSDATE"></td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Checks againts cal.
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Movement Type</td>
                        <td><input name="MOVTP" id="inputBaseDate" class="form-control"
                                aria-describedby="passwordHelpInline"></td>
                        <td>TF trfr within plant</td>
                    </tr>
                    <tr>
                        <td>Src SLoc</td>
                        <td><input name="SLCAWAL" id="inputBaseDate" class="form-control"
                                aria-describedby="passwordHelpInline"></td>
                    </tr>
                    <tr>
                        <td>Goods Recipient</td>
                        <td><input name="WEMPF" id="inputBaseDate" class="form-control"
                                aria-describedby="passwordHelpInline"></td>
                    </tr>
                </tbody>
            </table>

            <div class="card mb-3">
                <div class="card-header">
                    <h6>Items</h6>
                </div>
                <div class="container mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tabel-data">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Item</th>
                                    <th class="text-center" scope="col">Material</th>
                                    <th class="text-center" scope="col">Quantity In</th>
                                    <th class="text-center" scope="col">UnE</th>
                                    <th class="text-center" scope="col">Plnt</th>
                                    <th class="text-center" scope="col">SLoc</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="templateRow">
                                    <td><input name="RSNUM" class="form-control form-control-sm" type="number"
                                            class="form-control"></td>
                                    <td>
                                        <select class='form-select' id='ID_MATERIAL' name='ID_MATERIAL'>
                                            <option value=""></option>
                                            <?php foreach ($ID_MATERIAL as $row): ?>
                                            <option value="<?= $row['ID_MATERIAL']; ?>"> <?= $row['ID_MATERIAL']; ?>
                                            </option>
                                            <?php endforeach; ?>

                                        </select>
                                    </td>
                                    <td><input name="QUTTY" class="form-control form-control-sm" type="number"
                                            class="form-control"></td>
                                    <td><input id="UnE" class="form-control form-control-sm" type="text"
                                            class="form-control"></td>
                                    <td class="text-center">1000</td>
                                    <td><input name="SLCTUJU" class="form-control form-control-sm" type="text"
                                            class="form-control"></td>

                                    <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const selectID_MATERIAL = document.getElementById('ID_MATERIAL');
                                        const UnEInput = document.getElementById("UnE");


                                        selectID_MATERIAL.addEventListener('change', function() {
                                            const selectedOption = selectID_MATERIAL.options[
                                                selectID_MATERIAL.selectedIndex];
                                            UnEInput.value = selectedOption.getAttribute("data-UnE");

                                        });
                                    });
                                    </script>

                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Detail
                                        </button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card text-dark bg-light mb-3"
                                                            style="max-width: 18rem;">
                                                            <div class="card-header">Detail of Item 1</div>
                                                            <div class="card-body text-dark">
                                                                <p class="card-text">TF trfr within plant</p>
                                                                <p class="card-text">PT. INTI</p>
                                                                <p class="card-text">SET TOP BOX DVB T2-1407 INTI</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="card mt-3">
                                                        <div class="card-header">
                                                            Further Information
                                                        </div>
                                                        <div class="card-body">
                                                            <table class="table table-borderless">
                                                                <colgroup>
                                                                    <col style="width: 15%;">
                                                                    <col style="width: 25%;">
                                                                    <col style="width: 15%;">
                                                                    <col style="width: 25%;">
                                                                </colgroup>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Reqmt Date</td>
                                                                        <td> <input type="datetime-local" name="BDTER">
                                                                        </td>
                                                                        <td>Text</td>
                                                                        <td><input id="inputBaseDate"
                                                                                class="form-control"
                                                                                aria-describedby="passwordHelpInline">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault">
                                                                                Mvt allowed
                                                                            </label>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Stock keeping Unit</td>
                                                                        <td><input id="inputBaseDate"
                                                                                class="form-control"
                                                                                aria-describedby="passwordHelpInline">
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>WBS Awal</td>
                                                                        <td><input name="WBSAWAL" id="inputWBSAWAL"
                                                                                class="form-control"
                                                                                aria-describedby="passwordHelpInline">
                                                                        </td>
                                                                        <td>WBS Tujuan</td>
                                                                        <td><input name="WBSTUJU" id="inputWBSTUJU"
                                                                                class="form-control"
                                                                                aria-describedby="passwordHelpInline">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                        <button type="button" class="btn btn-primary"
                                                            id="tombolSimpan">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                    </td>
                    </tr>
                    <tr>

                        <td><input class="form-control form-control-sm" type="number" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input class="form-control form-control-sm" type="number" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td class="text-center">1000</td>
                        <td><input type="text" class="form-control"></td>
                        <td><button type="submit" class="btn btn-primary btn-sm">Detail</button></td>
                    </tr>
                    <tr>
                        <td><input class="form-control form-control-sm" type="number" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input class="form-control form-control-sm" type="number" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td class="text-center">1000</td>
                        <td><input type="text" class="form-control"></td>
                        <td><button type="submit" class="btn btn-primary btn-sm">Detail</button></td>
                    </tr>
                    </tbody>
                    </table>
                    <button id="addRowButton">Tambah Baris</button>

                    <script>
                    document.getElementById("addRowButton").addEventListener("click", function(event) {
                        event.preventDefault();

                        var table = document.getElementById(
                            "tabel-data");
                        var newRow = table.insertRow();


                        var cell1 = newRow.insertCell(0);
                        var cell2 = newRow.insertCell(1);
                        var cell3 = newRow.insertCell(2);
                        var cell4 = newRow.insertCell(3);
                        var cell5 = newRow.insertCell(4);
                        var cell6 = newRow.insertCell(5);
                        var cell7 = newRow.insertCell(6);

                        cell1.innerHTML =
                            '<input class="form-control form-control-sm" type="number" class="form-control">';
                        cell2.innerHTML = '<input type="text" class="form-control">';
                        cell3.innerHTML =
                            '<input class="form-control form-control-sm" type="number" class="form-control">';
                        cell4.innerHTML = '<input type="text" class="form-control">';
                        cell5.innerHTML = '<p class="text-center">1000</p>';
                        cell6.innerHTML = '<input type="text" class="form-control">';
                        cell7.innerHTML =
                            '<button type="submit" class="btn btn-primary btn-sm">Detail</button>  ';

                    });
                    </script>

                </div>
                <div class="d-flex justify-content-end">
                    <div class="btn-group" role="group" aria-label="Button group with space">
                        <button id="printButton" type="button" class="btn btn-warning btn-sm me-auto">Print</button>
                        <button type="submit" class="btn btn-info btn-sm">Save</button>
                        <button type="button" class="btn btn-danger btn-sm ms-auto">Cancel</button>
                    </div>
                </div>
        </form>
    </div>

    <style>
    .table th {
        width: 120px;
    }
    </style>
    </div>







    <!-- <div class="d-flex justify-content-end">
      <div class="btn-group" role="group" aria-label="Button group with space">
        <button id="printButton" type="button" class="btn btn-warning btn-sm me-auto">Print</button>
        <button type="submit" class="btn btn-info btn-sm">Save</button>
        <button type="button" class="btn btn-danger btn-sm ms-auto">Cancel</button>
      </div>
    </div> -->


    </div>

    <script>
    document.getElementById("printButton").addEventListener("click", function() {
        window.print();
    });
    </script>

</main>

<?= $this->endSection('content');  ?>
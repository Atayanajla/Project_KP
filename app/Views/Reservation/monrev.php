<?= $this->extend('/navbar/navbar');  ?>

<?= $this->section('content');  ?>

<main class="mt-5 pt-3">
    <div class="container-fluid">
        <h3 class="fw-bold mt-4 ms-2">Monitoring Reservation</h3>

        <div class="row mt-4 ps-1">
            <a href="<?= base_url('/Reservation/report'); ?>">
                <button type="submit" class="btn btn-primary"><i class="bi bi-plus"></i>Buat
                    BPB</button>
            </a>
        </div>

        <div class="mt-5">
            <table class="table text-center table-bordered table-top-rounded border-primary" id="myTable">
                <thead class="table-primary border-primary align-middle">
                    <tr>
                        <th class="fw-normal text-small">Base Date</th>
                        <th class="fw-normal text-small col-1">Movement Type</th>
                        <th class="fw-normal text-small col-1">Rcvg Sloc</th>
                        <th class="fw-normal text-small col-1">Goods Recipient</th>
                        <th class="fw-normal text-small ">Item</th>
                        <th class="fw-normal text-small">Material</th>
                        <th class="fw-normal text-small col-1">Quantity In</th>
                        <th class="fw-normal text-small">UnE</th>
                        <th class="fw-normal text-small col-1">Plnt</th>
                        <th class="fw-normal text-small col-1">Sloc</th>
                        <th class="fw-normal text-small">No Polisi</th>
                        <th class="fw-normal text-small col-1">M</th>
                        <th class="fw-normal text-small col-1">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($MM_REQUEST_RESERVASI as $data) : ?>
                    <tr>
                        <td><?= $data['RSDATE']; ?></td>
                        <td><?= $data['MOVTP']; ?></td>
                        <td><?= $data['SLCTUJU']; ?></td>
                        <td><?= $data['WEMPF']; ?></td>
                        <td><?= $data['RSNUM']; ?></td>
                        <td><?= $data['MATNO']; ?></td>
                        <td><?= $data['QUTTY']; ?></td>
                        <td>?</td>
                        <td>1000</td>
                        <td><?= $data['SLCAWAL']; ?></td>
                        <td>?</td>
                        <td><?= $data['RSREL']; ?></td>
                        <td>?</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?= $this->endSection('content');  ?>
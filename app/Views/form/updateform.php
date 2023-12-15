<?= $this->extend('/navbar/navbar');  ?>

<?= $this->section('content');  ?>

<main class="mt-5 pt-3">
    <div class="container">
        <h3 class="fw-bold mt-4 ms-2">Form BPB</h3>

        <div class="input-group col-md-3 d-flex flex-row-reverse mt-4">
            <a href="<?= base_url('/BPB/monbpb'); ?>">
                <button type="submit" class="btn btn-primary">back</button>
            </a>
        </div>

        <div class="mt-4">
            <form action="<?= base_url('/form/updateform/' . $MM_LIST_BPB['BPBNO']); ?>" method="post">
                <div class="row small-text">
                    <div class="col-5">
                        <div class="pt-3 shadow-lg p-2 mb-4 rounded border border-light-subtle">
                            <div class="m-1 mb-4 mt-4">
                                <div class="mb-2 row">
                                    <label for="MBLNR" class="col-sm-4 col-form-label small-text">Material
                                        Document </label>
                                    <div class="col-sm-8">
                                        <input type="text" style="height: 30px;" class="form-control small-text"
                                            id="MBLNR" name="MBLNR" value="<?= $MM_LIST_BPB['MBLNR'] ?? ''; ?>"
                                            readonly>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="BUDAT" class="col-sm-4 col-form-label small-text">Posting Date
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="date" style="height: 30px;" class="form-control small-text"
                                            id="BUDAT" name="BUDAT"
                                            value="<?= date('Y-m-d', strtotime($MM_LIST_BPB['BUDAT'])); ?>">
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="BPBNO" class="col-sm-4 col-form-label small-text">No BPB </label>
                                    <div class="col-sm-8">
                                        <input type="text" style="height: 30px;" class="form-control" id="BPBNO"
                                            name="BPBNO" value="<?= $MM_LIST_BPB['BPBNO'] ?? ''; ?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="KUNNR" class="col-sm-4 col-form-label small-text">Dikirim Kepada
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" style="height: 30px; width: 100%;"
                                            class="form-control-underline" id="KUNNR" name="KUNNR"
                                            value="<?= $MM_LIST_BPB['KUNNR'] ?? ''; ?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="CUSTOMER" class="col-sm-4 col-form-label small-text">Desc Cust </label>
                                    <div class="col-sm-8">
                                        <input type="tetx" style="height: 30px; width: 100%;"
                                            class="form-control-underline" id="CUSTOMER" name="CUSTOMER"
                                            value="<?= $MM_LIST_BPB['COSTOMER'] ?? ''; ?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="LOKASI" class="col-sm-4 col-form-label small-text">Lokasi </label>
                                    <div class="col-sm-8">
                                        <select class="form-select small-text" style="height: 30px;" id="LOKASI"
                                            name="LOKASI">
                                            <option><?= $MM_LIST_BPB['LOKASI'] ?? ''; ?></option>
                                            <?php foreach ($LOKASI as $row) : ?>
                                            <option value="<?= $row['LOKASI']; ?>"
                                                <?php if ($row['LOKASI'] == ($MM_LIST_BPB['LOKASI'] ?? '')) echo 'selected'; ?>
                                                data-ADR1="<?= $row['ADR1']; ?>" data-ADR2="<?= $row['ADR2']; ?>"
                                                data-ADR3="<?= $row['ADR3']; ?>" data-CPN1="<?= $row['CPN1']; ?>"
                                                data-TPN1="<?= $row['TPN1']; ?>" data-CPN2="<?= $row['CPN2']; ?>"
                                                data-TPN2="<?= $row['TPN2']; ?>">
                                                <?= $row['LOKASI']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4 row ">
                                    <label for="ADR1" class="col-sm-4 col-form-label small-text">Alamat </label>
                                    <div class="form-row col-sm-8">
                                        <div class="col ">
                                            <input type="text" style="height: 30px;" class="form-control small-text"
                                                id="ADR1" name="ADR1" value="<?= $MM_LIST_BPB['ADR1'] ?? ''; ?>">
                                        </div>
                                        <div class="col mt-2">
                                            <input type="text" style="height: 30px;" class="form-control small-text"
                                                id="ADR2" name="ADR2" value="<?= $MM_LIST_BPB['ADR2'] ?? ''; ?>">
                                        </div>
                                        <div class="col mt-2">
                                            <input type="text" style="height: 30px;" class="form-control small-text"
                                                id="ADR3" name="ADR3" value="<?= $MM_LIST_BPB['ADR3'] ?? ''; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="CPN1" class="col-sm-4 col-form-label small-text">Contact Person 1
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" style="height: 30px; width: 100%;"
                                            class="form-control-underline" id="CPN1" name="CPN1"
                                            value="<?= $MM_LIST_BPB['CPN1'] ?? ''; ?>">
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="TPN1" class="col-sm-4 col-form-label small-text">Telepon Cp1 </label>
                                    <div class="col-sm-8">
                                        <input type="number" style="height: 30px;" class="form-control" id="TPN1"
                                            name="TPN1" value="<?= $MM_LIST_BPB['TPN1'] ?? ''; ?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="CPN2" class="col-sm-4 col-form-label small-text">Contact Person 2
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" style="height: 30px; width: 100%; "
                                            class="form-control-underline" id="CPN2" name="CPN2"
                                            value="<?= $MM_LIST_BPB['CPN2'] ?? ''; ?>">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="TPN2" class="col-sm-4 col-form-label small-text">Telepon Cp 2
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="number" style="height: 30px;" class="form-control" id="TPN2"
                                            name="TPN2" value="<?= $MM_LIST_BPB['TPN2'] ?? ''; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-7 mt-1">
                        <div class="table-responsive">
                            <table class="table shadow text-center border table-borderless">
                                <thead class="align-middle border">
                                    <tr class="border">
                                        <th class="border-end fw-normal">Nomor Bundle</th>
                                        <th class="border-end fw-normal">Tanggal Kirim</th>
                                        <th class="border-end fw-normal">Kontak/PO No</th>
                                        <th class="border-end fw-normal">Tanggal PO</th>
                                        <th class="fw-normal">Expedit</th>
                                    </tr>
                                </thead>
                                <tbody style="height: 70px;">
                                    <th class="border-end"><input class="no-border text-center"
                                            style="max-width: 100px;" type="text" name="BUNDLE[]"
                                            value="<?= $MM_LIST_BPB['BUNDLE']; ?>" />
                                    </th>
                                    <th class="border-end">
                                        <input class="no-border text-center" style="max-width: 100px;" type="date"
                                            name="TGL_KIRIM"
                                            value="<?= date('Y-m-d', strtotime($MM_LIST_BPB['TGL_KIRIM'])); ?>" />
                                    </th>
                                    <th class="border-end "><input class="no-border text-center"
                                            style="max-width: 100px;" type="text" name="ZPONO[]"
                                            value="<?= $MM_LIST_BPB['ZPONO'] ?? ''; ?>" />
                                    </th>
                                    <th class="border-end"><input class="no-border text-center"
                                            style="max-width: 100px;" type="date" name="PODAT"
                                            value="<?= date('Y-m-d', strtotime($MM_LIST_BPB['PODAT'])); ?>" />
                                    <th>
                                        <input class="no-border text-center" style="max-width: 100px;" type="text"
                                            name="VENDOR[]" data-form-input="VENDOR_FORM"
                                            value="<?= $MM_LIST_BPB['VENDOR'] ?? ''; ?>" />
                                    </th>
                                </tbody>
                            </table>
                        </div>

                        <div class="pt-3 shadow-lg mb-3 rounded border border-light-subtle">
                            <div class="m-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row mb-1">
                                            <label for="VENDOR" class="col-sm-5 col-form-label small-text">Vendor
                                                Name</label>
                                            <div class="col-sm-7">
                                                <input type="text" style="height: 30px;" class="form-control"
                                                    nama="VENDOR" id="VENDOR_FORM"
                                                    value="<?= $MM_LIST_BPB['VENDOR'] ?? ''; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <label for="KET"
                                                class="col-sm-5 col-form-label small-text">Kendaraan</label>
                                            <div class="col-sm-7">
                                                <select class="form-select small-text" style="height: 30px;" id="KET"
                                                    name="KET">
                                                    <option><?= $MM_LIST_BPB['KET'] ?? ''; ?></option>
                                                    <?php foreach ($KET as $row) : ?>
                                                    <option value="<?= $row['KET']; ?>">
                                                        <?= $row['KET']; ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <label for="POLNO" class="col-sm-5 col-form-label small-text">No
                                                Polisi</label>
                                            <div class="col-sm-7">
                                                <input type="text" style="height: 30px;" class="form-control" id="POLNO"
                                                    name="POLNO" value="<?= $MM_LIST_BPB['POLNO'] ?? ''; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <label for="VIA" class="col-sm-5 col-form-label small-text">Via</label>
                                            <div class="col-sm-7">
                                                <select class="form-select small-text" style="height: 30px;" id="VIA"
                                                    name="VIA">
                                                    <option><?= $MM_LIST_BPB['VIA'] ?? ''; ?></option>
                                                    <option value="Darat">Darat</option>
                                                    <option value="Laut">Laut</option>
                                                    <option value="Udara">Udara</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 text-center ">
                                        <table class="table border table-borderless">
                                            <thead>
                                                <tr class="border">
                                                    <th class=" border-end fw-normal align-middle">Pembawa
                                                        Barang
                                                    </th>
                                                    <th class="fw-normal ">Hp Pembawa Barang</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="height: 50px;">
                                                    <td class="col-2 border-end"><input
                                                            class="col-sm-10 no-border text-center" type="text"
                                                            name="BWNM[]" value="<?= $MM_LIST_BPB['BWNM'] ?? ''; ?>" />
                                                    </td>
                                                    <td class="col-2"><input class="col-sm-10 no-border text-center"
                                                            type="text" name="BWHP[]"
                                                            value="<?= $MM_LIST_BPB['BWHP'] ?? ''; ?>" />
                                                    </td>
                                                </tr>
                                            <tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table mt-4 text-center border table-borderless">
                                        <thead>
                                            <tr class="border align-top shadow-sm">
                                                <th class="border-end fw-normal">Tanggal Target</th>
                                                <th class="border-end fw-normal">Nota</th>
                                                <th class="border-end fw-normal">Koli</th>
                                                <th class="border-end fw-normal">Berat</th>
                                                <th class="border-end fw-normal">Tanggal Kembali BPB</th>
                                                <th class="border-end fw-normal">Nota Bantex</th>
                                                <th class="fw-normal">Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="height: 0px;">
                                                <td class="border-end"><input class="no-border text-center" type="date"
                                                        name="TRGDAT"
                                                        value="<?= date('Y-m-d', strtotime($MM_LIST_BPB['TRGDAT'])); ?>" />
                                                </td>
                                                <td class="border-end"><input class="no-border text-center"
                                                        style="max-width: 60px;" type="text" name="NOTA[]"
                                                        value="<?= $MM_LIST_BPB['NOTA'] ?? ''; ?>" />
                                                </td>
                                                <td class="border-end"><input class=" no-border text-center"
                                                        style="max-width: 60px;" type="number" name="KOLI1[]"
                                                        value="<?= $MM_LIST_BPB['KOLI1'] ?? ''; ?>" /></td>
                                                <td class="border-end"><input class="no-border text-center"
                                                        style="max-width: 60px;" type="number" name="BERAT[]"
                                                        value="<?= $MM_LIST_BPB['BERAT'] ?? ''; ?>" /></td>
                                                <td class="border-end"><input class="no-border text-center" type="date"
                                                        name="KEMBALI"
                                                        value="<?= date('Y-m-d', strtotime($MM_LIST_BPB['KEMBALI'])); ?>" />
                                                </td>
                                                <td class="border-end"><input class="no-border text-center"
                                                        style="max-width: 100px;" type="text" name="BANTEX[]"
                                                        value="<?= $MM_LIST_BPB['BANTEX'] ?? ''; ?>" /></td>
                                                <td><input class="no-border text-center" type="date" name="NOTDAT"
                                                        value="<?= date('Y-m-d', strtotime($MM_LIST_BPB['NOTDAT'])); ?>" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row">
                                    <div class="col mt-3">
                                        <div class="row">
                                            <label for="CATATAN" class="col-sm-5 col-form-label small-text">Catatan
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" style="height: 90px;" class="form-control"
                                                    name="CATATAN" id="CATATAN"
                                                    value="<?= $MM_LIST_BPB['CATATAN'] ?? ''; ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <label for="CATATAN2" class="col-sm-5 col-form-label small-text">catatan
                                                2
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" style="height: 90px;" class="form-control"
                                                    id="CATATAN2" name="CATATAN2"
                                                    value="<?= $MM_LIST_BPB['CATATAN2'] ?? ''; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col mt-3">
                                        <div class="row col">
                                            <label for="KDKRJ"
                                                class="col-sm-5 col-form-label text-end small-text">Divisi</label>
                                            <div class="col-sm-6">
                                                <select class="form-select small-text" style="height: 30px;" id="KDKRJ"
                                                    name="KDKRJ">
                                                    <option>
                                                        <?= $MM_LIST_BPB['KDKRJ'] ?? ''; ?></option>
                                                    <?php foreach ($KDKRJ as $row) : ?>
                                                    <option value="<?= $row['KDKRJ']; ?>">
                                                        <?= $row['DIVISI']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group col-md-3 d-flex flex-row-reverse mt-4 me-4 mb-4">
                            <button type="submit" class="btn btn-success me-2">submit</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</main>

<?= $this->endSection('content');  ?>
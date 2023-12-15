<?= $this->extend('/navbar/navbar');  ?>

<?= $this->section('content');  ?>

<main class="mt-5 pt-3 mb-4">
    <div class="container-fluid">
        <h3 class="fw-bold mt-4 ms-2">Monitoring BPB</h3>
        <div class="mt-5">
            <div class="mt-4 ps-1 mb-4"><a href="<?= base_url('/form/formbpb'); ?>"><button type="submit"
                        class="btn btn-primary"><i class="bi bi-plus"></i>Buat BPB</button></a></div>

            <table class="table text-center table-bordered border-primary text-small" id="myTable">
                <thead class="table-primary border-primary align-top ">
                    <tr>
                        <th class="col-1 fw-normal">Material Document</th>
                        <th class="fw-normal">Posting Date</th>
                        <th class="fw-normal">No BPB</th>
                        <th class="col-1 fw-normal">Dikirim Kepada</th>
                        <th class="fw-normal">Desc Cust</th>
                        <th class="fw-normal">Lokasi/Site</th>
                        <th class="fw-normal">Alamat ke 1</th>
                        <th class="fw-normal">Kontak Person 1</th>
                        <th class="fw-normal">Telp CP1</th>
                        <th class="fw-normal">Kendaraan</th>
                        <th class="fw-normal">No Polisi</th>
                        <th class="fw-normal">Pembawa</th>
                        <th class="fw-normal">Hp Pembawa</th>
                        <th class="fw-normal">Aktivitas</th>
                    </tr>
                </thead>
                <tbody><?php foreach ($MM_LIST_BPB as $data) : ?><tr>
                        <td><?=$data['MBLNR'];?></td>
                        <td><?=$data['BUDAT'];?></td>
                        <td><?=$data['BPBNO'];?></td>
                        <td><?=$data['KUNNR'];?></td>
                        <td><?=$data['CUSTOMER'];?></td>
                        <td><?=$data['LOKASI'];?></td>
                        <td><?=$data['ADR1'];?></td>
                        <td><?=$data['CPN1'];?></td>
                        <td><?=$data['TPN1'];?></td>
                        <td><?=$data['KET'];?></td>
                        <td><?=$data['POLNO'];?></td>
                        <td><?=$data['BWNM'];?></td>
                        <td><?=$data['BWHP'];?></td>
                        <td><a href="<?= base_url('/form/viewform/' . str_replace('/', '-', $data['BPBNO'])); ?>"
                                class="btn btn-primary mb-2">View</a>
                            <a href="<?= base_url('/form/viewupdate/' . $data['BPBNO']); ?>"
                                class="btn btn btn-warning mb-2">Update</a>
                            <a href="" class="btn btn btn-success">Cetak</a>
                        </td>
                    </tr><?php endforeach;?></tbody>
            </table>
        </div>
    </div>
</main><?=$this->endSection('content');?>
<?php

namespace App\Controllers;

use App\Models\LISTBPBModel;
use App\Models\MASTERLOKASIModel;
use App\Models\KENDARAANModel;
use App\Models\DivisiModel;
use App\Models\ModelMaterial;
use App\Models\ModelProduk;
use App\Models\MonrevModel;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function MonitoringBPB()
    {
        $lISTBPBModel = new LISTBPBModel();
        $data['MM_LIST_BPB'] = $lISTBPBModel->findAll();

        return view('/BPB/monbpb', $data);
    }
    
    public function FormBPB()
    {
        $mASTERLOKASIModel = new MASTERLOKASIModel();
        $kENDARAANModel = new KENDARAANModel();
        $divisiModel = new DivisiModel();
        $modelProduk = new ModelProduk();

        $data['LOKASI'] = $mASTERLOKASIModel->findAll();
        $data['KET'] = $kENDARAANModel->findAll();
        $data['KDKRJ'] = $divisiModel->where('STS', '1')->where('TINGKAT', '2')->findAll();
        $data['RSNUM'] = $modelProduk->findAll();

        return view('/form/formbpb', $data);
    }

    public function submitAdd()
    {
        $lISTBPBModel = new LISTBPBModel();

        $budat = strtoupper(date("d-M-Y", strtotime($this->request->getPost('BUDAT'))));
        $tglkirim = strtoupper(date("d-M-Y", strtotime($this->request->getPost('TGL_KIRIM'))));
        $podat = strtoupper(date("d-M-Y", strtotime($this->request->getPost('PODAT'))));
        $trgdat = strtoupper(date("d-M-Y", strtotime($this->request->getPost('TRGDAT'))));
        $kembali = strtoupper(date("d-M-Y", strtotime($this->request->getPost('KEMBALI'))));
        $nodat = strtoupper(date("d-M-Y", strtotime($this->request->getPost('NOTDAT'))));
        // dd($data['BUDAT']);

        $data = [
            'MBLNR' => $this->request->getPost('MBLNR'),
            'BUDAT' => $budat,
            'BPBNO' => $this->request->getPost('BPBNO'),
            'KUNNR' => $this->request->getPost('KUNNR'),
            'CUSTOMER' => $this->request->getPost('CUSTOMER'),
            'LOKASI' => $this->request->getPost('LOKASI'),
            'ADR1' => $this->request->getPost('ADR1'),
            'ADR2' => $this->request->getPost('ADR2'),
            'ADR3' => $this->request->getPost('ADR3'),
            'CPN1' => $this->request->getPost('CPN1'),
            'TPN1' => $this->request->getPost('TPN1'),
            'CPN2' => $this->request->getPost('CPN2'),
            'TPN2' => $this->request->getPost('TPN2'),
            'BUNDLE' => $this->request->getPost('BUNDLE'),
            'TGL_KIRIM' => $tglkirim,
            'ZPONO' => $this->request->getPost('ZPONO'),
            'PODAT' => $podat,
            'VENDOR' => $this->request->getPost('VENDOR'),
            'KET' => $this->request->getPost('KET'),
            'POLNO' => $this->request->getPost('POLNO'),
            'VIA' => $this->request->getPost('VIA'),
            'BWNM' => $this->request->getPost('BWNM'),
            'BWHP' => $this->request->getPost('BWHP'),
            'TRGDAT' => $trgdat,
            'NOTA' => $this->request->getPost('NOTA'),
            'gambar' => $this->request->getPost('gambar'),
            'KOLI1' => $this->request->getPost('KOLI1'),
            'BERAT' => $this->request->getPost('BERAT'),
            'KEMBALI' => $kembali,
            'BANTEX' => $this->request->getPost('BANTEX'),
            'NOTDAT' => $nodat,
            'CATATAN' => $this->request->getPost('CATATAN'),
            'CATATAN2' => $this->request->getPost('CATATAN2'),
            'KDKRJ' => $this->request->getPost('KDKRJ'),
        ];

        // echo "<pre>";
        // print_r($data);
        // die();


        $lISTBPBModel->insert($data);

        return redirect()->to('BPB/monbpb');
    }

    public function viewform($id)
    {
        $lISTBPBModel = new LISTBPBModel();
        $data['MM_LIST_BPB'] = $lISTBPBModel->find($id);

        return view('form/viewform', $data);
    }

    public function viewupdate($id)
    {
        $lISTBPBModel = new LISTBPBModel();
        $mASTERLOKASIModel = new MASTERLOKASIModel();
        $kENDARAANModel = new KENDARAANModel();
        $divisiModel = new DivisiModel();
        $modelProduk = new ModelProduk();

        $data['LOKASI'] = $mASTERLOKASIModel->findAll();
        $data['KET'] = $kENDARAANModel->findAll();
        $data['KDKRJ'] = $divisiModel->where('STS', '1')->where('TINGKAT', '2')->findAll();
        $data['MM_LIST_BPB'] = $lISTBPBModel->find($id);
        $data['RSNUM'] = $modelProduk->findAll();

        return view('form/updateform', $data);
    }

    public function updateform($id)
    {
        $lISTBPBModel = new LISTBPBModel();

        $budat = strtoupper(date("d-M-Y", strtotime($this->request->getPost('BUDAT'))));
        $tglkirim = strtoupper(date("d-M-Y", strtotime($this->request->getPost('TGL_KIRIM'))));
        $podat = strtoupper(date("d-M-Y", strtotime($this->request->getPost('PODAT'))));
        $trgdat = strtoupper(date("d-M-Y", strtotime($this->request->getPost('TRGDAT'))));
        $kembali = strtoupper(date("d-M-Y", strtotime($this->request->getPost('KEMBALI'))));
        $nodat = strtoupper(date("d-M-Y", strtotime($this->request->getPost('NOTDAT'))));

        $data = [
            'MBLNR' => $this->request->getPost('MBLNR'),
            'BUDAT' => $budat,
            'BPBNO' => $this->request->getPost('BPBNO'),
            'KUNNR' => $this->request->getPost('KUNNR'),
            'CUSTOMER' => $this->request->getPost('CUSTOMER'),
            'LOKASI' => $this->request->getPost('LOKASI'),
            'ADR1' => $this->request->getPost('ADR1'),
            'ADR2' => $this->request->getPost('ADR2'),
            'ADR3' => $this->request->getPost('ADR3'),
            'CPN1' => $this->request->getPost('CPN1'),
            'TPN1' => $this->request->getPost('TPN1'),
            'CPN2' => $this->request->getPost('CPN2'),
            'TPN2' => $this->request->getPost('TPN2'),
            'BUNDLE' => $this->request->getPost('BUNDLE'),
            'TGL_KIRIM' => $tglkirim,
            'ZPONO' => $this->request->getPost('ZPONO'),
            'PODAT' => $podat,
            'VENDOR' => $this->request->getPost('VENDOR'),
            'KET' => $this->request->getPost('KET'),
            'POLNO' => $this->request->getPost('POLNO'),
            'VIA' => $this->request->getPost('VIA'),
            'BWNM' => $this->request->getPost('BWNM'),
            'BWHP' => $this->request->getPost('BWHP'),
            'TRGDAT' => $trgdat,
            'NOTA' => $this->request->getPost('NOTA'),
            'gambar' => $this->request->getPost('gambar'),
            'KOLI1' => $this->request->getPost('KOLI1'),
            'BERAT' => $this->request->getPost('BERAT'),
            'KEMBALI' => $kembali,
            'BANTEX' => $this->request->getPost('BANTEX'),
            'NOTDAT' => $nodat,
            'CATATAN' => $this->request->getPost('CATATAN'),
            'CATATAN2' => $this->request->getPost('CATATAN2'),
            'KDKRJ' => $this->request->getPost('KDKRJ'),
        ];

        $lISTBPBModel->update($id, $data);
        return redirect()->to('BPB/monbpb');
    }
    
    public function MonitoringReservation()
    {
        $monrevModel = new MonrevModel();
        $data['MM_REQUEST_RESERVASI'] = $monrevModel->findAll();
        
        return view('/Reservation/monrev', $data);
    }

    public function reportReservation()
    {
        $modelMaterial = new ModelMaterial();
        $data['ID_MATERIAL'] = $modelMaterial->findAll();
        
        return view('/Reservation/report', $data);
    }

    public function store()
    {
        $model = new ModelProduk();

        $rsdate = strtoupper(date("d-M-Y", strtotime($this->request->getPost('RSDATE'))));

        $data = [
            'RSDATE' => $rsdate,
            'MOVTP' => $this->request->getPost('MOVTP'),
            'SLCAWAL' => $this->request->getPost('SLCAWAL'),
            'WEMPF' => $this->request->getPost('WEMPF'),
            'RSNUM' => $this->request->getPost('RSNUM'),
            'MATNO' => $this->request->getPost('MATNO'),
            'QUTTY' => $this->request->getPost('QUTTY'),
            'SLCTUJU' => $this->request->getPost('SLCTUJU'),
            'RSREL' => $this->request->getPost('RSREL'),
            'USNAM' => $this->request->getPost('USNAM'),
            'BDTER' => $this->request->getPost('BDTER'),

        ];
        print_r($data);
        $model->insertProducts($data);
        return redirect()->to('/Reservation/report'); // ke url yang sesuai
    }
}
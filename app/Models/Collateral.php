<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Collateral extends Model
{
    use HasFactory;

    protected $fillable = [
        'coll_id',
        'partner_id',
        'produk_id',
        'debitur_id',
        'nilai_motor_vehicle',
        'nilai_car_vehicle',
        'nilai_house_land',
        'nilai_inv',
        'nilai_invoice',
        'nilai_corporate_guarantie',
        'merk',
        'type',
        'model',
        'jenis_motor_sport_listrik',
        'nama_di_bpkb',
        'alamat_di_bpkb',
        'no_frame',
        'no_engine',
        'no_pol',
        'colour',
        'tahun',
        'silinder',
        'status',
        'peruntukan',
        'no_shm_no_hgb',
        'luas',
        'atas_nama',
        'alamat',
        'nilai_appraisal',
        'nama_inventory',
        'besarnya_inventory',
        'alamat_inventory',
        'nilai_inventory',
        'atas_nama_inventory',
        'alamat_atas_nama_inventory',
        'jenis_invoice',
        'atas_nama_invoice',
        'alamat_atas_nama_invoice',
        'tgl_jatuh_tempo',
        'nama_pt_penerima_guarantie',
        'nama_pt_pemberi_corporate_guarantie',
        'notelp_pt_pemberi_corporate_guarantie',
    ];

}

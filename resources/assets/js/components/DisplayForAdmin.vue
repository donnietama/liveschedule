<template>
    <carousel :autoplay="true" :perPage="1" :autoplayTimeout="10000" :paginationEnabled="false" :loop="true">
        <slide v-if="january.length != 0">
            <div class="table-responsive">
                <table class="table table-light table-sm">
                    <thead class="bg-dark text-light table-bordered text-center">
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">EDIT / HAPUS</th>
                            <th rowspan="2" style="vertical-align: middle;">NO</th>
                            <th rowspan="2" style="vertical-align: middle;">BULAN</th>
                            <th style="vertical-align: middle;">ESTIMASI TANGGAL OPENING</th>
                            <th style="vertical-align: middle;">NAMA / LOKASI STORE</th>
                            <th style="vertical-align: middle;">PEMILIK STORE</th>
                            <th style="vertical-align: middle;">INVOICE TOTAL INVESTASI SUDAH DILUNASI</th>
                            <th style="vertical-align: middle;">LICENSE AGREEMENT SUDAH DITANDATANGANI OLEH LISENSI</th>
                            <th style="vertical-align: middle;">FIT OUT</th>
                            <th style="vertical-align: middle;">TRAINING</th>
                            <th style="vertical-align: middle;">PREPARE BARANG</th>
                            <th style="vertical-align: middle;">EQUIPMENT DARI SUPPLIER DATANG KE STORE</th>
                            <th style="vertical-align: middle;">GUDANG / LISENSI KIRIM BARANG KE STORE</th>
                            <th style="vertical-align: middle;">OPENING</th>
                            <th style="vertical-align: middle;">KETERANGAN (JIKA ADA PERUBAHAN)</th>
                        </tr>
                        <tr class="text-center" style="white-space: nowrap; width:1%;">
                            <th colspan="3" class="text-center">DARI PROJECT</th>
                            <th>H-44</th>
                            <th>H-32</th>
                            <th>H-22</th>
                            <th>H-21</th>
                            <th>H-8</th>
                            <th>H-3</th>
                            <th>H-2</th>
                            <th>H</th>
                            <th></th>
                        </tr>          
                    </thead>
                    <tbody>
                        <tr v-for="(data, index) in january"
                        :key="data.index" style="white-space: nowrap; width:1%;" :class="{ 'bg-success': data.finished, 'bg-warning': !data.finished }">
                            <td class="text-center text-capitalize">
                                <a :href="'edit/' + data.id" class="btn btn-sm btn-primary">
                                    <span class="icon-edit"></span>
                                    edit
                                </a>
                                <a :href="'delete/' + data.id" class="btn btn-sm btn-danger">
                                    <span class="icon-delete"></span>
                                    hapus
                                </a>
                            </td>
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td class="text-center">{{ data.h_44 }}</td>
                            <td class="text-center">{{ data.h_32 }}</td>
                            <td class="text-center">{{ data.h_22 }}</td>
                            <td class="text-center">{{ data.h_21 }}</td>
                            <td class="text-center">{{ data.h_8 }}</td>
                            <td class="text-center">{{ data.h_3 }}</td>
                            <td class="text-center">{{ data.h_2 }}</td>
                            <td class="text-center">{{ data.h }}</td>
                            <td>{{ data.additional_info }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </slide>
        <slide v-if="february.length != 0">
            <div class="table-responsive">
                <table class="table table-light table-sm">
                    <thead class="bg-dark text-light table-bordered text-center">
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">EDIT / HAPUS</th>
                            <th rowspan="2" style="vertical-align: middle;">NO</th>
                            <th rowspan="2" style="vertical-align: middle;">BULAN</th>
                            <th style="vertical-align: middle;">ESTIMASI TANGGAL OPENING</th>
                            <th style="vertical-align: middle;">NAMA / LOKASI STORE</th>
                            <th style="vertical-align: middle;">PEMILIK STORE</th>
                            <th style="vertical-align: middle;">INVOICE TOTAL INVESTASI SUDAH DILUNASI</th>
                            <th style="vertical-align: middle;">LICENSE AGREEMENT SUDAH DITANDATANGANI OLEH LISENSI</th>
                            <th style="vertical-align: middle;">FIT OUT</th>
                            <th style="vertical-align: middle;">TRAINING</th>
                            <th style="vertical-align: middle;">PREPARE BARANG</th>
                            <th style="vertical-align: middle;">EQUIPMENT DARI SUPPLIER DATANG KE STORE</th>
                            <th style="vertical-align: middle;">GUDANG / LISENSI KIRIM BARANG KE STORE</th>
                            <th style="vertical-align: middle;">OPENING</th>
                            <th style="vertical-align: middle;">KETERANGAN (JIKA ADA PERUBAHAN)</th>
                        </tr>
                        <tr class="text-center" style="white-space: nowrap; width:1%;">
                            <th colspan="3" class="text-center">DARI PROJECT</th>
                            <th>H-44</th>
                            <th>H-32</th>
                            <th>H-22</th>
                            <th>H-21</th>
                            <th>H-8</th>
                            <th>H-3</th>
                            <th>H-2</th>
                            <th>H</th>
                            <th></th>
                        </tr>          
                    </thead>
                    <tbody>
                        <tr v-for="(data, index) in february"
                        :key="data.index" style="white-space: nowrap; width:1%;" :class="{ 'bg-success': data.finished, 'bg-warning': !data.finished }">
                            <td class="text-center text-capitalize">
                                <a :href="'edit/' + data.id" class="btn btn-sm btn-primary">
                                    <span class="icon-edit"></span>
                                    edit
                                </a>
                                <a :href="'delete/' + data.id" class="btn btn-sm btn-danger">
                                    <span class="icon-delete"></span>
                                    hapus
                                </a>
                            </td>
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td class="text-center">{{ data.h_44 }}</td>
                            <td class="text-center">{{ data.h_32 }}</td>
                            <td class="text-center">{{ data.h_22 }}</td>
                            <td class="text-center">{{ data.h_21 }}</td>
                            <td class="text-center">{{ data.h_8 }}</td>
                            <td class="text-center">{{ data.h_3 }}</td>
                            <td class="text-center">{{ data.h_2 }}</td>
                            <td class="text-center">{{ data.h }}</td>
                            <td>{{ data.additional_info }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </slide>
        <slide v-if="march.length != 0">
            <div class="table-responsive">
                <table class="table table-light table-sm">
                    <thead class="bg-dark text-light table-bordered text-center">
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">EDIT / HAPUS</th>
                            <th rowspan="2" style="vertical-align: middle;">NO</th>
                            <th rowspan="2" style="vertical-align: middle;">BULAN</th>
                            <th style="vertical-align: middle;">ESTIMASI TANGGAL OPENING</th>
                            <th style="vertical-align: middle;">NAMA / LOKASI STORE</th>
                            <th style="vertical-align: middle;">PEMILIK STORE</th>
                            <th style="vertical-align: middle;">INVOICE TOTAL INVESTASI SUDAH DILUNASI</th>
                            <th style="vertical-align: middle;">LICENSE AGREEMENT SUDAH DITANDATANGANI OLEH LISENSI</th>
                            <th style="vertical-align: middle;">FIT OUT</th>
                            <th style="vertical-align: middle;">TRAINING</th>
                            <th style="vertical-align: middle;">PREPARE BARANG</th>
                            <th style="vertical-align: middle;">EQUIPMENT DARI SUPPLIER DATANG KE STORE</th>
                            <th style="vertical-align: middle;">GUDANG / LISENSI KIRIM BARANG KE STORE</th>
                            <th style="vertical-align: middle;">OPENING</th>
                            <th style="vertical-align: middle;">KETERANGAN (JIKA ADA PERUBAHAN)</th>
                        </tr>
                        <tr class="text-center" style="white-space: nowrap; width:1%;">
                            <th colspan="3" class="text-center">DARI PROJECT</th>
                            <th>H-44</th>
                            <th>H-32</th>
                            <th>H-22</th>
                            <th>H-21</th>
                            <th>H-8</th>
                            <th>H-3</th>
                            <th>H-2</th>
                            <th>H</th>
                            <th></th>
                        </tr>          
                    </thead>
                    <tbody>
                        <tr v-for="(data, index) in march"
                        :key="data.index" style="white-space: nowrap; width:1%;" :class="{ 'bg-success': data.finished, 'bg-warning': !data.finished }">
                            <td class="text-center text-capitalize">
                                <a :href="'edit/' + data.id" class="btn btn-sm btn-primary">
                                    <span class="icon-edit"></span>
                                    edit
                                </a>
                                <a :href="'delete/' + data.id" class="btn btn-sm btn-danger">
                                    <span class="icon-delete"></span>
                                    hapus
                                </a>
                            </td>
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td class="text-center">{{ data.h_44 }}</td>
                            <td class="text-center">{{ data.h_32 }}</td>
                            <td class="text-center">{{ data.h_22 }}</td>
                            <td class="text-center">{{ data.h_21 }}</td>
                            <td class="text-center">{{ data.h_8 }}</td>
                            <td class="text-center">{{ data.h_3 }}</td>
                            <td class="text-center">{{ data.h_2 }}</td>
                            <td class="text-center">{{ data.h }}</td>
                            <td>{{ data.additional_info }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </slide>
        <slide v-if="april.length != 0">
            <div class="table-responsive">
                <table class="table table-light table-sm">
                    <thead class="bg-dark text-light table-bordered text-center">
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">EDIT / HAPUS</th>
                            <th rowspan="2" style="vertical-align: middle;">NO</th>
                            <th rowspan="2" style="vertical-align: middle;">BULAN</th>
                            <th style="vertical-align: middle;">ESTIMASI TANGGAL OPENING</th>
                            <th style="vertical-align: middle;">NAMA / LOKASI STORE</th>
                            <th style="vertical-align: middle;">PEMILIK STORE</th>
                            <th style="vertical-align: middle;">INVOICE TOTAL INVESTASI SUDAH DILUNASI</th>
                            <th style="vertical-align: middle;">LICENSE AGREEMENT SUDAH DITANDATANGANI OLEH LISENSI</th>
                            <th style="vertical-align: middle;">FIT OUT</th>
                            <th style="vertical-align: middle;">TRAINING</th>
                            <th style="vertical-align: middle;">PREPARE BARANG</th>
                            <th style="vertical-align: middle;">EQUIPMENT DARI SUPPLIER DATANG KE STORE</th>
                            <th style="vertical-align: middle;">GUDANG / LISENSI KIRIM BARANG KE STORE</th>
                            <th style="vertical-align: middle;">OPENING</th>
                            <th style="vertical-align: middle;">KETERANGAN (JIKA ADA PERUBAHAN)</th>
                        </tr>
                        <tr class="text-center" style="white-space: nowrap; width:1%;">
                            <th colspan="3" class="text-center">DARI PROJECT</th>
                            <th>H-44</th>
                            <th>H-32</th>
                            <th>H-22</th>
                            <th>H-21</th>
                            <th>H-8</th>
                            <th>H-3</th>
                            <th>H-2</th>
                            <th>H</th>
                            <th></th>
                        </tr>          
                    </thead>
                    <tbody>
                        <tr v-for="(data, index) in april"
                        :key="data.index" style="white-space: nowrap; width:1%;" :class="{ 'bg-success': data.finished, 'bg-warning': !data.finished }">
                            <td class="text-center text-capitalize">
                                <a :href="'edit/' + data.id" class="btn btn-sm btn-primary">
                                    <span class="icon-edit"></span>
                                    edit
                                </a>
                                <a :href="'delete/' + data.id" class="btn btn-sm btn-danger">
                                    <span class="icon-delete"></span>
                                    hapus
                                </a>
                            </td>
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td class="text-center">{{ data.h_44 }}</td>
                            <td class="text-center">{{ data.h_32 }}</td>
                            <td class="text-center">{{ data.h_22 }}</td>
                            <td class="text-center">{{ data.h_21 }}</td>
                            <td class="text-center">{{ data.h_8 }}</td>
                            <td class="text-center">{{ data.h_3 }}</td>
                            <td class="text-center">{{ data.h_2 }}</td>
                            <td class="text-center">{{ data.h }}</td>
                            <td>{{ data.additional_info }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </slide>
        <slide v-if="may.length != 0">
            <div class="table-responsive">
                <table class="table table-light table-sm">
                    <thead class="bg-dark text-light table-bordered text-center">
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">EDIT / HAPUS</th>
                            <th rowspan="2" style="vertical-align: middle;">NO</th>
                            <th rowspan="2" style="vertical-align: middle;">BULAN</th>
                            <th style="vertical-align: middle;">ESTIMASI TANGGAL OPENING</th>
                            <th style="vertical-align: middle;">NAMA / LOKASI STORE</th>
                            <th style="vertical-align: middle;">PEMILIK STORE</th>
                            <th style="vertical-align: middle;">INVOICE TOTAL INVESTASI SUDAH DILUNASI</th>
                            <th style="vertical-align: middle;">LICENSE AGREEMENT SUDAH DITANDATANGANI OLEH LISENSI</th>
                            <th style="vertical-align: middle;">FIT OUT</th>
                            <th style="vertical-align: middle;">TRAINING</th>
                            <th style="vertical-align: middle;">PREPARE BARANG</th>
                            <th style="vertical-align: middle;">EQUIPMENT DARI SUPPLIER DATANG KE STORE</th>
                            <th style="vertical-align: middle;">GUDANG / LISENSI KIRIM BARANG KE STORE</th>
                            <th style="vertical-align: middle;">OPENING</th>
                            <th style="vertical-align: middle;">KETERANGAN (JIKA ADA PERUBAHAN)</th>
                        </tr>
                        <tr class="text-center" style="white-space: nowrap; width:1%;">
                            <th colspan="3" class="text-center">DARI PROJECT</th>
                            <th>H-44</th>
                            <th>H-32</th>
                            <th>H-22</th>
                            <th>H-21</th>
                            <th>H-8</th>
                            <th>H-3</th>
                            <th>H-2</th>
                            <th>H</th>
                            <th></th>
                        </tr>          
                    </thead>
                    <tbody>
                        <tr v-for="(data, index) in may"
                        :key="data.index" style="white-space: nowrap; width:1%;" :class="{ 'bg-success': data.finished, 'bg-warning': !data.finished }">
                            <td class="text-center text-capitalize">
                                <a :href="'edit/' + data.id" class="btn btn-sm btn-primary">
                                    <span class="icon-edit"></span>
                                    edit
                                </a>
                                <a :href="'delete/' + data.id" class="btn btn-sm btn-danger">
                                    <span class="icon-delete"></span>
                                    hapus
                                </a>
                            </td>
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td class="text-center">{{ data.h_44 }}</td>
                            <td class="text-center">{{ data.h_32 }}</td>
                            <td class="text-center">{{ data.h_22 }}</td>
                            <td class="text-center">{{ data.h_21 }}</td>
                            <td class="text-center">{{ data.h_8 }}</td>
                            <td class="text-center">{{ data.h_3 }}</td>
                            <td class="text-center">{{ data.h_2 }}</td>
                            <td class="text-center">{{ data.h }}</td>
                            <td>{{ data.additional_info }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </slide>
        <slide v-if="june.length != 0">
            <div class="table-responsive">
                <table class="table table-light table-sm">
                    <thead class="bg-dark text-light table-bordered text-center">
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">EDIT / HAPUS</th>
                            <th rowspan="2" style="vertical-align: middle;">NO</th>
                            <th rowspan="2" style="vertical-align: middle;">BULAN</th>
                            <th style="vertical-align: middle;">ESTIMASI TANGGAL OPENING</th>
                            <th style="vertical-align: middle;">NAMA / LOKASI STORE</th>
                            <th style="vertical-align: middle;">PEMILIK STORE</th>
                            <th style="vertical-align: middle;">INVOICE TOTAL INVESTASI SUDAH DILUNASI</th>
                            <th style="vertical-align: middle;">LICENSE AGREEMENT SUDAH DITANDATANGANI OLEH LISENSI</th>
                            <th style="vertical-align: middle;">FIT OUT</th>
                            <th style="vertical-align: middle;">TRAINING</th>
                            <th style="vertical-align: middle;">PREPARE BARANG</th>
                            <th style="vertical-align: middle;">EQUIPMENT DARI SUPPLIER DATANG KE STORE</th>
                            <th style="vertical-align: middle;">GUDANG / LISENSI KIRIM BARANG KE STORE</th>
                            <th style="vertical-align: middle;">OPENING</th>
                            <th style="vertical-align: middle;">KETERANGAN (JIKA ADA PERUBAHAN)</th>
                        </tr>
                        <tr class="text-center" style="white-space: nowrap; width:1%;">
                            <th colspan="3" class="text-center">DARI PROJECT</th>
                            <th>H-44</th>
                            <th>H-32</th>
                            <th>H-22</th>
                            <th>H-21</th>
                            <th>H-8</th>
                            <th>H-3</th>
                            <th>H-2</th>
                            <th>H</th>
                            <th></th>
                        </tr>          
                    </thead>
                    <tbody>
                        <tr v-for="(data, index) in june"
                        :key="data.index" style="white-space: nowrap; width:1%;" :class="{ 'bg-success': data.finished, 'bg-warning': !data.finished }">
                            <td class="text-center text-capitalize">
                                <a :href="'edit/' + data.id" class="btn btn-sm btn-primary">
                                    <span class="icon-edit"></span>
                                    edit
                                </a>
                                <a :href="'delete/' + data.id" class="btn btn-sm btn-danger">
                                    <span class="icon-delete"></span>
                                    hapus
                                </a>
                            </td>
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td class="text-center">{{ data.h_44 }}</td>
                            <td class="text-center">{{ data.h_32 }}</td>
                            <td class="text-center">{{ data.h_22 }}</td>
                            <td class="text-center">{{ data.h_21 }}</td>
                            <td class="text-center">{{ data.h_8 }}</td>
                            <td class="text-center">{{ data.h_3 }}</td>
                            <td class="text-center">{{ data.h_2 }}</td>
                            <td class="text-center">{{ data.h }}</td>
                            <td>{{ data.additional_info }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </slide>
        <slide v-if="july.length != 0">
            <div class="table-responsive">
                <table class="table table-light table-sm">
                    <thead class="bg-dark text-light table-bordered text-center">
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">EDIT / HAPUS</th>
                            <th rowspan="2" style="vertical-align: middle;">NO</th>
                            <th rowspan="2" style="vertical-align: middle;">BULAN</th>
                            <th style="vertical-align: middle;">ESTIMASI TANGGAL OPENING</th>
                            <th style="vertical-align: middle;">NAMA / LOKASI STORE</th>
                            <th style="vertical-align: middle;">PEMILIK STORE</th>
                            <th style="vertical-align: middle;">INVOICE TOTAL INVESTASI SUDAH DILUNASI</th>
                            <th style="vertical-align: middle;">LICENSE AGREEMENT SUDAH DITANDATANGANI OLEH LISENSI</th>
                            <th style="vertical-align: middle;">FIT OUT</th>
                            <th style="vertical-align: middle;">TRAINING</th>
                            <th style="vertical-align: middle;">PREPARE BARANG</th>
                            <th style="vertical-align: middle;">EQUIPMENT DARI SUPPLIER DATANG KE STORE</th>
                            <th style="vertical-align: middle;">GUDANG / LISENSI KIRIM BARANG KE STORE</th>
                            <th style="vertical-align: middle;">OPENING</th>
                            <th style="vertical-align: middle;">KETERANGAN (JIKA ADA PERUBAHAN)</th>
                        </tr>
                        <tr class="text-center" style="white-space: nowrap; width:1%;">
                            <th colspan="3" class="text-center">DARI PROJECT</th>
                            <th>H-44</th>
                            <th>H-32</th>
                            <th>H-22</th>
                            <th>H-21</th>
                            <th>H-8</th>
                            <th>H-3</th>
                            <th>H-2</th>
                            <th>H</th>
                            <th></th>
                        </tr>          
                    </thead>
                    <tbody>
                        <tr v-for="(data, index) in july"
                        :key="data.index" style="white-space: nowrap; width:1%;" :class="{ 'bg-success': data.finished, 'bg-warning': !data.finished }">
                            <td class="text-center text-capitalize">
                                <a :href="'edit/' + data.id" class="btn btn-sm btn-primary">
                                    <span class="icon-edit"></span>
                                    edit
                                </a>
                                <a :href="'delete/' + data.id" class="btn btn-sm btn-danger">
                                    <span class="icon-delete"></span>
                                    hapus
                                </a>
                            </td>
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td class="text-center">{{ data.h_44 }}</td>
                            <td class="text-center">{{ data.h_32 }}</td>
                            <td class="text-center">{{ data.h_22 }}</td>
                            <td class="text-center">{{ data.h_21 }}</td>
                            <td class="text-center">{{ data.h_8 }}</td>
                            <td class="text-center">{{ data.h_3 }}</td>
                            <td class="text-center">{{ data.h_2 }}</td>
                            <td class="text-center">{{ data.h }}</td>
                            <td>{{ data.additional_info }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </slide>
        <slide v-if="august.length != 0">
            <div class="table-responsive">
                <table class="table table-light table-sm">
                    <thead class="bg-dark text-light table-bordered text-center">
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">EDIT / HAPUS</th>
                            <th rowspan="2" style="vertical-align: middle;">NO</th>
                            <th rowspan="2" style="vertical-align: middle;">BULAN</th>
                            <th style="vertical-align: middle;">ESTIMASI TANGGAL OPENING</th>
                            <th style="vertical-align: middle;">NAMA / LOKASI STORE</th>
                            <th style="vertical-align: middle;">PEMILIK STORE</th>
                            <th style="vertical-align: middle;">INVOICE TOTAL INVESTASI SUDAH DILUNASI</th>
                            <th style="vertical-align: middle;">LICENSE AGREEMENT SUDAH DITANDATANGANI OLEH LISENSI</th>
                            <th style="vertical-align: middle;">FIT OUT</th>
                            <th style="vertical-align: middle;">TRAINING</th>
                            <th style="vertical-align: middle;">PREPARE BARANG</th>
                            <th style="vertical-align: middle;">EQUIPMENT DARI SUPPLIER DATANG KE STORE</th>
                            <th style="vertical-align: middle;">GUDANG / LISENSI KIRIM BARANG KE STORE</th>
                            <th style="vertical-align: middle;">OPENING</th>
                            <th style="vertical-align: middle;">KETERANGAN (JIKA ADA PERUBAHAN)</th>
                        </tr>
                        <tr class="text-center" style="white-space: nowrap; width:1%;">
                            <th colspan="3" class="text-center">DARI PROJECT</th>
                            <th>H-44</th>
                            <th>H-32</th>
                            <th>H-22</th>
                            <th>H-21</th>
                            <th>H-8</th>
                            <th>H-3</th>
                            <th>H-2</th>
                            <th>H</th>
                            <th></th>
                        </tr>          
                    </thead>
                    <tbody>
                        <tr v-for="(data, index) in august"
                        :key="data.index" style="white-space: nowrap; width:1%;" :class="{ 'bg-success': data.finished, 'bg-warning': !data.finished }">
                            <td class="text-center text-capitalize">
                                <a :href="'edit/' + data.id" class="btn btn-sm btn-primary">
                                    <span class="icon-edit"></span>
                                    edit
                                </a>
                                <a :href="'delete/' + data.id" class="btn btn-sm btn-danger">
                                    <span class="icon-delete"></span>
                                    hapus
                                </a>
                            </td>
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td class="text-center">{{ data.h_44 }}</td>
                            <td class="text-center">{{ data.h_32 }}</td>
                            <td class="text-center">{{ data.h_22 }}</td>
                            <td class="text-center">{{ data.h_21 }}</td>
                            <td class="text-center">{{ data.h_8 }}</td>
                            <td class="text-center">{{ data.h_3 }}</td>
                            <td class="text-center">{{ data.h_2 }}</td>
                            <td class="text-center">{{ data.h }}</td>
                            <td>{{ data.additional_info }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </slide>
        <slide v-if="september.length != 0">
            <div class="table-responsive">
                <table class="table table-light table-sm">
                    <thead class="bg-dark text-light table-bordered text-center">
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">EDIT / HAPUS</th>
                            <th rowspan="2" style="vertical-align: middle;">NO</th>
                            <th rowspan="2" style="vertical-align: middle;">BULAN</th>
                            <th style="vertical-align: middle;">ESTIMASI TANGGAL OPENING</th>
                            <th style="vertical-align: middle;">NAMA / LOKASI STORE</th>
                            <th style="vertical-align: middle;">PEMILIK STORE</th>
                            <th style="vertical-align: middle;">INVOICE TOTAL INVESTASI SUDAH DILUNASI</th>
                            <th style="vertical-align: middle;">LICENSE AGREEMENT SUDAH DITANDATANGANI OLEH LISENSI</th>
                            <th style="vertical-align: middle;">FIT OUT</th>
                            <th style="vertical-align: middle;">TRAINING</th>
                            <th style="vertical-align: middle;">PREPARE BARANG</th>
                            <th style="vertical-align: middle;">EQUIPMENT DARI SUPPLIER DATANG KE STORE</th>
                            <th style="vertical-align: middle;">GUDANG / LISENSI KIRIM BARANG KE STORE</th>
                            <th style="vertical-align: middle;">OPENING</th>
                            <th style="vertical-align: middle;">KETERANGAN (JIKA ADA PERUBAHAN)</th>
                        </tr>
                        <tr class="text-center" style="white-space: nowrap; width:1%;">
                            <th colspan="3" class="text-center">DARI PROJECT</th>
                            <th>H-44</th>
                            <th>H-32</th>
                            <th>H-22</th>
                            <th>H-21</th>
                            <th>H-8</th>
                            <th>H-3</th>
                            <th>H-2</th>
                            <th>H</th>
                            <th></th>
                        </tr>          
                    </thead>
                    <tbody>
                        <tr v-for="(data, index) in september"
                        :key="data.index" style="white-space: nowrap; width:1%;" :class="{ 'bg-success': data.finished, 'bg-warning': !data.finished }">
                            <td class="text-center text-capitalize">
                                <a :href="'edit/' + data.id" class="btn btn-sm btn-primary">
                                    <span class="icon-edit"></span>
                                    edit
                                </a>
                                <a :href="'delete/' + data.id" class="btn btn-sm btn-danger">
                                    <span class="icon-delete"></span>
                                    hapus
                                </a>
                            </td>
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td class="text-center">{{ data.h_44 }}</td>
                            <td class="text-center">{{ data.h_32 }}</td>
                            <td class="text-center">{{ data.h_22 }}</td>
                            <td class="text-center">{{ data.h_21 }}</td>
                            <td class="text-center">{{ data.h_8 }}</td>
                            <td class="text-center">{{ data.h_3 }}</td>
                            <td class="text-center">{{ data.h_2 }}</td>
                            <td class="text-center">{{ data.h }}</td>
                            <td>{{ data.additional_info }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </slide>
        <slide v-if="october.length != 0">
            <div class="table-responsive">
                <table class="table table-light table-sm">
                    <thead class="bg-dark text-light table-bordered text-center">
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">EDIT / HAPUS</th>
                            <th rowspan="2" style="vertical-align: middle;">NO</th>
                            <th rowspan="2" style="vertical-align: middle;">BULAN</th>
                            <th style="vertical-align: middle;">ESTIMASI TANGGAL OPENING</th>
                            <th style="vertical-align: middle;">NAMA / LOKASI STORE</th>
                            <th style="vertical-align: middle;">PEMILIK STORE</th>
                            <th style="vertical-align: middle;">INVOICE TOTAL INVESTASI SUDAH DILUNASI</th>
                            <th style="vertical-align: middle;">LICENSE AGREEMENT SUDAH DITANDATANGANI OLEH LISENSI</th>
                            <th style="vertical-align: middle;">FIT OUT</th>
                            <th style="vertical-align: middle;">TRAINING</th>
                            <th style="vertical-align: middle;">PREPARE BARANG</th>
                            <th style="vertical-align: middle;">EQUIPMENT DARI SUPPLIER DATANG KE STORE</th>
                            <th style="vertical-align: middle;">GUDANG / LISENSI KIRIM BARANG KE STORE</th>
                            <th style="vertical-align: middle;">OPENING</th>
                            <th style="vertical-align: middle;">KETERANGAN (JIKA ADA PERUBAHAN)</th>
                        </tr>
                        <tr class="text-center" style="white-space: nowrap; width:1%;">
                            <th colspan="3" class="text-center">DARI PROJECT</th>
                            <th>H-44</th>
                            <th>H-32</th>
                            <th>H-22</th>
                            <th>H-21</th>
                            <th>H-8</th>
                            <th>H-3</th>
                            <th>H-2</th>
                            <th>H</th>
                            <th></th>
                        </tr>          
                    </thead>
                    <tbody>
                        <tr v-for="(data, index) in october"
                        :key="data.index" style="white-space: nowrap; width:1%;" :class="{ 'bg-success': data.finished, 'bg-warning': !data.finished }">
                            <td class="text-center text-capitalize">
                                <a :href="'edit/' + data.id" class="btn btn-sm btn-primary">
                                    <span class="icon-edit"></span>
                                    edit
                                </a>
                                <a :href="'delete/' + data.id" class="btn btn-sm btn-danger">
                                    <span class="icon-delete"></span>
                                    hapus
                                </a>
                            </td>
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td class="text-center">{{ data.h_44 }}</td>
                            <td class="text-center">{{ data.h_32 }}</td>
                            <td class="text-center">{{ data.h_22 }}</td>
                            <td class="text-center">{{ data.h_21 }}</td>
                            <td class="text-center">{{ data.h_8 }}</td>
                            <td class="text-center">{{ data.h_3 }}</td>
                            <td class="text-center">{{ data.h_2 }}</td>
                            <td class="text-center">{{ data.h }}</td>
                            <td>{{ data.additional_info }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </slide>
        <slide v-if="november.length != 0">
            <div class="table-responsive">
                <table class="table table-light table-sm">
                    <thead class="bg-dark text-light table-bordered text-center">
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">EDIT / HAPUS</th>
                            <th rowspan="2" style="vertical-align: middle;">NO</th>
                            <th rowspan="2" style="vertical-align: middle;">BULAN</th>
                            <th style="vertical-align: middle;">ESTIMASI TANGGAL OPENING</th>
                            <th style="vertical-align: middle;">NAMA / LOKASI STORE</th>
                            <th style="vertical-align: middle;">PEMILIK STORE</th>
                            <th style="vertical-align: middle;">INVOICE TOTAL INVESTASI SUDAH DILUNASI</th>
                            <th style="vertical-align: middle;">LICENSE AGREEMENT SUDAH DITANDATANGANI OLEH LISENSI</th>
                            <th style="vertical-align: middle;">FIT OUT</th>
                            <th style="vertical-align: middle;">TRAINING</th>
                            <th style="vertical-align: middle;">PREPARE BARANG</th>
                            <th style="vertical-align: middle;">EQUIPMENT DARI SUPPLIER DATANG KE STORE</th>
                            <th style="vertical-align: middle;">GUDANG / LISENSI KIRIM BARANG KE STORE</th>
                            <th style="vertical-align: middle;">OPENING</th>
                            <th style="vertical-align: middle;">KETERANGAN (JIKA ADA PERUBAHAN)</th>
                        </tr>
                        <tr class="text-center" style="white-space: nowrap; width:1%;">
                            <th colspan="3" class="text-center">DARI PROJECT</th>
                            <th>H-44</th>
                            <th>H-32</th>
                            <th>H-22</th>
                            <th>H-21</th>
                            <th>H-8</th>
                            <th>H-3</th>
                            <th>H-2</th>
                            <th>H</th>
                            <th></th>
                        </tr>          
                    </thead>
                    <tbody>
                        <tr v-for="(data, index) in november"
                        :key="data.index" style="white-space: nowrap; width:1%;" :class="{ 'bg-success': data.finished, 'bg-warning': !data.finished }">
                            <td class="text-center text-capitalize">
                                <a :href="'edit/' + data.id" class="btn btn-sm btn-primary">
                                    <span class="icon-edit"></span>
                                    edit
                                </a>
                                <a :href="'delete/' + data.id" class="btn btn-sm btn-danger">
                                    <span class="icon-delete"></span>
                                    hapus
                                </a>
                            </td>
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td class="text-center">{{ data.h_44 }}</td>
                            <td class="text-center">{{ data.h_32 }}</td>
                            <td class="text-center">{{ data.h_22 }}</td>
                            <td class="text-center">{{ data.h_21 }}</td>
                            <td class="text-center">{{ data.h_8 }}</td>
                            <td class="text-center">{{ data.h_3 }}</td>
                            <td class="text-center">{{ data.h_2 }}</td>
                            <td class="text-center">{{ data.h }}</td>
                            <td>{{ data.additional_info }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </slide>
        <slide v-if="desember.length != 0">
            <div class="table-responsive">
                <table class="table table-light table-sm">
                    <thead class="bg-dark text-light table-bordered text-center">
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;">EDIT / HAPUS</th>
                            <th rowspan="2" style="vertical-align: middle;">NO</th>
                            <th rowspan="2" style="vertical-align: middle;">BULAN</th>
                            <th style="vertical-align: middle;">ESTIMASI TANGGAL OPENING</th>
                            <th style="vertical-align: middle;">NAMA / LOKASI STORE</th>
                            <th style="vertical-align: middle;">PEMILIK STORE</th>
                            <th style="vertical-align: middle;">INVOICE TOTAL INVESTASI SUDAH DILUNASI</th>
                            <th style="vertical-align: middle;">LICENSE AGREEMENT SUDAH DITANDATANGANI OLEH LISENSI</th>
                            <th style="vertical-align: middle;">FIT OUT</th>
                            <th style="vertical-align: middle;">TRAINING</th>
                            <th style="vertical-align: middle;">PREPARE BARANG</th>
                            <th style="vertical-align: middle;">EQUIPMENT DARI SUPPLIER DATANG KE STORE</th>
                            <th style="vertical-align: middle;">GUDANG / LISENSI KIRIM BARANG KE STORE</th>
                            <th style="vertical-align: middle;">OPENING</th>
                            <th style="vertical-align: middle;">KETERANGAN (JIKA ADA PERUBAHAN)</th>
                        </tr>
                        <tr class="text-center" style="white-space: nowrap; width:1%;">
                            <th colspan="3" class="text-center">DARI PROJECT</th>
                            <th>H-44</th>
                            <th>H-32</th>
                            <th>H-22</th>
                            <th>H-21</th>
                            <th>H-8</th>
                            <th>H-3</th>
                            <th>H-2</th>
                            <th>H</th>
                            <th></th>
                        </tr>          
                    </thead>
                    <tbody>
                        <tr v-for="(data, index) in desember"
                        :key="data.index" style="white-space: nowrap; width:1%;" :class="{ 'bg-success': data.finished, 'bg-warning': !data.finished }">
                            <td class="text-center text-capitalize">
                                <a :href="'edit/' + data.id" class="btn btn-sm btn-primary">
                                    <span class="icon-edit"></span>
                                    edit
                                </a>
                                <a :href="'delete/' + data.id" class="btn btn-sm btn-danger">
                                    <span class="icon-delete"></span>
                                    hapus
                                </a>
                            </td>
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td class="text-center">{{ data.h_44 }}</td>
                            <td class="text-center">{{ data.h_32 }}</td>
                            <td class="text-center">{{ data.h_22 }}</td>
                            <td class="text-center">{{ data.h_21 }}</td>
                            <td class="text-center">{{ data.h_8 }}</td>
                            <td class="text-center">{{ data.h_3 }}</td>
                            <td class="text-center">{{ data.h_2 }}</td>
                            <td class="text-center">{{ data.h }}</td>
                            <td>{{ data.additional_info }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </slide>
    </carousel>
</template>

<script>
import { Carousel, Slide } from 'vue-carousel'

export default {
    data() {
        return {
            api: [],
        }
    },

    components: {
        Carousel,
        Slide
    },

    mounted() {
        axios.get('/api/content')
        .then(response => {
            this.api = response.data
        })
    },

    computed: {
        january: function () {
            return this.api.filter(u => {
                return u.month === 'JANUARI' || u.month === 'Januari' || u.month === 'January'
            })
        },
        february: function () {
            return this.api.filter(u => {
                return u.month === 'FEBRUARI' || u.month === 'Februari' || u.month === 'February'
            })
        },
        march: function () {
            return this.api.filter(u => {
                return u.month === 'MARET' || u.month === 'Maret' || u.month === 'March'
            })
        },
        april: function () {
            return this.api.filter(u => {
                return u.month === 'APRIL' || u.month === 'April' || u.month === 'April'
            })
        },
        may: function () {
            return this.api.filter(u => {
                return u.month === 'MEI' || u.month === 'Mei' || u.month === 'May'
            })
        },
        june: function () {
            return this.api.filter(u => {
                return u.month === 'JUNI' || u.month === 'Juni' || u.month === 'June'
            })
        },
        july: function () {
            return this.api.filter(u => {
                return u.month === 'JULI' || u.month === 'Juli' || u.month === 'July'
            })
        },
        august: function () {
            return this.api.filter(u => {
                return u.month === 'AGUSTUS' || u.month === 'Agustus' || u.month === 'August'
            })
        },
        september: function () {
            return this.api.filter(u => {
                return u.month === 'SEPTEMBER' || u.month === 'September' || u.month === 'September'
            })
        },
        october: function () {
            return this.api.filter(u => {
                return u.month === 'OKTOBER' || u.month === 'Oktober' || u.month === 'October'
            })
        },
        november: function () {
            return this.api.filter(u => {
                return u.month === 'NOVEMBER' || u.month === 'November' || u.month === 'November'
            })
        },
        desember: function () {
            return this.api.filter(u => {
                return u.month === 'DESEMBER' || u.month === 'Desember' || u.month === 'December'
            })
        },
    }
}
</script>

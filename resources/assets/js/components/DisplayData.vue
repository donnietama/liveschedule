<template>
    <carousel   :autoplay="true"
                :perPage="1"
                :autoplayTimeout="10000"
                :paginationEnabled="false"
                :loop="true"
                :autoplayHoverPause="false">
        <slide v-if="january.length != 0">
            <div class="table-responsive">
                <table class="table table-light table-sm">
                    <thead class="bg-dark text-light table-bordered text-center">
                        <tr>
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
                        <tr style="white-space: nowrap; width:1%;">
                            <th colspan="3">DARI PROJECT</th>
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
                        :key="data.index" style="white-space: nowrap; width:1%;">
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month | formatDate }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td :class="'text-center ' + h_44_status[index]">{{ data.h_44 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_32_status[index]">{{ data.h_32 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_22_status[index]">{{ data.h_22 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_21_status[index]">{{ data.h_21 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_8_status[index]">{{ data.h_8 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_3_status[index]">{{ data.h_3 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_2_status[index]">{{ data.h_2 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_status[index]">{{ data.h | toDateDisplay }}</td>
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
                        <tr style="white-space: nowrap; width:1%;">
                            <th colspan="3">DARI PROJECT</th>
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
                        :key="data.index" style="white-space: nowrap; width:1%;">
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month | formatDate }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td :class="'text-center ' + h_44_status[index]">{{ data.h_44 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_32_status[index]">{{ data.h_32 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_22_status[index]">{{ data.h_22 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_21_status[index]">{{ data.h_21 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_8_status[index]">{{ data.h_8 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_3_status[index]">{{ data.h_3 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_2_status[index]">{{ data.h_2 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_status[index]">{{ data.h | toDateDisplay }}</td>
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
                        <tr style="white-space: nowrap; width:1%;">
                            <th colspan="3">DARI PROJECT</th>
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
                        :key="data.index" style="white-space: nowrap; width:1%;">
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month | formatDate }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td :class="'text-center ' + h_44_status[index]">{{ data.h_44 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_32_status[index]">{{ data.h_32 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_22_status[index]">{{ data.h_22 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_21_status[index]">{{ data.h_21 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_8_status[index]">{{ data.h_8 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_3_status[index]">{{ data.h_3 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_2_status[index]">{{ data.h_2 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_status[index]">{{ data.h | toDateDisplay }}</td>
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
                        <tr style="white-space: nowrap; width:1%;">
                            <th colspan="3">DARI PROJECT</th>
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
                        :key="data.index" style="white-space: nowrap; width:1%;">
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month | formatDate }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td :class="'text-center ' + h_44_status[index]">{{ data.h_44 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_32_status[index]">{{ data.h_32 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_22_status[index]">{{ data.h_22 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_21_status[index]">{{ data.h_21 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_8_status[index]">{{ data.h_8 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_3_status[index]">{{ data.h_3 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_2_status[index]">{{ data.h_2 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_status[index]">{{ data.h | toDateDisplay }}</td>
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
                        <tr style="white-space: nowrap; width:1%;">
                            <th colspan="3">DARI PROJECT</th>
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
                        :key="data.index" style="white-space: nowrap; width:1%;">
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month | formatDate }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td :class="'text-center ' + h_44_status[index]">{{ data.h_44 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_32_status[index]">{{ data.h_32 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_22_status[index]">{{ data.h_22 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_21_status[index]">{{ data.h_21 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_8_status[index]">{{ data.h_8 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_3_status[index]">{{ data.h_3 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_2_status[index]">{{ data.h_2 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_status[index]">{{ data.h | toDateDisplay }}</td>
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
                        <tr style="white-space: nowrap; width:1%;">
                            <th colspan="3">DARI PROJECT</th>
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
                        :key="data.index" style="white-space: nowrap; width:1%;">
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month | formatDate }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td :class="'text-center ' + h_44_status[index]">{{ data.h_44 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_32_status[index]">{{ data.h_32 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_22_status[index]">{{ data.h_22 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_21_status[index]">{{ data.h_21 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_8_status[index]">{{ data.h_8 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_3_status[index]">{{ data.h_3 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_2_status[index]">{{ data.h_2 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_status[index]">{{ data.h | toDateDisplay }}</td>
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
                        <tr style="white-space: nowrap; width:1%;">
                            <th colspan="3">DARI PROJECT</th>
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
                        :key="data.index" style="white-space: nowrap; width:1%;">
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month | formatDate }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td :class="'text-center ' + h_44_status[index]">{{ data.h_44 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_32_status[index]">{{ data.h_32 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_22_status[index]">{{ data.h_22 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_21_status[index]">{{ data.h_21 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_8_status[index]">{{ data.h_8 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_3_status[index]">{{ data.h_3 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_2_status[index]">{{ data.h_2 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_status[index]">{{ data.h | toDateDisplay }}</td>
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
                        <tr style="white-space: nowrap; width:1%;">
                            <th colspan="3">DARI PROJECT</th>
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
                        :key="data.index" style="white-space: nowrap; width:1%;">
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month | formatDate }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td :class="'text-center ' + h_44_status[index]">{{ data.h_44 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_32_status[index]">{{ data.h_32 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_22_status[index]">{{ data.h_22 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_21_status[index]">{{ data.h_21 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_8_status[index]">{{ data.h_8 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_3_status[index]">{{ data.h_3 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_2_status[index]">{{ data.h_2 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_status[index]">{{ data.h | toDateDisplay }}</td>
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
                        <tr style="white-space: nowrap; width:1%;">
                            <th colspan="3">DARI PROJECT</th>
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
                        :key="data.index" style="white-space: nowrap; width:1%;">
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month | formatDate }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td :class="'text-center ' + h_44_status[index]">{{ data.h_44 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_32_status[index]">{{ data.h_32 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_22_status[index]">{{ data.h_22 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_21_status[index]">{{ data.h_21 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_8_status[index]">{{ data.h_8 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_3_status[index]">{{ data.h_3 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_2_status[index]">{{ data.h_2 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_status[index]">{{ data.h | toDateDisplay }}</td>
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
                        <tr style="white-space: nowrap; width:1%;">
                            <th colspan="3">DARI PROJECT</th>
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
                        :key="data.index" style="white-space: nowrap; width:1%;">
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month | formatDate }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td :class="'text-center ' + h_44_status[index]">{{ data.h_44 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_32_status[index]">{{ data.h_32 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_22_status[index]">{{ data.h_22 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_21_status[index]">{{ data.h_21 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_8_status[index]">{{ data.h_8 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_3_status[index]">{{ data.h_3 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_2_status[index]">{{ data.h_2 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_status[index]">{{ data.h | toDateDisplay }}</td>
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
                        <tr style="white-space: nowrap; width:1%;">
                            <th colspan="3">DARI PROJECT</th>
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
                        :key="data.index" style="white-space: nowrap; width:1%;">
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month | formatDate }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td :class="'text-center ' + h_44_status[index]">{{ data.h_44 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_32_status[index]">{{ data.h_32 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_22_status[index]">{{ data.h_22 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_21_status[index]">{{ data.h_21 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_8_status[index]">{{ data.h_8 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_3_status[index]">{{ data.h_3 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_2_status[index]">{{ data.h_2 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_status[index]">{{ data.h | toDateDisplay }}</td>
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
                        <tr style="white-space: nowrap; width:1%;">
                            <th colspan="3">DARI PROJECT</th>
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
                        :key="data.index" style="white-space: nowrap; width:1%;">
                            <td class="text-center">{{ index + 1 }}</td>
                            <td>{{ data.month | formatDate }}</td>
                            <td>{{ data.opening_estimation }}</td>
                            <td>{{ data.store_location }}</td>
                            <td>{{ data.store_owner }}</td>
                            <td :class="'text-center ' + h_44_status[index]">{{ data.h_44 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_32_status[index]">{{ data.h_32 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_22_status[index]">{{ data.h_22 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_21_status[index]">{{ data.h_21 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_8_status[index]">{{ data.h_8 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_3_status[index]">{{ data.h_3 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_2_status[index]">{{ data.h_2 | toDateDisplay }}</td>
                            <td :class="'text-center ' + h_status[index]">{{ data.h | toDateDisplay }}</td>
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
import moment from 'moment'

Vue.filter('formatDate', function(value) {
    if (value) {
        return moment(String(value)).locale('id').format('MMMM');
    }
})

Vue.filter('toDateDisplay', function(value) {
    if (value) {
        return moment(String(value)).locale('id').format('DD-MMM')
    }
})

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
        setInterval(() => {
            axios.get('/api/content')
            .then(response => {
                this.api = response.data
            })
        }, 5000)
    },

    computed: {
        january: function () {
            return this.api.filter(u => {
                return u.month === 1
            })
        },
        february: function () {
            return this.api.filter(u => {
                return u.month === 2
            })
        },
        march: function () {
            return this.api.filter(u => {
                return u.month === 3
            })
        },
        april: function () {
            return this.api.filter(u => {
                return u.month === 4
            })
        },
        may: function () {
            return this.api.filter(u => {
                return u.month === 5
            })
        },
        june: function () {
            return this.api.filter(u => {
                return u.month === 6
            })
        },
        july: function () {
            return this.api.filter(u => {
                return u.month === 7
            })
        },
        august: function () {
            return this.api.filter(u => {
                return u.month === 8
            })
        },
        september: function () {
            return this.api.filter(u => {
                return u.month === 9
            })
        },
        october: function () {
            return this.api.filter(u => {
                return u.month === 10
            })
        },
        november: function () {
            return this.api.filter(u => {
                return u.month === 11
            })
        },
        desember: function () {
            return this.api.filter(u => {
                return u.month === 12
            })
        },
        h_44_status: function () {
            var valsArr = []
            this.api.forEach(u => {
                var vals
                if (Date.parse(u.h_44) >= Date.parse(moment().add(6, 'days').format('YYYY-M-D')) && u.h_44_finished == 0) {
                    vals = 'bg-white' // Jika jarak tanggal dengan hari H > 6 dan status belum selesai, print warna putih.
                }
                else if (Date.parse(u.h_44) <= Date.parse(moment().add(5, 'days').format('YYYY-M-D')) && u.h_44_finished == 0) {
                    vals = 'bg-warning' // Jika jarak tanggal dengan hari H < 5 dan status belum selesai, print warna kuning.
                }
                else if (Date.parse(u.h_44) <= Date.parse(moment().format('YYYY-M-D')) && u.h_44_finished == 0) {
                    vals = 'bg-danger' // Jika jarak tanggal dengan hari H sudah melewati dan status belum selesai, print warna merah.
                }
                else if (u.h_44_finished == 1){
                    vals = 'bg-success' // Jika data telah ditandai selesai oleh admin, jadikan semuanya hijau.
                }
                valsArr.push(vals)
            });
            return valsArr
        },
        h_32_status: function () {
            var valsArr = []
            this.api.forEach(u => {
                var vals
                if (Date.parse(u.h_32) >= Date.parse(moment().add(6, 'days').format('YYYY-M-D')) && u.h_32_finished == 0) {
                    vals = 'bg-white' // Jika jarak tanggal dengan hari H > 6 dan status belum selesai, print warna putih.
                }
                else if (Date.parse(u.h_32) <= Date.parse(moment().add(5, 'days').format('YYYY-M-D')) && u.h_32_finished == 0) {
                    vals = 'bg-warning' // Jika jarak tanggal dengan hari H < 5 dan status belum selesai, print warna kuning.
                }
                else if (Date.parse(u.h_32) <= Date.parse(moment().format('YYYY-M-D')) && u.h_32_finished == 0) {
                    vals = 'bg-danger' // Jika jarak tanggal dengan hari H sudah melewati dan status belum selesai, print warna merah.
                }
                else if (u.h_32_finished == 1){
                    vals = 'bg-success' // Jika data telah ditandai selesai oleh admin, jadikan semuanya hijau.
                }
                valsArr.push(vals)
            });
            return valsArr
        },
        h_22_status: function () {
            var valsArr = []
            this.api.forEach(u => {
                var vals
                if (Date.parse(u.h_22) >= Date.parse(moment().add(6, 'days').format('YYYY-M-D')) && u.h_22_finished == 0) {
                    vals = 'bg-white' // Jika jarak tanggal dengan hari H > 6 dan status belum selesai, print warna putih.
                }
                else if (Date.parse(u.h_22) <= Date.parse(moment().add(5, 'days').format('YYYY-M-D')) && u.h_22_finished == 0) {
                    vals = 'bg-warning' // Jika jarak tanggal dengan hari H < 5 dan status belum selesai, print warna kuning.
                }
                else if (Date.parse(u.h_22) <= Date.parse(moment().format('YYYY-M-D')) && u.h_22_finished == 0) {
                    vals = 'bg-danger' // Jika jarak tanggal dengan hari H sudah melewati dan status belum selesai, print warna merah.
                }
                else if (u.h_22_finished == 1){
                    vals = 'bg-success' // Jika data telah ditandai selesai oleh admin, jadikan semuanya hijau.
                }
                valsArr.push(vals)
            });
            return valsArr
        },
        h_21_status: function () {
            var valsArr = []
            this.api.forEach(u => {
                var vals
                if (Date.parse(u.h_21) >= Date.parse(moment().add(6, 'days').format('YYYY-M-D')) && u.h_21_finished == 0) {
                    vals = 'bg-white' // Jika jarak tanggal dengan hari H > 6 dan status belum selesai, print warna putih.
                }
                else if (Date.parse(u.h_21) <= Date.parse(moment().add(5, 'days').format('YYYY-M-D')) && u.h_21_finished == 0) {
                    vals = 'bg-warning' // Jika jarak tanggal dengan hari H < 5 dan status belum selesai, print warna kuning.
                }
                else if (Date.parse(u.h_21) <= Date.parse(moment().format('YYYY-M-D')) && u.h_21_finished == 0) {
                    vals = 'bg-danger' // Jika jarak tanggal dengan hari H sudah melewati dan status belum selesai, print warna merah.
                }
                else if (u.h_21_finished == 1){
                    vals = 'bg-success' // Jika data telah ditandai selesai oleh admin, jadikan semuanya hijau.
                }
                valsArr.push(vals)
            });
            return valsArr
        },
        h_8_status: function () {
            var valsArr = []
            this.api.forEach(u => {
                var vals
                if (Date.parse(u.h_8) >= Date.parse(moment().add(6, 'days').format('YYYY-M-D')) && u.h_8_finished == 0) {
                    vals = 'bg-white' // Jika jarak tanggal dengan hari H > 6 dan status belum selesai, print warna putih.
                }
                else if (Date.parse(u.h_8) <= Date.parse(moment().add(5, 'days').format('YYYY-M-D')) && u.h_8_finished == 0) {
                    vals = 'bg-warning' // Jika jarak tanggal dengan hari H < 5 dan status belum selesai, print warna kuning.
                }
                else if (Date.parse(u.h_8) <= Date.parse(moment().format('YYYY-M-D')) && u.h_8_finished == 0) {
                    vals = 'bg-danger' // Jika jarak tanggal dengan hari H sudah melewati dan status belum selesai, print warna merah.
                }
                else if (u.h_8_finished == 1){
                    vals = 'bg-success' // Jika data telah ditandai selesai oleh admin, jadikan semuanya hijau.
                }
                valsArr.push(vals)
            });
            return valsArr
        },
        h_3_status: function () {
            var valsArr = []
            this.api.forEach(u => {
                var vals
                if (Date.parse(u.h_3) >= Date.parse(moment().add(6, 'days').format('YYYY-M-D')) && u.h_3_finished == 0) {
                    vals = 'bg-white' // Jika jarak tanggal dengan hari H > 6 dan status belum selesai, print warna putih.
                }
                else if (Date.parse(u.h_3) <= Date.parse(moment().add(5, 'days').format('YYYY-M-D')) && u.h_3_finished == 0) {
                    vals = 'bg-warning' // Jika jarak tanggal dengan hari H < 5 dan status belum selesai, print warna kuning.
                }
                else if (Date.parse(u.h_3) <= Date.parse(moment().format('YYYY-M-D')) && u.h_3_finished == 0) {
                    vals = 'bg-danger' // Jika jarak tanggal dengan hari H sudah melewati dan status belum selesai, print warna merah.
                }
                else if (u.h_3_finished == 1){
                    vals = 'bg-success' // Jika data telah ditandai selesai oleh admin, jadikan semuanya hijau.
                }
                valsArr.push(vals)
            });
            return valsArr
        },
        h_2_status: function () {
            var valsArr = []
            this.api.forEach(u => {
                var vals
                if (Date.parse(u.h_2) >= Date.parse(moment().add(6, 'days').format('YYYY-M-D')) && u.h_2_finished == 0) {
                    vals = 'bg-white' // Jika jarak tanggal dengan hari H > 6 dan status belum selesai, print warna putih.
                }
                else if (Date.parse(u.h_2) <= Date.parse(moment().add(5, 'days').format('YYYY-M-D')) && u.h_2_finished == 0) {
                    vals = 'bg-warning' // Jika jarak tanggal dengan hari H < 5 dan status belum selesai, print warna kuning.
                }
                else if (Date.parse(u.h_2) <= Date.parse(moment().format('YYYY-M-D')) && u.h_2_finished == 0) {
                    vals = 'bg-danger' // Jika jarak tanggal dengan hari H sudah melewati dan status belum selesai, print warna merah.
                }
                else if (u.h_2_finished == 1){
                    vals = 'bg-success' // Jika data telah ditandai selesai oleh admin, jadikan semuanya hijau.
                }
                valsArr.push(vals)
            });
            return valsArr
        },
        h_status: function () {
            var valsArr = []
            this.api.forEach(u => {
                var vals
                if (Date.parse(u.h) >= Date.parse(moment().add(6, 'days').format('YYYY-M-D')) && u.h_finished == 0) {
                    vals = 'bg-white' // Jika jarak tanggal dengan hari H > 6 dan status belum selesai, print warna putih.
                }
                else if (Date.parse(u.h) <= Date.parse(moment().add(5, 'days').format('YYYY-M-D')) && u.h_finished == 0) {
                    vals = 'bg-warning' // Jika jarak tanggal dengan hari H < 5 dan status belum selesai, print warna kuning.
                }
                else if (Date.parse(u.h) <= Date.parse(moment().format('YYYY-M-D')) && u.h_finished == 0) {
                    vals = 'bg-danger' // Jika jarak tanggal dengan hari H sudah melewati dan status belum selesai, print warna merah.
                }
                else if (u.h_finished == 1){
                    vals = 'bg-success' // Jika data telah ditandai selesai oleh admin, jadikan semuanya hijau.
                }
                valsArr.push(vals)
            });
            return valsArr
        },
    }
}
</script>

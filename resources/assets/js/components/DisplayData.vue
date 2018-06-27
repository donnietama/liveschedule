<template>
    <div class="table-responsive">
        <table class="table table-light table-bordered">
            <thead class="thead-light" @click="toggleView">
                <tr>
                    <th>NO</th>
                    <th>BULAN</th>
                    <th>ESTIMASI TANGGAL OPENING</th>
                    <th>NAMA / LOKASI STORE</th>
                    <th>PEMILIK STORE</th>
                    <th>INVOICE TOTAL INVESTASI SUDAH DILUNASI</th>
                    <th>LICENSE AGREEMENT SUDAH DITANDATANGANI OLEH LISENSI</th>
                    <th>FIT OUT</th>
                    <th>TRAINING</th>
                    <th>PREPARE BARANG</th>
                    <th>EQUIPMENT DARI SUPPLIER DATANG KE STORE</th>
                    <th>GUDANG / LISENSI KIRIM BARANG KE STORE</th>
                    <th>OPENING</th>
                    <th>KETERANGAN (JIKA ADA PERUBAHAN)</th>
                </tr>
                <tr>
                    <th colspan="5">DARI PROJECT</th>
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
            <tbody class="table-sm">
                <tr v-for="data in jsonData"
                    :key="data.index">
                    <td v-if="viewMode" @click="toggleEdit">
                        {{ data.NO }}
                    </td>
                    <td v-if="isEditing" @keyup.enter="toggleView">
                        <input type="text" class="form-control form-control-sm" v-model="data.NO">
                    </td>
                    <td v-if="viewMode" @click="toggleEdit">
                        {{ data.BULAN }}
                    </td>
                    <td v-if="isEditing" @keyup.enter="toggleView">
                        <input type="text" class="form-control form-control-sm" v-model="data.BULAN">
                    </td>
                    <td v-if="viewMode" @click="toggleEdit">
                        {{ data.ESTIMASI_TANGGAL_OPENING }}
                    </td>
                    <td v-if="isEditing" @keyup.enter="toggleView">
                        <input type="text" class="form-control form-control-sm" v-model="data.ESTIMASI_TANGGAL_OPENING">
                    </td>
                    <td v-if="viewMode" @click="toggleEdit">
                        {{ data.NAMA_ATAU_LOKASI_STORE }}
                    </td>
                    <td v-if="isEditing" @keyup.enter="toggleView">
                        <input type="text" class="form-control form-control-sm" v-model="data.NAMA_ATAU_LOKASI_STORE">
                    </td>
                    <td v-if="viewMode" @click="toggleEdit">
                        {{ data.PEMILIK_STORE }}
                    </td>
                    <td v-if="isEditing" @keyup.enter="toggleView">
                        <input type="text" class="form-control form-control-sm" v-model="data.PEMILIK_STORE">
                    </td>
                    <td v-if="viewMode" @click="toggleEdit">
                        {{ data.INVOICE_TOTAL_INVESTASI_SUDAH_DILUNASI }}
                    </td>
                    <td v-if="isEditing" @keyup.enter="toggleView">
                        <input type="text" class="form-control form-control-sm" v-model="data.INVOICE_TOTAL_INVESTASI_SUDAH_DILUNASI">
                    </td>
                    <td v-if="viewMode" @click="toggleEdit">
                        {{ data.LICENSE_AGREEMENT_SUDAH_DITANDATANGANI_OLEH_LISENSI }}
                    </td>
                    <td v-if="isEditing" @keyup.enter="toggleView">
                        <input type="text" class="form-control form-control-sm" v-model="data.LICENSE_AGREEMENT_SUDAH_DITANDATANGANI_OLEH_LISENSI">
                    </td>
                    <td v-if="viewMode" @click="toggleEdit">
                        {{ data.FIT_OUT }}
                    </td>
                    <td v-if="isEditing" @keyup.enter="toggleView">
                        <input type="text" class="form-control form-control-sm" v-model="data.FIT_OUT">
                    </td>
                    <td v-if="viewMode" @click="toggleEdit">
                        {{ data.TRAINING }}
                    </td>
                    <td v-if="isEditing" @keyup.enter="toggleView">
                        <input type="text" class="form-control form-control-sm" v-model="data.TRAINING">
                    </td>
                    <td v-if="viewMode" @click="toggleEdit">
                        {{ data.PREPARE_BARANG }}
                    </td>
                    <td v-if="isEditing" @keyup.enter="toggleView">
                        <input type="text" class="form-control form-control-sm" v-model="data.PREPARE_BARANG">
                    </td>
                    <td v-if="viewMode" @click="toggleEdit">
                        {{ data.EQUIPMENT_DARI_SUPPLIER_DARANG_KE_STORE }}
                    </td>
                    <td v-if="isEditing" @keyup.enter="toggleView">
                        <input type="text" class="form-control form-control-sm" v-model="data.EQUIPMENT_DARI_SUPPLIER_DARANG_KE_STORE">
                    </td>
                    <td v-if="viewMode" @click="toggleEdit">
                        {{ data.GUDANG_ATAU_LISENSI_KIRIM_BARANG_KE_STORE }}
                    </td>
                    <td v-if="isEditing" @keyup.enter="toggleView">
                        <input type="text" class="form-control form-control-sm" v-model="data.GUDANG_ATAU_LISENSI_KIRIM_BARANG_KE_STORE">
                    </td>
                    <td v-if="viewMode" @click="toggleEdit">
                        {{ data.OPENING }}
                    </td>
                    <td v-if="isEditing" @keyup.enter="toggleView">
                        <input type="text" class="form-control form-control-sm" v-model="data.OPENING">
                    </td>
                    <td v-if="viewMode" @click="toggleEdit">
                        {{ data.KETERANGAN_JIKA_ADA_PERUBAHAN }}
                    </td>
                    <td v-if="isEditing" @keyup.enter="toggleView">
                        <input type="text" class="form-control form-control-sm" v-model="data.KETERANGAN_JIKA_ADA_PERUBAHAN">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import json from '../../../../public/newfile.json'
export default {
    data() {
        return {
            jsonData: json,
            viewMode: true,
            isEditing: false
        }
    },

    methods: {
        toggleEdit() {
            this.isEditing = true,
            this.viewMode = false
        },
        toggleView() {
            this.viewMode = true,
            this.isEditing = false

            axios.post('http://localhost:8000', this.jsonData)
        }
    }
}
</script>

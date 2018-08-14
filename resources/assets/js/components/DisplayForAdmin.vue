<template>
    <div class="data-wrapper">
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="icon-search"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Ketik nama bulan yang ingin dirubah..." v-model="search">
                </div>
            </div>
        </div>
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
                    <tr v-for="(data, index) in filteredData"
                    :key="data.index" style="white-space: nowrap; width:1%;" :class="{ 'bg-warning': data.updating, 'bg-success': data.finished }">
                        <td class="text-center text-capitalize">
                            <a :href="'edit/' + data.id" class="btn btn-sm btn-primary">
                                <span class="icon-edit"></span>
                                edit
                            </a>
                            <button class="btn btn-sm btn-danger" @click="showDeleteConfirmation(data)">
                                <span class="icon-delete"></span>
                                hapus
                            </button>
                        </td>
                        <td class="text-center">{{ index + 1 }}</td>
                        <td>{{ data.month | formatDate }}</td>
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
    </div>
</template>

<script>
import swal from 'sweetalert'
import moment from 'moment'

Vue.filter('formatDate', function(value) {
    if (value) {
        return moment(String(value)).locale('id').format('MMMM');
    }
})

export default {
    data() {
        return {
            search: '',
            api: [],
        }
    },
    mounted() {
        axios.get('/api/content/all')
        .then(response => {
            this.api = response.data
        })
    },
    computed: {
        filteredData() {
            return this.api.filter(u => {
                return moment(u.month, 'MM').locale('id').format('MMMM').toLowerCase().includes(this.search.toLowerCase())
            })
        }
    },
    methods: {
        showDeleteConfirmation(data) {
            axios.delete('/delete/' + data.id)
            .then((res, data) => {
                console.log(data)
                swal({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Data berhasil dihapus!',
                })
            })
            .catch(err => {
                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ada yang salah dengan data ini, mohon pastikan sekali lagi.',
                })
            })
        }
    }
}
</script>

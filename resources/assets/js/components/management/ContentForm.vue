<template>
    <div class="wrapper p-4">
        <vue-snotify></vue-snotify>
        <form @submit.prevent="handleSubmit" method="post" class="bg-white p-4">
            <div class="form-wrapper" v-for="(content, index) in inputs"
            :key="content.index">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label>Bulan</label>
                        <select class="form-control" v-model="content.month">
                            <option v-for="content in months" :key="content.index" :value="content">
                                {{ content | formatDate }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Estimasi opening</label>
                        <input type="text" v-model="content.opening_estimation" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Lokasi store</label>
                        <input type="text" v-model="content.store_location" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Pemilik store</label>
                        <input type="text" v-model="content.store_owner" class="form-control">
                    </div>
                </div>
                <div class="row py-4">
                    <div class="form-group col-md-1 text-center offset-2">
                        <label>H-44</label>
                        <input type="text" v-model="content.h_44" class="form-control">
                    </div>
                    <div class="form-group col-md-1 text-center">
                        <label>H-32</label>
                        <input type="text" v-model="content.h_32" class="form-control">
                    </div>
                    <div class="form-group col-md-1 text-center">
                        <label>H-22</label>
                        <input type="text" v-model="content.h_22" class="form-control">
                    </div>
                    <div class="form-group col-md-1 text-center">
                        <label>H-21</label>
                        <input type="text" v-model="content.h_21" class="form-control">
                    </div>
                    <div class="form-group col-md-1 text-center">
                        <label>H-8</label>
                        <input type="text" v-model="content.h_8" class="form-control">
                    </div>
                    <div class="form-group col-md-1 text-center">
                        <label>H-3</label>
                        <input type="text" v-model="content.h_3" class="form-control">
                    </div>
                    <div class="form-group col-md-1 text-center">
                        <label>H-2</label>
                        <input type="text" v-model="content.h_2" class="form-control">
                    </div>
                    <div class="form-group col-md-1 text-center">
                        <label>H</label>
                        <input type="text" v-model="content.h" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <div class="form-group">
                            <select v-model="content.finished" class="form-control">
                                <option value="0">Belum Selesai</option>
                                <option value="1">Selesai</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 offset-5">
                        <button type="button" class="btn btn-block btn-danger" @click="deleteRow(index)">Hapus data</button>
                    </div>
                </div>
            <hr>
            </div>
            <div class="row">
                <div class="col-md-3 offset-3">
                    <button type="button" class="btn btn-block btn-warning text-white" @click="addRow">Tambah data</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-block btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import moment from 'moment'

Vue.filter('formatDate', function(value) {
    if (value) {
        return moment(String(value)).locale('id').format('MMMM');
    }
})

export default {
    data() {
        return {
            inputs: [{}],
            months: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
        }
    },
    methods: {
        addRow() {
            this.inputs.push({
                month: '',
                opening_estimation: '',
                store_location: '',
                store_owner: '',
                h_44: '',
                h_44: '',
                h_32: '',
                h_22: '',
                h_21: '',
                h_8: '',
                h_3: '',
                h_2: '',
                h: '',
                finished: ''
            })
        },

        deleteRow(index) {
            this.inputs.splice(index, 1)
        },

        handleSubmit() {
            // post data to server
            axios.post('/create', this.$data)
            .then(response => {
                this.$snotify.async('Data sedang diproses.', 'Mohon Tunggu', () => new Promise((resolve, reject) => {
                    setTimeout(() => resolve({
                        title: 'Berhasil!',
                        body: 'Data telah terkirim!',
                        config: {
                            closeOnClick: true,
                            timeout: 2000,
                            showProgressBar: true,
                        }
                    }), 2000)
                }))
            }) // throw response if success
            .catch(error => {
                this.$snotify.async('Data sedang diproses.', 'Mohon Tunggu', () => new Promise((resolve, reject) => {
                    setTimeout(() => reject({
                        title: 'Error!',
                        body: error.message,
                        config: {
                            closeOnClick: true,
                            timeout: 5000,
                            showProgressBar: true,
                        }
                    }), 2000)
                }))
            }) // throw error if error
        }
    }
}
</script>

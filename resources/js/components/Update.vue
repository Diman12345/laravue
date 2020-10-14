<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <br>
        <br>
        <h4>Update data</h4>
        <br>
        <!-- prevent form submit untuk reload halaman, kemudian memanggil function updateData() -->
        <form @submit.prevent="updateData()">
          <div class="form-group">
            <label>Nama</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input your first name"
              v-model="form.nama"
              required
            >
          </div>
          <div class="form-group">
            <label>umur</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input your last name"
              v-model="form.umur"
              required
            >
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input alamat"
              v-model="form.alamat"
              required
            >
          </div>
          <div class="form-group">
            <label>Gender</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input Gender"
              v-model="form.gender"
              required
            >
          </div>
          <div class="form-group">
            <label>HP</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Input HP"
              v-model="form.hp"
              required
            >
          </div>
          <button class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        nama: "",
        umur: "",
        alamat: "",
        gender: "",
        hp: ""
      }
    };
  },
  created() {
    // load data saat pertama kali halaman dibuka
    this.loadData();
  },
  methods: {
    loadData() {
      // load data berdasarkan id
      axios
        .get("http://127.0.0.1:8000/api/person/" + this.$route.params.id)
        .then(response => {
          // post value yang dari response ke form
          this.form.nama = response.data.nama;
          this.form.umur = response.data.umur;
          this.form.alamat = response.data.alamat;
          this.form.gender = response.data.gender;
          this.form.hp = response.data.hp;
        });
    },
    updateData() {
      // put data ke api menggunakan axios
      axios
        .put("http://127.0.0.1:8000/api/person/" + this.$route.params.id, {
          nama: this.form.nama,
          umur: this.form.umur,
          alamat: this.form.alamat,
          gender: this.form.gender,
          hp: this.form.hp
        })
        .then(response => {
          // push router ke read data
          this.$router.push("/");
        });
    }
  }
};
</script>
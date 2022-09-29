<template>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" >Danh sách các dự án</h4>
            <p class="card-description">Thêm mới hoặc sửa sửa dự án</p>

            <router-link class="nav-link" :to="{name:'createProduct'}">
              <vs-button type="gradient" style="float:right;">Thêm mới</vs-button>
            </router-link>

            <vs-input icon="search" placeholder="Search" v-model="keyword" @keyup="searchProduct()"/>
            <vs-table stripe :data="list" max-items="10" pagination>
              <template slot="thead">
                <vs-th>Ảnh dự án</vs-th>
                <vs-th>Tên dự án</vs-th>
                <vs-th>Danh mục</vs-th>
                <vs-th>Phân loại cấp 1</vs-th>
                <vs-th>Phân loại cấp 2</vs-th>
                <vs-th>Trạng thái</vs-th>
                <vs-th>Hành động</vs-th>
              </template>
              <template slot-scope="{data}">
                <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                  <vs-td ><vs-avatar size="large" :src="JSON.parse(tr.images)[0]"/></vs-td>
                  <vs-td>{{JSON.parse(tr.name)[0].content}}</vs-td>
                  <vs-td v-if="tr.cate != null">{{JSON.parse(tr.cate.name)[0].content}}</vs-td>
                  <vs-td v-if="tr.cate == null">-----</vs-td>
                  <vs-td v-if="tr.type_cate != null">{{JSON.parse(tr.type_cate.name)[0].content}}</vs-td>
                  <vs-td v-if="tr.type_cate == null">-----</vs-td>
                  <vs-td v-if="tr.type_two != null">{{JSON.parse(tr.type_two.name)[0].content}}</vs-td>
                  <vs-td v-if="tr.type_two == null">-----</vs-td>
                  <vs-td :data="tr.id">{{tr.status == 1 ? 'Hiện' : 'Ẩn'}}</vs-td>
                  <vs-td >
                    <router-link :to="{name:'edit_product',params:{id:tr.id}}">
                      <vs-button
                        vs-type="gradient"
                        size="lagre"
                        color="success"
                        icon="edit"
                      ></vs-button>
                    </router-link>
                    <vs-button vs-type="gradient" size="lagre" color="red" icon="delete_forever" @click="confirmDestroy(tr.id)"></vs-button>
                  </vs-td>
                </vs-tr>
              </template>
            </vs-table>
          </div>
        </div>
      </div>
    </div>
</template>


<script>
import Swal from "sweetalert2";
import { mapActions } from "vuex";
export default {
  data() {
    return {
      list:[],
      keyword:"",
      objDel:{
        id_item:"",
        slug:"",
      }
    };
  },
  components: {},
  computed: {},
  watch: {},
  methods: {
    ...mapActions(['listProduct','deleteId','loadings']),
    listProducts(){
      this.loadings(true);
      this.listProduct({ keyword: this.keyword })
      .then(response => {
          this.loadings(false);
          this.list = response.data;
      }).catch(err => {
          this.loadings(false);
          this.list = err.data;
      });
    },
    searchProduct() {
      if (this.timer) {
        clearTimeout(this.timer);
        this.timer = null;
      }
      this.timer = setTimeout(() => {
          this.listProduct({ keyword: this.keyword })
          .then(response => {
            this.list = response.data;
          });
      }, 800);
    },
    destroy(){
      this.deleteId(this.objDel).then(response => {
        this.listProducts();
        this.$success('xóa thành công');
      });
    },
    confirmDestroy(id,slug){
      this.objDel.id_item = id;
      this.$vs.dialog({
        type:'confirm',
        color: 'danger',
        title: `Bạn có chắc chắn`,
        text: 'Xóa dự án này',
        accept:this.destroy
      })
    }
  },
  mounted() {
    this.listProducts();
  }
};
</script>
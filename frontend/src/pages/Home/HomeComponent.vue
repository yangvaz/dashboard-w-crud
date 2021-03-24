<template>
  <DashboardComponent>
    <div slot="slot-pages" class="content-pages">
      <header class="title_pages">
        <p>Início</p>
      </header>

      <div class="containerCards">
        <div class="row">
          <div class="col-12 ">
            <CardsComponent
              :type="'Clientes'"
              :porcentagem="'7%'"
              :icon="'fa-users'"
              :qtd="'7000'"
            />
          </div>
        </div>

        <div class="row">
          <div class="col-12 ">
            <CardsComponent
              :type="'Produtos'"
              :porcentagem="'12%'"
              :icon="'fa-box'"
              :qtd="'350'"
            />
          </div>
        </div>

        <div class="row">
          <div class="col-12 ">
            <CardsComponent
              :type="'Serviços'"
              :porcentagem="'1%'"
              :icon="'fa-store'"
              :qtd="'250'"
            />
          </div>
        </div>

        <div class="row">
          <div class="col-12 ">
            <CardsComponent
              :type="'Relatórios'"
              :porcentagem="'30%'"
              :icon="'fa-chart-bar'"
              :qtd="'30'"
            />
          </div>
        </div>
      </div>

      <div class="mt-5">
        <div class="row">
          <div class="col-12 col-md-6">
            <ListsComponent :data="data" description="Clientes" :columns="['Nome', 'Email']" />
          </div>

          <div class="col-12 col-md-6">
            <ListsComponent :data="data" description="Produtos" :columns="['Nome', 'Valor']" />
          </div>

        </div>
      </div>

    </div>
  </DashboardComponent>
</template>

<script>
import DashboardComponent from "../Dashboard/DashboardComponent";
import CardsComponent from "../../components/CardsComponent";
import ListsComponent from "../../components/ListsComponent";

const axios = require('axios');

export default {
  name: 'HomeComponent',
  data() {
    return {
      data: []
    }
  },
  mounted() {
    this.getData();
  },
  methods: {
    async getData() {
      const response = await axios.get('https://jsonplaceholder.typicode.com/users');

      if(response.status === 200) {
        this.data = response.data;
      }else {
        console.error('Ocorreu um erro ao acessar a API');
      }
    }
  },
  components: {
    DashboardComponent,
    CardsComponent,
    ListsComponent,
  },
};
</script>

<style lang="scss" scoped>
.containerCards {
  display: flex;
  /* background-color: yellow; */
  justify-content: space-between;
}
</style>

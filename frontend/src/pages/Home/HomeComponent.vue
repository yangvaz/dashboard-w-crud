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
              :type="'Despesas'"
              :porcentagem="'7%'"
              :icon="'fa-users'"
              :qtd="despesas.length"
            />
          </div>
        </div>

        <div class="row">
          <div class="col-12 ">
            <CardsComponent
              :type="'Usuários'"
              :porcentagem="'12%'"
              :icon="'fa-box'"
              :qtd="usuarios.length"
            />
          </div>
        </div>

        <div class="row">
          <div class="col-12 ">
            <CardsComponent
              :type="'Serviços'"
              :porcentagem="'1%'"
              :icon="'fa-store'"
              :qtd="250"
            />
          </div>
        </div>

        <div class="row">
          <div class="col-12 ">
            <CardsComponent
              :type="'Relatórios'"
              :porcentagem="'30%'"
              :icon="'fa-chart-bar'"
              :qtd="30"
            />
          </div>
        </div>
      </div>

      <div class="mt-5">
        <div class="row">
          <div class="col-12 col-md-6">
            <ListsComponent
              :data="despesas"
              description="Despesas"
              :columns="['Nome', 'Despesa', 'Custo']"
            />
          </div>

          <div class="col-12 col-md-6">
            <ListsComponent
              :data="usuarios"
              description="Usuários"
              :columns="['Nome', 'Senha']"
            />
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

const axios = require("axios");

export default {
  name: "HomeComponent",
  data() {
    return {
      despesas: [],
      usuarios: [],
    };
  },
  mounted() {
    this.getData();
  },
  methods: {
    async getData() {
      try {
        const response = await axios.get("/");
        this.despesas = response.data.despesas;
        this.usuarios = response.data.usuarios;
      } catch (error) {
        console.log("Erro detecado:" + error.response.status);
      }
    },
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

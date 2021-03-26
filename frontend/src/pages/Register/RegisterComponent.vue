<template>
  <div class="main">
    <div class="loginContainer">
      <div class="content-login">
        <header>
          <h1> Registre-se: </h1>
        </header>

        <div class="form">
          <form action="" method="POST">
            <div class="form-group">
              <label for="exampleInputName1">Nome</label>
              <input
                type="nome"
                class="form-control"
                id="exampleInputNome1"
                aria-describedby="nomeHelp"
                placeholder="Coloque seu nome"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Coloque seu email"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                placeholder="Coloque sua senha"
              />
            </div>
            <button
              type="submit"
              class="btn btn-primary"
              @click.prevent="register"
            >
              Cadastrar
            </button>
          </form>
          <p class="registerText">
            Para efetuar o login,
            <a href=""> clique aqui. </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "RegisterComponent",

  data() {
    return {};
  },
  methods: {
    register() {
      this.$router.push({ name: "home" });
      alert("Cadastrado com sucesso.");
    },
  },
};
</script>

<style lang="scss" src="./style.scss" scoped />

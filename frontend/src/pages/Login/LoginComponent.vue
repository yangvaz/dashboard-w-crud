<template>
  <div class="main">
    <div class="loginContainer">
      <div class="content-login">
        <header>
          <h1>Login</h1>
        </header>

        <div class="form">
          <form action="" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Entre com seu email"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                placeholder="Entre com sua senha"
              />
            </div>
            <button
              type="submit"
              class="btn btn-primary"
              @click.prevent="login"
            >
              Entrar
            </button>
          </form>
          <p class="registerText">
            Para se registrar,
            <a href="" @click.prevent="goToRegisterPage"> clique aqui. </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "loginComponent",

  data() {
    return {};
  },
  methods: {
    login() {
      this.$router.push({ name: "home" });
      alert("Clicou");
    },
    goToRegisterPage() {
      this.$router.push({ name: "register" });
    }
  },
};
</script>

<style lang="scss" src="./style.scss" scoped />

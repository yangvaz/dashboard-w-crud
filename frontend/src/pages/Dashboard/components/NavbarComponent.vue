<template>
  <div class="navbarContainer">
    <div class="logo"><i class="fa fa-star" /> LogoHere</div>
      <a href="" @click.prevent="logout" class="logout">
        Sair <i class="fa fa-sign-out-alt" />
      </a>
  </div>
</template>

<script>
export default {
  name: "NavbarComponent",
  methods: {
    logout() {
      this.$router.push({ name: "login" });
    },
  },
};
</script>

<style lang="scss">
.navbarContainer {
  min-width: 100%;
  min-height: 100%;

  display: flex;
  justify-content: space-between;
  align-items: center;

  .logo {
    color: #fff;
  }

  .logout {
    color: #fff;
    text-decoration: none;
  }

  .logout:hover {
    color: #fff;
    filter: brightness(80%);
    text-decoration: none;
  }
}
</style>

<template>
  <div class="sidebarContainer">
    <div class="profile">
      <div class="avatar">
        <img src="https://avatars.githubusercontent.com/u/20269645?v=4" />
      </div>
      <div class="info">
        <span class="username">Yan Garcia</span>
        <span> Online </span>
      </div>
    </div>

    <div class="menuSidebar">
      <ul>
        <li>
          <router-link :to="{ name: 'home' }">
            <i class="fa fa-home"></i>
            Início
          </router-link>
        </li>
        <li>
          <router-link :to="{ name: 'products' }">
            <i class="fa fa-box"> </i>
            Produtos
          </router-link>
        </li>
        <li>
          <router-link :to="{ name: 'home' }">
            <i class="fa fa-store"> </i>
            Vendas
          </router-link>
        </li>
        <li>
          <router-link :to="{ name: 'home' }">
            <i class="fa fa-chart-bar"> </i>
            Relatórios
          </router-link>
        </li>
        <li>
          <router-link :to="{ name: 'home' }">
            <i class="fa fa-home"> </i>
            A
          </router-link>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "SidebarComponent",
};
</script>

<style lang="scss">
.sidebarContainer {
  .profile {
    width: 100%;
    padding: 15px;

    display: block;
    align-items: center;
    justify-content: center;

    color: #fff;

    .info, .avatar {
      display: block;
      justify-content: center;
      align-items: center;

      margin-bottom: 1.5rem;

      span, img {
        display: flex;
        justify-content: center;
        align-items: center;

        padding: 2px;
      }

      .username {
        font-size: 1rem;
        font-weight: 400;
      }

    }

    .avatar img {
      width: 150px;
      height: 150px;

      border-radius: 55%;
    }

    .info {
      p {
        font-size: 16px;
      }
      span {
        font-size: 12px;
      }
    }
  }

  .menuSidebar {
    margin-top: 20px;
    padding: 20px;

    ul li {
      margin: 5px 0;
      font-size: 16px;
      list-style: none;
      
      a {
        text-decoration: none;
        color: #fff;
      }

    }
  }
}
</style>

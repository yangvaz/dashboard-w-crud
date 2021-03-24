<template>
  <div class="cardContainer">
    <div class="header">
      <span> {{ type }} </span>
      <span class="porcentagem"><i class="fa fa-arrow-up" /> {{ porcentagem }} </span>
    </div>

    <div class="footer">
      <i :class="['fa icon', icon]" />
      <span class="qtd"> {{ qtd }} </span>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CardsComponent',
  props: {
    type: String,
    porcentagem: String,
    icon: String,
    qtd: String,
  },

};
</script>

<style lang="scss" scoped>
@import "@/assets/scss/_main";

.cardContainer {
  background-color: $purple;
  width: 100%;
  min-width: 240px;
  padding: 15px;
  border-radius: 10px;
  color: $white;

  display: flex;
  flex-direction: column;

  .header,
  .footer {
    display: flex;
    justify-content: space-between;
    align-items: center;

    padding: 5px;

    .icon {
      font-size: 40px;
    }

  }

  .header {
    font-size: 25px;

    .porcentagem {
      color: $green;
    }
  }

  .footer {

    .qtd {
      font-size: 30px;
    }
  }
}
</style>

<template>
  <div class="lists">
    <div class="header">
      <p>
        <strong> {{ description }} </strong>
        <span class="badge badge-info"> {{ data.length }} </span>
      </p>
    </div>

    <div class="content">
      <table class="table table-striped my_table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">{{ columns[0] }}</th>
            <th scope="col">{{ columns[1] }}</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in data" :key="user.id">
            <th scope="row">
              <span class="userDetails"> {{ user.id }} </span>
            </th>
            <td>
              <span class="userDetails"> {{ user.name }} </span>
            </td>
            <td>
              <span class="userDetails"> {{ user.email }} </span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: "ListsComponent",
  props: {
    data: Array,
    description: String,
    columns: [],
  },
};
</script>

<style lang="scss" scoped>
.lists {
  width: 100%;
  padding: 20px;

  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #fff;

  .userDetails {
    font-size: 0.75rem;
  }
}
</style>

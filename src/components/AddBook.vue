<template>
  <div class="md:w-2/3 container px-4 mx-auto">
    <h2 class="text-xl m-4">Add New Book</h2>
    <form @submit.prevent="addBook" class="flex flex-col">
      <input
        type="text"
        v-model="title"
        placeholder="Title of the Book"
        class="mb-4"
        required
      />
      <input
        type="text"
        v-model="author"
        placeholder="Author of the Book"
        class="mb-4"
        required
      />
      <input
        type="number"
        v-model="published"
        placeholder="Publication year"
        class="mb-4"
      />
      <select v-model="genre" class="" required>
        <option value="" selected="selected">Select a genre</option>
        <option value="action_adventure">Action & Adventure</option>
        <option value="classic">classic</option>
        <option value="comic">Comic</option>
        <option value="mystery">Mystery</option>
        <option value="fantasy">Fantasy</option>
        <option value="fiction">Fiction</option>
        <option value="horror">Horror</option>
        <option value="romance">Romance</option>
        <option value="scifi">Sci-Fi</option>
        <option value="short">Short Stories</option>
        <option value="thriller">Thrillers</option>
        <option value="biography">Biography</option>
        <option value="cooking">Cookbook</option>
        <option value="essay">Essay</option>
        <option value="history">History</option>
        <option value="poetry">Poetry</option>
        <option value="selfhelp">Motivational</option>
        <option value="crime">Crime</option>
      </select>
      <button type="submit" class="bg-blue-600 text-white text-center text-l p-4 mt-4">
        Add
      </button>
    </form>
  </div>
</template>
<script>
export default {
  name: "AddBook",
  created() {},
  data() {
    return {
      title: "",
      author: "",
      published: "",
      genre: "",
    };
  },
  props: {},
  methods: {},
};
</script>

<style lang="scss" scoped></style>

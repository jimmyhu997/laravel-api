<template>
    <div>
        <h2>Main</h2>

        <ul>
            <li v-for="post in posts" :key="post.id">
                <h3>{{post.title}}</h3>
                <p>{{post.content}}</p>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'Main',
    data() {
        return {
            posts: [],
        }
    },
    created(){
        axios.get('api/posts')
            .then((response) => {
                this.posts = response.data
            })
    }
}
</script>

<style lang='scss' scoped>

</style>
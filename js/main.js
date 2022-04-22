const app = new Vue({
    el: '#app',
    data: {
        albums: []
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/server/controller.php?genre=rock')
            .then((result) => {
                this.albums = result.data.results;
            })
            .catch((error) => {
                console.warn(error);
            })
    }
})
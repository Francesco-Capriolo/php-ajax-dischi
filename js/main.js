const app = new Vue({
    el: '#app',
    data: {
        discs: [],
        filteredDiscs: [],
        genres: [],
        selectedGenre: ''
    },
    mounted() {
        axios.get('http://localhost/php-ajax-dischi/server/controller/genres.php')
            .then((response) => {
                console.log(response);
                this.genres = response.data;
            })
            .catch((error) => {
                console.warn(error);
            });

        axios.get('http://localhost/php-ajax-dischi/server/controller/discs.php')
            .then((response) => {
                console.log(response);
                this.discs = response.data;
            })
            .catch((error) => {
                console.warn(error);
            });
    },
    methods: {
        filterDiscsByGenre() {
            console.warn("filtered!");
            if (this.selectedGenre == 'all') {
                this.filteredDiscs = this.discs;
            } else {
                this.filteredDiscs = this.discs.filter((disc) => disc.genre.toLowerCase() == this.selectedGenre.toLowerCase());
            }
        }
    }
})
const app = new Vue({
    el: '#app',
    data: {
        discs: [],
        filteredDiscs: [],
        genres: [],
        selectedGenre: 'all'
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
                // serve per il refresh della pagina.. il filtro è uguale a tutti i dischi 
                this.filteredDiscs = this.discs;
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